@extends('dashboard')


@section('content')

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Ajouter nouveau Etudiant
                            </div>
                           
                        </div>
                    </div>
                    <div class="panel-body">
                    
                        <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="ajouterEtudiant">
                            <div class="form-group">
                            @csrf
                                <label class="col-md-4 control-label">Nom d'etudiant</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Nom d'etudiant'" class="form-control input-md" name="nom"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Prenom d'etudiant</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Prenom d'etudiant" class="form-control input-md" name="prenom" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Date de naissance</label>
                                <div class="col-md-4">
                                    <input type="date" placeholder="Date de naissance" class="form-control input-md" name="date_naissance"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Ville de naissance</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Ville de naissance" class="form-control input-md" name="ville_naissance"/>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-4 control-label">Filière</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Filière" class="form-control input-md" name="filiere"/>
                                </div>
                            </div>

                            
                        

                            
                            
                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="/listeEtudiant" class="btn btn-primary" style="background-color:green;">Annuler</a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection
                            
