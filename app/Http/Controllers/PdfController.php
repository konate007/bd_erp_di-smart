<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projet;
use App\Models\Contrat;
use App\Models\Planmaintenance;


use PDF ;

class PdfController extends Controller
{
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function pdfview($id)
    {
        //$client = Client::where('user_id', Auth::user()->id)->first();
        $contrat = Contrat::find($id) ;
        $projets = Projet::all() ;
        $planmaintenances = Planmaintenance::all() ;

        //view()->share(['projet']);
        //$pdfView = DB::select('SELECT * FROM users');

        $pdf = PDF::loadView('/pdf_view',compact(['contrat','projets','planmaintenances'])) 
        ->setPaper('a4','landscape');
        
        return  $pdf->download('pdf_view.pdf') ;
   }
}
