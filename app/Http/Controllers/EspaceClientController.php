<?php

namespace App\Http\Controllers;

use Flash;
use App\Models\Contrat;
use App\Models\Demande;
use App\Models\Departement;
use App\Models\Niveau_Importance;
use App\Models\Projet;
use App\Models\Projet_User;
use App\Models\Type_Demande;
use App\Models\User;
use App\Models\Client;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EspaceclientController extends Controller
{
    public function index (Request $request) {
        return view('espaceclients.index');
    }


    public function registration(Request $request){

        $tabUserIDs = User::pluck('id') ;
        $tabProjetIDs = Projet::pluck('id') ;
        $tabDepartementIDs = Departement::pluck('id') ;
        $tabTypeDemandeIDs = Type_Demande::pluck('id') ;
        $statuts = array('OPEN','INPRO','CLOSE','STAND') ;
        $tabNiveauImportanceIDs = Niveau_Importance::pluck('id') ;
        $objet = $request->objet ;
        $message = $request->message ;
        $date_fermeture = $request->date_fermeture ;
        $projet_user_id = $tabProjetIDs[$request->projet_user_id] ;
        $responsable = $tabUserIDs[$request->responsable] ;
        $departement_id = $tabDepartementIDs[$request->departement_id] ;
        $type_demande_id = $tabTypeDemandeIDs[$request->type_demande_id] ;
        $niveau_importance_id = $tabNiveauImportanceIDs[$request->niveau_importance_id] ;
        $statut = $statuts[$request->statut] ;

        DB::table('demandes')->insert(
            [
                'objet' => $request->objet,
                'departement_id' => $tabDepartementIDs[$request->departement_id] ,
                'projet_user_id' => $tabProjetIDs[$request->projet_user_id],
                'message' => $request->message,
                'niveau_importance_id' => $tabNiveauImportanceIDs[$request->niveau_importance_id],
                'type_demande_id' => $tabTypeDemandeIDs[$request->type_demande_id],
                'statut' => $statuts[$request->statut],
                'responsable'  => $tabUserIDs[$request->responsable],
                'date_fermeture' => $request->date_fermeture

            ]
        );

        Flash::success('Demande saved successfully.');

        return redirect(route('espaceclients.index')); 
    }

    public function demandeForm (Request $request)
    {
        $user = User::where('id', auth()->user()->id)->first();
        $equipeprojets = Projet_User::where('user_id', $user->id)->get();

        $projetItems = Projet::pluck('nom_projet');
        $niveau_importanceItems = Niveau_Importance::pluck('niveau');
        $type_demandeItems = Type_Demande::pluck('type');
        $responsableItems = User::pluck('nom');
        $contratItems = Contrat::pluck('statut');
        $departementItems = Departement::pluck('nom_departement');

        return view('espaceclients.demande_form', compact(['user', 'projetItems',
         'niveau_importanceItems', 'type_demandeItems',
            'type_demandeItems', 'responsableItems', 'contratItems', 'equipeprojets', 'departementItems']));
    }


    public function listeDemande (Request $request) {

        $projet_users = Projet_User::where('user_id', auth()->user()->id)->first();
        $demandes = Demande::where('projet_user_id', $projet_users->id)->get();


        $departements = Departement::all();
        $niveau_importances = Niveau_Importance::all();
        $type_demandes = Type_Demande::all();
        $projets = Projet::all();
        $contrats = Contrat::all();
        $users = User::all();

        return view('espaceclients.liste_demandes',compact(['departements', 
        'niveau_importances', 'type_demandes', 'users', 'projets', 'projet_users', 'contrats']))
            ->with('demandes', $demandes);
    }

    public function listeProjet (Request $request) {

        $user = User::where('id', auth()->user()->id)->first();
        $projet_users = Projet_User::where('user_id', $user->id)->get();
        $projet_users = Projet_User::where('user_id', $user->id)->get();

        $projets = Projet::all();
        $clients = Client::all();
        $services = Service::all();

        return view('espaceclients.liste_projets',compact(['clients', 'services']))
            ->with('projets', $projets);
    }

    public function listeEquipeProjet (Request $request) {

        $user = User::where('id', auth()->user()->id)->first();
        $equipeprojets = Projet_User::where('user_id', $user->id)->get();

        $projets = Projet::all();
        $users = User::all();

        return view('espaceclients.equipe_projet',compact(['user', 'projets', 'users']))
            ->with('equipeprojets', $equipeprojets);
    }

}
