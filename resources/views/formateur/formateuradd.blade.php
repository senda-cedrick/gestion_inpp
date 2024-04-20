@extends('index')
@section('content')

<div class="content-wrapper">
<div class="page-header">
    <h3 class="page-title"> Ajouter Formateur </h3>
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('formateur') }}">Formateur</a></li>
        <li class="breadcrumb-item active" aria-current="page">Ajouter Formateur</li>
    </ol>
    </nav>
</div>
<form class="forms-sample" method="POST" action=" {{ route('formateurAddProcess') }} ">
    @csrf
<div class = "row">
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
                <div class="form-group row">
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Nom *</label>
                        <input type="text" class="form-control" name="nom" placeholder="Nom du Formateur" required>
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
                        <label for="exampleInputUsername1">Contact *</label>
                        <input type="text" class="form-control" name="contact" placeholder="Numéro de Téléphone" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Adresse *</label>
                        <input type="text" class="form-control" name="adresse" placeholder="Adresse" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Email *</label>
                        <input type="email" class="form-control" name="email" placeholder="Adresse E-mail" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Service *</label>
                        <select class="form-control" name="service" required>
                        <option value=""> -- -- </option>    
                            @foreach ($services as $service)
                            <option value="{{$service->id}}">{{$service->name}}</option>
                            @endforeach
                        </select>
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