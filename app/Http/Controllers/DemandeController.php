<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDemandeRequest;
use App\Http\Requests\UpdateDemandeRequest;
use App\Repositories\DemandeRepository;
use App\Http\Controllers\AppBaseController;
use App\Notifications\DemandeNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Departement;
use App\Models\Niveau_Importance;
use App\Models\Type_Demande;
use App\Models\User;
use App\Models\Contrat;
use App\Models\Projet;
use App\Models\Projet_User;
use Flash;
use Response;

class DemandeController extends AppBaseController
{
    /** @var  DemandeRepository */
    private $demandeRepository;

    public function __construct(DemandeRepository $demandeRepo)
    {
        $this->demandeRepository = $demandeRepo;
    }

    /**
     * Display a listing of the Demande.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $demandes = $this->demandeRepository->all();
        $departements = Departement::all() ;
        $niveau_importances = Niveau_Importance::all() ;
        $type_demandes = Type_Demande::all() ;
        $projets = Projet::all() ;
        $contrats = Contrat::all() ;
        $projet_users = Projet_User::all() ;
        $users = User::all() ;

        return view('demandes.index',compact(['departements', 'niveau_importances', 'type_demandes', 'users', 'projets', 'projet_users', 'contrats']))
            ->with('demandes', $demandes);
    }

    /**
     * Show the form for creating a new Demande.
     *
     * @return Response
     */
    public function create()
    {

        return view('demandes.create');
    }

    /**
     * Store a newly created Demande in storage.
     *
     * @param CreateDemandeRequest $request
     *
     * @return Response
     */
    public function store(CreateDemandeRequest $request)
    {
        $input = $request->all();

        $demande = $this->demandeRepository->create($input);
        $user = Auth::user();
        $user->notify(new DemandeNotification());

        Flash::success('Demande saved successfully.');


        return redirect(route('demandes.index'));
    }

    /**
     * Display the specified Demande.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $demande = $this->demandeRepository->find($id);

        if (empty($demande)) {
            Flash::error('Demande not found');

            return redirect(route('demandes.index'));
        }

        return view('demandes.show')->with('demande', $demande);
    }

    /**
     * Show the form for editing the specified Demande.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        
        $demande = $this->demandeRepository->find($id);

        if (empty($demande)) {
            Flash::error('Demande not found');

            return redirect(route('demandes.index'));
        }

        return view('demandes.edit')->with('demande', $demande);
    }

    /**
     * Update the specified Demande in storage.
     *
     * @param int $id
     * @param UpdateDemandeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDemandeRequest $request)
    {
        $demande = $this->demandeRepository->find($id);

        if (empty($demande)) {
            Flash::error('Demande not found');

            return redirect(route('demandes.index'));
        }

        $demande = $this->demandeRepository->update($request->all(), $id);
        
        $user = Auth::user();
        $user->notify(new DemandeNotification());

        Flash::success('Demande updated successfully.');
        

        return redirect(route('demandes.index'));
    }

    /**
     * Remove the specified Demande from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $demande = $this->demandeRepository->find($id);

        if (empty($demande)) {
            Flash::error('Demande not found');

            return redirect(route('demandes.index'));
        }

        $this->demandeRepository->delete($id);
        $user = Auth::user();
        $user->notify(new DemandeNotification());

        Flash::success('Demande deleted successfully.');

        return redirect(route('demandes.index'));
    }
}
