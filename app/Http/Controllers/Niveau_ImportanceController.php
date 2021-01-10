<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNiveau_ImportanceRequest;
use App\Http\Requests\UpdateNiveau_ImportanceRequest;
use App\Repositories\Niveau_ImportanceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Niveau_ImportanceController extends AppBaseController
{
    /** @var  Niveau_ImportanceRepository */
    private $niveauImportanceRepository;

    public function __construct(Niveau_ImportanceRepository $niveauImportanceRepo)
    {
        $this->niveauImportanceRepository = $niveauImportanceRepo;
    }

    /**
     * Display a listing of the Niveau_Importance.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $niveauImportances = $this->niveauImportanceRepository->all();

        return view('niveau__importances.index')
            ->with('niveauImportances', $niveauImportances);
    }

    /**
     * Show the form for creating a new Niveau_Importance.
     *
     * @return Response
     */
    public function create()
    {
        return view('niveau__importances.create');
    }

    /**
     * Store a newly created Niveau_Importance in storage.
     *
     * @param CreateNiveau_ImportanceRequest $request
     *
     * @return Response
     */
    public function store(CreateNiveau_ImportanceRequest $request)
    {
        $input = $request->all();

        $niveauImportance = $this->niveauImportanceRepository->create($input);

        Flash::success('Niveau d importance ajouté avec succès.');

        return redirect(route('niveauImportances.index'));
    }

    /**
     * Display the specified Niveau_Importance.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $niveauImportance = $this->niveauImportanceRepository->find($id);

        if (empty($niveauImportance)) {
            Flash::error('Le niveau  d importance n existe pas');

            return redirect(route('niveauImportances.index'));
        }

        return view('niveau__importances.show')->with('niveauImportance', $niveauImportance);
    }

    /**
     * Show the form for editing the specified Niveau_Importance.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $niveauImportance = $this->niveauImportanceRepository->find($id);

        if (empty($niveauImportance)) {
            Flash::error('Le niveau  d importance n existe pas');

            return redirect(route('niveauImportances.index'));
        }

        return view('niveau__importances.edit')->with('niveauImportance', $niveauImportance);
    }

    /**
     * Update the specified Niveau_Importance in storage.
     *
     * @param int $id
     * @param UpdateNiveau_ImportanceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateNiveau_ImportanceRequest $request)
    {
        $niveauImportance = $this->niveauImportanceRepository->find($id);

        if (empty($niveauImportance)) {
            Flash::error('Le niveau d importance n existe pas');

            return redirect(route('niveauImportances.index'));
        }

        $niveauImportance = $this->niveauImportanceRepository->update($request->all(), $id);

        Flash::success('Niveau d importance mis à jour avec succès.');

        return redirect(route('niveauImportances.index'));
    }

    /**
     * Remove the specified Niveau_Importance from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $niveauImportance = $this->niveauImportanceRepository->find($id);

        if (empty($niveauImportance)) {
            Flash::error('Le niveau d importance n existe pas');

            return redirect(route('niveauImportances.index'));
        }

        $this->niveauImportanceRepository->delete($id);

        Flash::success('Niveau d importance supprimé avec succès.');

        return redirect(route('niveauImportances.index'));
    }
}
