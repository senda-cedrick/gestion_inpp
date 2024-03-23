@extends('index')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <div class="row">
                <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0"> {{$countStgV}} </h3>
                </div>
                </div>
                <div class="col-3">
                </div>
            </div>
            <h6 class="text-muted font-weight-normal">Inscription validées</h6>
            </div>
        </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <div class="row">
                <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0"> {{$countStgNv}} </h3>
                </div>
                </div>
                <div class="col-3">
                </div>
            </div>
            <h6 class="text-muted font-weight-normal">Inscriptions en attente</h6>
            </div>
        </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <div class="row">
                <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">$12.34</h3>
                </div>
                </div>
                <div class="col-3">
                </div>
            </div>
            <h6 class="text-muted font-weight-normal">Formations encours</h6>
            </div>
        </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <div class="row">
                <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">$31.53</h3>
                </div>
                </div>
                <div class="col-3">
                </div>
            </div>
            <h6 class="text-muted font-weight-normal">Formations terminées</h6>
            </div>
        </div>
        </div>
    </div>
    
    <div class="row ">
        <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
            <h4 class="card-title">Stagiaires</h4>
            <div class="table-responsive">
                <table class="table">
                <thead>
                    <tr>
                    <th>
                        <div class="form-check form-check-muted m-0">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                        </label>
                        </div>
                    </th>
                    <th> Nom</th>
                    <th> Postnom </th>
                    <th> Prenom </th>
                    <th> Num Carte </th>
                    <th> Date inscription</th>
                    <th> Status</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($documents as $document)
                    <tr>
                        <td>
                            <div class="form-check form-check-muted m-0">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                            </label>
                            </div>
                        </td>
                        <td> {{$document->stagiaire->nom_stagiaire}} </td>
                        <td> {{$document->stagiaire->postnom_stag}} </td>
                        <td> {{$document->stagiaire->prenom_stag}} </td>
                        <td> {{$document->stagiaire->num_carte_stag}} </td>
                        <td> {{$document->stagiaire->created_at}} </td>
                        @if ($document->preuve_paiement == null)
                            <td>
                                <div class="badge badge-outline-warning">EN ATTENTE</div>
                            </td>
                        @else
                            <td>
                                <div class="badge badge-outline-success">VALIDE</div>
                            </td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>
    </div>
    
    </div>

@endsection