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
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">
                Imprimer
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Veuillez placer les critères</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                      <form action=" {{route('print')}} " method="POST"> 
                        @csrf
                        <div class="form-group row">
                          <div class="form-group col-md-6">
                              <label for="exampleInputUsername1">Filière *</label>
                              <select class="form-control" name="filiere">
                              <option value=""> -- -- </option>    
                                  @foreach ($filieres as $filiere)
                                  <option value="{{$filiere->id}}">{{$filiere->nom_filiere}}</option>
                                  @endforeach
                              </select>
                          </div>
                          <div class="form-group col-md-6">
                              <label for="exampleInputUsername1">Option *</label>
                              <select class="form-control" name="option">
                              <option value=""> -- -- </option>    
                                  @foreach ($options as $option)
                                  <option value="{{$option->id}}">{{$option->nom_option}}</option>
                                  @endforeach
                              </select>
                          </div>
                        </div>
                        <div class="form-group row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputUsername1">Date debut *</label>
                                <input type="date" class="form-control" name="ddebut" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputUsername1">Date fin *</label>
                                <input type="date" class="form-control" name="dfin" required>
                            </div>
                        </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                          <button type="submit" class="btn btn-primary">Valider</button>
                        </div>
                      </form>  
                      </div>
                  </div>
                </div>
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('#filieres').on('change', function(){
            var filiereId = $(this).val();
            
            $.ajax({
                url:'findoption/' + filiereId,
                type: 'GET',
                dataType:'json',
                success: function (data) {
                    var optionsDropdown = $('#options');
                    optionsDropdown.empty();
                    $('#options').html('<option value=""> -- -- </option>');
                    $.each(data, function(key, value){
                        optionsDropdown.append('<option value="' + value.id + '">' + value.nom_option + '</option>');
                    });
                }
            });
        });
    });
</script>
@endsection