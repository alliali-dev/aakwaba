<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    // formulaire de connexion users
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    // connexion users
    public function store(LoginRequest $request)
    {

        $request->authenticate();

        $request->session()->regenerate();

        // $statut = $request->user()->statut; //recupere le statut de l'utilisateur connecte

        // redirection apres authentification a travers le statut
        // if (!empty($statut)) {
        if ($request) {
            return redirect()->route('dashboard');
        }

        // Commercial
        // return redirect()->route('commercial');
        // return redirect()->route('dashb');
        // } elseif ($statut == 1) {
        // administrateur
        // return redirect()->route('boss');
        // } else {

        // si le statut est inconnu, il retourne sur la page d'acceuil
        // return redirect()->route('home');
        // }

        // intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    // deconnexion users
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}