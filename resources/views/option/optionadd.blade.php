@extends('index')
@section('content')

<div class="content-wrapper">
<div class="page-header">
    <h3 class="page-title"> Ajouter Option </h3>
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('option') }}">Option</a></li>
        <li class="breadcrumb-item active" aria-current="page">Ajouter Option</li>
    </ol>
    </nav>
</div>
<<<<<<< HEAD
<div class="col-md-12 grid-margin stretch-card">
=======
<div class="col-md-8 grid-margin stretch-card">
>>>>>>> 1a5d1b22 (Initial commit)
    <div class="card">
        <div class="card-body">
        <form class="forms-sample" method="POST" action=" {{ route('optionAddProcess') }} ">
            @csrf
<<<<<<< HEAD
            <div class="form-group row" >
                <div class="form-group col-md-6">
                    <label for="exampleInputUsername1">Filière *</label>
                    <select class="form-control" name="filiere_id">
                    <option value=""> -- -- </option>    
                        @foreach ($filieres as $filiere)
                        <option value="{{$filiere->id}}">{{$filiere->nom_filiere}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputUsername1">Nom *</label>
                    <input type="text" class="form-control" name="name" placeholder="Nom de l'option" required>
                </div>
=======
            <div class="form-group">
                <label for="exampleInputUsername1">Nom</label>
                <input type="text" class="form-control" name="name" placeholder="Nom de l'option" required>
>>>>>>> 1a5d1b22 (Initial commit)
            </div>
            <button type="submit" class="btn btn-primary mr-2">Enregistrer</button>
            <button type="reset" class="btn btn-dark">Annuler</button>
        </form>
        </div>
    </div>
    </div>
</div>

@endsection