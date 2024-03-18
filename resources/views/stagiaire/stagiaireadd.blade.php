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
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <form class="forms-sample" method="POST" action=" {{ route('stagiaireAddProcess') }} ">
            @csrf
            <div class="form-group row">
                <div class="form-group col-md-4">
                    <label for="exampleInputUsername1">Nom *</label>
                    <input type="text" class="form-control" name="nom" placeholder="Nom du stagiare" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="exampleInputUsername1">Postnom *</label>
                    <input type="text" class="form-control" name="postnom" placeholder="Postnom" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="exampleInputUsername1">Prenom *</label>
                    <input type="text" class="form-control" name="prenom" placeholder="Prenom" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="form-group col-md-4">
                    <label for="exampleInputUsername1">Sexe *</label>
                    <input type="text" class="form-control" name="sexe" placeholder="Sexe du stagiare" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="exampleInputUsername1">Date de naissance *</label>
                    <input type="date" class="form-control" name="datenaiss" placeholder="Date de naissance" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="exampleInputUsername1">Lieu de naissance *</label>
                    <input type="text" class="form-control" name="lieuxnaiss" placeholder="Lieux de naissance" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="form-group col-md-4">
                    <label for="exampleInputUsername1">Pays de naissance *</label>
                    <input type="text" class="form-control" name="paysnaiss" placeholder="Pays de naissance" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="exampleInputUsername1">Nationalité *</label>
                    <input type="text" class="form-control" name="nationalite" placeholder="Nationalité" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="exampleInputUsername1">Nom du (de la) conjoint(e)</label>
                    <input type="text" class="form-control" name="conjoint" placeholder="Conjoint">
                </div>
            </div>
            <div class="form-group row">
                <div class="form-group col-md-4">
                    <label for="exampleInputUsername1">Nombre d'enfant</label>
                    <input type="text" class="form-control" name="nbrenfant" placeholder="Nombre d'enfant">
                </div>
                <div class="form-group col-md-4">
                    <label for="exampleInputUsername1">N° Carte d'electeur</label>
                    <input type="text" class="form-control" name="carteElecteur" placeholder="Numéro carte d'electeur">
                </div>
                <div class="form-group col-md-4">
                    <label for="exampleInputUsername1">N° Passeport</label>
                    <input type="text" class="form-control" name="passeport" placeholder="N° Passeport">
                </div>
            </div>
            <p> <em> * Champ obligatoire </em></p>
            <button type="submit" class="btn btn-primary mr-2">Enregistrer</button>
            <button type="reset" class="btn btn-dark">Annuler</button>
        </form>
        </div>
    </div>
    </div>
</div>

@endsection