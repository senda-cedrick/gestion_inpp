@extends('index')
@section('content')

<div class="content-wrapper">
<div class="page-header">
    <h3 class="page-title"> Modifier Matière </h3>
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('matiere') }}">Matière</a></li>
        <li class="breadcrumb-item active" aria-current="page">Modifier Matière</li>
    </ol>
    </nav>
</div>
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <form class="forms-sample" method="POST" action=" {{ route('matiereUpdateProcess') }} ">
            @csrf
            <div class = "row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                            <div class="form-group row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputUsername1">Libelle cours *</label>
                                    <input type="hidden" class="form-control" name="id" value="{{$matiere->id}}">
                                    <input type="text" class="form-control" name="libCours" placeholder="Nom du Cours" value="{{$matiere->libCours}}" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputUsername1">Ponderation *</label>
                                    <input type="text" class="form-control" name="ponderation" placeholder="Ponderation" value="{{$matiere->ponderation}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputUsername1">Option *</label>
                                    <select class="form-control" name="option" required>
                                    <option value=""> -- -- </option>    
                                        @foreach ($options as $option)
                                        <option @selected($option->id == $matiere->option_id) value="{{ $option->id }}">{{$option->nom_option}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputUsername1">Formateur *</label>
                                    <select class="form-control" name="formateur" required>
                                    <option value=""> -- -- </option>    
                                        @foreach ($formateurs as $formateur)
                                        <option @selected($formateur->id == $matiere->option_id) value="{{ $formateur->id }}">{{$formateur->prenom}} {{$formateur->name}}</option>
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