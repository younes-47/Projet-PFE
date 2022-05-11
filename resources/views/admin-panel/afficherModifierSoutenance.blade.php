@extends('dashboard')

@section('content')
<div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Modifier Soutenance
                            </div>
                           
                        </div>
                    </div>
                    <div class="panel-body">
                    
                    
                        <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="modifierSoutenance/{{$soutenances->id}}">
                            {{ csrf_field() }}
                            {{ method_field('PUT')}}
                            <div class="form-group">
                            @csrf
                 

                            <div class="form-group">
                                <label class="col-md-4 control-label">Numero de salle</label>
                                <div class="col-md-4">
                                <select class="form-control" aria-label="Default select example" name="num_salle" id="option-select">
                                <option selected value="{{$soutenances['num_salle']}}">{{$soutenances['num_salle']}}</option>
                                     
                                
                                    <option value="Salle 1">Salle 1</option>
                                    <option value="Salle 2">Salle 2</option>
                                    <option value="Salle 3">Salle 3</option>
                                    <option value="Salle 4">Salle 4</option>
                                    <option value="Salle 5">Salle 5</option>
                                    <option value="Salle 6">Salle 6</option>
                                    <option value="Salle 7">Salle 7</option>
                                    <option value="Salle 8">Salle 8</option>
                                    <option value="Salle 9">Salle 9</option>
                                    <option value="Salle informatique 1">Salle informatique 1</option>
                                    <option value="Salle informatique 1">Salle informatique 2</option>
                                    <option value="Amphi 1">Amphi 1</option>
                                    <option value="Amphi 2">Amphi 2</option>
                                   
                                 </select>
                                </div>
                             
                            </div>

                            

                          

                            <div class="form-group">
                                <label class="col-md-4 control-label">Date de Soutenance</label>
                                <div class="col-md-4">
                                    <input type="date" placeholder="Date de soutenance" class="form-control input-md" name="date_soutenance" value="{{$soutenances['date_soutenance']}}"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label"> Jury</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Nom des Jury" class="form-control input-md" name="jury" value="{{$soutenances['jury']}}"/>
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
                            
