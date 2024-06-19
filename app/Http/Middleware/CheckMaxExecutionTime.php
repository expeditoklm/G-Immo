<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Database\QueryException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;

class CheckMaxExecutionTime
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Définir le temps d'exécution maximal en secondes
        ini_set('max_execution_time', 60);

        try {
            return $next($request);
        } catch (\Exception $e) {
            // Logguer l'exception
            Log::error('Exception occurred', ['exception' => $e]);

            // Vérifier le type d'exception
            if ($e->getMessage() === 'Maximum execution time of 60 seconds exceeded') {
                return response()->view('errors/404', [
                    'message' => 'The server took too long to respond. Please try again later.'
                ], 500);
            } elseif ($e instanceof QueryException) {
                return response()->view('errors/404', [
                    'message' => 'Database connection error. Please check your database connection and try again.'
                ], 500);
            } elseif ($e->getMessage() === 'Maximum execution time of 60 seconds exceeded') {
                return response()->view('errors/404', [
                    'message' => 'The page you are looking for could not be found. Please check the URL and try again.'
                ], 404);
            } elseif ($e instanceof MethodNotAllowedHttpException) {
                return response()->view('errors/404', [
                    'message' => 'The method is not allowed for the requested URL. Please check the request method and try again.'
                ], 405);
            } elseif ($e instanceof ValidationException) {
                return response()->view('errors/404', [
                    'message' => 'There was a validation error. Please check the input and try again.'
                ], 422);
            } elseif ($e instanceof Exception) {
                return response()->view('errors/404', [
                    'message' => 'There was a validation error. Please check the input and try again.'
                ], 422);
            }
            else {
                return response()->view('errors/404', [
                    'message' => 'An unexpected error occurred. Please try again  again later.'
                ], 500);
            }
        }
    }
}
