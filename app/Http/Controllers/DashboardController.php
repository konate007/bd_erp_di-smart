<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
Use App\Models\Type_Demande;
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
        return view('dashboard.index',compact(['demandeOuverte','demandeEnSuspens']));
    }

}
