@extends("layouts.app")
@section("content")
    <div class="row">
        <h1 class="pt-5">Détail de l'étudiant</h2>
        <dl>
            <dt>Nom</dt>
            <dd>{{ $etudiant->nom }}</dd>
            <dt>Adresse</dt>
            <dd>{{ $etudiant->adresse }}</dd>
            <dt>Téléphone</dt>
            <dd>{{ $etudiant->phone }}</dd>
            <dt>Email</dt>
            <dd>{{ $etudiant->email }}</dd>
            <dt>Date de naissance</dt>
            <dd>{{ $etudiant->date_naissance }}</dd>
            <dt>Ville</dt>
            <dd>{{ $nomVille }}</dd>
        </dl>
    </div>
    <a href="{{ route('etudiant.edit', $etudiant)}}" class="btn btn-primary">Modifier</a>
    <a href="{{ route('etudiant.destroy', $etudiant)}}" class="btn btn-danger">Supprimer</a>
@endsection