@extends('dashboard')


@section('content')
<br>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-900">Ajouter nouveau membre de jury</h1>
</div>
                    
                    <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="ajouterJury">
                            <div class="form-group">
                            @csrf
                                <label class="col-md-4 control-label text-gray-800">Nom du jury</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Nom du jury" class="form-control input-md" name="nom"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label text-gray-800">Prenom du jury</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Prenom du jury" class="form-control input-md" name="prenom" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label text-gray-800">N°Telephone</label>
                                <div class="col-md-4">
                                    <input type="number" placeholder="N°Telephone" class="form-control input-md" name="num_telephone"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label text-gray-800">Adresse</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Adresse" class="form-control input-md" name="adresse"/>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-4 control-label text-gray-800">Ecole</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Ecole" class="form-control input-md" name="ecole"/>
                                </div>
                            </div>

                            
                        

                            
                            
                            <div class="form-group text-center">
                                <label class="col-md-4 control-label text-gray-800"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-outline-success">Submit</button>
                                    <a href="/listeJury" class="btn btn-outline-primary">Annuler</a>
                                </div>
                            </div>

                        </form>


                        
@endsection
                            
