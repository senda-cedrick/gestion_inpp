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
        </div>
    </div>
</div>
</div>

<div class = "row">
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
                <div class="form-group row">
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Adresse complete *</label>
                        
                        <input type="text" class="form-control" name="adresse" placeholder="Adresse du stagiare" value="{{ $coordonnes->adresse_complete }}" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Code Postal *</label>
                        <input type="text" class="form-control" name="codepostal" placeholder="Code postal" value="{{ $coordonnes->code_postal }}" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">E-mail </label>
                        <input type="mail" class="form-control" name="email" placeholder="adresse mail" value="{{ $coordonnes->email }}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Telephone *</label>
                        <input type="text" class="form-control" name="phone" placeholder="Numéro de telephone" value="{{ $coordonnes->mobil }}" required >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Telephone fixe</label>
                        <input type="text" class="form-control" name="phonefixe" placeholder="Telephone fixe" value="{{ $coordonnes->mobil_fixe }}" >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Pays *</label>
                        <input type="text" class="form-control" name="pays" placeholder="Pays" value="{{ $coordonnes->pays }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Province *</label>
                        <input type="text" class="form-control" name="province" placeholder="Province" value="{{ $coordonnes->province }}" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">District </label>
                        <input type="text" class="form-control" name="district" placeholder="District" value="{{ $coordonnes->district }}" >
                    </div>
                </div>
                <div class="form-group row">
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Filière *</label>
                        <select class="form-control" name="filiere">
                        <option value=""> -- -- </option>    
                            @foreach ($filieres as $filiere)
                            <option @selected($filiere->id == $insc_filiere->filiere_id) value="filiere_id">{{$filiere->nom_filiere}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Option *</label>
                        <select class="form-control" name="option">
                        <option value=""> -- -- </option>    
                            @foreach ($options as $option)
                            <option @selected($option->id == $insc_filiere->option_id) value="option_id">{{$option->nom_option}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <p> <em> * Champ obligatoire </em></p>
    
        </div>
    </div>
</div>
</div>

<div class = "row">
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            
                <div class="form-group row">
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Photo passeport</label>
                        <input type="file" class="form-control" name="photo" placeholder="Photo Passeport du stagiare" value="{{ $documents->photo_pass }}" >
                        <span >{{ $documents->photo_pass }}</span>
                    </div>
                    <div class="form-group col-md-4">
                    <label for="exampleInputUsername1">Diplome</label>
                        <input type="file" class="form-control" name="diplome" placeholder="Diplome du stagiare">
                        <span >{{ $documents->attestation_diplome }}</span>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Bulletin</label>
                        <input type="file" class="form-control" name="bulletin" placeholder="Bulletin">
                        <span >{{ $documents->bulletins }}</span>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Bulletin 2</label>
                        <input type="file" class="form-control" name="bulletin2" placeholder="Bulletin 2">
                        <span >{{ $documents->bulletins2 }}</span>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Attestation Médicale</label>
                        <input type="file" class="form-control" name="attmed" placeholder="Attestation Médicale">
                        <span >{{ $documents->attestation_med }}</span>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Attestation de nationalité</label>
                        <input type="file" class="form-control" name="attnat" placeholder="Attestation de nationalité">
                        <span >{{ $documents->attestation_nationalite }}</span>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Bonne vie et moeurs</label>
                        <input type="file" class="form-control" name="bvm" placeholder="Bonne vie et moeurs">
                        <span >{{ $documents->bonne_vie_moeurs }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<button type="submit" class="btn btn-primary mr-2">Enregistrer</button>
<button type="reset" class="btn btn-dark">Annuler</button>
</form>

@endsection