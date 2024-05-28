<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Option;

class OptionController extends Controller
{
    /**
     * 
     * @return \Illuminate\Http\Response
     * 
     * Affiche les options
     */
    public function index()
    {
        $option = Option::first();
        return view('admin.option', compact('option'));
    }

    /**
     * 
     * @return \Illuminate\Http\Response
     * 
     * Affiche la page d'accueil publique
     */
    public function showPublicHome()
    {
        $option = Option::first();
        return view('public.home-page', compact('option'));
    }

    /**
     * 
     * @return \Illuminate\Http\Response
     * 
     * Affiche la page de contact publique
     */
    public function showPublicContact()
    {
        $option = Option::first();
        return view('public.contact-page', compact('option'));
    }
    
    /**
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * 
     * Enregistre ou met à jour les options
     */
    public function storeOrUpdate(Request $request)
    {
        $request->validate([
            'prix' => 'required|numeric',
            'phone' => 'required|string|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email' => 'required|email',
            'adresse' => 'required|string',
            'ville' => 'required|string',
            'code_postal' => 'required|numeric',
            'lundi_horaire' => 'required|string',
            'mardi_horaire' => 'required|string',
            'mercredi_horaire' => 'required|string',
            'jeudi_horaire' => 'required|string',
            'vendredi_horaire' => 'required|string',
            'samedi_horaire' => 'required|string',
            'dimanche_horaire' => 'required|string'
        ]);

        $option = Option::first();

        if ($option) {
            $option->update($request->all());
        } else {
            Option::create($request->all());
        }

        return redirect()->route('option')->with('success', 'Les options ont été mises à jour avec succès.');
    }
}
