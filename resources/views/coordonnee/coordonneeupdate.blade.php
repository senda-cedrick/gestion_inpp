@extends('index')
@section('content')

<div class="content-wrapper">
<div class="page-header">
    <h3 class="page-title"> Modifier Coordonnées du Stagiaire {{$coordonnee->stagiaire->nom_stagiaire}} </h3>
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('coordonnee') }}">Coordonnées</a></li>
        <li class="breadcrumb-item active" aria-current="page">Modifier Coordonnées</li>
    </ol>
    </nav>
</div>
<form  class="forms-sample" action="{{ route('coordonneeUpdateProcess') }}" method="POST" >
@csrf
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
                <div class="form-group row">
                    <div class="form-group col-md-4">
                        <input type="hidden" class="form-control" name="id" value="{{$coordonnee->id}}">
                        <label for="exampleInputUsername1">Adresse complete *</label>
                        <input type="text" class="form-control" name="adresse" placeholder="Adresse du stagiare" value="{{$coordonnee->adresse_complete}}" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Code Postal *</label>
                        <input type="text" class="form-control" name="codepostal" placeholder="Code postal" value="{{$coordonnee->code_postal}}" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">E-mail *</label>
                        <input type="mail" class="form-control" name="email" placeholder="adresse mail" value="{{$coordonnee->email}}" >
                    </div>
                </div>
                <div class="form-group row">
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Telephone *</label>
                        <input type="text" class="form-control" name="phone" placeholder="Numéro de telephone" value="{{$coordonnee->mobil}}" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Telephone fixe</label>
                        <input type="text" class="form-control" name="phonefixe" placeholder="Telephone fixe"value="{{$coordonnee->mobil_fixe}}" >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Pays *</label>
                        <input type="text" class="form-control" name="pays" placeholder="Pays" value="{{$coordonnee->pays}}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Province *</label>
                        <input type="text" class="form-control" name="province" placeholder="Province" value="{{$coordonnee->province}}" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">District *</label>
                        <input type="text" class="form-control" name="district" placeholder="District" value="{{$coordonnee->district}}" >
                    </div>
                </div>
                <p> <em> * Champ obligatoire </em></p>
                <button type="submit" class="btn btn-primary mr-2">Enregistrer</button>
                <button type="reset" class="btn btn-dark">Annuler</button>
        </div>
    </div>
</div>
</form>

@endsection