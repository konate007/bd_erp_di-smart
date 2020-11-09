<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProjetRequest;
use App\Http\Requests\UpdateProjetRequest;
use App\Repositories\ProjetRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\User;
use App\Models\Service;
use Flash;
use Response;

class ProjetController extends AppBaseController
{
    /** @var  ProjetRepository */
    private $projetRepository;

    public function __construct(ProjetRepository $projetRepo)
    {
        $this->projetRepository = $projetRepo;
    }

    /**
     * Display a listing of the Projet.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $projets = $this->projetRepository->all();
        $clients = Client::all() ;
        $users = User::all() ;
        $services = Service::all() ;

        return view('projets.index', compact(['clients','services','users']))
            ->with('projets', $projets);
    }

    /**
     * Show the form for creating a new Projet.
     *
     * @return Response
     */
    public function create()
    {
        return view('projets.create');
    }

    /**
     * Store a newly created Projet in storage.
     *
     * @param CreateProjetRequest $request
     *
     * @return Response
     */
    public function store(CreateProjetRequest $request)
    {
        $input = $request->all();
        $users = User::all() ;

        $projet = $this->projetRepository->create($input);

        Flash::success('Projet saved successfully.');

        return redirect(route('projets.index',compact(['users'])));
    }

    /**
     * Display the specified Projet.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $projet = $this->projetRepository->find($id);

        if (empty($projet)) {
            Flash::error('Projet not found');

            return redirect(route('projets.index'));
        }
        $users = User::all() ;

        return view('projets.show',compact(['users']))->with('projet', $projet);
    }

    /**
     * Show the form for editing the specified Projet.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $projet = $this->projetRepository->find($id);
        $users = User::all() ;

        if (empty($projet)) {
            Flash::error('Projet not found');

            return redirect(route('projets.index'));
        }

        return view('projets.edit',compact(['users']))->with('projet', $projet);
    }

    /**
     * Update the specified Projet in storage.
     *
     * @param int $id
     * @param UpdateProjetRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProjetRequest $request)
    {
        $projet = $this->projetRepository->find($id);

        if (empty($projet)) {
            Flash::error('Projet not found');

            return redirect(route('projets.index'));
        }

        $projet = $this->projetRepository->update($request->all(), $id);

        Flash::success('Projet updated successfully.');

        return redirect(route('projets.index'));
    }

    /**
     * Remove the specified Projet from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $projet = $this->projetRepository->find($id);

        if (empty($projet)) {
            Flash::error('Projet not found');

            return redirect(route('projets.index'));
        }

        $this->projetRepository->delete($id);

        Flash::success('Projet deleted successfully.');

        return redirect(route('projets.index'));
    }
}
