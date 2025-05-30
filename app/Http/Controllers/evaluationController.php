<?php

namespace App\Http\Controllers;

use App\Models\Evaluation;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    // Affiche la liste des évaluations
    public function index()
    {
        $evaluations = Evaluation::paginate(10);
        return view('evaluation.index', compact('evaluations'));
    }

    // Affiche le formulaire d'ajout
    public function create()
    {
        return view('evaluation.create_evaluation');
    }

    // Enregistre une nouvelle évaluation
    public function store(Request $request)
    {
        $request->validate([
            'Titre' => 'required|string|max:45',
            'DateEvaluation' => 'required|date',
            'TypeEvaluation' => 'required|string',
        ]);

        Evaluation::create([
            'Titre' => $request->Titre,
            'DateEvaluation' => $request->DateEvaluation,
            'TypeEvaluation' => $request->TypeEvaluation,
        ]);

        return redirect()->route('evaluation.index')->with('success', 'Évaluation ajoutée avec succès.');
    }
}
