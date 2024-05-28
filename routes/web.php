<?php

use Illuminate\Support\Facades\Route;
/* Route Public */

Route::get('/', function () {
    return view('/public/soon-page');
})->name('soon');

Route::get('/accueil', [App\Http\Controllers\OptionController::class, 'showPublicHome'])->name('home');


Route::get('/presentation', function () {
    return view('/public/presentation-page');
})->name('presentation');

Route::get('/calendrier', function () {
    return view('/public/calendrier-page');
})->name('calendrier');


Route::get('/contact', [App\Http\Controllers\OptionController::class, 'showPublicContact'])->name('contact');

Route::get('/coach', [App\Http\Controllers\CoachController::class, 'showPublicCoach'])->name('coach');

Route::get('/actualite', [App\Http\Controllers\ActualiteController::class, 'showPublicActualite'])->name('actualite');

Route::get('/actualite/{id}', [App\Http\Controllers\ActualiteController::class, 'showPublicActualiteDetails'])->name('actualite-details');

Route::get('/activite', [App\Http\Controllers\ActiviteController::class, 'showPublicActivite'])->name('activite');

Route::get('/mentions-legales', function () {
    return view('/public/mentions-legales-page');
})->name('mentionsLegales');

Route::get('/politique-confidentialite', function () {
    return view('/public/politique-confidentialite-page');
})->name('politiqueConfidentialite');

/* Route Administration */

Route::get('/login', function () {
    return view('/admin/login');
})->name('login');

Route::POST('/loginPost', [App\Http\Controllers\AuthController::class, 'login'])->name('loginPost');

Route::get('/register', function () {
    return view('/admin/register');
})->name('register');

Route::post('/registerPost', [App\Http\Controllers\AuthController::class, 'register'])->name('registerPost');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/tableau-bord', function () {
        return view('/admin/admin-page');
    })->name('tableauBord');

    /**
     * Route to list pages.
     * 
     * @route GET /tableau-bord/liste-page
     * @name listerPage
     */
    Route::get('/tableau-bord/liste-page', [App\Http\Controllers\PageController::class, 'index'])->name('listerPage');

    /**
     * Route to add a new page.
     * 
     * @route GET /tableau-bord/ajouter-page
     * @name ajouterPage
     */
    Route::get('/tableau-bord/ajouter-page', [App\Http\Controllers\PageController::class, 'create'])->name('ajouterPage');

    /**
     * Route to store a new page.
     * 
     * @route POST /tableau-bord/ajouter-page
     * @name ajouterPagePost
     */
    Route::post('/tableau-bord/ajouter-page', [App\Http\Controllers\PageController::class, 'store'])->name('ajouterPagePost');

    /**
     * Route to view a specific page.
     * 
     * @route GET /tableau-bord/page/{id}
     * @name voirPage
     * @param int $id The ID of the page to view.
     */
    Route::get('/tableau-bord/page/{id}', [App\Http\Controllers\PageController::class, 'show'])->name('voirPage');

    /**
     * Route to edit a specific page.
     * 
     * @route GET /tableau-bord/page/{id}/modifier
     * @name modifierPage
     * @param int $id The ID of the page to edit.
     */
    Route::get('/tableau-bord/page/{id}/modifier', [App\Http\Controllers\PageController::class, 'edit'])->name('modifierPage');

    /**
     * Route for uploading an image.
     *
     * @route POST /upload-image
     * @controller ImageController@upload
     * @name upload.image
     */
    Route::post('/tableau-bord/page/updatePicture', [App\Http\Controllers\ImageController::class, 'upload'])->name('updatePicture');

    /**
     * Route to delete a specific page.
     * 
     * @route DELETE /tableau-bord/liste-page
     * @name supprimerPage
     * @param int $id The ID of the page to delete.
     */

    Route::delete('/tableau-bord/page/{id}/delete', [App\Http\Controllers\PageController::class, 'delete'])->name('supprimerPage');


    Route::get('/tableau-bord/mediatheque', function () {
        return view('/admin/mediatheque');
    })->name('médiathèque');

    /**
     * Route to list pages.
     * 
     * @route GET /tableau-bord/liste-actualite
     * @name listeractualite
     */
    Route::get('/tableau-bord/liste-actualite', [App\Http\Controllers\ActualiteController::class, 'index'])->name('listerActualite');

    /**
     * Route to add a new actualite.
     * 
     * @route GET /tableau-bord/ajouter-actualite
     * @name ajouterActualite
     */
    Route::get('/tableau-bord/ajouter-actualite', [App\Http\Controllers\ActualiteController::class, 'create'])->name('ajouterActualite');

    /**
     * Route to store a new actualite.
     * 
     * @route POST /tableau-bord/ajouter-actualite
     * @name ajouterActualitePost
     */
    Route::post('/tableau-bord/ajouter-actualite', [App\Http\Controllers\ActualiteController::class, 'store'])->name('ajouterActualitePost');

    /**
     * Route to view a specific actualite.
     * 
     * @route GET /tableau-bord/actualite/{id}
     * @name voirActualite
     * @param int $id The ID of the actualite to view.
     */
    Route::get('/tableau-bord/actualite/{id}', [App\Http\Controllers\ActualiteController::class, 'show'])->name('voirActualite');

    /**
     * Route to edit a specific actualite.
     * 
     * @route GET /tableau-bord/actualite/{id}/modifier
     * @name modifierActualite
     * @param int $id The ID of the actualite to edit.
     */
    Route::get('/tableau-bord/actualite/{id}/modifier', [App\Http\Controllers\ActualiteController::class, 'edit'])->name('modifierActualite');

    /**
     * Route to update a specific actualite.
     * 
     * @route UPDATE /tableau-bord/liste-actualite
     * @name updateActualite
     * @param int $id The ID of the actualite to update.
     */
    Route::put('/tableau-bord/actualite/{id}/update', [App\Http\Controllers\ActualiteController::class, 'update'])->name('updateActualite');

    /**
     * Route to delete a specific actualite.
     * 
     * @route DELETE /tableau-bord/liste-actualite
     * @name supprimerActualite
     * @param int $id The ID of the actualite to delete.
     */
    Route::delete('/tableau-bord/actualite/{id}/delete', [App\Http\Controllers\ActualiteController::class, 'delete'])->name('supprimerActualite');

    /**
     * Route to list pages.
     * 
     * @route GET /tableau-bord/liste-coach
     * @name listerCoach
     */
    Route::get('/tableau-bord/liste-coach', [App\Http\Controllers\CoachController::class, 'index'])->name('listerCoach');

    /**
     * Route to add a new coach.
     * 
     * @route GET /tableau-bord/ajouter-coach
     * @name ajouterCoach
     */
    Route::get('/tableau-bord/ajouter-coach', [App\Http\Controllers\CoachController::class, 'create'])->name('ajouterCoach');

    /**
     * Route to store a new coach.
     * 
     * @route POST /tableau-bord/ajouter-coach
     * @name ajouterCoachPost
     */
    Route::post('/tableau-bord/ajouter-coach', [App\Http\Controllers\CoachController::class, 'store'])->name('ajouterCoachPost');

    /**
     * Route to view a specific coach.
     * 
     * @route GET /tableau-bord/coach/{id}
     * @name voirCoach
     * @param int $id The ID of the coach to view.
     */
    Route::get('/tableau-bord/coach/{id}', [App\Http\Controllers\CoachController::class, 'show'])->name('voirCoach');

    /**
     * Route to edit a specific coach.
     * 
     * @route GET /tableau-bord/coach/{id}/modifier
     * @name modifierCoach
     * @param int $id The ID of the coach to edit.
     */
    Route::get('/tableau-bord/coach/{id}/modifier', [App\Http\Controllers\CoachController::class, 'edit'])->name('modifierCoach');

    /**
     * Route to update a specific coach.
     * 
     * @route UPDATE /tableau-bord/liste-coach
     * @name updateCoach
     * @param int $id The ID of the coach to update.
     */
    Route::put('/tableau-bord/coach/{id}/update', [App\Http\Controllers\CoachController::class, 'update'])->name('updateCoach');

    /**
     * Route to delete a specific coach.
     * 
     * @route DELETE /tableau-bord/liste-coach
     * @name supprimerCoach
     * @param int $id The ID of the coach to delete.
     */
    Route::delete('/tableau-bord/coach/{id}/delete', [App\Http\Controllers\CoachController::class, 'delete'])->name('supprimerCoach');

    /**
     * Route to list pages.
     * 
     * @route GET /tableau-bord/liste-activite
     * @name listerActivite
     */
    Route::get('/tableau-bord/liste-activite', [App\Http\Controllers\ActiviteController::class, 'index'])->name('listerActivite');

    /**
     * Route to add a new activite.
     * 
     * @route GET /tableau-bord/ajouter-activite
     * @name ajouterActivite
     */
    Route::get('/tableau-bord/ajouter-activite', [App\Http\Controllers\ActiviteController::class, 'create'])->name('ajouterActivite');

    /**
     * Route to store a new activite.
     * 
     * @route POST /tableau-bord/ajouter-activite
     * @name ajouterActivitePost
     */
    Route::post('/tableau-bord/ajouter-activite', [App\Http\Controllers\ActiviteController::class, 'store'])->name('ajouterActivitePost');

    /**
     * Route to view a specific activite.
     * 
     * @route GET /tableau-bord/activite/{id}
     * @name voirActivite
     * @param int $id The ID of the activite to view.
     */
    Route::get('/tableau-bord/activite/{id}', [App\Http\Controllers\ActiviteController::class, 'show'])->name('voirActivite');

    /**
     * Route to edit a specific activite.
     * 
     * @route GET /tableau-bord/activite/{id}/modifier
     * @name modifierActivite
     * @param int $id The ID of the activite to edit.
     */
    Route::get('/tableau-bord/activite/{id}/modifier', [App\Http\Controllers\ActiviteController::class, 'edit'])->name('modifierActivite');

    /**
     * Route to update a specific activite.
     * 
     * @route UPDATE /tableau-bord/liste-activite
     * @name updateActivite
     * @param int $id The ID of the activite to update.
     */
    Route::put('/tableau-bord/activite/{id}/update', [App\Http\Controllers\ActiviteController::class, 'update'])->name('updateActivite');

    /**
     * Route to delete a specific activite.
     * 
     * @route DELETE /tableau-bord/liste-activite
     * @name supprimerActivite
     * @param int $id The ID of the activite to delete.
     */
    Route::delete('/tableau-bord/activite/{id}/delete', [App\Http\Controllers\ActiviteController::class, 'delete'])->name('supprimerActivite');

    /**
     * Route to information  option.
     * 
     * @route GET /tableau-bord/options
     * @name option
     */
    Route::get('/tableau-bord/options', [App\Http\Controllers\OptionController::class, 'index'])->name('option');

    /**
     * Route to store or update information option.
     * 
     * @route POST /tableau-bord/options
     * @name optionPost
     */
    Route::post('/tableau-bord/options', [App\Http\Controllers\OptionController::class, 'storeOrUpdate'])->name('optionPost');

    Route::get('/tableau-bord/compte', function () {
        return view('/admin/compte');
    })->name('compte');

});

require __DIR__.'/auth.php';
