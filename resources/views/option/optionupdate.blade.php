@extends('index')
@section('content')

<div class="content-wrapper">
<div class="page-header">
    <h3 class="page-title"> Modifier Option </h3>
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('option') }}">Option</a></li>
        <li class="breadcrumb-item active" aria-current="page">Modifier Option</li>
    </ol>
    </nav>
</div>
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <form class="forms-sample" method="POST" action=" {{ route('optionUpdateProcess') }} ">
            @csrf
            <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nom</label>
            <div class="col-sm-9">
                <input type="hidden" class="form-control" name="id" value="{{$option->id}}">
                <input type="text" class="form-control" name="name" value="{{$option->nom_option}}">
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