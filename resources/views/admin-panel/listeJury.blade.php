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
                        <div class="col-md-6">
                            <a href="ajouterJury" class="btn btn-success pull-right" style="float:right;">Ajouter</a>
                        </div>
                        <nav class="navbar navbar-light bg-light">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Liste des membres des jurys</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>N°Telephone</th>
                                    <th>Adresse</th>
                                    <th>Ecole</th>
                                    <div class="action">
                                        <th>Action</th>
                                    </div>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($jurys as $item)
                                <tr>
                                    <td>{{$item['id']}}</td>
                                    <td>{{$item['nom']}}</td>

                                    <td>{{$item['prenom']}}</td>
                                    <td>{{$item['num_telephone']}}</td>
                                    <td>{{$item['adresse']}}</td>

                                    <td>{{$item['ecole']}}</td>

                                    <td> <a href="afficherJury/{{$item['id']}}" class="btn btn-warning" style=" background-color:blue; color:white">Afficher</a>
                                        <a href="supprimerJury/{{$item['id']}}" style=" background-color:red; "
                                         class="btn btn-warning" onclick="return confirm('Voulez vous supprimez ce membre de jury?')">Supprimer</a>
                                        <a href="afficherModifierJury/{{$item['id']}}" class="btn btn-warning">Modifier</a>
                                    </td>

                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


@endsection