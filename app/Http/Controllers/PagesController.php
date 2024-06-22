<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Message;
use Auth;
use App\Models\Propriete;
use App\Models\Caracteristique;
use App\Models\Newslater;
use App\Models\ProprieteImage;
use App\Models\TypePropriete;
use App\Models\User;
use Faker\Core\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Exception;
use Illuminate\Support\Facades\Log;

class PagesController extends Controller
{
    public function acceuil()
    {
        try {
            $typeProprieteForSale = TypePropriete::withCount(['proprietes as proprietes_count' => function ($query) {
                $query->where('proprietes.status', 'For Sale');
            }])
                ->where('deleted', 0)->get();

            $typeProprieteRental = TypePropriete::withCount(['proprietes as proprietes_count' => function ($query) {
                $query->where('proprietes.status', 'Rental');
            }])
                ->where('deleted', 0)->get();

            $uniqueCities = Propriete::select('ville')->distinct()->get();

            $nbResidential = Propriete::where('type_propriete_id', 1)->where('deleted', 0)->count();
            $nbCommercial = Propriete::where('type_propriete_id', 2)->where('deleted', 0)->count();
            $nbFarm = Propriete::where('type_propriete_id', 3)->where('deleted', 0)->count();
            $nbLand = Propriete::where('type_propriete_id', 4)->where('deleted', 0)->count();
            $nbDuplex = Propriete::where('type_propriete_id', 5)->where('deleted', 0)->count();
            $nbOffice = Propriete::where('type_propriete_id', 6)->where('deleted', 0)->count();
            $nbApartment = Propriete::where('type_propriete_id', 7)->where('deleted', 0)->count();
            $nbWarehouse = Propriete::where('type_propriete_id', 8)->where('deleted', 0)->count();


            $propertiesForSalle = Propriete::where('status', 'For Sale')
                ->orderBy('created_at', 'desc')
                ->limit(6)
                ->where('deleted', 0)->get();


            $propertiesHouse = Propriete::where('type_propriete_id', 1)
                ->where('deleted', 0)
                ->orWhere('type_propriete_id', 5)
                ->orWhere('type_propriete_id', 7)
                ->orderBy('created_at', 'desc')
                ->limit(6)
                ->where('deleted', 0)->get();


            $propertiesVilla = Propriete::where('type_propriete_id', 1)
                ->orWhere('prix', DB::raw('(SELECT MAX(prix) FROM proprietes)'))
                ->orderBy('created_at', 'desc')
                ->limit(6)
                ->where('deleted', 0)->get();


            $propertiesRental = Propriete::where('status', 'Rental')
                ->orderBy('created_at', 'desc')
                ->limit(6)
                ->where('deleted', 0)->get();


            $propertiesApartment = Propriete::where('type_propriete_id', 7)
                ->orderBy('created_at', 'desc')
                ->limit(6)
                ->where('deleted', 0)->get();


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



            $propertiesHigh = Propriete::orderBy('prix', 'desc')
                ->limit(4)
                ->where('deleted', 0)->get();

            $propertiesForSale = Propriete::where('status', 'For Sale')
                ->orderBy('prix', 'asc')
                ->orderBy('created_at', 'desc')
                ->limit(3)
                ->where('deleted', 0)->get();

            $comments = Comment::where('note', '>', 3)
                ->whereHas('user')
                ->orderBy('created_at', 'desc')
                ->limit(6)
                ->where('deleted', 0)->get();


            // Nombre total de clients
            $nbCustomer = Comment::count();


            // Nombre de commentaires avec une note supérieure à 2
            $nbClientNoteSatisfaction = Comment::where('note', '>', 2)->where('deleted', 0)->count();

            // Nombre total de commentaires
            $nbClientNote = Comment::count();

            // Pourcentage de satisfaction des clients
            $percentClientSatisfaction = ($nbClientNoteSatisfaction * 100) / $nbClientNote;


            // Nombre de propriétés à vendre
            $nbPropertyForSale = Propriete::where('status', 'For Sale')->where('deleted', 0)->count();
            if ($nbPropertyForSale > 1000) {
                $nbPropertyForSale = $nbPropertyForSale / 1000;
                $nbPropertyForSale = $nbPropertyForSale . "K";
            }

            // Nombre de propriétés à louer
            $nbPropertyRental = Propriete::where('status', 'Rental')->where('deleted', 0)->count();
            if ($nbPropertyRental > 1000) {
                $nbPropertyRental = $nbPropertyRental / 1000;
                $nbPropertyRental = $nbPropertyRental . "K";
            }

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
                'comments'
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
            $typeProprieteForSale = TypePropriete::withCount(['proprietes as proprietes_count' => function ($query) {
                $query->where('proprietes.status', 'For Sale');
            }])
                ->where('deleted', 0)->get();

            $typeProprieteRental = TypePropriete::withCount(['proprietes as proprietes_count' => function ($query) {
                $query->where('proprietes.status', 'Rental');
            }])
                ->where('deleted', 0)->get();

            $uniqueCities = Propriete::select('ville')->distinct()->get();

            $popularProperties = Propriete::orderBy('vue', 'desc')
                ->take(10)
                ->where('deleted', 0)->get();


            $properties = Propriete::where('deleted', 0)->paginate(10);


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
                'popularProperties'

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
            // Obtenir le nombre de propriétés par type et statut
            $typeProprieteForSale = TypePropriete::withCount(['proprietes as proprietes_count' => function ($query) {
                $query->where('proprietes.status', 'For Sale');
            }])->where('deleted', 0)->get();

            $typeProprieteRental = TypePropriete::withCount(['proprietes as proprietes_count' => function ($query) {
                $query->where('proprietes.status', 'Rental');
            }])->where('deleted', 0)->get();

            // Obtenir les villes uniques
            $uniqueCities = Propriete::select('ville')->distinct()->get();

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
                $query->where('ville', $ville);
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
                        ->orWhere('pays', 'like', "%{$searchTerm}%")
                        ->orWhere('created_at', 'like', "%{$searchTerm}%")
                        ->orWhere('ville', 'like', "%{$searchTerm}%")
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
                'popularProperties'
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
                ->where('ville', $ville)
                ->where('quartier', $quartier)
                ->where('status', $status)
                ->where('nbPiece', $nbPiece)
                ->where('prix', '>=', $propertiesSingle->prix - 10000)
                ->where('prix', '<=', $propertiesSingle->prix + 10000)
                ->where('id', '!=', $id)
                ->take(2)
                ->where('deleted', 0)->get();

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
                $request->request->remove('btn_msg3');

                return redirect()->route('pages.single', [
                    'id' => $id,
                ])->with('success', 'Message sent successfully.');
            }

            if ($request->has('btn_newslater')) {
                Newslater::create([
                    'email' => $request->email,
                    'deleted' => 0,
                ]);

                return redirect()->route('pages.single', [
                    'id' => $id,
                ])->with('success', 'E-mail sent successfully.');
            }

            return view('pages/single', compact('id', 'proprietaire', 'propertiesSingle', 'similarProperties'));
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
            return view('pages/account');
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
            $nbProperties = Propriete::where('user_id', FacadesAuth::id())->where('deleted', 0)->count();
            $nbReviews = Comment::whereHas('propriete', function ($query) {
                $query->where('user_id', FacadesAuth::id());
            })->where('deleted', 0)->count();
            $nbMessages = Message::where('proprietaire_id', FacadesAuth::id())->where('deleted', 0)->count();
            $messages = Message::where('proprietaire_id', FacadesAuth::id())
                ->orderBy('created_at', 'desc')
                ->limit(3)
                ->where('deleted', 0)->get();
            $reviews = Comment::whereHas('propriete', function ($query) {
                $query->where('user_id', FacadesAuth::id());
            })->orderBy('created_at', 'desc')
                ->limit(3)
                ->where('deleted', 0)->get();

            if ($request->has('btn_modif')) {
                $request->validate([
                    'nom_prenom' => 'required|string|max:255',
                    'pays' => 'required|string',
                    'ville' => 'required|string',
                    'website' => 'required|string|max:500',
                    'description' => 'required|string|max:1000',
                    'new_password' => 'nullable|string|min:8|confirmed',
                ]);

                $user = FacadesAuth::user();
                $user->nom_prenom = $request->nom_prenom;
                $user->pays = $request->pays;
                $user->ville = $request->ville;
                $user->website = $request->website;
                $user->description = $request->description;

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
                'reviews'
            ));
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return view('errors.404', ['message' => $e->getMessage()]);
        }
    }

    public function userProfile()
    {
        try {
            $user = User::where('id', FacadesAuth::user()->id)->first();
            return view('admin/profile', compact('user'));
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
            //$user = User::where('id', FacadesAuth::user()->id)->first();
            return view('admin/modif-user-profile');
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



    public function myProperties()
    {
        try {
            $properties = Propriete::where('user_id', FacadesAuth::id())
                ->where('deleted', 0)
                ->orderBy('vue', 'desc')
                ->paginate(10);

            return view('admin/my-properties', compact('properties'));
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

            $typeProprietes = TypePropriete::get();
            $caracteristiques = Caracteristique::get();
            return view('admin/add-property', compact(
                'typeProprietes',
                'caracteristiques'
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
            $property->pays = $request->pays;
            $property->ville = $request->ville;
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
            $property->pays = $request->pays;
            $property->ville = $request->ville;
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

            return response()->json(['success' => true, 'property_id' => $request]);
        } catch (Exception $e) {
            Log::error($e->getMessage());

            return view('errors/404', ['message' => $e->getMessage()]);
        }
    }


    public function uploadImage(Request $request)
    {
        try {
            Log::info('Upload request received', ['request' => $request->all()]);

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

    public function messages()
    {
        try {
            $messages = Message::where('proprietaire_id', FacadesAuth::id())
                ->where('deleted', 0)
                ->orderBy('created_at', 'desc')
                ->paginate(10);

            return view('admin/messages', compact('messages'));
        } catch (Exception $e) {
            // Log the exception if needed
            Log::error($e->getMessage());

            // Return a custom error view
            return view('errors/404', ['message' => $e->getMessage()]);
        }
    }


    public function reviews()
    {
        try {
            $reviews = Comment::whereHas('propriete', function ($query) {
                $query->where('user_id', FacadesAuth::id());
            })->orderBy('created_at', 'desc')
                ->where('deleted', 0)
                ->paginate(10);

            return view('admin/reviews', compact('reviews'));
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

            $properties = Propriete::where('id', $id)->first();
            $caracteristiques = Caracteristique::get();

            if (!$properties) {
                throw new \Exception('Property not found');
            }
            //dd($proper    ties);
            $typeProprietes = TypePropriete::get();
            $caracteristiques = Caracteristique::get();
            return view('admin/modif-property', compact(
                'caracteristiques',
                'properties',
                'typeProprietes',
                'caracteristiques'
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
                $message->save();
                return redirect()->route('admin.messages')->with('success', 'Deleted successfully.');
            } elseif ($request->has('review_sup_id')) {
                $id = $request->review_sup_id;
                $review = Comment::where('id', $id)->first();
                $review->deleted = 1;
                $review->save();
                return redirect()->route('admin.reviews')->with('success', 'Deleted successfully.');
            } elseif ($request->has('property_sup_id')) {
                $id = $request->property_sup_id;
                $propriete = Propriete::where('id', $id)->first();
                $propriete->deleted = 1;
                $propriete->save();
                return redirect()->route('admin.my-properties')->with('success', 'Deleted successfully.');
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
            $message = $request->message;
            Newslater::create([
                'email' => $request->email,
                'deleted' => 0,
            ]);
            return redirect()->route('pages.not-found', [
                'message' => $message,
            ])->with('success', 'E-mail sent successfully.');
        } catch (Exception $e) {
            // Log the exception if needed
            Log::error($e->getMessage());

            // Return a custom error view
            return view('errors/404', ['message' => $e->getMessage()]);
        }
    }
}
