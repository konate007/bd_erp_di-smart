<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');

Route::resource('dashboard', 'DashboardController');

Route::resource('roles', 'RoleController');

Route::resource('users', 'UserController');

Route::resource('clients', 'ClientController');

Route::resource('projets', 'ProjetController');

Route::resource('projetUsers', 'Projet_UserController');

Route::resource('projetUsers', 'Projet_UserController');

Route::resource('services', 'ServiceController');

Route::resource('planmaintenances', 'PlanmaintenanceController');

Route::resource('niveauImportances', 'Niveau_ImportanceController');

Route::resource('typeDemandes', 'Type_DemandeController');

Route::resource('demandes', 'DemandeController');

Route::resource('departements', 'DepartementController');

Route::resource('contrats', 'ContratController');