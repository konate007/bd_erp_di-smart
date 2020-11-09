<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Departement;
use App\Models\Niveau_Importance;
use App\Models\Type_Demande;
use App\Models\User;
use App\Models\Contrat;
use App\Models\Projet;
use App\Models\Projet_User;
use App\Models\Demande;




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

Route::any('/search',function(Request $request){
    $q = $request->input ('q');
    $departements = Departement::all() ;
    $niveau_importances = Niveau_Importance::all() ;
    $type_demandes = Type_Demande::all() ;
    $projets = Projet::all() ;
    $contrats = Contrat::all() ;
    $projet_users = Projet_User::all() ;
    $users = User::all() ;
    $status = array('OPEN','INPRO','CLOSE','STAND');
    $demande = Demande::where('objet','LIKE','%'.$q.'%')->get();
    if(count($demande) > 0)
        return view('/search')->withDetails($demande)->withQuery($q)->with(compact('departements',
        'niveau_importances','type_demandes','projets','users','status'));
    else return view ('/search')->withMessage('No Details found. Try to search again !')->withQuery($q);
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['verify' => true]);

//Espace client
Route::get('liste_demandes', 'EspaceClientController@listeDemande')->name('liste_demandes');
Route::get('liste_contrats', 'EspaceClientController@listeContrat')->name('liste_contrats');
Route::get('liste_projets', 'EspaceClientController@listeProjet')->name('liste_projets');
Route::get('demande_form', 'EspaceClientController@demandeForm')->name('demande_form');
Route::any('soumission', 'EspaceClientController@registration')->name('soumission');


// Le Profil
Route::get('profil', 'ProfilController@index')->name('profil');
Route::get('editerprofil', 'ProfilController@editprofil')->name('editerprofil');
Route::post('updateprofil', 'ProfilController@updateProfil')->name('updateprofil');


Route::resource('espaceclients', 'EspaceClientController');
Route::resource('profils', 'ProfilController');



Route::get('/home', 'HomeController@index')->middleware('verified')->name('home');

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