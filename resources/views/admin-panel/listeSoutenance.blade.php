@extends('dashboard')


@section('content')

<div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-6">
                                   <strong> Liste des Soutenances </strong>
                                    @if (session('status'))
                                    <div class="alert alert-success" role="alert" style=" background-color:lightblue; color:black;">
                                        {{ session('status')}}
                                    </div>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <a href="#" class="btn btn-success pull-right">Ajouter</a>
                                </div>
                                <nav class="navbar navbar-light bg-light">
 
                            </div>
                    </div>
                
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
                                        
                                        <td>{{$item['jury1']}},<br>{{$item['jury2']}},<br>{{$item['jury3']}}</td>
                                        
                                        <td> <a href="supprimerJury/{{$item['id']}}" style=" background-color:red; " class="btn btn-warning">Supprimer</a></td>
                                        <td> <a href="afficherModifierJury/{{$item['id']}}" class="btn btn-warning">Modifier</a></td>
                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection