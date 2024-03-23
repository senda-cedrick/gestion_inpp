@extends('index')
@section('content')
    <div class="content-wrapper">
    <div class="page-header">
              <h3 class="page-title"> Stagiaires </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/">Acceuil</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Stagiaires</li>
                </ol>
              </nav>
            </div>
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <a class="btn btn-primary"  href=" {{ route('stagiaireAddForm') }} ">Ajouter</a>
                <a class="btn btn-success"  href=" {{ route('stagiaireAddForm') }} ">Imprimer</a>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Date de Naissance</th>
                                <th>Sexe</th>
                                <th>N° Carte</th>
                                <th>Statut</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($documents as $document)
                            <tr>
                                <td> {{$document->stagiaire->nom_stagiaire}} </td>
                                <td> {{$document->stagiaire->prenom_stag}} </td>
                                <td> {{$document->stagiaire->date_nais}} </td>
                                <td> {{$document->stagiaire->sexe_stg}} </td>
                                <td> {{$document->stagiaire->num_carte_stag}} </td>
                                @if ($document->preuve_paiement == null)
                                  <td>
                                      <div class="badge badge-outline-warning">EN ATTENTE</div>
                                  </td>
                                @else
                                  <td>
                                      <div class="badge badge-outline-success">VALIDE</div>
                                  </td>
                                @endif
                                <td> <div class="dropdown">
                            <a id="dropdownMenuIconButton1" data-toggle="dropdown" >
                              <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton1">
                              <a class="dropdown-item" href=" {{ route('stagiaireUpdateForm', ['id' => $document->id]) }} "><i class="mdi mdi-pencil"></i> Modifier</a>
                              <a class="dropdown-item" href=" {{ route('stagiaireDelete', ['id' => $document->id]) }} "><i class="mdi mdi-bitbucket"></i> Supprimer</a>
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