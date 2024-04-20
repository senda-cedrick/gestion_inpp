@extends('index')
@section('content')

<div class="content-wrapper">
<div class="page-header">
    <h3 class="page-title"> Modifier Formation </h3>
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('formation') }}">Formation</a></li>
        <li class="breadcrumb-item active" aria-current="page">Modifier Formation</li>
    </ol>
    </nav>
</div>
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <form class="forms-sample" method="POST" action=" {{ route('formationUpdateProcess') }} ">
            @csrf
            <div class="form-group row" >
                <div class="form-group col-md-4">
                    <input type="hidden" class="form-control" name="id" value="{{$formation->id}}">
                    <label for="exampleInputUsername1">Filière *</label>
                    <select class="form-control" name="filiere_id">
                    <option value=""> -- -- </option>    
                        @foreach ($filieres as $filiere)
                        <option @selected($filiere->id == $formation->filiere_id) value="{{ $filiere->id }}">{{$filiere->nom_filiere}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="exampleInputUsername1">Options *</label>
                    <select class="form-control" name="option_id">
                    <option value=""> -- -- </option>    
                        @foreach ($options as $option)
                        <option @selected($option->id == $formation->option_id) value="{{ $option->id }}">{{$option->nom_option}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="exampleInputUsername1">Formateur *</label>
                    <select class="form-control" name="formateur_id">
                    <option value=""> -- -- </option>    
                        @foreach ($formateurs as $formateur)
                        <option @selected($formateur->id == $formation->formateur_id) value="{{ $formateur->id }}">{{$formateur->prenom}} {{$formateur->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row" >
                <div class="form-group col-md-4">
                    <label for="exampleInputUsername1">Vacation *</label>
                    <select class="form-control" name="vacation_id">
                    <option value=""> -- -- </option>    
                        @foreach ($vacations as $vacation)
                        <option @selected($vacation->id == $formation->vacation_id) value="{{ $vacation->id }}">{{$vacation->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="exampleInputUsername1">Date debut *</label>
                    <input type="date" class="form-control" name="ddebut" value="{{$formation->ddebut}}" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="exampleInputUsername1">Date fin *</label>
                    <input type="date" class="form-control" name="dfin" value="{{$formation->dfin}}" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mr-2">Enregistrer</button>
            <button type="reset" class="btn btn-dark">Annuler</button>
        </form>
        </div>
    </div>
    </div>
</div>

@endsection