@extends('admin-panel/styles')

<div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Ajouter nouveau Jury
                            </div>
                           
                        </div>
                    </div>
                    <div class="panel-body">
                    
                        <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="ajouterJury">
                            <div class="form-group">
                            @csrf
                                <label class="col-md-4 control-label">Nom du jury</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Nom du jury" class="form-control input-md" name="nom"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Prenom du jury</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Prenom du jury" class="form-control input-md" name="prenom" />
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
                                <label class="col-md-4 control-label">Matière</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Matière" class="form-control input-md" name="matiere"/>
                                </div>
                            </div>

                            
                        

                            
                            
                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="/listeJury" class="btn btn-primary" style="background-color:green;">Annuler</a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>

                            
