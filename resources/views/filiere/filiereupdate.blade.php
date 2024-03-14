@extends('index')
@section('content')

<div class="content-wrapper">
<div class="page-header">
    <h3 class="page-title"> Modifier Filière </h3>
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('filiere') }}">Filière</a></li>
        <li class="breadcrumb-item active" aria-current="page">Modifier Filière</li>
    </ol>
    </nav>
</div>
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <form class="forms-sample" method="POST" action=" {{ route('filiereUpdateProcess') }} ">
            @csrf
            <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nom</label>
            <div class="col-sm-9">
                <input type="hidden" class="form-control" name="id" value="{{$filiere->id}}">
                <input type="text" class="form-control" name="name" value="{{$filiere->nom_filiere}}">
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