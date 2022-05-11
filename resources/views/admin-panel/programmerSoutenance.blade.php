@extends('dashboard')


@section('content')
<br>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-900">Programmer une soutenance</h1>
</div>



<form method="POST" action="programmerSoutenance/{{$projets->id}}" class="form-horizontal" enctype="multipart/form-data">
    <div class="row">


        <div class="form-group">
            @csrf
            <label class="col-md-4 control-label text-gray-800">Nom d'etudiant</label>
            <div class="col-md-4">
                <input type="text" placeholder="Nom d'etudiant" class="form-control input-md" name="nom" />
            </div>
        </div>


        <div class="form-group">
            <label class="col-md-4 control-label text-gray-800">Prénom d'etudiant</label>
            <div class="col-md-4">
                <input type="text" placeholder="Prenom d'etudiant" class="form-control input-md" name="prenom" />
            </div>
        </div>


        <div class="form-group">
            <label class="col-md-4 control-label text-gray-800">Date de soutenance</label>
            <div class="col-md-4">
                <input type="date" placeholder="Date de soutenance" class="form-control input-md" name="date_soutenance" />
            </div>
        </div>


        <div class="form-group">
                                <label class="col-md-4 control-label text-gray-800">N° Salle</label>
                                <div class="col-md-4">
                                 <select class="form-control" aria-label="Default select example" name="num_salle" id="option-select">
                                     <option selected disabled>--Choisir la salle--</option>
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
            <label class="col-md-4 control-label text-gray-800">Membre de Jury</label>
            <div class="col-md-4">
                <input type="text" placeholder="Membre de Jury" class="form-control input-md" name="jury" />
            </div>
        </div>


        <div class="form-group">
            <div class="col-md-4">
                <button type="submit" class="btn btn-outline-success">Enregistrer</button>
                <a href="/listeEtudiant" class="btn btn-outline-primary">Annuler</a>
            </div>
        </div>

</form>

</div>
</div>




@endsection