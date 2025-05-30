@extends('layouts.structure')
@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>Ajouter un étudiant</h2>
            <!-- Affiche les erreurs -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!-- Formulaire d'ajout -->
            <form action="{{ route('etudiant.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="Nom" class="form-label">Nom</label>
                    <input type="text" name="Nom" class="form-control" value="{{ old('Nom') }}" required>
                </div>

                <div class="mb-3">
                    <label for="Prenom" class="form-label">Prénom</label>
                    <input type="text" name="Prenom" class="form-control" value="{{ old('Prenom') }}" required>
                </div>

                <div class="mb-3">
                    <label for="DateNaissance" class="form-label">Date de naissance</label>
                    <input type="date" name="DateNaissance" class="form-control" value="{{ old('DateNaissance') }}" required>
                </div>

                <button type="submit" class="btn btn-success">Ajouter</button>
                <a href="{{ route('etudiant.index') }}" class="btn btn-secondary">Annuler</a>
            </form>
        </div>
    </div>
</div>
@endsection
