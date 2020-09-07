<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateType_DemandeRequest;
use App\Http\Requests\UpdateType_DemandeRequest;
use App\Repositories\Type_DemandeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Type_DemandeController extends AppBaseController
{
    /** @var  Type_DemandeRepository */
    private $typeDemandeRepository;

    public function __construct(Type_DemandeRepository $typeDemandeRepo)
    {
        $this->typeDemandeRepository = $typeDemandeRepo;
    }

    /**
     * Display a listing of the Type_Demande.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $typeDemandes = $this->typeDemandeRepository->all();

        return view('type__demandes.index')
            ->with('typeDemandes', $typeDemandes);
    }

    /**
     * Show the form for creating a new Type_Demande.
     *
     * @return Response
     */
    public function create()
    {
        return view('type__demandes.create');
    }

    /**
     * Store a newly created Type_Demande in storage.
     *
     * @param CreateType_DemandeRequest $request
     *
     * @return Response
     */
    public function store(CreateType_DemandeRequest $request)
    {
        $input = $request->all();

        $typeDemande = $this->typeDemandeRepository->create($input);

        Flash::success('Type  Demande saved successfully.');

        return redirect(route('typeDemandes.index'));
    }

    /**
     * Display the specified Type_Demande.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $typeDemande = $this->typeDemandeRepository->find($id);

        if (empty($typeDemande)) {
            Flash::error('Type  Demande not found');

            return redirect(route('typeDemandes.index'));
        }

        return view('type__demandes.show')->with('typeDemande', $typeDemande);
    }

    /**
     * Show the form for editing the specified Type_Demande.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $typeDemande = $this->typeDemandeRepository->find($id);

        if (empty($typeDemande)) {
            Flash::error('Type  Demande not found');

            return redirect(route('typeDemandes.index'));
        }

        return view('type__demandes.edit')->with('typeDemande', $typeDemande);
    }

    /**
     * Update the specified Type_Demande in storage.
     *
     * @param int $id
     * @param UpdateType_DemandeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateType_DemandeRequest $request)
    {
        $typeDemande = $this->typeDemandeRepository->find($id);

        if (empty($typeDemande)) {
            Flash::error('Type  Demande not found');

            return redirect(route('typeDemandes.index'));
        }

        $typeDemande = $this->typeDemandeRepository->update($request->all(), $id);

        Flash::success('Type  Demande updated successfully.');

        return redirect(route('typeDemandes.index'));
    }

    /**
     * Remove the specified Type_Demande from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $typeDemande = $this->typeDemandeRepository->find($id);

        if (empty($typeDemande)) {
            Flash::error('Type  Demande not found');

            return redirect(route('typeDemandes.index'));
        }

        $this->typeDemandeRepository->delete($id);

        Flash::success('Type  Demande deleted successfully.');

        return redirect(route('typeDemandes.index'));
    }
}
