<?php

namespace App\Providers;
use App\Models\Client;
use App\Models\Role;
use App\Models\User;
use App\Models\Projet;
use App\Models\Service;
use App\Models\Projet_User;
use App\Models\Planmaintenance;
use App\Models\Departement;
use App\Models\Niveau_Importance;
use App\Models\Type_Demande;
use App\Models\Contrat;


use Illuminate\Support\ServiceProvider;
use View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['projets.fields'], function ($view) {
            $clientItems = Client::pluck('nom_client','id')->toArray();
            $view->with('clientItems', $clientItems);
        });
        View::composer(['projets.fields'], function ($view) {
            $responsableItems = User::where('role_id',1)->pluck('nom','id')->toArray();
            $view->with('responsableItems', $responsableItems);
        });
        View::composer(['projets.fields'], function ($view) {
            $serviceItems = Service::pluck('nom_service','id')->toArray();
            $view->with('serviceItems', $serviceItems);
        });
        View::composer(['users.fields'], function ($view) {
            $roleItems = Role::pluck('nom_role','id')->toArray();
            $view->with('roleItems', $roleItems);
        });
        View::composer(['clients.fields'], function ($view) {
            $userItems = User::where('role_id',2)->pluck('nom','id')->toArray();
            $view->with('userItems', $userItems);
        });
        /*
        View::composer(['projet_users.fields'], function ($view) {
            $projetItems = Projet::pluck('nom_projet','id')->toArray();
            $view->with('projetItems', $projetItems);
        });
        */
        View::composer(['planmaintenances.fields'], function ($view) {
            $serviceItems = Service::pluck('nom_service','id')->toArray();
            $view->with('serviceItems', $serviceItems);
        });
        View::composer(['contrats.fields'], function ($view) {
            //$projet_userItems = Projet::pluck('user_id','id')->toArray();
            $projetItems = Projet::pluck('nom_projet','id')->toArray();
            $view->with('projetItems', $projetItems);
        });
        View::composer(['contrats.fields'], function ($view) {
            $planmaintenanceItems = Planmaintenance::pluck('titre','id')->toArray();
            $view->with('planmaintenanceItems', $planmaintenanceItems);
        });

        View::composer(['demandes.fields'], function ($view) {
            $departementItems = Departement::pluck('nom_departement','id')->toArray();
            $view->with('departementItems', $departementItems);
        });
        View::composer(['demandes.fields'], function ($view) {
            //$projet_userItems = Projet_User::pluck('projet_id','id')->toArray();
            $projetItems = Projet::pluck('nom_projet','id')->toArray();
            $view->with('projetItems', $projetItems);
        });
        View::composer(['demandes.fields'], function ($view) {
            $niveau_importanceItems = Niveau_Importance::pluck('niveau','id')->toArray();
            $view->with('niveau_importanceItems', $niveau_importanceItems);
        });
        View::composer(['demandes.fields'], function ($view) {
            $type_demandeItems = Type_Demande::pluck('type','id')->toArray();
            $view->with('type_demandeItems', $type_demandeItems);
        });
        /*
        View::composer(['demandes.fields'], function ($view) {
            $responsableItems = User::pluck('nom','id')->toArray();
            $view->with('responsableItems', $responsableItems);
        });
        */

        /*
        View::composer(['demandes.fields'], function ($view) {
            $contratItems = Contrat::pluck('statut','id')->toArray();
            $view->with('contratItems', $contratItems);
        });
        */
    }
}