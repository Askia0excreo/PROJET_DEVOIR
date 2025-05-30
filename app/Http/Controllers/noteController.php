<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Evaluation;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    // Affiche la liste des notes
    public function index()
    {
        $notes = Note::with('evaluation')->paginate(10); // Récupère les notes avec leurs évaluations
        return view('note.index', compact('notes'));
    }

    // Affiche le formulaire pour ajouter une note
    public function create()
    {
        $evaluations = Evaluation::all(); // Récupère toutes les évaluations
        return view('note.enregistrer_notes', compact('evaluations'));
    }

    // Enregistre une nouvelle note
    public function store(Request $request)
    {
        $request->validate([
            'evaluationid' => 'required|exists:evaluations,id', // Validation pour s'assurer que l'évaluation existe
        ]);

        Note::create([
            'evaluationid' => $request->evaluationid,
        ]);

        return redirect()->route('note.index')->with('success', 'Note ajoutée avec succès.');
    }
}
