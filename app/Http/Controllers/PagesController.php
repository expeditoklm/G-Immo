<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Message;
use Auth;
use App\Models\Propriete;
use App\Models\Caracteristique;
use App\Models\Newslater;
use App\Models\ProprieteCaracteristique;
use App\Models\ProprieteImage;
use App\Models\TypePropriete;
use App\Models\User;
use App\Models\Ville;
use Faker\Core\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Services\GeoNamesService;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Exception;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class PagesController extends Controller
{
    


    public function acceuil()
    {
        try {
            // liste des proprietes de status "à vendre"  
            $typeProprieteForSale = TypePropriete::withCount(['proprietes as proprietes_count' => function ($query) {
                $query->where('proprietes.status', 'For Sale');
            }])
                ->where('deleted','!=', 1)->get();

            // liste des proprietes de status "à louer" 
            $typeProprieteRental = TypePropriete::withCount(['proprietes as proprietes_count' => function ($query) {
                $query->where('proprietes.status', 'Rental');
            }])
                ->where('deleted', 0)->get();

                $uniqueCityIds = Propriete::select('ville_id')->distinct()->pluck('ville_id');

                $uniqueCities = Ville::whereIn('id', $uniqueCityIds)->get();
                
    

            //Residentiel
            $nbResidential = Propriete::where('type_propriete_id', 1)->where('deleted', 0)->count();
            //Commercial
            $nbCommercial = Propriete::where('type_propriete_id', 2)->where('deleted', 0)->count();
            //Agricole
            $nbFarm = Propriete::where('type_propriete_id', 3)->where('deleted', 0)->count();
            //Parcelle
            $nbLand = Propriete::where('type_propriete_id', 4)->where('deleted', 0)->count();
            //Duplexe
            $nbDuplex = Propriete::where('type_propriete_id', 5)->where('deleted', 0)->count();
            //Bureau , Entreprise
            $nbOffice = Propriete::where('type_propriete_id', 6)->where('deleted', 0)->count();
            //Appartement
            $nbApartment = Propriete::where('type_propriete_id', 7)->where('deleted', 0)->count();
            //Entrepot
            $nbWarehouse = Propriete::where('type_propriete_id', 8)->where('deleted', 0)->count();


            // 6 proprietes à vendre recemment ajouté 
            $propertiesForSalle = Propriete::where('status', 'For Sale')
                ->orderBy('created_at', 'desc')
                ->limit(6)
                ->where('deleted', 0)->get();

            // 6 proprietes de type "Residentiel,Du/Tri/Quadriplex,Apartment" recemment ajouté 
            $propertiesHouse = Propriete::where('type_propriete_id', 1)
                ->where('deleted', 0)
                ->orWhere('type_propriete_id', 5)
                ->orWhere('type_propriete_id', 7)
                ->orderBy('created_at', 'desc')
                ->limit(6)
                ->where('deleted', 0)->get();

            // 6 proprietes de type "Residentiel" dont les prix sont élevé recemment ajouté 
            $propertiesVilla = Propriete::where('type_propriete_id', 1)
                ->orWhere('prix', DB::raw('(SELECT MAX(prix) FROM proprietes)'))
                ->orderBy('created_at', 'desc')
                ->limit(6)
                ->where('deleted', 0)->get();

            // 6 proprietes de status "A louer" dont les prix sont élevé recemment ajouté 
            $propertiesRental = Propriete::where('status', 'Rental')
                ->orderBy('created_at', 'desc')
                ->limit(6)
                ->where('deleted', 0)->get();

            // 6 proprietes de type "Appartement" recemment ajouté 
            $propertiesApartment = Propriete::where('type_propriete_id', 7)
                ->orderBy('created_at', 'desc')
                ->limit(6)
                ->where('deleted', 0)->get();

            // 6 proprietes de type "Parcelle" recemment ajouté 
            $propertiesParcel = Propriete::where('type_propriete_id', 3)
                ->orWhere('type_propriete_id', 4)
                ->orderBy('created_at', 'desc')
                ->limit(6)
                ->where('deleted', 0)->get();

            $propertiesCommercial = Propriete::where('type_propriete_id', 8)
                ->orWhere('type_propriete_id', 2)
                ->orderBy('created_at', 'desc')
                ->limit(6)
                ->where('deleted', 0)->get();

            // 4 proprietes les plus cheres
            $propertiesHigh = Propriete::orderBy('prix', 'desc')
                ->limit(4)
                ->where('deleted', 0)->get();

            // 3 proprietes de status  "à vendre" recemment ajouté 
            $propertiesForSale = Propriete::where('status', 'For Sale')
                ->orderBy('prix', 'asc')
                ->orderBy('created_at', 'desc')
                ->limit(3)
                ->where('deleted', 0)->get();

            // 6 commentaire qui possede une "note superieur à 2" recemment ajouté  et 
            // qui se retrouve parmis les utilisateur qui on de compte 
            $comments = Comment::where('note', '>', 2)
                ->whereHas('user')
                ->orderBy('created_at', 'desc')
                ->limit(6)
                ->get();


            // Nombre total de clients qui ont commenter
            $nbCustomer = Comment::count();

            // Nombre de commentaires avec une note supérieure à 2
            $nbClientNoteSatisfaction = Comment::where('note', '>', 2)->count();

            // Nombre total de commentaires
            $nbClientNote = Comment::count();

            // Pourcentage de satisfaction des clients
            $percentClientSatisfaction = ($nbClientNoteSatisfaction * 100) / $nbClientNote;


            // Nombre de propriétés à vendre
            $nbPropertyForSale = Propriete::where('status', 'For Sale')->where('deleted', 0)->count();


            // Nombre de propriétés à louer
            $nbPropertyRental = Propriete::where('status', 'Rental')->where('deleted', 0)->count();


            return view('pages/acceuil', compact(
                'nbCustomer',
                'percentClientSatisfaction',
                'nbPropertyForSale',
                'nbPropertyRental',
                'typeProprieteForSale',
                'typeProprieteRental',
                'uniqueCities',
                'nbResidential',
                'nbCommercial',
                'nbFarm',
                'nbLand',
                'nbDuplex',
                'nbOffice',
                'nbApartment',
                'nbWarehouse',
                'propertiesForSalle',
                'propertiesHouse',
                'propertiesVilla',
                'propertiesRental',
                'propertiesApartment',
                'propertiesParcel',
                'propertiesCommercial',
                'propertiesHigh',
                'propertiesForSale',
                'comments',
             
            ));
        } catch (Exception $e) {
            // Log the exception if needed
            Log::error($e->getMessage());

            // Return a custom error view
            return view('errors/404', ['message' => $e->getMessage()]);
        }
    }

    public function search(Request $request)
    {
        try {
             // Créez une nouvelle instance de Client
           
            //liste des proprietes à vendre
            $typeProprieteForSale = TypePropriete::withCount(['proprietes as proprietes_count' => function ($query) {
                $query->where('proprietes.status', 'For Sale');
            }])
                ->where('deleted','!=', 1)->get();
        
            //liste des proprietes à louer
            $typeProprieteRental = TypePropriete::withCount(['proprietes as proprietes_count' => function ($query) {
                $query->where('proprietes.status', 'Rental');
            }])
                ->where('deleted','!=', 1)->get();

                $uniqueCityIds = Propriete::select('ville_id')->distinct()->pluck('ville_id');

                $uniqueCities = Ville::whereIn('id', $uniqueCityIds)->get();
                
    

            //10  proprietes recemment ajouté et qui ont plus de vue 
            $popularProperties = Propriete::orderBy('vue', 'desc')
                ->orderBy('created_at', 'desc')
                ->take(10)
                ->where('deleted', 0)->get();

            // liste des proprietés 
            $properties = Propriete::where('deleted', 0)->paginate(10);

            // enregistrement une newsletterss
            if ($request->has('btn_newslater')) {

                Newslater::create([
                    'email' => $request->email,
                    'deleted' => 0,
                ]);

                return redirect()->route('pages.search')->with('success', 'E-mail sent successfully.');
            }


            return view('pages/search', compact(
                'properties',
                'typeProprieteForSale',
                'typeProprieteRental',
                'uniqueCities',
                'popularProperties',
      

            ));
        } catch (Exception $e) {
            // Log the exception if needed
            Log::error($e->getMessage());

            // Return a custom error view
            return view('errors/404', ['message' => $e->getMessage()]);
        }
    }

    public function searchPost(Request $request)
    {
        try {
             // Créez une nouvelle instance de Client
           
            // Obtenir le nombre de propriétés par type et statut
            $typeProprieteForSale = TypePropriete::withCount(['proprietes as proprietes_count' => function ($query) {
                $query->where('proprietes.status', 'For Sale');
            }])->where('deleted','!=', 1)->get();

            
            $typeProprieteRental = TypePropriete::withCount(['proprietes as proprietes_count' => function ($query) {
                $query->where('proprietes.status', 'Rental');
            }])->where('deleted','!=', 1)->get();
            
            $uniqueCityIds = Propriete::select('ville_id')->distinct()->pluck('ville_id');

            $uniqueCities = Ville::whereIn('id', $uniqueCityIds)->get();
            


            // Récupérer les entrées du formulaire
            $status = $request->input('status');
            $type_propriete_id = $request->input('type_propriete_id');
            $ville = $request->input('ville');
            $prix = $request->input('prix');
            $nbChambre = $request->input('nbChambre');
            $nbPiece = $request->input('nbPiece');
            $user_id = $request->input('user_id');
            $searchTerm = $request->input('ttr_cra_dsc_sta_p_v_q_typ_us');

            // Construire la requête de base
            $query = Propriete::query();

            // Ajouter les filtres de recherche
            if (!empty($status)) {
                $query->where('status', $status);
            }

            if (!empty($user_id)) {
                $query->where('user_id', $user_id);
            }

            if (!empty($type_propriete_id)) {
                $query->where('type_propriete_id', $type_propriete_id);
            }

            if (!empty($ville)) {
                $query->where('ville_id', $ville);
            }

            if (!empty($prix)) {
                $query->where('prix', '<=', $prix);  // Assumant que l'utilisateur veut des propriétés jusqu'à ce prix
            }

            if (!empty($nbChambre)) {
                $query->where('nbChambre', $nbChambre);
            }

            if (!empty($nbPiece)) {
                $query->where('nbPiece', $nbPiece);
            }

            // Ajouter la recherche par mot-clé
            if (!empty($searchTerm)) {
                $query->where(function ($q) use ($searchTerm) {
                    $q->where('titre', 'like', "%{$searchTerm}%")
                        ->orWhere('description', 'like', "%{$searchTerm}%")
                        ->orWhere('prix', 'like', "%{$searchTerm}%")
                        ->orWhere('status', 'like', "%{$searchTerm}%")
                        ->orWhere('created_at', 'like', "%{$searchTerm}%")
                        ->orWhere('ville_id', 'like', "%{$searchTerm}%")
                        ->orWhere('quartier', 'like', "%{$searchTerm}%")
                        ->orWhere('adresse', 'like', "%{$searchTerm}%")
                        ->orWhere('emailContact', 'like', "%{$searchTerm}%")
                        ->orWhere('nomContact', 'like', "%{$searchTerm}%")
                        ->orWhere('prenomContact', 'like', "%{$searchTerm}%")
                        ->orWhere('telContact', 'like', "%{$searchTerm}%")
                        ->orWhereHas('caracteristiques', function ($q) use ($searchTerm) {
                            $q->where('libelle', 'like', "%{$searchTerm}%");
                        })
                        ->orWhereHas('user', function ($q) use ($searchTerm) {
                            $q->where('nom_prenom', 'like', "%{$searchTerm}%");
                        })
                        ->orWhereHas('user', function ($q) use ($searchTerm) {
                            $q->where('telephone', 'like', "%{$searchTerm}%");
                        })
                        ->orWhereHas('user', function ($q) use ($searchTerm) {
                            $q->where('email', 'like', "%{$searchTerm}%");
                        })
                        ->orWhereHas('typePropriete', function ($q) use ($searchTerm) {
                            $q->where('libelle', 'like', "%{$searchTerm}%");
                        });
                });
            }
            $popularProperties = Propriete::orderBy('vue', 'desc')
                ->take(10)
                ->where('deleted', 0)->get();

            // Paginer les résultats
            $properties = $query->where('deleted', 0)->paginate(10)->appends($request->except('page'));

            // Retourner la vue avec les résultats
            return view('pages.search', compact(
                'properties',
                'typeProprieteForSale',
                'typeProprieteRental',
                'uniqueCities',
                'popularProperties',
             
            ));
        } catch (Exception $e) {
            // Log the exception if needed
            Log::error($e->getMessage());

            // Return a custom error view
            return view('errors/404', ['message' => $e->getMessage()]);
        }
    }


    public function details()
    {
        try {
            return view('pages/details');
        } catch (Exception $e) {
            // Log the exception if needed
            Log::error($e->getMessage());

            // Return a custom error view
            return view('errors/404', ['message' => $e->getMessage()]);
        }
    }

    public function single(Request $request)
    {
        try {
            //id de la proprete dont ton veux connaitre les details
            $id = $request->id;

            $propertiesSingle = Propriete::where('id', $id)->first();
            if (!$propertiesSingle) {
                throw new \Exception('Property not found');
            }


            $proprietaire = $propertiesSingle->user;
            $propertiesSingle->vue = $propertiesSingle->vue + 1;
            $propertiesSingle->save();

            $type_propriete_id = $propertiesSingle->type_propriete_id;
            $ville = $propertiesSingle->ville;
            $status = $propertiesSingle->status;
            $quartier = $propertiesSingle->quartier;
            $nbPiece = $propertiesSingle->nbPiece;
            $prix = $propertiesSingle->prix;

            $similarProperties = Propriete::where('type_propriete_id', $type_propriete_id)
                ->where('ville_id', $ville)
                ->where('quartier', $quartier)
                ->where('status', $status)
                ->where('nbPiece', $nbPiece)
                ->where('prix', '>=', $propertiesSingle->prix - 10000)
                ->where('prix', '<=', $propertiesSingle->prix + 10000)
                ->where('id', '!=', $id)
                ->take(2)
                ->where('deleted', 0)->get();
             // Créez une nouvelle instance de Client
       
            //enregistrement dun message 
            if ($request->has('btn_msg3')) {
                Message::create([
                    'user_id' => FacadesAuth::user()->id,
                    'nom_prenom' => $request->nom_prenom,
                    'email' => $request->email,
                    'titre_msg' => $request->titre_msg,
                    'telephone' => $request->telephone,
                    'message' => $request->message,
                    'deleted' => 0,
                    'proprietaire_id' => $propertiesSingle->user->id
                ]);

                return redirect()->route('pages.single', [
                    'id' => $id,
                ])->with('success', 'Message sent successfully.');
            }
            //enregistrement dune newsletterss
            if ($request->has('btn_newslater')) {
                Newslater::create([
                    'email' => $request->email,
                    'deleted' => 0,
                ]);

                return redirect()->route('pages.single', [
                    'id' => $id,
                ])->with('success', 'E-mail sent successfully.');
            }

            return view('pages/single', compact( 'id', 'proprietaire', 'propertiesSingle', 'similarProperties'));
        } catch (Exception $e) {
            // Log the exception if needed
            Log::error($e->getMessage());

            // Return a custom error view
            return view('errors/404', ['message' => $e->getMessage()]);
        }
    }

    public function contactUs(Request $request)
    {
        try {
            if ($request->has('btn_msg2')) {

                Message::create([
                    'user_id' => FacadesAuth::user()->id,
                    'nom_prenom' => $request->nom_prenom,
                    'email' => $request->email,
                    'titre_msg' => $request->titre_msg,
                    'telephone' => $request->telephone,
                    'message' => $request->message,
                    'deleted' => 0,
                    'proprietaire_id' => 1
                ]);
                return redirect()->route('pages.contact-us')->with('success', 'Message sent successfully.');
            }
            if ($request->has('btn_msg4')) {

                Message::create([
                    'user_id' => FacadesAuth::user()->id,
                    'nom_prenom' => $request->nom_prenom,
                    'email' => $request->email,
                    'titre_msg' => $request->titre_msg,
                    'telephone' => $request->telephone,
                    'message' => $request->message,
                    'deleted' => 0,
                    'proprietaire_id' => 1
                ]);
                return redirect()->route('admin.user-profile')->with('success', 'Message sent successfully.');
            }
            return view('pages/contact-us');
        } catch (Exception $e) {
            // Log the exception if needed
            Log::error($e->getMessage());

            // Return a custom error view
            return view('errors/404', ['message' => $e->getMessage()]);
        }
    }

    public function account()
    {

        try {
            $cities = Ville::get();
            return view('pages/account', compact('cities'));
        } catch (Exception $e) {
            // Log the exception if needed
            Log::error($e->getMessage());

            // Return a custom error view
            return view('errors/404', ['message' => $e->getMessage()]);
        }
    }


    public function agent(Request $request)
    {
        try {
            $id = $request->id;
            $agent = User::find($id);

            if (!$agent) {
                return redirect()->route('pages.acceuil')->with('error', 'Agent not found');
            }

            $properties = Propriete::where('user_id', $id)
                ->limit(6)
                ->where('deleted', 0)->get();

            $commentaires = Comment::whereHas('propriete', function ($query) use ($id) {
                $query->where('user_id', $id);
            })->where('deleted', 0)->get();

            if ($request->has('btn_msg')) {
                Message::create([
                    'user_id' => FacadesAuth::user()->id,
                    'nom_prenom' => $request->nom_prenom,
                    'email' => $request->email,
                    'telephone' => $request->telephone,
                    'message' => $request->message,
                    'deleted' => 0,
                    'proprietaire_id' => $id
                ]);

                return redirect()->route('pages.agent', [
                    'id' => $id,
                ])->with('success', 'Message sent successfully.');
            }

            if ($request->has('btn_newslater')) {

                Newslater::create([
                    'email' => $request->email,
                    'deleted' => 0,
                ]);
                return redirect()->route('pages.agent', [
                    'id' => $id,
                ])->with('success', 'E-mail sent successfully.');
            }

            return view('pages.agent', compact('agent', 'properties', 'commentaires'));
        } catch (Exception $e) {
            // Log the exception if needed
            Log::error($e->getMessage());

            // Return a custom error view
            return view('errors/404', ['message' => $e->getMessage()]);
        }
    }

    public function dashbord(Request $request)
    {
        try {
            $user_id = FacadesAuth::id();

            $cities = Ville::get();
           
            $user = FacadesAuth::user();

       
             


            $nbProperties = Propriete::where('user_id', $user_id)->where('deleted', 0)->count();

            $nbReviews = Comment::whereHas('propriete', function ($query) use ($user_id) {
                $query->where('user_id', $user_id);
            })->where('deleted', 0)->count();

            $nbMessages = Message::where('proprietaire_id', $user_id)->where('deleted', 0)->count();

            $messages = Message::where('proprietaire_id', $user_id)
                ->orderByDesc('created_at')
                ->limit(3)
                ->where('deleted', 0)
                ->get();

            $reviews = Comment::whereHas('propriete', function ($query) use ($user_id) {
                $query->where('user_id', $user_id);
            })->orderByDesc('created_at')
                ->limit(3)
                ->where('deleted', 0)
                ->get();

            if ($request->has('btn_modif')) {
                $request->validate([
                    'nom_prenom' => 'required|string|max:255',
                    'ville' => 'required|string',
                    'website' => 'required|string|max:500',
                    'description' => 'required|string|max:1000',
                    'new_password' => 'nullable|string|min:8|confirmed',
                ]);

                $user = FacadesAuth::user();
                $user->fill($request->only(['nom_prenom',  'ville', 'website', 'description']));

                if ($request->filled('new_password')) {
                    $user->password = bcrypt($request->new_password);
                }

                $user->save();
                session(['message' => 'Profile updated successfully.', 'message_type' => 'success']);
                return redirect()->route('admin.dashbord');
            }

            return view('admin.dashbord', compact(
                'nbProperties',
                'nbReviews',
                'nbMessages',
                'messages',
                'reviews',
                'cities'
            ));
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return view('errors.404', ['message' => $e->getMessage()]);
        }
    }


    public function changePassword(Request $request)
    {
        $request->validate([

            'new_password' => 'nullable|string|min:8|confirmed',
        ]);

        $user = FacadesAuth::user();

        if ($request->filled('new_password')) {
            $user->password = bcrypt($request->new_password);
        }
        $user->updated_at = \now();

        $user->save();
        session(['message' => 'Mot de passe modifier avec succes.', 'message_type' => 'success']);
        return redirect()->route('admin.dashbord');
    }



    public function userProfile()
    {
        try {

           
            $user = FacadesAuth::user();

            // Récupérer le nom du pays à partir du code enregistré dans la base de données
            
             // À adapter selon votre service

            // Récupérer le nom de la ville à partir du code enregistré dans la base de données
           
             // À adapter selon votre service

            $user = User::where('id', FacadesAuth::user()->id)->first();
            return view('admin/profile', compact('user',  ));
        } catch (Exception $e) {
            // Log the exception if needed
            Log::error($e->getMessage());

            // Return a custom error view
            return view('errors/404', ['message' => $e->getMessage()]);
        }
    }

    public function modifUserProfile()
    {
        try {
            $cities = Ville::get();
            return view('admin.modif-user-profile',compact('cities'));
        } catch (Exception $e) {
            // Log the exception if needed
            Log::error($e->getMessage());

            // Return a custom error view
            return view('errors/404', ['message' => $e->getMessage()]);
        }
    }

    public function modifUserProfilePost(Request $request)
    {
        try {
            $nom_prenom = $request->nom_prenom;
            $pays = $request->pays;
            $ville = $request->ville;
            $website = $request->website;
            $description = $request->description;

            $user = User::where('id', FacadesAuth::user()->id)->first();
            $user->nom_prenom = $nom_prenom;
            $user->pays = $pays;
            $user->ville = $ville;
            $user->website = $website;
            $user->description = $description;
            $user->updated_at = \now();

            if ($request->file('file')) {
                $image = $request->file('file');
                $imageName = time() . '.' . $image->extension();
                $imagePath = $image->storeAs('uploads', $imageName, 'public');

                $user->profile_img = '/storage/' . $imagePath;
            }
            $user->save();
            session(['message' => 'Profile updated successfully.', 'message_type' => 'success']);

            return redirect()->route('admin.dashbord');
        } catch (Exception $e) {
            // Log the exception if needed
            Log::error($e->getMessage());

            // Return a custom error view
            return view('errors/404', ['message' => $e->getMessage()]);
        }
    }

    public function modifPswd()
    {
        try {
            //$user = User::where('id', FacadesAuth::user()->id)->first();
            return view('admin/modif-pswd');
        } catch (Exception $e) {
            // Log the exception if needed
            Log::error($e->getMessage());

            // Return a custom error view
            return view('errors/404', ['message' => $e->getMessage()]);
        }
    }


    public function myProperties(Request $request)
    {
        try {
            $uniqueCityIds = Propriete::select('ville_id')->distinct()->pluck('ville_id');

            $uniqueCities = Ville::whereIn('id', $uniqueCityIds)->get();
            

            $properties = Propriete::where('user_id', FacadesAuth::id())
                ->where('deleted', 0)
                ->orderBy('updated_at', 'desc')
                ->paginate(10);


            $adminPropertiesView = Propriete::where('deleted', 0)
                ->orderBy('updated_at', 'desc')
                ->paginate(15);

            $pagination = true;
            $restaurer = false;
            $titre = 'Liste Des Propriétés';
            $isAdmin = auth()->user()->role === 'admin';
            $typeProprietes = TypePropriete::where('deleted','!=', 1)->get();
            $caracteristiques = Caracteristique::get();

            if ($request->has('superficie_min')) {
                //dd($request->superficie_min);
                // Récupérer les données du formulaire
                $filters = $request->only(['prix_max', 'prix_min', 'superficie_max', 'superficie_min', 'titre', 'ville', 'type_propriete_id', 'status', 'nbPiece', 'nbChambre', 'nbToillete', 'prix', 'created_at', 'user_name', 'caracteristiques']);

                // Construire la requête pour filtrer les propriétés
                $properties = Propriete::query();

                // Appliquer les filtres sur la requête
                if (!empty($filters['titre'])) {
                    $properties->where('titre', 'like', '%' . $filters['titre'] . '%');
                }

                if (!empty($filters['ville'])) {
                    $properties->where('ville_id', $filters['ville']);
                }

                if (!empty($filters['type_propriete_id'])) {
                    $properties->where('type_propriete_id', $filters['type_propriete_id']);
                }

                if (!empty($filters['status'])) {
                    $properties->where('status', $filters['status']);
                }

                if (!empty($filters['nbPiece'])) {
                    $properties->where('nbPiece', $filters['nbPiece']);
                }

                if (!empty($filters['nbChambre'])) {
                    $properties->where('nbChambre', $filters['nbChambre']);
                }

                if (!empty($filters['nbToillete'])) {
                    $properties->where('nbToillete', $filters['nbToillete']);
                }

                if (!empty($filters['prix'])) {
                    $properties->where('prix', '<=', $filters['prix']);
                }


                if (!empty($filters['superficie_max'])) {
                    $properties->where('surface', '<=', $filters['superficie_max']);
                }
                if (!empty($filters['superficie_min'])) {
                    $properties->where('surface', '>=', $filters['superficie_min']);
                }

                if (!empty($filters['prix_max'])) {
                    $properties->where('prix', '<=', $filters['prix_max']);
                }
                if (!empty($filters['prix_min'])) {
                    $properties->where('prix', '>=', $filters['prix_min']);
                }



                if (!empty($filters['created_at'])) {
                    $properties->whereDate('created_at', 'like', '%' . $filters['created_at'] . '%');
                }

                if (!empty($filters['user_name'])) {
                    $properties->whereHas('user', function ($query) use ($filters) {
                        $query->where('nom_prenom', 'like', '%' . $filters['user_name'] . '%');
                    });
                }

                // Filtrer par caractéristiques
                if (!empty($filters['caracteristiques'])) {
                    $properties->whereHas('caracteristiques', function ($query) use ($filters) {
                        $query->whereIn('caracteristique_id', $filters['caracteristiques']);
                    });
                }

                // Exécuter la requête et récupérer les résultats
                $adminPropertiesView = $properties->orderBy('created_at', 'desc')->paginate(10);

                // Retourner les résultats à la vue ou faire tout autre traitement nécessaire
                return view('admin/my-properties', compact('uniqueCities','caracteristiques', 'typeProprietes', 'isAdmin', 'pagination', 'titre', 'restaurer', 'adminPropertiesView', 'properties'));
            };


            if ($request->has('property-ajouter')) {

                $adminPropertiesView = Propriete::orderBy('updateAdmin', 'desc')
                    ->orderBy('created_at', 'desc')
                    ->limit(10)
                    ->get();


                $pagination = false;

                $restaurer = false;
                $titre = '10 Dernières Propriétés Ajoutées';
                $isAdmin = auth()->user()->role === 'admin';
                return view('admin/my-properties', compact('uniqueCities','caracteristiques', 'typeProprietes', 'isAdmin', 'pagination', 'titre', 'restaurer', 'adminPropertiesView', 'properties'));
            }


            if ($request->has('properte-ajouter')) {
                $adminPropertiesView = Propriete::orderBy('created_at', 'desc')
                    ->whereHas('user', function ($query) {
                        $query->where('role', '!=', 'admin');
                    })
                    ->limit(10)
                    ->get();


                $pagination = false;

                $restaurer = false;
                $titre = '10 Dernières Propriétés Ajoutées';
                $isAdmin = auth()->user()->role === 'admin';
                return view('admin/my-properties', compact('uniqueCities','caracteristiques', 'typeProprietes', 'isAdmin', 'pagination', 'titre', 'restaurer', 'adminPropertiesView', 'properties'));
            }


            if ($request->has('property-modifier')) {
                $adminPropertiesView = Propriete::orderBy('updateAdmin', 'desc')
                    ->orderBy('updated_at', 'desc')
                    ->limit(10)
                    ->get();


                $pagination = false;


                $restaurer = false;
                $titre = '10 Dernières Propriétés Modifiées';
                $isAdmin = auth()->user()->role === 'admin';
                return view('admin/my-properties', compact('uniqueCities','caracteristiques', 'typeProprietes', 'isAdmin', 'pagination', 'titre', 'restaurer', 'adminPropertiesView', 'properties'));
            }


            if ($request->has('property-supprimer')) {

                $adminPropertiesView = Propriete::orderBy('updateAdmin', 'desc')
                    ->where('deleted', 1)
                    ->limit(10)
                    ->get();


                $pagination = false;


                $restaurer = true;
                $titre = '10 Dernières Propriétés Supprimées';
                $isAdmin = auth()->user()->role === 'admin';

                return view('admin/my-properties', compact('uniqueCities','caracteristiques', 'typeProprietes', 'isAdmin', 'pagination', 'titre', 'restaurer', 'adminPropertiesView', 'properties'));
            }


            if ($request->has('property-masquer')) {

                $adminPropertiesView = Propriete::orderBy('updateAdmin', 'desc')
                    ->where('masquer', 1)
                    ->limit(10)
                    ->get();


                $pagination = false;


                $restaurer = false;
                $titre = '10 Dernières Propriétés Masquées';
                $isAdmin = auth()->user()->role === 'admin';



                return view('admin/my-properties', compact('uniqueCities','caracteristiques', 'typeProprietes', 'isAdmin', 'pagination', 'titre', 'restaurer', 'adminPropertiesView', 'properties'));
            }


            if ($request->has('property-avancer')) {

                $adminPropertiesView = Propriete::orderBy('updateAdmin', 'desc')
                    ->orderBy('mettreAvant', 'desc')
                    ->limit(10)
                    ->get();


                $pagination = false;


                $restaurer = false;
                $titre = '10 Dernières Propriétés Mis en avant';
                $isAdmin = auth()->user()->role === 'admin';




                return view('admin/my-properties', compact('uniqueCities','caracteristiques', 'typeProprietes', 'isAdmin', 'pagination', 'titre', 'restaurer', 'adminPropertiesView', 'properties'));
            }

            return view('admin/my-properties', compact('uniqueCities','caracteristiques', 'typeProprietes', 'isAdmin', 'pagination', 'titre', 'restaurer', 'adminPropertiesView', 'properties'));
        } catch (Exception $e) {
            // Log the exception if needed
            Log::error($e->getMessage());

            // Return a custom error view
            return view('errors/404', ['message' => $e->getMessage()]);
        }
    }


    public function addProperty()
    {
        try {
            $cities = Ville::get();

            $typeProprietes = TypePropriete::where('deleted','!=', 1)->get();
            $caracteristiques = Caracteristique::where('deleted', 0)->get();
            return view('admin/add-property', compact(
                'typeProprietes',
                'caracteristiques',
                'cities',
            ));
        } catch (Exception $e) {
            // Log the exception if needed
            Log::error($e->getMessage());

            // Return a custom error view
            return view('errors/404', ['message' => $e->getMessage()]);
        }
    }


    public function addPropertyPost(Request $request)
    {
        try {

            // Création d'une nouvelle propriété
            $property = new Propriete();
            $property->titre = $request->titre;
            $property->description = $request->description;
            $property->status = $request->status;
            $property->type_propriete_id = $request->type_propriete_id;
            $property->prix = $request->prix;
            $property->surface = $request->surface;
            $property->ville_id = $request->ville;
            $property->quartier = $request->quartier;
            $property->adresse = $request->adresse;
            $property->nbPiece = $request->nbPiece;
            $property->nbChambre = $request->nbChambre;
            $property->nbToillete = $request->nbToillete;
            $property->nomContact = $request->nomContact;
            $property->prenomContact = $request->prenomContact;
            $property->emailContact = $request->emailContact;
            $property->telContact = $request->telContact;
            $property->deleted = 0;
            $property->masquer = 0;
            $property->mettreAvant = now();
            $property->user_id = $request->user()->id;

            $property->save();

            // Sauvegarde des caractéristiques
            if ($request->has('caracteristiques')) {
                $property->caracteristiques()->sync($request->caracteristiques);
            }

            if ($request->has('addByAdmin')) {
                $property->updateAdmin =  \now();
            }
            // Sauvegarde des images
            $uploadedImageUrls = json_decode($request->uploadedImageUrls, true);
            foreach ($uploadedImageUrls as $imageUrl) {
                ProprieteImage::create([
                    'url' => $imageUrl,
                    'propriete_id' => $property->id,
                    'deleted' => 0,
                ]);
            }
            session(['message' => 'Propriété ajouté avec succes.', 'message_type' => 'success']);

            return response()->json(['success' => true, 'property_id' => $request]);
        } catch (Exception $e) {
            Log::error($e->getMessage());

            return view('errors/404', ['message' => $e->getMessage()]);
        }
    }


    public function modifPropertyPost(Request $request)
    {
        try {

            $id = $request->id;
            // Récupération de la propriété existante depuis la base de données
            $property = Propriete::where('id', $id)->first();

            if (!$property) {
                return response()->json(['success' => false, 'error' => 'Propriété non trouvée']);
            }
            $property->titre = $request->titre;
            $property->description = $request->description;
            $property->status = $request->status;
            $property->type_propriete_id = $request->type_propriete_id;
            $property->prix = $request->prix;
            $property->surface = $request->surface;
            $property->ville_id = $request->ville;
            $property->quartier = $request->quartier;
            $property->adresse = $request->adresse;
            $property->nbPiece = $request->nbPiece;
            $property->nbChambre = $request->nbChambre;
            $property->nbToillete = $request->nbToillete;
            $property->nomContact = $request->nomContact;
            $property->prenomContact = $request->prenomContact;
            $property->emailContact = $request->emailContact;
            $property->telContact = $request->telContact;
            $property->deleted = 0;
            $property->updated_at = \now();

            $property->user_id = $request->user()->id;

            $property->save();

            // Sauvegarde des caractéristiques
            if ($request->has('caracteristiques')) {
                $property->caracteristiques()->sync($request->caracteristiques);
            }
            // Sauvegarde des images
            $uploadedImageUrls = json_decode($request->uploadedImageUrls, true);
            foreach ($uploadedImageUrls as $imageUrl) {
                ProprieteImage::create([
                    'url' => $imageUrl,
                    'propriete_id' => $property->id,
                    'deleted' => 0,
                ]);
            }
            session(['message' => 'Propriété modifié avec succes.', 'message_type' => 'success']);

            return response()->json(['success' => true, 'property_id' => $request]);
        } catch (Exception $e) {
            Log::error($e->getMessage());

            return view('errors/404', ['message' => $e->getMessage()]);
        }
    }


    public function uploadImage(Request $request)
    {
        try {

            $request->validate([
                'file' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);

            if ($request->file('file')) {
                $image = $request->file('file');
                $imageName = time() . '.' . $image->extension();
                $imagePath = $image->storeAs('uploads', $imageName, 'public');

                Log::info('File uploaded successfully', [
                    'image_name' => $imageName,
                    'image_path' => $imagePath
                ]);

                return response()->json(['success' => true, 'file_url' => Storage::url($imagePath)]);
            }

            Log::error('No file found in the request');
            return response()->json(['error' => 'Erreur de téléchargement'], 400);
        } catch (Exception $e) {
            Log::error('Error uploading file', ['exception' => $e]);
            return response()->json(['error' => 'Erreur de téléchargement'], 500);
        }
    }

    public function deleteFile(Request $request)
    {
        try {
            $request->validate([
                'file_url' => 'required|string'
            ]);

            $filePath = str_replace('/storage/', 'public/', $request->file_url);
            if (Storage::exists($filePath)) {
                Storage::delete($filePath);
                session(['message' => 'Fichier modifié avec  success.', 'message_type' => 'success']);
                return response()->json(['success' => true]);
            }

            return response()->json(['error' => 'File not found'], 404);
        } catch (Exception $e) {
            // Log the exception if needed
            Log::error($e->getMessage());

            // Return a custom error view
            return view('errors/404', ['message' => $e->getMessage()]);
        }
    }

    public function messages(Request $request)
    {
        try {
            $messages = Message::where('proprietaire_id', FacadesAuth::id())
                ->where('deleted', 0)
                ->orderBy('created_at', 'desc')
                ->paginate(10);

            $messagesAdmin = Message::where('deleted', 0)
                ->orderBy('created_at', 'desc')
                ->paginate(10);

            $pagination = true;
            $titre = 'Les Messages Envoyés ';
            $isAdmin = auth()->user()->role === 'admin';

            if ($request->has('btn_message_filter')) {

                $nom_prenom = $request->input('nom_prenom');
                $user_name = $request->input('user_name');

                $created_at = $request->input('created_at');


                // Construire la requête de base
                $query = Message::query();

                // Ajouter les filtres de recherche
                if (!empty($nom_prenom)) {
                    $query->where('nom_prenom', 'like', '%' . $nom_prenom . '%');
                }

                if (!empty($user_name)) {
                    $query->whereHas('user', function ($q) use ($user_name) {
                        $q->where('nom_prenom', 'like', '%' . $user_name . '%');
                    });
                }



                if (!empty($created_at)) {
                    $query->where('created_at', 'like', "%{$created_at}%");
                }

                $titre = 'Liste Des Utilisateurs';


                // Paginer les résultats
                $messagesAdmin = $query->where('deleted', 0)->paginate(10)->appends($request->except('page'));
                return view('admin/messages', compact('messagesAdmin', 'messages',  'pagination', 'titre', 'isAdmin'));
            }


            if ($request->has('message-ajouter')) {

                $messagesAdmin = Message::orderBy('created_at', 'desc')
                    ->limit(5)
                    ->get();
                $pagination = false;
                $titre = '10 Derniers Messages Ajoutés';


                return view('admin/messages', compact('messagesAdmin', 'messages', 'pagination',  'titre', 'isAdmin'));
            }
            return view('admin/messages', compact('messagesAdmin', 'messages', 'pagination',  'titre', 'isAdmin'));
        } catch (Exception $e) {
            // Log the exception if needed
            Log::error($e->getMessage());

            // Return a custom error view
            return view('errors/404', ['message' => $e->getMessage()]);
        }
    }


    public function reviews(Request $request)
    {
        try {
             // Créez une nouvelle instance de Client
             // Passez l'instance de Client au service

            $reviews = Comment::whereHas('propriete', function ($query) {
                $query->where('user_id', FacadesAuth::id());
            })->orderBy('created_at', 'desc')
                ->where('deleted', 0)
                ->paginate(10);


            // debut admin
            $reviewsAdmin = Comment::where('deleted', 0)
                ->orderBy('created_at', 'desc')
                ->paginate(15);

            $pagination = true;
            $restaurer = false;
            $titre = 'Liste Des Commentaires';
            $isAdmin = auth()->user()->role === 'admin';

            if ($request->has('btn_comment_filter')) {

                $nom_prenom = $request->input('nom_prenom');
                $user_name = $request->input('user_name');

                $created_at = $request->input('created_at');


                // Construire la requête de base
                $query = Comment::query();

                // Ajouter les filtres de recherche
                if (!empty($nom_prenom)) {
                    $query->where('nom_prenom', 'like', '%' . $nom_prenom . '%');
                }

                if (!empty($user_name)) {
                    $query->whereHas('user', function ($q) use ($user_name) {
                        $q->where('nom_prenom', 'like', '%' . $user_name . '%');
                    });
                }



                if (!empty($created_at)) {
                    $query->where('created_at', 'like', "%{$created_at}%");
                }

                $titre = 'Liste Des Utilisateurs';


                // Paginer les résultats
                $reviewsAdmin = $query->where('deleted', 0)->paginate(10)->appends($request->except('page'));
                return view('admin/reviews', compact('reviewsAdmin', 'reviews',  'pagination', 'restaurer', 'titre', 'isAdmin'));
            }


            if ($request->has('comment-ajouter')) {

                $reviewsAdmin = Comment::orderBy('updateAdmin', 'desc')
                    ->where('created_at', 'desc')
                    ->limit(10)
                    ->get();


                $pagination = false;


                $restaurer = false;
                $titre = '10 Derniers Commentaires Ajoutés';


                return view('admin/reviews', compact('reviewsAdmin', 'reviews',  'pagination', 'restaurer', 'titre', 'isAdmin'));
            }

            if ($request->has('comment-modifier')) {

                $reviewsAdmin = Comment::orderBy('updateAdmin', 'desc')
                    ->where('updated_at', 'desc')
                    ->limit(10)
                    ->get();


                $pagination = false;


                $restaurer = false;
                $titre = '10 Derniers Commentaires Modifiés';
                return view('admin/reviews', compact('reviewsAdmin', 'reviews',  'pagination', 'restaurer', 'titre', 'isAdmin'));
            }

            if ($request->has('comment-approuver')) {
                $reviewsAdmin = Comment::orderBy('updateAdmin', 'desc')
                    ->where('approuver', 1)
                    ->limit(10)
                    ->get();


                $pagination = false;


                $restaurer = false;
                $titre = '10 Derniers Commentaires approuvés';

                return view('admin/reviews', compact('reviewsAdmin', 'reviews',  'pagination', 'restaurer', 'titre', 'isAdmin'));
            }

            if ($request->has('comment-desapprouver')) {

                $reviewsAdmin = Comment::orderBy('updateAdmin', 'desc')
                    ->where('approuver', 0)
                    ->limit(10)
                    ->get();


                $pagination = false;


                $restaurer = false;
                $titre = '10 Derniers Commentaires désapprouvés';

                return view('admin/reviews', compact('reviewsAdmin', 'reviews',  'pagination', 'restaurer', 'titre', 'isAdmin'));
            }

            if ($request->has('comment-supprimer')) {

                $reviewsAdmin = Comment::orderBy('updateAdmin', 'desc')
                    ->where('deleted', 1)
                    ->limit(10)
                    ->get();


                $pagination = false;


                $restaurer = true;
                $titre = '10 Dernières Commentaires Supprimés';

                return view('admin/reviews', compact('reviewsAdmin', 'reviews',  'pagination', 'restaurer', 'titre', 'isAdmin'));
            }


            return view('admin/reviews', compact('reviewsAdmin', 'reviews',  'pagination', 'restaurer', 'titre', 'isAdmin'));
        } catch (Exception $e) {
            // Log the exception if needed
            Log::error($e->getMessage());

            // Return a custom error view
            return view('errors/404', ['message' => $e->getMessage()]);
        }
    }

    public function notFound()
    {
        try {
            return view('errors/404');
        } catch (Exception $e) {
            // Log the exception if needed
            Log::error($e->getMessage());

            // Return a custom error view
            return view('errors/404', ['message' => $e->getMessage()]);
        }
    }

    public function modifProperty(Request $request)
    {
        try {
            $id = $request->property_modif_id;
            $cities = Ville::get();

            $properties = Propriete::where('id', $id)->first();

            if (!$properties) {
                throw new \Exception('Property not found');
            }
            $proprieteImages = ProprieteImage::where('propriete_id', $id)->where('deleted', 0)->get();
            $typeProprietes = TypePropriete::where('deleted','!=', 1)->get();
            $caracteristiques = Caracteristique::get();
            return view('admin/modif-property', compact(
                'caracteristiques',
                'properties',
                'typeProprietes',
                'proprieteImages',
                'cities'
            ));
        } catch (Exception $e) {
            // Log the exception if needed
            Log::error($e->getMessage());

            // Return a custom error view
            return view('errors/404', ['message' => $e->getMessage()]);
        }
    }


    public function suppression(Request $request)
    {
        try {

            //dd($id);
            if ($request->has('message_sup_id')) {
                $id = $request->message_sup_id;
                $message = Message::where('id', $id)->first();
                $message->deleted = 1;
                $message->updated_at = \now();

                $message->save();
                return redirect()->route('admin.messages')->with('success', 'Deleted successfully.');
            }elseif ($request->has('message2_sup_id')) {
                $id = $request->message2_sup_id;
                $message = Message::where('id', $id)->first();
                $message->deleted = 1;
                $message->updated_at = \now();
                
                $message->save();
                return redirect()->route('admin.dashbord')->with('success', 'Deleted successfully.');
            }elseif ($request->has('review2_sup_id')) {
                $id = $request->review2_sup_id;
                $review = Comment::where('id', $id)->first();
                $review->deleted = 1;
                $review->updated_at = \now();
                
                $review->save();
                return redirect()->route('admin.dashbord')->with('success', 'Deleted successfully.');
            }
             elseif ($request->has('review_sup_id')) {
                $id = $request->review_sup_id;
                $review = Comment::where('id', $id)->first();
                $review->deleted = 1;
                $review->updated_at = \now();
                $propriete = Propriete::where('id', $review->propriete_id)->first();
                $propriete->updated_at = \now();
                $review->save();
                return redirect()->route('admin.reviews')->with('success', 'Deleted successfully.');
            } elseif ($request->has('property_sup_id')) {
                $id = $request->property_sup_id;
                $propriete = Propriete::where('id', $id)->first();
                $propriete->deleted = 1;
                $propriete->updated_at = \now();
                $propriete->save();
                return redirect()->route('admin.my-properties')->with('success', 'Deleted successfully.');
            } elseif ($request->has('imageProperty_sup_id')) {
                $id = $request->imageProperty_sup_id;
                //dd($id);
                $image = ProprieteImage::where('id', $id)->first();
                $image->deleted = 1;
                $image->updated_at = \now();
                $image->save();
                $propriete = Propriete::where('id', $image->propriete_id)->first();
                $propriete->updated_at = \now();
                return redirect()->route('admin.my-properties')->with('success', 'Deleted successfully.');
            } elseif ($request->has('type_property_sup_id')) {
                $id = $request->type_property_sup_id;
                //dd($id);
                $typePropriete = TypePropriete::where('id', $id)->first();
                $typePropriete->deleted = 1;
                $typePropriete->updated_at = \now();
                $typePropriete->save();
             
                return redirect()->route('admin.add-type-property')->with('success', 'Deleted successfully.');
            } elseif ($request->has('caracteristique_property_sup_id')) {
                $id = $request->caracteristique_property_sup_id;
                //dd($id);
                $caracteristique = Caracteristique::where('id', $id)->first();
                $caracteristique->deleted = 1;
                $caracteristique->updated_at = \now();
                $caracteristique->save();
             
                return redirect()->route('admin.caracteristique-type-property')->with('success', 'Deleted successfully.');
            }
        } catch (Exception $e) {
            // Log the exception if needed
            Log::error($e->getMessage());

            // Return a custom error view
            return view('errors/404', ['message' => $e->getMessage()]);
        }
    }
    public function newsLetterss(Request $request)
    {
        try {
            if ($request->has('btn_mail')) {

                Newslater::create([
                    'email' => $request->email,
                    'deleted' => 0,
                ]);
                return redirect()->route('pages.account')->with('success', 'E-mail sent successfully.');
            }
            if ($request->has('btn_newslater')) {

                $message = $request->message;
                Newslater::create([
                    'email' => $request->email,
                    'deleted' => 0,
                ]);
                return redirect()->route('pages.not-found', [
                    'message' => $message,
                ])->with('success', 'E-mail sent successfully.');
            }
        } catch (Exception $e) {
            // Log the exception if needed
            Log::error($e->getMessage());

            // Return a custom error view
            return view('errors/404', ['message' => $e->getMessage()]);
        }
    }

    public function deleteImage($id)
    {
        try {
            $propertyImage = ProprieteImage::findOrFail($id);
            $imageNombre = ProprieteImage::where('propriete_id', $propertyImage->propriete_id)->count();

            $propertyImage->updated_at = now();
            if ($imageNombre == 1) {
                return response()->json(['error' => 'Enregistrer d\'abord au moins une image avant de supprimer'], 400);
            } else {
                $propertyImage->delete();
                return response()->json(['success' => 'Item deleted successfully']);
            }
        } catch (Exception $e) {
            // Log the exception if needed
            Log::error($e->getMessage());

            // Return a custom error view
            return view('errors/404', ['message' => $e->getMessage()]);
        }
    }

    public function checkImage($idProperty)
    {
        // Requête pour vérifier la présence d'une image
        $hasImage = ProprieteImage::where('propriete_id', $idProperty)->exists();

        // Retourner la réponse en JSON
        return response()->json(['hasImage' => $hasImage]);
    }


    public function adminUsers(Request $request)
    {
        try {
            $uniqueCityIds = Propriete::select('ville_id')->distinct()->pluck('ville_id');

            $uniqueCities = Ville::whereIn('id', $uniqueCityIds)->get();
            
            $users = User::where('deleted', 0)
                ->orderBy('created_at', 'desc')
                ->paginate(15);

            $pagination = true;
            $restaurer = false;
            $titre = 'Liste Des Utilisateurs';

            if ($request->has('btn_user_filter')) {

                $nom_prenom = $request->input('nom_prenom');
                $ville = $request->input('ville');
                $created_at = $request->input('created_at');


                // Construire la requête de base
                $query = User::query();

                // Ajouter les filtres de recherche
                if (!empty($nom_prenom)) {
                    $query->where('nom_prenom', 'like', '%' . $nom_prenom . '%');
                }

               

                if (!empty($ville)) {
                    $query->where('ville_id', $ville);
                }

                if (!empty($created_at)) {
                    $query->where('created_at', 'like', "%{$created_at}%");
                }

                $titre = 'Liste Des Utilisateurs';


                // Paginer les résultats
                $users = $query->where('deleted', 0)->paginate(10)->appends($request->except('page'));
                return view('admin/users', compact('uniqueCities','pagination', 'restaurer', 'titre', 'users'));
            }
            if ($request->has('users-interraction')) {
                $users = User::whereHas('proprietes')
                    ->orderBy('updated_at', 'desc')
                    ->limit(10)
                    ->get();

                $pagination = false;
                $restaurer = false;
                $titre = 'Liste Des Utilisateurs Recemment Interragir avec le Système';

                return view('admin/users', compact('uniqueCities','pagination', 'restaurer', 'titre', 'users'));
            }

            if ($request->has('users-ajouter')) {

                $users = User::orderBy('updateAdmin', 'desc')
                    ->where('created_at', 'desc')
                    ->limit(10)
                    ->get();


                $pagination = false;


                $restaurer = false;
                $titre = '10 Derniers Utilisateurs Ajoutés';


                return view('admin/users', compact('uniqueCities','pagination', 'restaurer', 'titre', 'users'));
            }

            if ($request->has('users-modifier')) {

                $users = User::orderBy('updateAdmin', 'desc')
                    ->where('updated_at', 'desc')
                    ->limit(10)
                    ->get();


                $pagination = false;


                $restaurer = false;
                $titre = '10 Derniers Utilisateurs Modifiés';
                return view('admin/users', compact('uniqueCities','pagination', 'restaurer', 'titre', 'users'));
            }

            if ($request->has('users-bloquer')) {
                $users = User::orderBy('updateAdmin', 'desc')
                    ->where('bloquer', 1)
                    ->limit(10)
                    ->get();


                $pagination = false;


                $restaurer = false;
                $titre = '10 Derniers Utilisateurs Bloqués';

                return view('admin/users', compact('uniqueCities','pagination', 'restaurer', 'titre', 'users'));
            }

            if ($request->has('users-activer')) {

                $users = User::orderBy('updateAdmin', 'desc')
                    ->where('activer', 1)
                    ->limit(10)
                    ->get();


                $pagination = false;


                $restaurer = false;
                $titre = '10 Derniers Utilisateurs Activés';

                return view('admin/users', compact('uniqueCities','pagination', 'restaurer', 'titre', 'users'));
            }

            if ($request->has('users-supprimer')) {

                $users = User::orderBy('updateAdmin', 'desc')
                    ->where('deleted', 1)
                    ->limit(10)
                    ->get();


                $pagination = false;


                $restaurer = true;
                $titre = '10 Dernières Utilisateurs Supprimés';

                return view('admin/users', compact('uniqueCities','pagination', 'restaurer', 'titre', 'users'));
            }
            return view('admin/users', compact('uniqueCities','pagination', 'restaurer', 'titre', 'users'));
        } catch (Exception $e) {
            // Log the exception if needed
            Log::error($e->getMessage());

            // Return a custom error view
            return view('errors/404', ['message' => $e->getMessage()]);
        }
    }



    public function usersBloquerAjax(Request $request)
    {

        try {
            $id =  $request->id;
            $user = User::where('id', $id)->first();

            $user->bloquer = '1';
            $user->updateAdmin = now();
            $user->save();
            return response()->json(['success' => 'Item Bloqued successfully']);
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return view('errors/404', ['message' => $e->getMessage()]);
        }
    }

    public function usersDebloquerAjax(Request $request)
    {

        try {
            $id =  $request->id;
            $user = User::where('id', $id)->first();
            $user->bloquer = '0';
            $user->updateAdmin = now();
            $user->save();
            return response()->json(['success' => 'Item Bloqued successfully']);
        } catch (Exception $e) {
            // Log the exception if needed
            Log::error($e->getMessage());

            // Return a custom error view
            return view('errors/404', ['message' => $e->getMessage()]);
        }
    }



    public function usersActiverAjax(Request $request)
    {

        try {
            $id =  $request->id;
            $user = User::where('id', $id)->first();

            $user->activer = '0';
            $user->updateAdmin = now();
            $user->save();
            return response()->json(['success' => 'Item Bloqued successfully']);
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return view('errors/404', ['message' => $e->getMessage()]);
        }
    }

    public function usersDesactiverAjax(Request $request)
    {

        try {
            $id =  $request->id;
            $user = User::where('id', $id)->first();
            $user->activer = '1';
            $user->updateAdmin = now();
            $user->save();
            return response()->json(['success' => 'Item Bloqued successfully']);
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return view('errors/404', ['message' => $e->getMessage()]);
        }
    }

    public function usersSupprimerAjax(Request $request)
    {

        try {
            $id =  $request->id;
            $user = User::where('id', $id)->first();

            $user->deleted = '1';
            $user->updateAdmin = now();
            $user->save();
            return response()->json(['success' => 'Item Bloqued successfully']);
        } catch (Exception $e) {
            // Log the exception if needed
            Log::error($e->getMessage());

            // Return a custom error view
            return view('errors/404', ['message' => $e->getMessage()]);
        }
    }


    public function usersRestaurerAjax(Request $request)
    {

        try {
            $id =  $request->id;
            $user = User::where('id', $id)->first();

            $user->deleted = '0';
            $user->updateAdmin = now();
            $user->save();
            return response()->json(['success' => 'Item Bloqued successfully']);
        } catch (Exception $e) {
            Log::error($e->getMessage());

            return view('errors/404', ['message' => $e->getMessage()]);
        }
    }


    public function propertyMasquerAjax(Request $request)
    {

        try {
            $id =  $request->id;
            $property = Propriete::where('id', $id)->first();

            $property->masquer = '1';
            $property->updateAdmin = now();
            $property->save();
            return response()->json(['success' => 'Item Bloqued successfully']);
        } catch (Exception $e) {
            Log::error($e->getMessage());

            return view('errors/404', ['message' => $e->getMessage()]);
        }
    }

    public function propertyDemasquerAjax(Request $request)
    {

        try {
            $id =  $request->id;
            $property = Propriete::where('id', $id)->first();

            $property->masquer = '0';
            $property->updateAdmin = now();
            $property->save();
            return response()->json(['success' => 'Item Bloqued successfully']);
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return view('errors/404', ['message' => $e->getMessage()]);
        }
    }


    public function propertySupprimerAjax(Request $request)
    {

        try {
            $id =  $request->id;
            $property = Propriete::where('id', $id)->first();

            $property->deleted = '1';
            $property->updateAdmin = now();
            $property->save();
            return response()->json(['success' => 'Item Bloqued successfully']);
        } catch (Exception $e) {
            Log::error($e->getMessage());

            return view('errors/404', ['message' => $e->getMessage()]);
        }
    }


    public function propertyRestaurerAjax(Request $request)
    {

        try {
            $id =  $request->id;
            $property = Propriete::where('id', $id)->first();

            $property->deleted = '0';
            $property->updateAdmin = now();
            $property->save();
            return response()->json(['success' => 'Item Bloqued successfully']);
        } catch (Exception $e) {
            Log::error($e->getMessage());

            return view('errors/404', ['message' => $e->getMessage()]);
        }
    }



    public function propertyMettreAvantAjax(Request $request)
    {

        try {
            $id =  $request->id;
            $property = Propriete::where('id', $id)->first();

            $property->mettreAvant = \now();
            $property->updateAdmin = now();
            $property->save();
            return response()->json(['success' => 'mise en avant successfully']);
        } catch (Exception $e) {
            Log::error($e->getMessage());

            return view('errors/404', ['message' => $e->getMessage()]);
        }
    }



    public function commentApprouverAjax(Request $request)
    {

        try {
            $id =  $request->id;
            $comment = Comment::where('id', $id)->first();

            $comment->approuver = '1';
            $comment->updateAdmin = now();
            $comment->save();
            return response()->json(['success' => 'Item Bloqued successfully']);
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return view('errors/404', ['message' => $e->getMessage()]);
        }
    }

    public function commentDesapprouverAjax(Request $request)
    {

        try {
            $id =  $request->id;
            $comment = Comment::where('id', $id)->first();

            $comment->approuver = '0';
            $comment->updateAdmin = now();
            $comment->save();
            return response()->json(['success' => 'Item Bloqued successfully']);
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return view('errors/404', ['message' => $e->getMessage()]);
        }
    }

    public function commentSupprimerAjax(Request $request)
    {

        try {
            $id =  $request->id;
            $commentaire = Comment::where('id', $id)->first();

            $commentaire->deleted = '1';
            $commentaire->updateAdmin = now();
            $commentaire->save();
            return response()->json(['success' => 'Item Bloqued successfully']);
        } catch (Exception $e) {
            Log::error($e->getMessage());

            return view('errors/404', ['message' => $e->getMessage()]);
        }
    }

    public function commentRestaurerAjax(Request $request)
    {

        try {
            $id =  $request->id;
            $commentaire = Comment::where('id', $id)->first();

            $commentaire->deleted = '0';
            $commentaire->updateAdmin = now();
            $commentaire->save();
            return response()->json(['success' => 'Item Bloqued successfully']);
        } catch (Exception $e) {
            Log::error($e->getMessage());

            return view('errors/404', ['message' => $e->getMessage()]);
        }
    }


    public function addTypeProperty()
    {

        try {
            $typeProperty = TypePropriete::where('deleted','!=', 1)
                ->orderBy('created_at', 'desc')
                ->paginate(10);
            return view('admin.add-type-property', compact('typeProperty'));
        } catch (Exception $e) {
            Log::error($e->getMessage());

            return view('errors/404', ['message' => $e->getMessage()]);
        }
    }

    public function caracteristiqueTypeProperty()
    {
        try {
            $caracteristiqueProperty  = Caracteristique::where('deleted', 0)
                ->orderBy('created_at', 'desc')
                ->paginate(10);
            return view('admin.caracteristique-type-property',compact('caracteristiqueProperty'));
        } catch (Exception $e) {
            Log::error($e->getMessage());

            return view('errors/404', ['message' => $e->getMessage()]);
        }
    }


    public function formTypeProperty(Request $request)
    {
        try {
            $isModif = false;
            $typeProperty = null;
            if ($request->has('type_property_modif_id')) {
                $isModif = true;
                $typeProperty =  TypePropriete::where('id', $request->type_property_modif_id)->first();
                //dd($typeProperty);
            }

            return view('admin.form-type-property', ['isModif' => $isModif, 'typeProperty' => $typeProperty]);
        } catch (Exception $e) {
            Log::error($e->getMessage());

            return view('errors.404', ['message' => $e->getMessage()]);
        }
    }


    public function formCaracteristiqueProperty(Request $request)
    {
        try {
            $isModif = false;
            $caracteristiqueProperty = null;
            if ($request->has('caracteristique_property_modif_id')) {
                $isModif = true;
                $caracteristiqueProperty =  Caracteristique::where('id', $request->caracteristique_property_modif_id)->first();
                //dd($typeProperty);
            }

            return view('admin.form-caracteristique-property', ['isModif' => $isModif, 'caracteristiqueProperty' => $caracteristiqueProperty]);
        } catch (Exception $e) {
            Log::error($e->getMessage());

            return view('errors.404', ['message' => $e->getMessage()]);
        }
    }


    public function formCaracteristiquePropertyPost(Request $request)
    {

        try {
            if ($request->id == null) {

                $caracteristiqueProperty = new Caracteristique();
                $caracteristiqueProperty->libelle = $request->libelle;
                $caracteristiqueProperty->deleted = 0;
                $caracteristiqueProperty->save();
                session(['message' => 'Caracteristique de propriété ajouté avec succes.', 'message_type' => 'success']);
            } else {
                $caracteristiqueProperty =  Caracteristique::where('id', $request->id)->first();
                $caracteristiqueProperty->libelle = $request->libelle;
                $caracteristiqueProperty->updated_at = now();
                $caracteristiqueProperty->save();
                session(['message' => 'Caracteristique de propriété modifié avec succes.', 'message_type' => 'success']);
                return redirect()->route('admin.caracteristique-type-property');
            }
            return redirect()->route('admin.form-caracteristique-property');
        } catch (Exception $e) {
            Log::error($e->getMessage());

            return view('errors/404', ['message' => $e->getMessage()]);
        }
    }

    public function formTypePropertyPost(Request $request)
    {

        try {
            if ($request->id == null) {

                $typeProperty = new TypePropriete();
                $typeProperty->libelle = $request->libelle;
                $typeProperty->deleted = 0;
                $typeProperty->save();
                session(['message' => 'Type de propriété ajouté avec succes.', 'message_type' => 'success']);
            } else {
                $typeProperty =  TypePropriete::where('id', $request->id)->first();
                $typeProperty->libelle = $request->libelle;
                $typeProperty->updated_at = now();
                $typeProperty->save();
                session(['message' => 'Type de propriété modifié avec succes.', 'message_type' => 'success']);
                return redirect()->route('admin.add-type-property');
            }
            return redirect()->route('admin.form-type-property');
        } catch (Exception $e) {
            Log::error($e->getMessage());

            return view('errors/404', ['message' => $e->getMessage()]);
        }
    }
    
}
