@extends('index')
@section('content')

<div class="content-wrapper">
<div class="page-header">
    <h3 class="page-title"> Ajouter Service </h3>
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('service') }}">service</a></li>
        <li class="breadcrumb-item active" aria-current="page">Ajouter Service</li>
    </ol>
    </nav>
</div>
<div class="col-md-8 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <form class="forms-sample" method="POST" action=" {{ route('serviceAddProcess') }} ">
            @csrf
            <div class="form-group">
                <label for="exampleInputUsername1">Nom</label>
                <input type="text" class="form-control" name="name" placeholder="Nom du service" required>
            </div>
            <button type="submit" class="btn btn-primary mr-2">Enregistrer</button>
            <button type="reset" class="btn btn-dark">Annuler</button>
        </form>
        </div>
    </div>
    </div>
</div>

@endsection