@extends('layouts.structure')

@section('content')
<div class="container mt-4">
    <h1>Ajouter une note</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('notes.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="evaluationid" class="form-label">Évaluation</label>
            <select name="evaluationid" id="evaluationid" class="form-control" required>
                <option value="">Sélectionnez une évaluation</option>
                @foreach ($evaluations as $evaluation)
                    <option value="{{ $evaluation->id }}">{{ $evaluation->Titre }} - {{ $evaluation->DateEvaluation }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Ajouter</button>
        <a href="{{ route('notes.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
