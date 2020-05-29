<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')
    ->name('home');

Auth::routes();

Route::resource('beneficiaires', 'BeneficiaireController');

Route::get('/beneficiaires/projets/{beneficiaire}', 'BeneficiaireController@createProjet')
    ->name('beneficiaires.create.projets');

Route::post('/beneficiaires/projets', 'BeneficiaireController@storeProjet')
    ->name('beneficiaires.store.projets');

Route::get('/beneficiaires/parcours/{beneficiaire}', 'BeneficiaireController@createParcours')
    ->name('beneficiaires.create.parcours');

Route::post('/beneficiaires/parcours', 'BeneficiaireController@storeParcours')
    ->name('beneficiaires.store.parcours');

Route::resource('conseillers', 'ConseillerController');

Route::resource('referents', 'ReferentController');

Route::resource('prescripteurs', 'PrescripteurController');

Route::resource('projets', 'ProjetController');

Route::resource('parcours', 'ParcoursController');

Route::resource('prestations', 'PrestationController')
    ->except(['create']);

Route::get('/prestations/{parcours}/create', 'PrestationController@create')
    ->name('prestations.create.parcours');

Route::get('/prestations/modal/{prestation}', 'PrestationController@manage')
    ->name('prestations.manage');

Route::get('/modals/{model}/{action}/{id}', 'Modalcontroller@show')
    ->name('modals.show');

Route::resource('rdvs', 'RdvController')
    ->except(['create']);

Route::get('/rdv/{prestation}/create', 'RdvController@create')
    ->name('rdvs.create.prestations');

/*
Route::get('/beneficiaires', 'BeneficiaireController@index')
    ->name('beneficiaire.index');

Route::get('/beneficiaire/{id}', 'BeneficiaireController@show')
    ->name('beneficiaire.show');

Route::get('/beneficiaire/create', 'BeneficiaireController@create')
    ->name('beneficiaire.create');

Route::get('/beneficiaire/edit', 'BeneficiaireController@edit')
    ->name('beneficiaire.edit');

*/

/*
 *
 * Route::post('/beneficiaire', 'BeneficiaireController@store')
    ->name('beneficiaire.store');

Route::delete('/beneficiaire', 'BeneficiaireController@destroy')
    ->name('beneficiaire.destroy');
*/
// Route::get('{any}', 'VeltrixController@index');

