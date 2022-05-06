@extends('dashboard')


@section('content')
<div class="page-content-wrapper">
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
                    
                        <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="ajouterEtudiant" >
                            <div class="form-group">
                            @csrf
                                <label class="col-md-4 control-label">Nom d'etudiant</label>
                                <div class="col-md-4" >
                                    <input type="text" placeholder="Nom d'etudiant" class="form-control input-md" name="nom" />
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
                                <label class="col-md-4 control-label">Adresse</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Adresse" class="form-control input-md" name="adresse"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">N°Telephone</label>
                                <div class="col-md-4">
                                    <input type="number" placeholder="N°Telephone" class="form-control input-md" name="num_telephone"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Filière</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Filière" class="form-control input-md" name="filiere"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Email</label>
                                <div class="col-md-4">
                                    <input type="email" placeholder="Email" class="form-control input-md" name="email"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Mot de passe</label>
                                <div class="col-md-4">
                                    <input type="password" placeholder="Mot de passe" class="form-control input-md" name="password"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Nom d'utlisateur</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Nom d'utilisateur" class="form-control input-md" name="nom_user"/>
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
</div>
        

@endsection
                            
