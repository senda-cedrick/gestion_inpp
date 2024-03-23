@extends('index')
@section('content')
    <div class="content-wrapper">
    <div class="page-header">
              <h3 class="page-title"> Coordonnées </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/">Acceuil</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Coordonnées</li>
                </ol>
              </nav>
            </div>
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nom Stagiaire</th>
                                <th>Adresse</th>
                                <th>Telephone</th>
                                <th>Telephone fixe</th>
                                <th>Adresse Mail</th>
                                <th>Pays</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($coordonnees as $coordonnee)
                            <tr>
                                <td> {{$coordonnee->stagiaire->nom_stagiaire}} </td>
                                <td> {{$coordonnee->adresse_complete}} </td>
                                <td> {{$coordonnee->mobil}} </td>
                                <td> {{$coordonnee->mobil_fixe}} </td>
                                <td> {{$coordonnee->email}} </td>
                                <td> {{$coordonnee->pays}} </td>
                                <td> <div class="dropdown">
                            <a id="dropdownMenuIconButton1" data-toggle="dropdown" >
                              <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton1">
                              <a class="dropdown-item" href=" {{ route('coordonneeUpdateForm', ['id' => $coordonnee->id]) }} "><i class="mdi mdi-pencil"></i> Modifier</a>
                              <a class="dropdown-item" href=" {{ route('coordonneeDelete', ['id' => $coordonnee->id]) }} "><i class="mdi mdi-bitbucket"></i> Supprimer</a>
                            </div>
                          </div> </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection