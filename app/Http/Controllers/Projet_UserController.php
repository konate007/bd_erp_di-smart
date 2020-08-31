<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProjet_UserRequest;
use App\Http\Requests\UpdateProjet_UserRequest;
use App\Repositories\Projet_UserRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Projet;
use App\Models\User;
use Flash;
use Response;

class Projet_UserController extends AppBaseController
{
    /** @var  Projet_UserRepository */
    private $projetUserRepository;

    public function __construct(Projet_UserRepository $projetUserRepo)
    {
        $this->projetUserRepository = $projetUserRepo;
    }

    /**
     * Display a listing of the Projet_User.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $projetUsers = $this->projetUserRepository->all();

        return view('projet_users.index')
            ->with('projetUsers', $projetUsers);
    }

    /**
     * Show the form for creating a new Projet_User.
     *
     * @return Response
     */
    public function create()
    {
        $valuesProjetID= Projet::pluck('id');
        $valuesUserID= User::pluck('id');
        return view('projet_users.create',compact('valuesUserID','valuesProjetID'));
    }

    /**
     * Store a newly created Projet_User in storage.
     *
     * @param CreateProjet_UserRequest $request
     *
     * @return Response
     */
    public function store(CreateProjet_UserRequest $request)
    {
        $input = $request->all();

        $projetUser = $this->projetUserRepository->create($input);

        Flash::success('Projet  User saved successfully.');

        return redirect(route('projetUsers.index'));
    }

    /**
     * Display the specified Projet_User.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $projetUser = $this->projetUserRepository->find($id);

        if (empty($projetUser)) {
            Flash::error('Projet  User not found');

            return redirect(route('projetUsers.index'));
        }

        return view('projet_users.show')->with('projetUser', $projetUser);
    }

    /**
     * Show the form for editing the specified Projet_User.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $projetUser = $this->projetUserRepository->find($id);
        $valuesProjetID= Projet::pluck('id');
        $valuesUserID= User::pluck('id');
        if (empty($projetUser)) {
            Flash::error('Projet  User not found');

            return redirect(route('projetUsers.index'));
        }

        return view('projet_users.edit',compact('valuesUserID','valuesProjetID'))->with('projetUser', $projetUser);
    }

    /**
     * Update the specified Projet_User in storage.
     *
     * @param int $id
     * @param UpdateProjet_UserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProjet_UserRequest $request)
    {
        $projetUser = $this->projetUserRepository->find($id);

        if (empty($projetUser)) {
            Flash::error('Projet  User not found');

            return redirect(route('projetUsers.index'));
        }

        $projetUser = $this->projetUserRepository->update($request->all(), $id);

        Flash::success('Projet  User updated successfully.');

        return redirect(route('projetUsers.index'));
    }

    /**
     * Remove the specified Projet_User from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $projetUser = $this->projetUserRepository->find($id);

        if (empty($projetUser)) {
            Flash::error('Projet  User not found');

            return redirect(route('projetUsers.index'));
        }

        $this->projetUserRepository->delete($id);

        Flash::success('Projet  User deleted successfully.');

        return redirect(route('projetUsers.index'));
    }
}
