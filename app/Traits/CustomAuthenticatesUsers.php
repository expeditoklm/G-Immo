<?php
// app/Traits/CustomAuthenticatesUsers.php
namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

trait CustomAuthenticatesUsers
{
    use \Illuminate\Foundation\Auth\RedirectsUsers, \Illuminate\Foundation\Auth\ThrottlesLogins;

    // Copiez le contenu de votre trait modifié ici

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Valide les données de la requête de connexion
        $this->validateLogin($request);

        // Vérifie si trop de tentatives de connexion ont été faites
        if (method_exists($this, 'hasTooManyLoginAttempts') && $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            // Définit un message de session pour le verrouillage de compte
            session(['message' => 'Trop de tentatives de connexion. Veuillez réessayer plus tard.', 'message_type' => 'danger']);

            return $this->sendLockoutResponse($request);
        }

        // Tente de connecter l'utilisateur
        if ($this->attemptLogin($request)) {
            if ($request->hasSession()) {
                $request->session()->put('auth.password_confirmed_at', time());
            }
            $request->session()->put('email', Auth::user()->email);

            // Définit un message de session pour la connexion réussie
            session(['message' => 'Connexion réussie !', 'message_type' => 'success']);

            return $this->sendLoginResponse($request);
        }

        // Incrémente le nombre de tentatives de connexion échouées
        $this->incrementLoginAttempts($request);

        // Définit un message de session pour l'échec de la connexion
        session(['message' => 'Identifiant ou mot de passe incorrect.', 'message_type' => 'danger']);

        return $this->sendFailedLoginResponse($request);
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
    }

    protected function attemptLogin(Request $request)
    {
        // Check if the user is blocked
        $user = \App\Models\User::where($this->username(), $request->input($this->username()))->first();
        if ($user && $user->activer == 0) {
            if ($user && $user->bloquer == 0) {
                throw ValidationException::withMessages([
                    $this->username() => ['Votre compte n\'est pas encore actif.'],
                ]);
            } else {
                throw ValidationException::withMessages([
                    $this->username() => ['Vous avez été désactivé(e).'],
                ]);
            }
        }

        return $this->guard()->attempt(
            $this->credentials($request),
            $request->boolean('remember')
        );
    }

    protected function credentials(Request $request)
    {
        return $request->only($this->username(), 'password');
    }

    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);

        if ($response = $this->authenticated($request, $this->guard()->user())) {
            return $response;
        }

        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect()->intended($this->redirectPath());
    }

    protected function authenticated(Request $request, $user)
    {
        //
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            $this->username() => [trans('auth.failed')],
        ]);
    }

    public function username()
    {
        return 'email';
    }

    public function logout(Request $request)
    {
        // Get the email from the session
        $email = $request->session()->get('email');

        // Logout the user
        $this->guard()->logout();

        // Invalidate the session but keep the email
        $request->session()->flush(); // Clear all session data
        $request->session()->put('email', $email); // Restore the email

        // Regenerate the session token
        $request->session()->regenerateToken();

        // Handle any post-logout actions
        if ($response = $this->loggedOut($request)) {
            return $response;
        }

        // Return the appropriate response
        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect('/acceuil');
    }

    protected function loggedOut(Request $request)
    {
        //
    }

    protected function guard()
    {
        return Auth::guard();
    }
}
