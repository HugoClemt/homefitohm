<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * 
     * @return \Illuminate\Http\Response
     * 
     * Affiche le formulaire de connexion
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/tableau-bord');
        }

        return back()->withErrors(['email' => 'Mauvais identifiants.']);
    }

    /**
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * 
     * Enregistre un nouvel utilisateur
     */
    public function register(Request $request)
    {

        $credentials = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $user = User::create($credentials);

        Auth::login($user);

        return redirect()->intended('/tableau-bord');
    }

    /**
     * 
     * @return \Illuminate\Http\Response
     * 
     * Déconnecte l'utilisateur
     */
    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
