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
    protected $geoNamesService;


    public function __construct(GeoNamesService $geoNamesService)
    {
        $this->geoNamesService = $geoNamesService;
    }


    public function acceuil()
    {
        try {
                $client = new Client(); // Créez une nouvelle instance de Client
                $geoNamesService = new GeoNamesService($client); // Passez l'instance de Client au service
            
            // liste des proprietes de status "à vendre"  
            $typeProprieteForSale = TypePropriete::withCount(['proprietes as proprietes_count' => function ($query) {
                $query->where('proprietes.status', 'For Sale');
            }])
                ->where('deleted', 0)->get();

            // liste des proprietes de status "à louer" 
            $typeProprieteRental = TypePropriete::withCount(['proprietes as proprietes_count' => function ($query) {
                $query->where('proprietes.status', 'Rental');
            }])
                ->where('deleted', 0)->get();

            // liste des villes qui ont de propriete  
            $uniqueCities = Propriete::select('ville')->distinct()->get();

            // nombre de propriete de type : 
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
                'geoNamesService'
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
                $client = new Client(); // Créez une nouvelle instance de Client
                $geoNamesService = new GeoNamesService($client); // Passez l'instance de Client au service
            
            //liste des proprietes à vendre
            $typeProprieteForSale = TypePropriete::withCount(['proprietes as proprietes_count' => function ($query) {
                $query->where('proprietes.status', 'For Sale');
            }])
                ->where('deleted', 0)->get();

            //liste des proprietes à louer
            $typeProprieteRental = TypePropriete::withCount(['proprietes as proprietes_count' => function ($query) {
                $query->where('proprietes.status', 'Rental');
            }])
                ->where('deleted', 0)->get();

            // liste des villes qui ont de propriete  
            $uniqueCities = Propriete::select('ville')->distinct()->get();

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
                'geoNamesService'

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
            $client = new Client(); // Créez une nouvelle instance de Client
                $geoNamesService = new GeoNamesService($client); // Passez l'instance de Client au service
            
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
                'popularProperties',
                'geoNamesService'
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
                ->where('ville', $ville)
                ->where('quartier', $quartier)
                ->where('status', $status)
                ->where('nbPiece', $nbPiece)
                ->where('prix', '>=', $propertiesSingle->prix - 10000)
                ->where('prix', '<=', $propertiesSingle->prix + 10000)
                ->where('id', '!=', $id)
                ->take(2)
                ->where('deleted', 0)->get();
                $client = new Client(); // Créez une nouvelle instance de Client
                $geoNamesService = new GeoNamesService($client); // Passez l'instance de Client au service
            
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

            return view('pages/single', compact('geoNamesService','id', 'proprietaire', 'propertiesSingle', 'similarProperties'));
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
            $countries = $this->geoNamesService->getCountries();
            return view('pages/account', compact('countries'));
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

            $countries = $this->geoNamesService->getCountries();
            $user = FacadesAuth::user();

            // Récupérer le nom du pays à partir du code enregistré dans la base de données
            $userCountryCode = $user->pays;
            $userCountry = $this->geoNamesService->getCountryNameByCode($userCountryCode); // À adapter selon votre service

            // Récupérer le nom de la ville à partir du code enregistré dans la base de données
            $userCityCode = $user->ville;
            $userCity = $this->geoNamesService->getCityNameByCode($userCityCode); // À adapter selon votre service


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
                    'pays' => 'required|string',
                    'ville' => 'required|string',
                    'website' => 'required|string|max:500',
                    'description' => 'required|string|max:1000',
                    'new_password' => 'nullable|string|min:8|confirmed',
                ]);

                $user = FacadesAuth::user();
                $user->fill($request->only(['nom_prenom', 'pays', 'ville', 'website', 'description']));

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
                'countries',
                'userCountryCode',
                'userCountry',
                'userCityCode',
                'userCity'
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

            $user->save();
            session(['message' => 'Mot de passe modifier avec succes.', 'message_type' => 'success']);
            return redirect()->route('admin.dashbord');
        
    }

    
    public function getCities(Request $request)
    {
        $countryCode = $request->input('country_code');
        $cities = $this->geoNamesService->getCitiesByCountryCode($countryCode);

        return response()->json($cities);
    }

    public function userProfile()
    {
        try {

            $countries = $this->geoNamesService->getCountries();
            $user = FacadesAuth::user();

            // Récupérer le nom du pays à partir du code enregistré dans la base de données
            $userCountryCode = $user->pays;
            $userCountry = $this->geoNamesService->getCountryNameByCode($userCountryCode); // À adapter selon votre service

            // Récupérer le nom de la ville à partir du code enregistré dans la base de données
            $userCityCode = $user->ville;
            $userCity = $this->geoNamesService->getCityNameByCode($userCityCode); // À adapter selon votre service

            $user = User::where('id', FacadesAuth::user()->id)->first();
            return view('admin/profile', compact('user','userCountry','userCity'));
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
            $user_id = FacadesAuth::id();

            $countries = $this->geoNamesService->getCountries();
            $user = FacadesAuth::user();

            // Récupérer le nom du pays à partir du code enregistré dans la base de données
            $userCountryCode = $user->pays;
            $userCountry = $this->geoNamesService->getCountryNameByCode($userCountryCode); // À adapter selon votre service

            // Récupérer le nom de la ville à partir du code enregistré dans la base de données
            $userCityCode = $user->ville;
            $userCity = $this->geoNamesService->getCityNameByCode($userCityCode); // À adapter selon votre service

            //$user = User::where('id', FacadesAuth::user()->id)->first();
            return view('admin.modif-user-profile', compact(
                
                'countries',
                'userCountryCode',
                'userCountry',
                'userCityCode',
                'userCity'
            ));
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

                $user->profile_img = '/storage/'.$imagePath;
              
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



    public function myProperties()
    {
        try {
            $client = new Client(); // Créez une nouvelle instance de Client
            $geoNamesService = new GeoNamesService($client); // Passez l'instance de Client au service
        
            $properties = Propriete::where('user_id', FacadesAuth::id())
                ->where('deleted', 0)
                ->orderBy('updated_at', 'desc')
                ->paginate(10);

            return view('admin/my-properties', compact('properties','geoNamesService'));
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
            // if (session()->has('message')) {
            //     dd(session('message'));
            //     //echo '<div class="alert alert-' . session('message_type', 'info') . '">' . session('message') . '</div>';
            // }
            $countries = $this->geoNamesService->getCountries();

            $typeProprietes = TypePropriete::get();
            $caracteristiques = Caracteristique::get();
            return view('admin/add-property', compact(
                'typeProprietes',
                'caracteristiques',
                'countries'
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
            $client = new Client(); // Créez une nouvelle instance de Client
            $geoNamesService = new GeoNamesService($client); // Passez l'instance de Client au service
        
            $reviews = Comment::whereHas('propriete', function ($query) {
                $query->where('user_id', FacadesAuth::id());
            })->orderBy('created_at', 'desc')
                ->where('deleted', 0)
                ->paginate(10);

            return view('admin/reviews', compact('reviews','geoNamesService'));
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

            $countries = $this->geoNamesService->getCountries();
            //$user = FacadesAuth::user();

            // Récupérer le nom du pays à partir du code enregistré dans la base de données
            $propertiesCountryCode = $properties->pays;
            $propertiesCountry = $this->geoNamesService->getCountryNameByCode($propertiesCountryCode); // À adapter selon votre service

            // Récupérer le nom de la ville à partir du code enregistré dans la base de données
            $propertiesCityCode = $properties->ville;
            $propertiesCity = $this->geoNamesService->getCityNameByCode($propertiesCityCode); // À adapter selon votre service



            if (!$properties) {
                throw new \Exception('Property not found');
            }
            $proprieteImages = ProprieteImage::where('propriete_id', $id)->where('deleted', 0)->get();
            $typeProprietes = TypePropriete::get();
            $caracteristiques = Caracteristique::get();
            return view('admin/modif-property', compact(
                'caracteristiques',
                'properties',
                'typeProprietes',
                'proprieteImages',
                'countries',
                'propertiesCountryCode',
                'propertiesCountry',
                'propertiesCityCode',
                'propertiesCity'
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
            } elseif ($request->has('review_sup_id')) {
                $id = $request->review_sup_id;
                $review = Comment::where('id', $id)->first();
                $review->deleted = 1;
                $review->updated_at = \now();
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


    public function adminUsers()
    {
        try {

            return view('admin/users');
           
        } catch (Exception $e) {
            // Log the exception if needed
            Log::error($e->getMessage());

            // Return a custom error view
            return view('errors/404', ['message' => $e->getMessage()]);
        }
    }
    

    
}
