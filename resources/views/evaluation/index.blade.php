@extends('layouts.structure')

@section('content')
<div class="container mt-4">
    <h1>Liste des évaluations</h1>
    <a href="{{ route('evaluations.create') }}" class="btn btn-primary mb-3">Ajouter Évaluation</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titre</th>
                <th>Date d'évaluation</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach($evaluations as $evaluation)
                <tr>
                    <td>{{ $evaluation->id }}</td>
                    <td>{{ $evaluation->Titre }}</td>
                    <td>{{ $evaluation->DateEvaluation }}</td>
                    <td>{{ $evaluation->TypeEvaluation }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $evaluations->links() }}
</div>
@endsection
