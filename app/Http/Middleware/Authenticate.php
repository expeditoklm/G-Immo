<?php

namespace App\Http\Middleware;

use App\Models\ProprieteImage;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo($request)
    {
        
        if (! $request->expectsJson()) {
            // Enregistrer l'URL précédente dans la session
            $request->session()->put('url.intended', $request->fullUrl());
            
            return route('pages.account');
        }
    }
}
