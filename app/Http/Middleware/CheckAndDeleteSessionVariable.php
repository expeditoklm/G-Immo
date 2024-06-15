<?php

namespace App\Http\Middleware;

use App\Models\Propriete;
use App\Models\ProprieteImage;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAndDeleteSessionVariable
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (session()->has('propriete_id')) {
            $proprieteId = session('propriete_id');

            // Suppression de la base de données

            $propriete = Propriete::where('id', $proprieteId)->first();
            $propriete->delete();
            
            
            $proprieteImages = ProprieteImage::where('propriete_id', $proprieteId)->get();
            if ($proprieteImages->isNotEmpty()) {
                foreach ($proprieteImages as $image) {
                    $image->delete();
                }
            }

            // Supprimer la variable de session
            session()->forget('propriete_id');
        }
        return $next($request);
    }
}
