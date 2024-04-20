@extends('index')
@section('content')
    <div class="content-wrapper">
    <div class="page-header">
              <h3 class="page-title"> Liste des Stagiaires</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href=" {{route('formation')}} ">Formation</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Liste des Stagiares</li>
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
                                <th>CODE</th>
                                <th>NOM</th>
                                <th>POSTNOM</th>
                                <th>PRENOM</th>
                                <th>GENRE</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listes as $liste)
                            <tr>
                                <td> {{$liste->stagiaire->num_carte_stag}} </td>
                                <td> {{$liste->stagiaire->nom_stagiaire}} </td>
                                <td> {{$liste->stagiaire->postnom_stag}} </td>
                                <td> {{$liste->stagiaire->prenom_stag}} </td>
                                <td> {{$liste->stagiaire->sexe_stg}} </td>
                                <td> <div class="dropdown">
                            <a id="dropdownMenuIconButton1" data-toggle="dropdown" >
                              <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton1">
                              <a class="dropdown-item" href="  "><i class="mdi mdi-pencil"></i> Modifier</a>
                              <a class="dropdown-item" href="  "><i class="mdi mdi-bitbucket"></i> Supprimer</a>
                              <a class="dropdown-item" href=" "><i class="mdi mdi-bitbucket"></i> Voir</a>
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