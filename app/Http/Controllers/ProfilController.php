<?php

namespace App\Http\Controllers;

use Flash;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::where('id', Auth::user()->id)->get();

        return view('profils.index', compact('users'));
    }

    public function showeditprofil(Request $request)
    {

        return view('profils.editerprofil');
    }

    public function editprofil (Request $request)
    {
        $user =  Auth::user() ;
        //$users = User::pluck('nom');

        return view('profils.editerprofil');
    }
    public function updateProfil (Request $request)
    {
        DB::table('users')->where('id', Auth::user()->id)->update(
            [
                'prenom' => $request->prenom,
                'nom' => $request->nom ,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'fonction' => $request->fonction,
            ]
        );

        Flash::success('User updated successfully.');

        return view('profils.editerprofil');
    }
}
