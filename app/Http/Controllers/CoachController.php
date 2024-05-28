<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coach;

class CoachController extends Controller
{

    /**
     * 
     * @return \Illuminate\Http\Response
     * 
     * Affiche la liste des coachs
     */
    public function index() {
        $coachs = Coach::all();
        return view('admin.coach-liste', compact('coachs'));
    }

    /**
     * 
     * @return \Illuminate\Http\Response
     * 
     * Affiche le formulaire de création d'un coach
     */
    public function create() {
        return view('admin.coach-add');
    }

    /**
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * 
     * Enregistre un nouveau coach
     */
    public function store(Request $request) {

        /* dd($request->all()); */

        $validatedData = $request->validate([
            'prenom' => 'required|string|min:5|max:255',
            'domaine' => 'required|string|min:5|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg',
            'description' => 'string|min:5|max:1000'
        ]);

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('public/images', $imageName);
            $imagePath = "storage/app/" . $imagePath;
            $validatedData['image_name'] = $imageName;
        }

        Coach::create($validatedData);

        return redirect()->route('listerCoach')->with('success', 'Nouveau coach créé avec succès!');
    }

    /**
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     * 
     * Affiche les détails d'un coach
     */
    public function show($id) {
        $coach = Coach::findOrFail($id);
        return view('admin.coach-details', compact('coach'));
    }

    /**
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     * 
     * Affiche le formulaire de modification d'un coach
     */
    public function edit($id) {
        $coach = Coach::find($id);
        if (!$coach) {
            abort(404);
        }
        return view('admin.coach-update', ['coach' => $coach]);
    }


    /**
     * 
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     * 
     * Met à jour un coach
     */
    public function update(Request $request, $id) {
        $coach = Coach::find($id);
        if (!$coach) {
            abort(404);
        }

        //dd($request->all());

        $validatedData = $request->validate([
            'prenom' => 'required|string|min:5|max:255',
            'domaine' => 'required|string|min:5|max:255',
            'image' => 'image|mimes:jpeg,png,jpg',
            'description' => 'string|min:5|max:1000'
        ]);

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('public/images', $imageName);
            $imagePath = "storage/app/" . $imagePath;
            $validatedData['image_name'] = $imageName;
        }

        $coach->update($validatedData);

        return redirect()->route('listerCoach')->with('success', 'Coach modifié avec succès!');
    }

    /**
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     * 
     * Supprime un coach
     */
    public function delete($id) {
        $coach = Coach::find($id);
        if (!$coach) {
            abort(404);
        }
        $coach->delete();
        return redirect()->route('listerCoach')->with('success', 'Coach supprimé avec succès!');
    }

    /**
     * 
     * @return \Illuminate\Http\Response
     * 
     * Affiche la page d'accueil publique
     */
    public function showPublicCoach() {
        $coachs = Coach::all();
        return view('public.equipement-page', compact('coachs'));
    }
}
