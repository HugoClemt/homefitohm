<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activite;

class ActiviteController extends Controller
{
    /**
     * 
     * @return \Illuminate\Http\Response
     * 
     * Affiche la liste des activités
     */
    public function index()
    {
        $activites = Activite::all();
        return view('admin.activite-liste', compact('activites'));
    }

    /**
     * 
     * @return \Illuminate\Http\Response
     * 
     * Affiche le formulaire de création d'une activité
     */
    public function create()
    {
        return view('admin.activite-add');
    }

    /**
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * 
     * Enregistre une nouvelle activité
     */
    public function store(Request $request)
    {

        // dd($request->all());

        $validatedData = $request->validate([
            'title' => 'required|string|min:5|max:255',
            'content' => 'required|string|min:5|max:1000',
            'image_name' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        if ($request->hasFile('image_name')) {
            $image = $request->file('image_name');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('public/images', $imageName);
            $imagePath = "storage/app/" . $imagePath;
            $validatedData['image_name'] = $imageName;
        }

        Activite::create($validatedData);

        return redirect()->route('listerActivite')->with('success', 'Nouvelle activité créée avec succès!');
    }

    /**
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     * 
     * Affiche les détails d'une activité
     */
    public function show($id)
    {
        $activite = Activite::findOrFail($id);
        return view('admin.activite-details', compact('activite'));
    }

    /**
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     * 
     * Affiche le formulaire de modification d'une activité
     */
    public function edit($id)
    {
        $activite = Activite::find($id);
        if (!$activite) {
            abort(404);
        }
        return view('admin.activite-update', ['activite' => $activite]);
    }

    /**
     * 
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     * 
     * Met à jour une activité
     */
    public function update(Request $request, $id)
    {
        $activite = Activite::find($id);
        if (!$activite) {
            abort(404);
        }

        $validatedData = $request->validate([
            'title' => 'required|string|min:5|max:255',
            'content' => 'required|string|min:5|max:1000',
            'image_name' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        if ($request->hasFile('image_name')) {
            $image = $request->file('image_name');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('public/images', $imageName);
            $imagePath = "storage/app/" . $imagePath;
            $validatedData['image_name'] = $imageName;
        }

        $activite->update($validatedData);

        return redirect()->route('listerActivite')->with('success', 'Activité mise à jour avec succès!');
    }

    /**
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     * 
     * Supprime une activité
     */
    public function delete($id)
    {
        $activite = Activite::find($id);
        if (!$activite) {
            abort(404);
        }
        $activite->delete();
        return redirect()->route('listerActivite')->with('success', 'Activité supprimée avec succès!');
    }

    /**
     * 
     * @return \Illuminate\Http\Response
     * 
     * Affiche la liste des activités publiques
     */
    public function showPublicActivite()
    {
        $activites = Activite::all();
        return view('public.activite-page', compact('activites'));
    }

}
