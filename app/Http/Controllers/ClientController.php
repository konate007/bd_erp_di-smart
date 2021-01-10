<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Repositories\ClientRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\User;

use Flash;
use Response;

class ClientController extends AppBaseController
{
    /** @var  ClientRepository */
    private $clientRepository;

    public function __construct(ClientRepository $clientRepo)
    {
        $this->clientRepository = $clientRepo;
    }

    /**
     * Display a listing of the Client.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $clients = $this->clientRepository->all();
        $users = User::all() ;

        return view('clients.index', compact(['users'])) 
            ->with('clients', $clients);
    }

    /**
     * Show the form for creating a new Client.
     *
     * @return Response
     */
    public function create()
    {
        $users = User::all() ;
        return view('clients.create',compact(['users']));
    }

    /**
     * Store a newly created Client in storage.
     *
     * @param CreateClientRequest $request
     *
     * @return Response
     */
    public function store(CreateClientRequest $request)
    {
        $input = $request->all();

        $client = $this->clientRepository->create($input);
        $users = User::all() ;

        Flash::success('Client ajouté avec succès.');

        return redirect(route('clients.index',compact(['users'])));
    }

    /**
     * Display the specified Client.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $client = $this->clientRepository->find($id);
        $users = User::all() ;

        if (empty($client)) {
            Flash::error('Le client n existe pas');

            return redirect(route('clients.index'));
        }

        return view('clients.show',compact(['users']))->with('client', $client);
    }

    /**
     * Show the form for editing the specified Client.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $client = $this->clientRepository->find($id);
        $users = User::all() ;

        if (empty($client)) {
            Flash::error('Le client n existe pas');

            return redirect(route('clients.index'));
        }

        return view('clients.edit',compact(['users']))->with('client', $client);
    }

    /**
     * Update the specified Client in storage.
     *
     * @param int $id
     * @param UpdateClientRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateClientRequest $request)
    {
        $client = $this->clientRepository->find($id);

        if (empty($client)) {
            Flash::error('Le client n existe pas');

            return redirect(route('clients.index'));
        }

        $client = $this->clientRepository->update($request->all(), $id);

        Flash::success('Client mis à jour avec succès.');

        return redirect(route('clients.index'));
    }

    /**
     * Remove the specified Client from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $client = $this->clientRepository->find($id);

        if (empty($client)) {
            Flash::error('Le client n existe pas');

            return redirect(route('clients.index'));
        }

        $this->clientRepository->delete($id);

        Flash::success('Le client a été supprrimé avec succès.');

        return redirect(route('clients.index'));
    }
}
