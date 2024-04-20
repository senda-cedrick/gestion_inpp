@extends('index')
@section('content')

<div class="content-wrapper">
<div class="page-header">
    <h3 class="page-title"> Ajouter Formation </h3>
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('formation') }}">Formation</a></li>
        <li class="breadcrumb-item active" aria-current="page">Ajouter Formation</li>
    </ol>
    </nav>
</div>
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <form class="forms-sample" method="POST" action=" {{ route('formationAddProcess') }} ">
            @csrf
            <div class="form-group row" >
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Filière *</label>
                        <select id="filieres" class="form-control" name="filiere_id">
                        <option value=""> -- -- </option>    
                            @foreach ($filieres as $filiere)
                            <option value="{{$filiere->id}}">{{$filiere->nom_filiere}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputUsername1">Option *</label>
                        <select id="options" class="form-control" name="option_id">
                        
                        </select>
                    </div>
                <div class="form-group col-md-4">
                    <label for="exampleInputUsername1">Formateur *</label>
                    <select class="form-control" name="formateur_id">
                    <option value=""> -- -- </option>    
                        @foreach ($formateurs as $formateur)
                        <option value="{{$formateur->id}}">{{$formateur->prenom}} {{$formateur->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row" >
                <div class="form-group col-md-4">
                    <label for="exampleInputUsername1">Vacation *</label>
                    <select class="form-control" name="vacation_id">
                    <option value=""> -- -- </option>    
                        @foreach ($vacations as $vacation)
                        <option value="{{$vacation->id}}">{{$vacation->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="exampleInputUsername1">Date debut *</label>
                    <input type="date" class="form-control" name="ddebut" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="exampleInputUsername1">Date fin *</label>
                    <input type="date" class="form-control" name="dfin" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mr-2">Enregistrer</button>
            <button type="reset" class="btn btn-dark">Annuler</button>
        </form>
        </div>
    </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('#filieres').on('change', function(){
            var filiereIdf = $(this).val();
            
            $.ajax({
                url:'findoptionf/' + filiereIdf,
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