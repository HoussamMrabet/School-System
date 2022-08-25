<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demande;
use Illuminate\Support\Facades\DB;

class VisitorController extends Controller
{
    // Home Page
    public function index()
    {
        return view('index');
    }

    // Create Demande Page
    public function create()
    {
        return view('demande.createDemande');
    }

    // Check Demande Treatement
    public function check(){
        return view('demande.checkDemande');
    }

    public function etat(Request $request){
        // form fill validation
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'fnameAr' => 'required',
            'lnameAr' => 'required',
            'birthday' => 'required',
            'phone' => 'nullable|regex:/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im',
        ]);

        $demande = DB::select('select * from demandes where fname = ? AND lname = ? AND phone = ?', [$request->fname, $request->lname, $request->phone]);

        return view('demande.etatDemande', [
            'demande' => $demande,
        ]);
    }

    // Insert demande into database
    public function store(Request $request)
    {
        // form fill validation
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'fnameAr' => 'required',
            'lnameAr' => 'required',
            'birthday' => 'required',
            'phone' => 'nullable|regex:/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im',
        ]);

        // Fill Demande Row and save it
        $demande = new Demande();

        $demande->fname = strip_tags($request->input('fname'));
        $demande->lname = strip_tags($request->input('lname'));
        $demande->fname_ar = strip_tags($request->input('fnameAr'));
        $demande->lname_ar = strip_tags($request->input('lnameAr'));
        $demande->cne = strip_tags($request->input('cne'));
        $demande->phone = strip_tags($request->input('phone'));
        $demande->birthday = strip_tags($request->input('birthday'));
        $demande->niveau = strip_tags($request->input('niveau'));
        $demande->date_arrete = strip_tags($request->input('dateArret'));
        $demande->attestation = $request->has('attestation')? 1:0;
        $demande->attestation_ar = $request->has('attestationAr')? 1:0;
        $demande->releve = $request->has('releve')? 1:0;
        $demande->releve_ar = $request->has('releveAr')? 1:0;
        $demande->quantity = strip_tags($request->input('quantity'));

        $demande->save();

        return redirect()->route('demande.index');
    }


    // Display Demande Status
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    // Delete Demande row
    public function destroy($id)
    {
        $demande = Demande::findOrFail($id);

        $demande->delete();

        return redirect()->route('index');
    }
}
