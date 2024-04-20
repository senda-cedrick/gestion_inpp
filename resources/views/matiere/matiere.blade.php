@extends('index')
@section('content')
    <div class="content-wrapper">
    <div class="page-header">
              <h3 class="page-title"> Matières </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/">Acceuil</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Matières</li>
                </ol>
              </nav>
            </div>
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <a class="btn btn-primary"  href=" {{ route('matiereAddForm') }} ">Ajouter</a>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Ponderation</th>
                                <th>Option</th>
                                <th>Formateur</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($matieres as $matiere)
                            <tr>
                                <td> {{$matiere->libCours}} </td>
                                <td> {{$matiere->ponderation}} </td>
                                <td> {{$matiere->option->nom_option}} </td>
                                <td> {{$matiere->formateur->prenom}} {{$matiere->formateur->name}} </td>
                                <td> <div class="dropdown">
                            <a id="dropdownMenuIconButton1" data-toggle="dropdown" >
                              <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton1">
                              <a class="dropdown-item" href=" {{ route('matiereUpdateForm', ['id' => $matiere->id]) }} "><i class="mdi mdi-pencil"></i> Modifier</a>
                              <a class="dropdown-item" href=" {{ route('matiereDelete', ['id' => $matiere->id]) }} "><i class="mdi mdi-bitbucket"></i> Supprimer</a>
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