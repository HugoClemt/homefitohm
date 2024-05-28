<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actualite;
use Carbon\Carbon;


class ActualiteController extends Controller
{

    /**
     * 
     * @return \Illuminate\Http\Response
     * 
     * Affiche la liste des actualités
     */
    public function index() {
        $actualites = Actualite::all();
        return view('admin.actualite-liste', compact('actualites'));
    }

    /**
     * 
     * @return \Illuminate\Http\Response
     * 
     * Affiche le formulaire de création d'une actualité
     */
    public function create() {
        return view('admin.actualite-add');
    }

    /**
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * 
     * Enregistre une nouvelle actualité
     */
    public function store(Request $request) {

        /* dd($request->all()); */

        $validatedData = $request->validate([
            'title' => 'required|string|min:5|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg',
            'content' => 'string|min:5|max:1000',
            'date' => 'required|date'
        ]);

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('public/images', $imageName);
            $imagePath = "storage/app/" . $imagePath;
            $validatedData['image_name'] = $imageName;
        }

        Actualite::create($validatedData);

        return redirect()->route('listerActualite')->with('success', 'Nouvelle actualité créée avec succès!');
    }

    /**
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     * 
     * Affiche les détails d'une actualité
     */
    public function show($id) {
        $actualite = Actualite::findOrFail($id);
        return view('admin.actualite-details', compact('actualite'));
    }

    /**
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     * 
     * Affiche le formulaire de modification d'une actualité
     * 
     */
    public function edit($id) {
        $actualite = Actualite::find($id);
        if (!$actualite) {
            abort(404);
        }
        return view('admin.actualite-update', ['actualite' => $actualite]);
    }

    /**
     * 
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     * 
     * Met à jour une actualité
     */
    public function update(Request $request, $id) {

        //dd($request->all());
        $actualite = Actualite::find($id);
        if (!$actualite) {
            abort(404);
        }

        $validatedData = $request->validate([
            'title' => 'required|string|min:5|max:255',
            'image_name' => 'required|image|mimes:jpeg,png,jpg',
            'content' => 'string|min:5|max:1000',
            'date' => 'required|date'
        ]);

        if ($request->hasFile('image_name')) {
            $image = $request->file('image_name');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('public/images', $imageName);
            $imagePath = "storage/app/" . $imagePath;
            $validatedData['image_name'] = $imageName;
        }

        $actualite->update($validatedData);

        return redirect()->route('listerActualite')->with('success', 'Actualité modifiée avec succès!');
    }

    /**
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     * 
     * Supprime une actualité
     */
    public function delete($id) {
        $actualite = Actualite::find($id);
        if (!$actualite) {
            abort(404);
        }
        $actualite->delete();
        return redirect()->route('listerActualite')->with('success', 'Actualité supprimée avec succès!');
    }

    /**
     * 
     * @return \Illuminate\Http\Response
     * 
     * Affiche la page d'accueil publique
     */
    public function showPublicActualite() {

        $actualites = Actualite::all();

        $actualites = $actualites->sortByDesc('date');

        $actualites = $actualites->map(function($actualite) {
            $actualite->formatted_date = Carbon::parse($actualite->date)->locale('fr')->isoFormat('D MMMM YYYY');
            return $actualite;
          });
        return view('public.actualite-page', compact('actualites'));
    }

    /**
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     * 
     * Affiche les détails d'une actualité
     */
    public function showPublicActualiteDetails($id) {
        $actualite = Actualite::findOrFail($id);
        $actualite->formatted_date = Carbon::parse($actualite->date)->locale('fr')->isoFormat('D MMMM YYYY');
        return view('public.actualite-details', compact('actualite'));
    }
}
