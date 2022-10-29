@extends("layouts.app")
@section("content")
<div class="container">
    <div class="row justify-content-center">   
        <h1 class="pt-5">Formulaire de création d'étudiant</h1>
        <form action="" method="POST" class="py-5">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{session("success")}}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="row mb-3">
                <label for="nom" class="col-sm-3 col-form-label">Nom</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nom" name="nom" value="{{ old('nom') }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="adresse" class="col-sm-3 col-form-label">Adresse</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="adresse" name="adresse" value="{{ old('adresse') }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="phone" class="col-sm-3 col-form-label">Téléphone</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="email" class="col-sm-3 col-form-label">Courriel</label>
                <div class="col-sm-9">
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="date_naissance" class="col-sm-3 col-form-label">Date de naissance</label>
                <div class="col-sm-9">
                    <input type="date" class="form-control" id="date_naissance" name="date_naissance" value="{{ old('date_naissance') }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="ville_id" class="col-sm-3 col-form-label">Ville</label>
                <div class="col-sm-9">
                    <select class="form-select" id="ville_id" name="ville_id" aria-label="Default select example">
                        <option selected disabled>Sélectionner votre ville</option>
                        @foreach ($villes as $ville)
                            @if ($ville->id == old("ville_id"))
                                    <option value="{{ $ville->id }}" selected>{{ $ville->nom }}</option>
                                @else
                                    <option value="{{ $ville->id }}">{{ $ville->nom }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="d-flex justify-content-end py-2 button-container">
                <a type="button" href="{{ route('etudiant.index')}}" class="btn btn-secondary">Retour</a>
                <input type="submit"  class="btn btn-primary" value="Soumettre"/>
            </div>
        </form>        
    </div>
</div>
@endsection