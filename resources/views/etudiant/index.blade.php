@extends('layouts.structure')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <h1>Liste des étudiants</h1>

            <!-- Bouton pour ajouter un étudiant -->
            <a href="{{ route('etudiant.create') }}" class="btn btn-success mb-3">Ajouter un étudiant</a>

            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Date de naissance</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($etudiants as $etudiant)
                        <tr>
                            <td>{{ $etudiant->id }}</td>
                            <td>{{ $etudiant->Nom }}</td>
                            <td>{{ $etudiant->Prenom }}</td>
                            <td>{{ $etudiant->DateNaissance }}</td>
                            <td>
                                <a href="{{ route('etudiant.edit', $etudiant->id) }}" class="btn btn-warning">Modifier</a>
                                <form action="{{ route('etudiant.delete', $etudiant->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">🗑 Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Pagination -->
            {{ $etudiants->links() }}
        </div>
    </div>
</div>
@endsection
