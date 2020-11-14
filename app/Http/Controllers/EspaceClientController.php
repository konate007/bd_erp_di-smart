<?php

namespace App\Http\Controllers;

use Flash;
use PDF;
use Illuminate\Support\Facades\Auth;
use App\Models\Contrat;
use App\Models\Demande;
use App\Models\Departement;
use App\Models\Planmaintenance;
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


    public function listeDemande (Request $request)
    {
        
        $client = Client::where('user_id', Auth::user()->id)->first();
        $projet = Projet::where('client_id', $client->id)->first();
        $demandes = Demande::where('projet_id', $projet->id)->paginate(1);
        //$demandes = Demande::paginate(2) ;

        $departements = Departement::all();
        $niveau_importances = Niveau_Importance::all();
        $type_demandes = Type_Demande::all();
        $clients = Client::all();
        $projets = Projet::all() ;

        return view('espaceclients.liste_demandes',compact(['departements', 
        'niveau_importances', 'type_demandes', 'clients', 'projets']))
            ->with('demandes', $demandes);
    }

    public function listeProjet (Request $request)
    {
        $client = Client::where('user_id', Auth::user()->id)->first() ;
        $projets = Projet::where('client_id', $client->id)->get() ;
        //$projets = Projet::all() ;
        return view('espaceclients.liste_projets', compact(['projets']));
    }

    public function listeContrat (Request $request)
    {

            $client = Client::where('user_id', Auth::user()->id)->first() ;
            $projet = Projet::where('client_id', $client->id)->first() ;
            $contrats = Contrat::where('projet_id', $projet->id)->get();
            $projets = Projet::all() ;
            $planmaintenances = Planmaintenance::all() ;

            return view('espaceclients.liste_contrats', compact(['contrats','projets','planmaintenances']));
        
    }


    
}
