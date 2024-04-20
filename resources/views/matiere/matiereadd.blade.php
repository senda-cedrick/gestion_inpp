@extends('index')
@section('content')

<div class="content-wrapper">
<div class="page-header">
    <h3 class="page-title"> Ajouter Matière </h3>
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('matiere') }}">Matière</a></li>
        <li class="breadcrumb-item active" aria-current="page">Ajouter Matière</li>
    </ol>
    </nav>
</div>
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <form class="forms-sample" method="POST" action=" {{ route('matiereAddProcess') }} ">
            @csrf
            <div class = "row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                            <div class="form-group row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputUsername1">Libelle cours *</label>
                                    <input type="text" class="form-control" name="libCours" placeholder="Nom du Cours" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputUsername1">Ponderation *</label>
                                    <input type="text" class="form-control" name="ponderation" placeholder="Ponderation" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputUsername1">Option *</label>
                                    <select class="form-control" name="option" required>
                                    <option value=""> -- -- </option>    
                                        @foreach ($options as $option)
                                        <option value="{{$option->id}}">{{$option->nom_option}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputUsername1">Formateur *</label>
                                    <select class="form-control" name="formateur" required>
                                    <option value=""> -- -- </option>    
                                        @foreach ($formateurs as $formateur)
                                        <option value="{{$formateur->id}}">{{$formateur->prenom}} {{$formateur->name}}</option>
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
        </div>
    </div>
    </div>
</div>

@endsection