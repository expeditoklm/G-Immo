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

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Exception;

class PagesController extends Controller
{

   

    public function acceuil()
    {
        try {
            $typeProprieteForSale = TypePropriete::withCount(['proprietes as proprietes_count' => function ($query) {
                $query->where('proprietes.status', 'For Sale');
            }])
                ->get();

            $typeProprieteRental = TypePropriete::withCount(['proprietes as proprietes_count' => function ($query) {
                $query->where('proprietes.status', 'Rental');
            }])
                ->get();

            $uniqueCities = Propriete::select('ville')->distinct()->get();

            $nbResidential = Propriete::where('type_propriete_id', 1)->count();
            $nbCommercial = Propriete::where('type_propriete_id', 2)->count();
            $nbFarm = Propriete::where('type_propriete_id', 3)->count();
            $nbLand = Propriete::where('type_propriete_id', 4)->count();
            $nbDuplex = Propriete::where('type_propriete_id', 5)->count();
            $nbOffice = Propriete::where('type_propriete_id', 6)->count();
            $nbApartment = Propriete::where('type_propriete_id', 7)->count();
            $nbWarehouse = Propriete::where('type_propriete_id', 8)->count();


            $propertiesForSalle = Propriete::where('status', 'For Sale')
                ->orderBy('created_at', 'desc')
                ->limit(6)
                ->get();


            $propertiesHouse = Propriete::where('type_propriete_id', 1)
                ->orWhere('type_propriete_id', 5)
                ->orWhere('type_propriete_id', 7)
                ->orderBy('created_at', 'desc')
                ->limit(6)
                ->get();


            $propertiesVilla = Propriete::where('type_propriete_id', 1)
                ->orWhere('prix', DB::raw('(SELECT MAX(prix) FROM proprietes)'))
                ->orderBy('created_at', 'desc')
                ->limit(6)
                ->get();


            $propertiesRental = Propriete::where('status', 'Rental')
                ->orderBy('created_at', 'desc')
                ->limit(6)
                ->get();


            $propertiesApartment = Propriete::where('type_propriete_id', 7)
                ->orderBy('created_at', 'desc')
                ->limit(6)
                ->get();


            $propertiesParcel = Propriete::where('type_propriete_id', 3)
                ->orWhere('type_propriete_id', 4)
                ->orderBy('created_at', 'desc')
                ->limit(6)
                ->get();

            $propertiesCommercial = Propriete::where('type_propriete_id', 8)
                ->orWhere('type_propriete_id', 2)
                ->orderBy('created_at', 'desc')
                ->limit(6)
                ->get();



            $propertiesHigh = Propriete::orderBy('prix', 'desc')
                ->limit(4)
                ->get();

            $propertiesForSale = Propriete::where('status', 'For Sale')
                ->orderBy('prix', 'asc')
                ->orderBy('created_at', 'desc')
                ->limit(3)
                ->get();

            $comments = Comment::where('note', '>', 3)
                ->whereHas('user')
                ->orderBy('created_at', 'desc')
                ->limit(6)
                ->get();


            // Nombre total de clients
            $nbCustomer = Comment::count();


            // Nombre de commentaires avec une note supérieure à 2
            $nbClientNoteSatisfaction = Comment::where('note', '>', 2)->count();

            // Nombre total de commentaires
            $nbClientNote = Comment::count();

            // Pourcentage de satisfaction des clients
            $percentClientSatisfaction = ($nbClientNoteSatisfaction * 100) / $nbClientNote;


            // Nombre de propriétés à vendre
            $nbPropertyForSale = Propriete::where('status', 'For Sale')->count();
            if ($nbPropertyForSale > 1000) {
                $nbPropertyForSale = $nbPropertyForSale / 1000;
                $nbPropertyForSale = $nbPropertyForSale . "K";
            }

            // Nombre de propriétés à louer
            $nbPropertyRental = Propriete::where('status', 'Rental')->count();
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
            return view('errors.custom', ['message' => $e->getMessage()]);
        }
    }


    public function search(Request $request)
    {
        try {
        $typeProprieteForSale = TypePropriete::withCount(['proprietes as proprietes_count' => function ($query) {
            $query->where('proprietes.status', 'For Sale');
        }])
            ->get();

        $typeProprieteRental = TypePropriete::withCount(['proprietes as proprietes_count' => function ($query) {
            $query->where('proprietes.status', 'Rental');
        }])
            ->get();

        $uniqueCities = Propriete::select('ville')->distinct()->get();

        $popularProperties = Propriete::orderBy('vue', 'desc')
            ->take(10)
            ->get();


        $properties = Propriete::paginate(10);


        if ($request->has('btn_newslater')) {

            Newslater::create([
                'email' => $request->email,
                'deleted' => 0,
            ]);
           
            return redirect()->route('pages.search', [
                'properties' => $properties,
                'typeProprieteForSale' => $typeProprieteForSale,
                'typeProprieteRental' => $typeProprieteRental,
                'uniqueCities' => $uniqueCities,
                'popularProperties' => $popularProperties,
                
            ])->with('success', 'E-mail sent successfully.');
            


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
        return view('errors.custom', ['message' => $e->getMessage()]);
    }
}

    public function searchPost(Request $request)
    {
        try {
        // Obtenir le nombre de propriétés par type et statut
        $typeProprieteForSale = TypePropriete::withCount(['proprietes as proprietes_count' => function ($query) {
            $query->where('proprietes.status', 'For Sale');
        }])->get();

        $typeProprieteRental = TypePropriete::withCount(['proprietes as proprietes_count' => function ($query) {
            $query->where('proprietes.status', 'Rental');
        }])->get();

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
            ->get();

        // Paginer les résultats
        $properties = $query->paginate(10)->appends($request->except('page'));

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
        return view('errors.custom', ['message' => $e->getMessage()]);
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
        return view('errors.custom', ['message' => $e->getMessage()]);
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
            ->get();

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
                'propertiesSingle' => $propertiesSingle,
                'similarProperties' => $similarProperties,
                'proprietaire' => $proprietaire,
            ])->with('success', 'Message sent successfully.');
        }

        if ($request->has('btn_newslater')) {
            Newslater::create([
                'email' => $request->email,
                'deleted' => 0,
            ]);

            return redirect()->route('pages.single', [
                'id' => $id,
                'propertiesSingle' => $propertiesSingle,
                'similarProperties' => $similarProperties,
                'proprietaire' => $proprietaire,
            ])->with('success', 'E-mail sent successfully.');
        }

        return view('pages/single', compact('id', 'proprietaire', 'propertiesSingle', 'similarProperties'));
    } catch (Exception $e) {
        // Log the exception if needed
        Log::error($e->getMessage());

        // Return a custom error view
        return view('errors.custom', ['message' => $e->getMessage()]);
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
        return view('pages/contact-us');
    } catch (Exception $e) {
        // Log the exception if needed
        Log::error($e->getMessage());

        // Return a custom error view
        return view('errors.custom', ['message' => $e->getMessage()]);
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
        return view('errors.custom', ['message' => $e->getMessage()]);
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
            ->get();

        $commentaires = Comment::whereHas('propriete', function ($query) use ($id) {
            $query->where('user_id', $id);
        })->get();

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
                'agent' => $agent,
                'properties' => $properties,
                'commentaires' => $commentaires
            ])->with('success', 'Message sent successfully.');
        }

        if ($request->has('btn_newslater')) {

            Newslater::create([
                'email' => $request->email,
                'deleted' => 0,
            ]);
            return redirect()->route('pages.agent', [
                'id' => $id,
                'agent' => $agent,
                'properties' => $properties,
                'commentaires' => $commentaires
            ])->with('success', 'E-mail sent successfully.');
        }

        return view('pages.agent', compact('agent', 'properties', 'commentaires'));
    } catch (Exception $e) {
        // Log the exception if needed
        Log::error($e->getMessage());

        // Return a custom error view
        return view('errors.custom', ['message' => $e->getMessage()]);
    }
}
    public function dashbord(Request $request)
    {
        try {
        $nbProperties = Propriete::where('user_id', FacadesAuth::id())->count();
        // Nombre de commentaires pour les propriétés de l'utilisateur connecté
        $nbReviews = Comment::whereHas('propriete', function ($query) {
            $query->where('user_id', FacadesAuth::id());
        })->count();
        $nbMessages = Message::where('proprietaire_id', FacadesAuth::id())->count();
        $messages = Message::where('proprietaire_id', FacadesAuth::id())
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();
        // Les 3 derniers commentaires pour les propriétés de l'utilisateur connecté
        $reviews = Comment::whereHas('propriete', function ($query) {
            $query->where('user_id', FacadesAuth::id());
        })->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();

        if ($request->has('btn_modif')) {
            $nom_prenom = $request->nom_prenom;
            $sexe = $request->sexe;
            $pays = $request->pays;
            $ville = $request->ville;
            $website = $request->website;
            $description = $request->description;

            $user = User::where('id', FacadesAuth::user()->id)->first();

            $user->nom_prenom = $nom_prenom;
            $user->sexe = $sexe;
            $user->pays = $pays;
            $user->ville = $ville;
            $user->website = $website;
            $user->description = $description;
            $user->save();

            session(['message' => 'Profile updated successfully.', 'message_type' => 'success']);
        }

        return view('admin/dashbord', compact(
            'nbProperties',
            'nbReviews',
            'nbMessages',
            'messages',
            'reviews'
        ));
    } catch (Exception $e) {
        // Log the exception if needed
        Log::error($e->getMessage());

        // Return a custom error view
        return view('errors.custom', ['message' => $e->getMessage()]);
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
        return view('errors.custom', ['message' => $e->getMessage()]);
    }
}

    public function myProperties()
    {
        try {
        $properties = Propriete::where('user_id', FacadesAuth::id())
            ->orderBy('vue', 'desc')
            ->paginate(10);

        return view('admin/my-properties', compact('properties'));
    } catch (Exception $e) {
        // Log the exception if needed
        Log::error($e->getMessage());

        // Return a custom error view
        return view('errors.custom', ['message' => $e->getMessage()]);
    }
}


    public function addProperty()
    {
        try {
        if (session()->has('errors')) {
            $proprieteId = session('propriete_id');
            $propriete = Propriete::where('id', $proprieteId)->first();
            $propriete->delete();
            $proprieteImages = ProprieteImage::where('propriete_id', $proprieteId)->get();
            if ($proprieteImages->isNotEmpty()) {
                foreach ($proprieteImages as $image) {
                    $image->delete();
                }
            }
            session()->forget('propriete_id');
        }
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
        return view('errors.custom', ['message' => $e->getMessage()]);
    }
}


    public function addPropertyPost(Request $request)
    {
        try {
        if (!session('propriete_id') && session('propriete_id') == null) {
            $property = Propriete::create([
                'user_id' => FacadesAuth::user()->id,
                'type_propriete_id' => 1,
                'deleted' => 0,
            ]);
            session()->put('propriete_id', $property->id,);
        }

        $file = $request->file('file');
        if ($file) {
            $request->validate([
                'file' => 'nullable|file|mimes:jpeg,jpg,png,gif|max:2048',
            ]);
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads', $fileName, 'public');

            $propriete_id = session('propriete_id');
            //dd("jeneregistre img");

            ProprieteImage::create([
                'url' => $filePath,
                'propriete_id' => $propriete_id,
                'deleted' => 0,
            ]);
        }


        if ($request->has('btn_submit')) {
            $propriete_id = session('propriete_id');
            //dd(session('propriete_id'));
            //dd($propriete_id);
            $propriete = Propriete::where('id', $propriete_id)->first();

            $defaultTitre = $propriete->titre;
            $defaultDescription = $propriete->description;
            $defaultStatus = $propriete->status;
            $defaultTypeProprieteId = $propriete->type_propriete_id;
            $defaultPrix = $propriete->prix;
            $defaultSurface = $propriete->surface;
            $defaultPays = $propriete->pays;
            $defaultVille = $propriete->ville;
            $defaultQuartier = $propriete->quartier;
            $defaultNbPiece = $propriete->nbPiece;
            $defaultNbChambre = $propriete->nbChambre;
            $defaultNbToillete = $propriete->nbToillete;
            $defaultNomContact = $propriete->nomContact;
            $defaultPrenomContact = $propriete->prenomContact;
            $defaultEmailContact = $propriete->emailContact;
            $defaultPrenomContact = $propriete->type_propriete_id;
            $defaultTelContact = $propriete->telContact;

            // Ajouter la valeur par défaut au request si le champ n'est pas présent
            $request->merge([

                'titre' => $request->input('titre', $defaultTitre),
                'description' => $request->input('description', $defaultDescription),
                'status' => $request->input('status', $defaultStatus),
                'type_propriete_id' => $request->input('type_propriete_id', $defaultTypeProprieteId),
                'prix' => $request->input('prix', $defaultPrix),
                'surface' => $request->input('surface', $defaultSurface),
                'pays' => $request->input('pays', $defaultPays),
                'ville' => $request->input('ville', $defaultVille),
                'quartier' => $request->input('quartier', $defaultQuartier),
                'nbPiece' => $request->input('nbPiece', $defaultNbPiece),
                'nbChambre' => $request->input('nbChambre', $defaultNbChambre),
                'nbToillete' => $request->input('nbToillete', $defaultNbToillete),
                'nomContact' => $request->input('nomContact', $defaultNomContact),
                'prenomContact' => $request->input('prenomContact', $defaultNbPiece),
                'prenomContact' => $request->input('prenomContact', $defaultPrenomContact),
                'emailContact' => $request->input('emailContact', $defaultEmailContact),
                'telContact' => $request->input('telContact', $defaultTelContact),
            ]);

            $messages = [
                'titre.required' => 'Le titre est obligatoire.',
                'titre.max' => 'Le titre ne doit pas dépasser 255 caractères.',
                'status.required' => 'Le statut est obligatoire.',
                'type_propriete_id.required' => 'Le type de propriété est obligatoire.',
                'type_propriete_id.integer' => 'Le type de propriété doit être un entier.',
                'prix.required' => 'Le prix est obligatoire.',
                'prix.numeric' => 'Le prix doit être un nombre.',
                'pays.required' => 'Le pays est obligatoire.',
                'ville.required' => 'La ville est obligatoire.',
                'quartier.required' => 'Le quartier est obligatoire.',
                'emailContact.email' => 'L\'adresse email doit être valide.',
            ];

            $validated = $request->validate([
                'titre' => 'required|string|max:255',
                'description' => 'nullable|string',
                'status' => 'required|string',
                'type_propriete_id' => 'required|integer',
                'prix' => 'required|numeric',
                'surface' => 'nullable|numeric',
                'pays' => 'required|string',
                'ville' => 'required|string',
                'quartier' => 'required|string',
                'nbPiece' => 'nullable|integer',
                'nbChambre' => 'nullable|integer',
                'nbToillete' => 'nullable|integer',
                'nomContact' => 'nullable|string',
                'prenomContact' => 'nullable|string',
                'emailContact' => 'nullable|email',
                'telContact' => 'nullable|string',
                'caracteristiques' => 'array',
            ], $messages);

            if ($validated) {

                $propriete->user_id = auth()->id(); // Utilisateur connecté
                $propriete->type_propriete_id = $validated['type_propriete_id'];
                $propriete->titre = $validated['titre'];
                $propriete->description = $validated['description'];
                $propriete->status = $validated['status'];
                $propriete->prix = $validated['prix'];
                $propriete->surface = $validated['surface'];
                $propriete->pays = $validated['pays'];
                $propriete->ville = $validated['ville'];
                $propriete->quartier = $validated['quartier'];
                $propriete->nbPiece = $validated['nbPiece'];
                $propriete->nbChambre = $validated['nbChambre'];
                $propriete->nbToillete = $validated['nbToillete'];
                $propriete->nomContact = $validated['nomContact'];
                $propriete->prenomContact = $validated['prenomContact'];
                $propriete->emailContact = $validated['emailContact'];
                $propriete->telContact = $validated['telContact'];
                $propriete->save();

                // Gestion des caractéristiques
                if (isset($validated['caracteristiques'])) {
                    $propriete->caracteristiques()->sync($validated['caracteristiques']);
                }

                // Supprimer la variable de session propriete_id
                session()->forget('propriete_id');

                return redirect()->route('admin.add-property')->with('success', 'Property added successfully');
            } else {

                return redirect()->back()->with('error', 'Veillez Remplir les champs obligatoires');
            }
        }
        return redirect()->route('admin.add-property')->with('success', 'Property added successfully');
    } catch (Exception $e) {
        // Log the exception if needed
        Log::error($e->getMessage());

        // Return a custom error view
        return view('errors.custom', ['message' => $e->getMessage()]);
    }
}
    public function deleteFile(Request $request)
    {
        try {
        $file_id=$request->file_id;
        $file = ProprieteImage::where('proprietaire_id', $file_id);
        if ($file) {
            Storage::delete($file->path);
            $file->delete();
            return response()->json(['success' => true]);
        }
        //dd("ok");
        return response()->json(['success' => false], 404);
    } catch (Exception $e) {
        // Log the exception if needed
        Log::error($e->getMessage());

        // Return a custom error view
        return view('errors.custom', ['message' => $e->getMessage()]);
    }
}

    public function messages()
    {
        try {
        $messages = Message::where('proprietaire_id', FacadesAuth::id())
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('admin/messages', compact('messages'));
    } catch (Exception $e) {
        // Log the exception if needed
        Log::error($e->getMessage());

        // Return a custom error view
        return view('errors.custom', ['message' => $e->getMessage()]);
    }
}


    public function reviews()
    {
        try {
        $reviews = Comment::whereHas('propriete', function ($query) {
            $query->where('user_id', FacadesAuth::id());
        })->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('admin/reviews', compact('reviews'));
    } catch (Exception $e) {
        // Log the exception if needed
        Log::error($e->getMessage());

        // Return a custom error view
        return view('errors.custom', ['message' => $e->getMessage()]);
    }
}

    public function notFound()
    {
        try {
        return view('pages/errors');
    } catch (Exception $e) {
        // Log the exception if needed
        Log::error($e->getMessage());

        // Return a custom error view
        return view('errors.custom', ['message' => $e->getMessage()]);
    }
}



    public function modifProperty()
    {
        try {
        $typeProprietes = TypePropriete::get();
        $caracteristiques = Caracteristique::get();
        return view('admin/modif-property', compact(
            'typeProprietes',
            'caracteristiques'
        ));
    } catch (Exception $e) {
        // Log the exception if needed
        Log::error($e->getMessage());

        // Return a custom error view
        return view('errors.custom', ['message' => $e->getMessage()]);
    }
}



    


}
