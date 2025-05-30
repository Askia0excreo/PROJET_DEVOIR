@extends('layouts.structure')

@section('content')
<div class="container mt-4">
    <h1>Liste des notes</h1>
    <a href="{{ route('note.create') }}" class="btn btn-primary mb-3">Ajouter Note</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Évaluation</th>
                <th>Date d'évaluation</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($notes as $note)
                <tr>
                    <td>{{ $note->id }}</td>
                    <td>{{ $note->evaluation->Titre }}</td> <!-- Affiche le titre de l'évaluation -->
                    <td>{{ $note->evaluation->DateEvaluation }}</td>
                    <td>
                        <!-- Ajouter des actions ici si nécessaire -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $notes->links() }} <!-- Pagination -->
</div>
@endsection
