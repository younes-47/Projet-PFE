@extends('/etudiant-panel/template')


@section('titre','Consulter votre soutenance!')

@section('content')
<br>
<div class="text-center text-gray-800">
    <h1>Bienvenue @foreach($nom_complet as $smia)<strong>{{$smia->nom}} {{$smia->prenom}}</strong>@endforeach</h1>
</div>

<br>


@if($khtar->count() == 0)

<div class="container alert alert-warning" style="width: 900px;">
    <h5 style="letter-spacing: 1px; padding-top:30px; text-align:center;"><strong>Vous n'avez pas encore choisi un sujet de votre PFE</strong></h5>
    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px; padding-top:20px; text-align:center;"><strong>Veuillez choisissez votre sujet du projet PFE</strong></h5>
</div>

<form action="/choix" method="POST">
    @csrf
    <div class="form-outline container" style="padding-top:40px ;width: 800px;">
        <input type="text" id="form2Example17" class="form-control form-control-lg" name="projet" />
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <br>
        <button type="submit" class="btn btn-success btn-lg">Choisir</button>
    </div>
</form>
<br>
<hr>
<div class="container" style="width: 700px;">
    <!-- <ul class="list-group">
        <li class="list-group-item text-center">Voici la liste des sujets déjà choisis par autre étudiants de votre filiere</li>
        <p></p>
    </ul> -->
    <div class="text-center text-gray-800">
    <h5>Voici la liste des sujets déjà choisis par autre étudiants de votre filiere</h5>
    <br>
    </div>
    
    @if($sujets->count() != 0)
    <ul class="list-group">
        @foreach($sujets as $sujet)
        <li class="list-group-item list-group-item-secondary">{{$sujet['nom_projet']}}</li>
        @endforeach
    </ul>
    @else
    <div class="alert alert-info text-center">
        <p><i>(Aucun sujet choisi)</i></p>
    </div>
    @endif
</div>

@else

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">La date de votre soutenance</h6>
                </div>
                <div class="card-body">
                    <p>bala bla bal abala.</p>
                    <p class="mb-0">sfvsdvzfzefzefzefzefzef.</p>
                </div>
            </div>

        </div>
        <div class="col-lg-4 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Votre Encadrant</h6>
                </div>
                <div class="card-body">
                    <ul>
                        <li>Smia o lknia</li>
                        <li>email</li>

                    </ul>
                    <p class="mb-0">effffffffffffffffffffffffffffffdvzvvezzefzefzefzefzef.</p>
                </div>
            </div>

        </div>

    </div>
</div>


@endif


@endsection