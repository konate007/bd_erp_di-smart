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
            $clientItems = Client::pluck('id','id')->toArray();
            $view->with('clientItems', $clientItems);
        });
        View::composer(['users.fields'], function ($view) {
            $roleItems = Role::pluck('id','id')->toArray();
            $view->with('roleItems', $roleItems);
        });
        View::composer(['projet_users.fields'], function ($view) {
            $userItems = User::pluck('id','id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['projet_users.fields'], function ($view) {
            $projetItems = Projet::pluck('id','id')->toArray();
            $view->with('projetItems', $projetItems);
        });
        View::composer(['planmaintenances.fields'], function ($view) {
            $serviceItems = Service::pluck('id','id')->toArray();
            $view->with('serviceItems', $serviceItems);
        });
        View::composer(['contrats.fields'], function ($view) {
            $projet_userItems = Projet_User::pluck('id','id')->toArray();
            $view->with('projet_userItems', $projet_userItems);
        });
        View::composer(['contrats.fields'], function ($view) {
            $planmaintenanceItems = Planmaintenance::pluck('id','id')->toArray();
            $view->with('planmaintenanceItems', $planmaintenanceItems);
        });

        View::composer(['demandes.fields'], function ($view) {
            $departementItems = Departement::pluck('id','id')->toArray();
            $view->with('departementItems', $departementItems);
        });
        View::composer(['demandes.fields'], function ($view) {
            $projet_userItems = Projet_User::pluck('id','id')->toArray();
            $view->with('projet_userItems', $projet_userItems);
        });
        View::composer(['demandes.fields'], function ($view) {
            $niveau_importanceItems = Niveau_Importance::pluck('id','id')->toArray();
            $view->with('niveau_importanceItems', $niveau_importanceItems);
        });
        View::composer(['demandes.fields'], function ($view) {
            $type_demandeItems = Type_Demande::pluck('id','id')->toArray();
            $view->with('type_demandeItems', $type_demandeItems);
        });
        View::composer(['demandes.fields'], function ($view) {
            $responsableItems = User::pluck('id','id')->toArray();
            $view->with('responsableItems', $responsableItems);
        });
        //
    }
}