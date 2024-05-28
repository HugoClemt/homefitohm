<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{

    /**
     * 
     * @return \Illuminate\Http\Response
     * 
     * Affiche la liste des pages
     */
    public function index () {

        $pages = Page::all();
        return view('admin.page-liste', compact('pages'));
    }

    /**
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     * 
     * Affiche les détails d'une page
     */
    public function show($id) {
        $page = Page::findOrFail($id);
        return view('admin.page-details', compact('page'));
    }    

    /**
     * 
     * @return \Illuminate\Http\Response
     * 
     * Affiche le formulaire de création d'une page
     */
    public function create() {
        return view('admin.page-add');
    }

    /**
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * 
     * Enregistre une nouvelle page
     */
    public function store() {
        $validatedData = $request->validate([
            'title' => 'required|string|min:5|max:255',
            'image_url' => 'nullable|url',
            'content' => 'nullable|string|min:5|max:1000'
        ]);

        Page::create($validatedData);

        return redirect()->route('listerPage')->with('success', 'Nouvelle page créée avec succès!');
    }

    /**
     * 
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     * 
     * Met à jour une page
     */
    public function edit($id) {
        $page = Page::find($id);
        if (!$page) {
            abort(404);
        }
        return view('admin.page-update', ['page' => $page]);
    }

    /**
     * 
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     * 
     * Met à jour une page
     */
    public function delete($id) {
        $page = Page::find($id);
        if (!$page) {
            abort(404);
        }
        $page->delete();
        return redirect()->route('listerPage')->with('success', 'Page supprimée avec succès!');
    }
    
}
