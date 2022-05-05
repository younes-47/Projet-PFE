@extends('dashboard')


@section('content')

<div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-6">
                                   <strong> Liste des etudiants </strong>
                                    @if (session('status'))
                                    <div class="alert alert-success" role="alert" style=" background-color:lightblue; color:black;">
                                        {{ session('status')}}
                                    </div>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <a href="ajouterEtudiant" class="btn btn-success pull-right">Ajouter</a>
                                </div>
                                <nav class="navbar navbar-light bg-light">
 
                            </div>
                    </div>
                
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Date de naissance</th>
                                    <th>Ville de naissance</th>
                                    
                                    
                                    <th>Filière</th>
                                   <div class="action">
                                    <th>Action</th>
                                    </div>
                                
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($etudiants as $item)
                                    <tr>
                                        <td>{{$item['id']}}</td>
                                        <td>{{$item['nom']}}</td>
                                        
                                        <td>{{$item['prenom']}}</td>
                                        <td>{{$item['date_naissance']}}</td>
                                        <td>{{$item['ville_naissance']}}</td>
                                        
                                        <td>{{$item['filiere']}}</td>
                                        
                                        <td> <a href="supprimerEtudiant/{{$item['id']}}" style=" background-color:red; " class="btn btn-warning">Supprimer</a></td>
                                        <td> <a href="afficherModifierEtudiant/{{$item['id']}}" class="btn btn-warning">Modifier</a></td>
                                        
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