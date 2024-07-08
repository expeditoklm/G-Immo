<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        // Définir les règles de validation
        $rules = [
            'nom_prenom' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|min:8|confirmed',
            'website' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'profile_img' => 'nullable|string|max:255',
            'telephone' => 'nullable|integer',
            'pays' => 'nullable|string|max:255',
            'ville' => 'nullable|string|max:255',
            'role' => 'nullable|string|in:client,agent,admin',
        ];

        // Valider les données du formulaire
        $validator = Validator::make($request->all(), $rules);

        // Si la validation échoue, rediriger avec les erreurs
        if ($validator->fails()) {
            return redirect()->back()
                             ->with('error', $validator->errors()->all())
                             ->withInput();
        }
        // Créer l'utilisateur si la validation réussit
        $user = User::create([
            'nom_prenom' => $request->nom_prenom,
            'email' => $request->email,
            'sexe' => $request->sexe,
            'password' => Hash::make($request->password),
            'website' => $request->website,
            'description' => $request->description,
            'profile_img' => $request->profile_img,
            'telephone' => $request->telephone,
            'pays' => $request->pays,
            'ville' => $request->ville,
            'role' => $request->role ?? 'agent', // Assigner le rôle par défaut si applicable
            'deleted' => 0,
            'bloquer' => 0,
            'activer' => 1,

        ]);

        // Vérifier si l'utilisateur a été créé avec succès
        if ($user) {
            return redirect()->back()->with('success', 'Votre compte a été créé avec succès. Veuillez vous connecter pour continuer.');
        } else {
            return redirect()->back()->with('error', 'Inscription échouée.');
        }
    }
}