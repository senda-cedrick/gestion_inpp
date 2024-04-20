@extends('index')
@section('content')

<div class="content-wrapper">
<div class="page-header">
    <h3 class="page-title"> Modifier Vacation </h3>
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('vacation') }}">Vacation</a></li>
        <li class="breadcrumb-item active" aria-current="page">Modifier Vacation</li>
    </ol>
    </nav>
</div>
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <form class="forms-sample" method="POST" action=" {{ route('vacationUpdateProcess') }} ">
            @csrf
            <div class="form-group row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nom</label>
                <div class="col-sm-9">
                    <input type="hidden" class="form-control" name="id" value="{{$vacation->id}}">
                    <input type="text" class="form-control" name="name" value="{{$vacation->name}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername1">Heure Debut</label>
                    <input type="time" class="form-control" name="hdebut" value="{{$vacation->heureDebut}}" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername1">Heure Fin</label>
                    <input type="time" class="form-control" name="hfin" value="{{$vacation->heureFin}}" required>
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