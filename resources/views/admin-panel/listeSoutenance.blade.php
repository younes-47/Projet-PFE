@extends('dashboard')


@section('content')

<div class="container" style="padding:30px 0;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            @if (session('status'))
                            <div class="alert alert-success" role="alert" style=" background-color:lightblue; color:black;">
                                {{ session('status')}}
                            </div>
                            @endif
                        </div>

                        <nav class="navbar navbar-light bg-light">

                    </div>
                </div>
                @if( $soutenances->count() == '0')
                <div class="alert alert-warning" role="alert" style="width: 500px; ">
                    <h4 class="alert-heading" style="text-align: center;"><i class="bi bi-exclamation-circle-fill" style="font-size: xx-large;"></i></h4>
                    <br>
                    <p>Aucun étudiant n'a choisi un sujet de son PFE!</p>
                    <hr>
                    <p class="mb-0">la liste s'affichera lorsque au moins un étudiant va choisir un sujet de son PFE.</p>
                </div>

                @else
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom d'etudiant</th>
                                <th>Prenom d'etudiant</th>
                                <th>Projet</th>
                                <th>N° Salle</th>
                                <th>Date de soutenance</th>
                                <th>Juries</th>
                                <div class="action">
                                    <th>Action</th>
                                </div>


                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($soutenances as $item)
                            <tr>
                                <td>{{$item['id']}}</td>
                                <td>{{$item['nom_etudiant']}}</td>

                                <td>{{$item['prenom_etudiant']}}</td>
                                <td>{{$item['projet']}}</td>
                                <td>{{$item['num_salle']}}</td>
                                <td>{{$item['date_soutenance']}}</td>
                                <td>{{$item['jury1']}}<br>{{$item['jury2']}}<br>{{$item['jury3']}}</td>

                                <td> 
                                    <a href="" style=" background-color:red; " class="btn btn-warning">Supprimer</a>
                                    <a href="" class="btn btn-warning">Modifier</a>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endif

@endsection