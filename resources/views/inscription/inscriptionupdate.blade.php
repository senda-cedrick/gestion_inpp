@extends('index')
@section('content')

<div class="content-wrapper">
<div class="page-header">
    <h3 class="page-title"> Modifier Inscription du Stagiaire {{$inscription->stagiaire->nom_stagiaire}} </h3>
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('inscription') }}">Inscriptions</a></li>
        <li class="breadcrumb-item active" aria-current="page">Modifier Inscriptions</li>
    </ol>
    </nav>
</div>
<form  class="forms-sample" action="{{ route('inscriptionUpdateProcess') }}" method="POST" >
@csrf
<div class="form-group row">
    <div class="form-group col-md-5">
        <label for="exampleInputUsername1">Filière *</label>
        <input type="hidden" class="form-control" name="id" value="{{$inscription->id}}">
        <select class="form-control" name="filiere">
        <option value=""> -- -- </option>    
            @foreach ($filieres as $filiere)
            <option @selected($filiere->id == $inscription->filiere_id) value="{{ $filiere->id }}">{{$filiere->nom_filiere}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-md-5">
        <label for="exampleInputUsername1">Option *</label>
        <select class="form-control" name="option">
        <option value=""> -- -- </option>    
            @foreach ($options as $option)
            <option @selected($option->id == $inscription->option_id) value="{{ $option->id }}">{{$option->nom_option}}</option>
            @endforeach
        </select>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mr-2">Enregistrer</button>
    <button type="reset" class="btn btn-dark">Annuler</button>
</form>

@endsection