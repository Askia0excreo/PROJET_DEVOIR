<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class etudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $etudiants = Etudiant::paginate(10);

    return view('etudiant.index', compact('etudiants'));
    }

    /**
     * Show the form for creating a new resource.
     */
 

// Affiche le formulaire de création
public function create()
{
    return view('etudiant.add_etudiant');
}

// Enregistre un nouvel étudiant
public function store(Request $request)
{
    // Validation des champs
    $request->validate([
        'Nom' => 'required|string|max:45',
        'Prenom' => 'required|string|max:45',
        'DateNaissance' => 'required|date',
    ]);

    // Création de l'étudiant
    Etudiant::create([
        'Nom' => $request->Nom,
        'Prenom' => $request->Prenom,
        'DateNaissance' => $request->DateNaissance,
    ]);

    // Redirection avec message de succès
    return redirect()->route('etudiant.index')->with('success', 'Étudiant ajouté avec succès.');
}


    /**
     * Display the specified resource.
     */
    
    /**
     * Show the form for editing the specified resource.
     */
   

// Affiche le formulaire d'édition
public function edit($id)
{
    $etudiant = Etudiant::findOrFail($id);
    return view('etudiant.Edit_etudiant', compact('etudiant'));
}

// Met à jour l'étudiant
public function update(Request $request, $id)
{
    $request->validate([
        'Nom' => 'required|string|max:45',
        'Prenom' => 'required|string|max:45',
        'DateNaissance' => 'required|date',
    ]);

    $etudiant = Etudiant::findOrFail($id);
    $etudiant->update([
        'Nom' => $request->Nom,
        'Prenom' => $request->Prenom,
        'DateNaissance' => $request->DateNaissance,
    ]);

    return redirect()->route('etudiant.index')->with('success', 'Étudiant modifié avec succès.');
}

// Supprime l'étudiant
public function destroy($id)
{
    $etudiant = Etudiant::findOrFail($id);
    $etudiant->delete();

    return redirect()->route('etudiant.index')->with('success', 'Étudiant supprimé.');
}


    
}
