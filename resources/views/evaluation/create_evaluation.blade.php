@extends('layouts.structure')

@section('content')
<div class="container mt-4">
    <h1>Ajouter une évaluation</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('evaluations.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="Titre" class="form-label">Titre</label>
            <input type="text" class="form-control" id="Titre" name="Titre" value="{{ old('Titre') }}" required maxlength="45">
        </div>

        <div class="mb-3">
            <label for="DateEvaluation" class="form-label">Date d'évaluation</label>
            <input type="date" class="form-control" id="DateEvaluation" name="DateEvaluation" value="{{ old('DateEvaluation') }}" required>
        </div>

        <div class="mb-3">
            <label for="TypeEvaluation" class="form-label">Type</label>
            <input type="text" class="form-control" id="TypeEvaluation" name="TypeEvaluation" value="{{ old('TypeEvaluation') }}" required>
        </div>

        <button type="submit" class="btn btn-success">Ajouter</button>
        <a href="{{ route('evaluations.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
