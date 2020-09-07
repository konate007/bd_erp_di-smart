<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePlanmaintenanceRequest;
use App\Http\Requests\UpdatePlanmaintenanceRequest;
use App\Repositories\PlanmaintenanceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Service;
use Flash;
use Response;

class PlanmaintenanceController extends AppBaseController
{
    /** @var  PlanmaintenanceRepository */
    private $planmaintenanceRepository;

    public function __construct(PlanmaintenanceRepository $planmaintenanceRepo)
    {
        $this->planmaintenanceRepository = $planmaintenanceRepo;
    }

    /**
     * Display a listing of the Planmaintenance.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $planmaintenances = $this->planmaintenanceRepository->all();

        return view('planmaintenances.index')
            ->with('planmaintenances', $planmaintenances);
    }

    /**
     * Show the form for creating a new Planmaintenance.
     *
     * @return Response
     */
    public function create()
    {
        $servicesIDs= Service::pluck('id');
        return view('planmaintenances.create',compact('servicesIDs'));
    }

    /**
     * Store a newly created Planmaintenance in storage.
     *
     * @param CreatePlanmaintenanceRequest $request
     *
     * @return Response
     */
    public function store(CreatePlanmaintenanceRequest $request)
    {
        $input = $request->all();

        $planmaintenance = $this->planmaintenanceRepository->create($input);

        Flash::success('Planmaintenance saved successfully.');

        return redirect(route('planmaintenances.index'));
    }

    /**
     * Display the specified Planmaintenance.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $planmaintenance = $this->planmaintenanceRepository->find($id);

        if (empty($planmaintenance)) {
            Flash::error('Planmaintenance not found');

            return redirect(route('planmaintenances.index'));
        }

        return view('planmaintenances.show')->with('planmaintenance', $planmaintenance);
    }

    /**
     * Show the form for editing the specified Planmaintenance.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $servicesIDs= Service::pluck('id');
        $planmaintenance = $this->planmaintenanceRepository->find($id);

        if (empty($planmaintenance)) {
            Flash::error('Planmaintenance not found');

            return redirect(route('planmaintenances.index'));
        }

        return view('planmaintenances.edit',compact('servicesIDs'))->with('planmaintenance', $planmaintenance);
    }

    /**
     * Update the specified Planmaintenance in storage.
     *
     * @param int $id
     * @param UpdatePlanmaintenanceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePlanmaintenanceRequest $request)
    {
        $planmaintenance = $this->planmaintenanceRepository->find($id);

        if (empty($planmaintenance)) {
            Flash::error('Planmaintenance not found');

            return redirect(route('planmaintenances.index'));
        }

        $planmaintenance = $this->planmaintenanceRepository->update($request->all(), $id);

        Flash::success('Planmaintenance updated successfully.');

        return redirect(route('planmaintenances.index'));
    }

    /**
     * Remove the specified Planmaintenance from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $planmaintenance = $this->planmaintenanceRepository->find($id);

        if (empty($planmaintenance)) {
            Flash::error('Planmaintenance not found');

            return redirect(route('planmaintenances.index'));
        }

        $this->planmaintenanceRepository->delete($id);

        Flash::success('Planmaintenance deleted successfully.');

        return redirect(route('planmaintenances.index'));
    }
}
