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
    public function handle(Request $request, Closure $next)
    {
        if (!$request->session()->has('email')) {
            return redirect()->route('enter.email')->with([
                'target_url'=> $request->url(),
                'id'=> $request->id,]);
        }

        return $next($request);
    }  
}
