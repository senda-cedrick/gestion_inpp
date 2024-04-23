@extends('index')
@section('content')
    <div class="content-wrapper">
    <div class="page-header">
              <h3 class="page-title"> Formations </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/">Acceuil</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Formations</li>
                </ol>
              </nav>
            </div>
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <a class="btn btn-primary"  href=" {{ route('formationAddForm') }} ">Ajouter</a>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>FILIERE</th>
                                <th>OPTION</th>
                                <th>DATE DEBUT</th>
                                <th>DATE FIN</th>
                                <th>FORMATEUR</th>
                                <th>VACATION</th>
                                <th>EVOLUTIONS</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($formations as $formation)
                            <tr>
                                <td> {{$formation->filiere->nom_filiere}} </td>
                                <td> {{$formation->option->nom_option}} </td>
                                <td> {{$formation->dateDebut}} </td>
                                <td> {{$formation->dateFin}} </td>
                                <td> {{$formation->formateur->prenom}} {{$formation->formateur->name}} </td>
                                <td> {{$formation->vacation->name}} </td>
                                <?php $count = App\Models\InscripSolicit::where('option_id', $formation->option_id)
                                ->join('stagiaires', 'inscrip_solicits.stagiaire_id', '=', 'stagiaires.id')
                                ->where('stagiaires.status_stag', '=', 'Valide')
                                ->count();?>
                                <td> <a href="{{ route('liste', ['id' => $formation->id]) }}"> {{$count}} </a></td>
                                <td> <div class="dropdown">
                            <a id="dropdownMenuIconButton1" data-toggle="dropdown" >
                              <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton1">
                              <a class="dropdown-item" href=" {{ route('formationUpdateForm', ['id' => $formation->id]) }} "><i class="mdi mdi-pencil"></i> Modifier</a>
                              <a class="dropdown-item" href=" {{ route('formationDelete', ['id' => $formation->id]) }} "><i class="mdi mdi-bitbucket"></i> Supprimer</a>
                              <a class="dropdown-item" href=" {{ route('liste', ['id' => $formation->id]) }} "><i class="mdi mdi-bitbucket"></i> Voir</a>
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