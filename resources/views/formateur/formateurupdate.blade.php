@extends('index')
@section('content')

<div class="content-wrapper">
<div class="page-header">
    <h3 class="page-title"> Modifier Formateur </h3>
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('formateur') }}">Formateur</a></li>
        <li class="breadcrumb-item active" aria-current="page">Ajouter Formateur</li>
    </ol>
    </nav>
</div>
<form class="forms-sample" method="POST" action=" {{ route('formateurUpdateProcess') }} ">
    @csrf
    <div class = "row">
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
                <div class="form-group row">
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Nom *</label>
                        <input type="hidden" class="form-control" name="id" value="{{$formateur->id}}">
                        <input type="text" class="form-control" name="nom" placeholder="Nom du Formateur" value="{{$formateur->name}}" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Postnom *</label>
                        <input type="text" class="form-control" name="postnom" placeholder="Postnom" value="{{$formateur->postnom}}" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Prenom *</label>
                        <input type="text" class="form-control" name="prenom" placeholder="Prenom" value="{{$formateur->prenom}}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Sexe *</label>
                        <select class="form-control" name="sexe" id="exampleSelectGender">
                            <option value="{{$formateur->genre}}"> {{$formateur->genre}} </option>    
                            <option value="MASCULIN">MASCULIN</option>
                            <option value="FEMININ">FEMININ</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Contact *</label>
                        <input type="text" class="form-control" name="contact" placeholder="Numéro de Téléphone" value="{{$formateur->contact}}" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Adresse *</label>
                        <input type="text" class="form-control" name="adresse" placeholder="Adresse" value="{{$formateur->adresse}}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Email *</label>
                        <input type="email" class="form-control" name="email" placeholder="Adresse E-mail" value="{{$formateur->email}}" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Service *</label>
                        <select class="form-control" name="service" required>
                        <option value=""> -- -- </option>    
                            @foreach ($services as $service)
                            <option @selected($service->id == $formateur->service_id) value="{{ $service->id }}">{{$service->name}}</option>
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