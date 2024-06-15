<?php

namespace App\Http\Middleware;

use App\Models\Propriete;
use App\Models\ProprieteImage;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAndClearSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->is('admin.add-property')) {
            // Vérifiez si la session contient le marqueur 'refreshed'
            if (session()->has('refreshed')) {
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
                session()->forget('refreshed');
            } else {
                session()->put('refreshed',true);
            }
        }
        return $next($request);
    }
}
