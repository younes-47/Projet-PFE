@extends('admin-panel/styles')

<div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Modifier etudiant
                            </div>
                           
                        </div>
                    </div>
                    <div class="panel-body">
                    
                    
                        <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="modifierEtudiant/{{$etudiants->id}}">
                            {{ csrf_field() }}
                            {{ method_field('PUT')}}
                            <div class="form-group">
                            @csrf
                                <label class="col-md-4 control-label">Nom d'etudiant</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Nom d'etudiant'" class="form-control input-md" name="nom" value="{{$etudiants['nom']}}"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Prenom du client</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Prenom du client" class="form-control input-md" name="prenom" value="{{$etudiants['prenom']}}"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Date de naissance</label>
                                <div class="col-md-4">
                                    <input type="date" placeholder="Date de naissance" class="form-control input-md" name="date_naissance" value="{{$etudiants['date_naissance']}}"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Ville de naissance</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Ville de naissance" class="form-control input-md" name="ville_naissance" value="{{$etudiants['ville_naissance']}}"/>
                                </div>
                            </div>

                            
                        

                            <div class="form-group">
                                <label class="col-md-4 control-label">Filière</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Filière" class="form-control input-md" name="filiere" value="{{$etudiants['filiere']}}"/>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Modifier</button>
                                    <a href="/listeEtudiant" class="btn btn-primary" style="background-color:green;">Annuler</a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>

                            
