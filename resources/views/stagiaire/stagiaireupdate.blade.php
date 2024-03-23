@extends('index')
@section('content')

<div class="content-wrapper">
<div class="page-header">
    <h3 class="page-title"> Ajouter Stagiaire </h3>
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('stagiaire') }}">Stagiaire</a></li>
        <li class="breadcrumb-item active" aria-current="page">Ajouter Stagiaire</li>
    </ol>
    </nav>
</div>
<form class="forms-sample" method="POST" action=" {{ route('stagiaireUpdateProcess') }} ">
    @csrf
<div class = "row">
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
                <div class="form-group row">
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Nom *</label>
                        <input type="hidden" class="form-control" name="id" value="{{$stagiaire->id}}">
                        <input type="text" class="form-control" name="nom" placeholder="Nom du stagiare" value="{{ $stagiaire->nom_stagiaire }}" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Postnom *</label>
                        <input type="text" class="form-control" name="postnom" placeholder="Postnom"value="{{ $stagiaire->postnom_stag }}" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Prenom *</label>
                        <input type="text" class="form-control" name="prenom" placeholder="Prenom" value="{{ $stagiaire->prenom_stag }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Sexe *</label>
                        <select class="form-control" name="sexe" id="exampleSelectGender">
                            <option value=""> {{ $stagiaire->sexe_stg }} </option>    
                            <option value="MASCULIN">MASCULIN</option>
                            <option value="FEMININ">FEMININ</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Date de naissance *</label>
                        <input type="date" class="form-control" name="datenaiss" placeholder="Date de naissance" value="{{ $stagiaire->date_nais }}" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Lieu de naissance *</label>
                        <input type="text" class="form-control" name="lieuxnaiss" placeholder="Lieux de naissance" value="{{ $stagiaire->lieu_nais }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Pays de naissance *</label>
                        <input type="text" class="form-control" name="paysnaiss" placeholder="Pays de naissance" value="{{ $stagiaire->pays_nais }}" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Nationalité *</label>
                        <input type="text" class="form-control" name="nationalite" placeholder="Nationalité" value="{{ $stagiaire->nationalite }}" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Nom du (de la) conjoint(e)</label>
                        <input type="text" class="form-control" name="conjoint" placeholder="Conjoint" value="{{ $stagiaire->nom_conjoint }}" >
                    </div>
                </div>
                <div class="form-group row">
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Nombre d'enfant</label>
                        <input type="text" class="form-control" name="nbrenfant" placeholder="Nombre d'enfant" value="{{ $stagiaire->nbr_enfant }}" >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">N° Carte d'electeur</label>
                        <input type="text" class="form-control" name="carteElecteur" placeholder="Numéro carte d'electeur" value="{{ $stagiaire->num_carte_elect }}" >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">N° Passeport</label>
                        <input type="text" class="form-control" name="passeport" placeholder="N° Passeport" value="{{ $stagiaire->num_passeport }}" >
                    </div>
                </div>
                <p> <em> * Champ obligatoire </em></p>
                <button type="submit" class="btn btn-primary mr-2">Enregistrer</button>
                <button type="reset" class="btn btn-dark">Annuler</button>
        </div>
    </div>
</div>
</div>

</form>

@endsection