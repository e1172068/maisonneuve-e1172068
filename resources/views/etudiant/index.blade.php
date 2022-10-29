@extends("layouts.app")
@section("content")
    <main>
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="pt-5">Liste des étudiants inscrits</h1>
            <a href="{{ route('etudiant.create') }}" class="btn btn-primary">Ajouter</a>
        </div>
        <ul class="py-3">
        @forelse($etudiants as $etudiant)
            <li>
                <a href="{{ route('etudiant.show', $etudiant)}}">{{ $etudiant->nom }}</a>
            </li>
        @empty
            <li class="text-danger">Aucun étudiant</li>
        @endforelse 
        </ul>  
        <div class="d-flex justify-content-center">    
            <span>{{ $etudiants->links() }}</span>
        </div>
    </main>
@endsection