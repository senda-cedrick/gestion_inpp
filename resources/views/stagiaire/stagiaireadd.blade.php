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
<form class="forms-sample" method="POST" action=" {{ route('stagiaireAddProcess') }} ">
    @csrf
<div class = "row">
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
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
                        <select class="form-control" name="sexe" id="exampleSelectGender">
                            <option value=""> --  -- </option>    
                            <option value="MASCULIN">MASCULIN</option>
                            <option value="FEMININ">FEMININ</option>
                        </select>
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
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Vacation *</label>
                        <select class="form-control" name="vacation" required>
                        <option value=""> -- -- </option>    
                            @foreach ($vacations as $vacation)
                            <option value="{{$vacation->id}}">{{$vacation->name}}</option>
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
                        <label for="exampleInputUsername1">Adresse complete *</label>
                        <input type="text" class="form-control" name="adresse" placeholder="Adresse du stagiare" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Code Postal *</label>
                        <input type="text" class="form-control" name="codepostal" placeholder="Code postal" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">E-mail *</label>
                        <input type="mail" class="form-control" name="email" placeholder="adresse mail">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Telephone *</label>
                        <input type="text" class="form-control" name="phone" placeholder="Numéro de telephone" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Telephone fixe</label>
                        <input type="text" class="form-control" name="phonefixe" placeholder="Telephone fixe">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Pays *</label>
                        <input type="text" class="form-control" name="pays" placeholder="Pays" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Province *</label>
                        <input type="text" class="form-control" name="province" placeholder="Province" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">District *</label>
                        <input type="text" class="form-control" name="district" placeholder="District" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Filière *</label>
                        <select id="filieres" class="form-control" name="filiere">
                        <option value=""> -- -- </option>    
                            @foreach ($filieres as $filiere)
                            <option value="{{$filiere->id}}">{{$filiere->nom_filiere}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Option *</label>
                        <select id="options" class="form-control" name="option">
                        
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
                        <input type="file" class="form-control" name="photo" placeholder="Photo Passeport du stagiare">
                    </div>
                    <div class="form-group col-md-4">
                    <label for="exampleInputUsername1">Diplome</label>
                        <input type="file" class="form-control" name="diplome" placeholder="Diplome du stagiare">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Bulletin</label>
                        <input type="file" class="form-control" name="bulletin" placeholder="Bulletin">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Bulletin 2</label>
                        <input type="file" class="form-control" name="bulletin2" placeholder="Bulletin 2">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Attestation Médicale</label>
                        <input type="file" class="form-control" name="attmed" placeholder="Attestation Médicale">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Attestation de nationalité</label>
                        <input type="file" class="form-control" name="attnat" placeholder="Attestation de nationalité">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Bonne vie et moeurs</label>
                        <input type="file" class="form-control" name="bvm" placeholder="Bonne vie et moeurs">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Preuve de Paiement</label>
                        <input type="file" class="form-control" name="prpaiement" placeholder="Bonne vie et moeurs">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<button type="submit" class="btn btn-primary mr-2">Enregistrer</button>
<button type="reset" class="btn btn-dark">Annuler</button>
</form>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('#filieres').on('change', function(){
            var filiereId = $(this).val();
            
            $.ajax({
                url:'findoption/' + filiereId,
                type: 'GET',
                dataType:'json',
                success: function (data) {
                    var optionsDropdown = $('#options');
                    optionsDropdown.empty();
                    $('#options').html('<option value=""> -- -- </option>');
                    $.each(data, function(key, value){
                        optionsDropdown.append('<option value="' + value.id + '">' + value.nom_option + '</option>');
                    });
                }
            });
        });
    });
</script>

@endsection