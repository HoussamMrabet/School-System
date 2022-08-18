<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Demande;

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

    // Insert demande into database
    public function store(Request $request)
    {
        // form fill validation
        $request->validate([
            'fname' => 'required|max:24',
            'lname' => 'required|max:24',
            'birthday' => 'required',
        ]);

        // Fill Demande Row and save it
        $demande = new Demande();

        $demande->fname = strip_tags($request->input('fname'));
        $demande->lname = strip_tags($request->input('lname'));
        $demande->birthday = strip_tags($request->input('birthday'));
        $demande->type = strip_tags($request->input('type'));
        $demande->quantity = strip_tags($request->input('quantity'));

        $demande->save();

        return redirect()->route('index');
    }


    // Display Demande Status
    public function show($id)
    {
        // form fill validation
        $request->validate([
            'fname' => 'required|max:24',
            'lname' => 'required|max:24',
            'birthday' => 'required',
        ]);

        return redirect()->route('demande.checkDemande', [
            'demande' => Demande::findOrFail($id),
        ]);
        
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
