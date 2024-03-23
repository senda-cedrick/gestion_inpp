@extends('index')
@section('content')

<div class="content-wrapper">
<div class="page-header">
    <h3 class="page-title"> Modifier Documents du Stagiaire {{$document->stagiaire->nom_stagiaire}} </h3>
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('document') }}">Documents</a></li>
        <li class="breadcrumb-item active" aria-current="page">Modifier Documents</li>
    </ol>
    </nav>
</div>
<form  class="forms-sample" action="{{ route('documentUpdateProcess') }}" method="POST" >
@csrf
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            
                <div class="form-group row">
                    <div class="form-group col-md-4">
                        <input type="hidden" name="id" value=" {{ $document->id }} ">
                        <label for="exampleInputUsername1">Photo passeport</label>
                        <input type="file" class="form-control" name="photo" placeholder="Photo Passeport du stagiare">
                    </div>
                    <div class="form-group col-md-4">
                    <label for="exampleInputUsername1">Diplome</label>
                        <input type="file" class="form-control" name="diplome" placeholder="Diplome du stagiare">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Bulletin</label>
                        <input type="file" class="form-control" name="bulletin" placeholder="Bulletin">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Bulletin 2</label>
                        <input type="file" class="form-control" name="bulletin2" placeholder="Bulletin 2">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Attestation Médicale</label>
                        <input type="file" class="form-control" name="attmed" placeholder="Attestation Médicale">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Attestation de nationalité</label>
                        <input type="file" class="form-control" name="attnat" placeholder="Attestation de nationalité">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Bonne vie et moeurs</label>
                        <input type="file" class="form-control" name="bvm" placeholder="Bonne vie et moeurs">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Preuve Paiement</label>
                        <input type="file" class="form-control" name="prpaiement" placeholder="Bonne vie et moeurs">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Enregistrer</button>
                <button type="reset" class="btn btn-dark">Annuler</button>
            </div>
        </div>
    </div>
</div>
</form>

@endsection