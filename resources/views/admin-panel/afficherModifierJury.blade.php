@extends('dashboard')

@section('content')
<div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Modifier Jury
                            </div>
                           
                        </div>
                    </div>
                    <div class="panel-body">
                    
                    
                        <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="modifierJury/{{$juries->id}}">
                            {{ csrf_field() }}
                            {{ method_field('PUT')}}
                            <div class="form-group">
                            @csrf
                                <label class="col-md-4 control-label">Nom du jury</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Nom du jury" class="form-control input-md" name="nom" value="{{$juries['nom']}}"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Prenom du jury</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Prenom du client" class="form-control input-md" name="prenom" value="{{$juries['prenom']}}"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">N°Telephone</label>
                                <div class="col-md-4">
                                    <input type="number" placeholder="N°Telephone" class="form-control input-md" name="num_telephone" value="{{$juries['num_telephone']}}"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Adresse</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Adresse" class="form-control input-md" name="adresse" value="{{$juries['adresse']}}"/>
                                </div>
                            </div>

                            
                        

                            <div class="form-group">
                                <label class="col-md-4 control-label">Ecole</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Ecole" class="form-control input-md" name="ecole" value="{{$juries['ecole']}}"/>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Modifier</button>
                                    <a href="/listeJury" class="btn btn-primary" style="background-color:green;">Annuler</a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
                            
