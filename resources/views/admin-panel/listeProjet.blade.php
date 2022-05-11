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
                            <a href="#" class="btn btn-success pull-right" style="float:right;">Ajouter</a>
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
                    <h6 class="m-0 font-weight-bold text-primary">Liste des projets</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom d'etudiant</th>
                                    <th>Prenom d'etudiant</th>
                                    <th>Projet</th>
                                    
                                    
                                    <div class="action">
                                        <th>Action</th>
                                    </div>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($projets as $item)
                                <tr>
                                    <td>{{$item['id']}}</td>
                                    <td>{{$item['nom_etudiant']}}</td>
                                    <td>{{$item['prenom_etudiant']}}</td>

                                    
                                    <td>{{$item['nom_projet']}}</td>
                                    
                                   

                                    <td> <a href="programmerSoutenance" class="btn btn-warning" style=" background-color:blue; color:white">Programmer</a>
                                        <a href="refuserProjet/{{$item['id']}}" style=" background-color:red; "
                                         class="btn btn-warning" onclick="return confirm('Voulez vous refuser ce membre de projet?')">Refuser</a>
                                        
                                    </td>

                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


@endsection