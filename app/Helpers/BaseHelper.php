<?php

namespace App\Helpers;
use Illuminate\Support\Facades\Auth as FacadesAuth;

use App\Models\User;

class BaseHelper
{
    public static function getUser()
    {
        
        $user = FacadesAuth::user();

        return $user ? $user : 'Unknown User';
    }

    // Ajoutez d'autres fonctions selon vos besoins
}
