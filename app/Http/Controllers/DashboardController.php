<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
Use App\Models\Type_Demande;
Use App\Models\Demande;
Use App\Models\Projet;
use Flash;
use Response;

class DashboardController extends AppBaseController
{
    public function __construct(){}

    /**
     * Display a listing of the Role.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $demandeOuverte=Type_Demande::whereType('Ouverte')->count();
        $demandeEnSuspens=Type_Demande::whereType('En suspens')->count();
        $demandes = Demande::all() ;
        $projets = Projet::all() ;
        
        $tab = array() ;
        $tabIDs = array() ;
        $tableau = array() ;
        $tableauNom = array() ;
        $i=0 ;

        foreach($demandes as $demande)
        {
            if(!in_array($demande->projet_user_id, $tableau)){

                $tab[$i] = $this->compteur($demande->projet_user_id) ;
                $tableau[$i] = $demande->projet_user_id ;
                foreach($projets as $projet){
                    if($projet->id == $demande->projet_user_id){
                        $tableauNom[$i] = $projet->nom_projet ;
                    }
                }
                $i ++ ;
            }
        }

        return view('dashboard.index', compact(['demandeOuverte',
        'demandeEnSuspens','demandes','projets','tab','tableau','tableauNom']));
    }

    public function compteur($ind)
    {
        $demandes = Demande::all() ;
        $nombreDeFois = 0 ;

        foreach($demandes as $demande)
        {
           if($ind == $demande->projet_user_id)
           {
              $nombreDeFois = $nombreDeFois + 1 ;
           }
        }

        return $nombreDeFois ;
    }

    public static function Hello()
    {
        echo " Hello " ;
    }
}
