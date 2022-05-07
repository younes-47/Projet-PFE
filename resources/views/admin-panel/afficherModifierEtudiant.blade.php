@extends('dashboard')

@section('content')
<br>

<div class="form-group">
    <label class="col-md-4 control-label">Prenom d'etudiant</label>
    <div class="col-md-4">
        <input type="text" placeholder="Prenom du client" class="form-control input-md" name="prenom" value="{{$etudiants['prenom']}}" />
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label">Date de naissance</label>
    <div class="col-md-4">
        <input type="date" placeholder="Date de naissance" class="form-control input-md" name="date_naissance" value="{{$etudiants['date_naissance']}}" />
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label">Adresse</label>
    <div class="col-md-4">
        <input type="text" placeholder="Adresse" class="form-control input-md" name="adresse" value="{{$etudiants['adresse']}}" />
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label">N°Telephone</label>
    <div class="col-md-4">
        <input type="number" placeholder="N°Telephone" class="form-control input-md" name="num_telephone" value="{{$etudiants['num_telephone']}}" />
    </div>
</div>


<div class="form-group">
    <label class="col-md-4 control-label">Filière</label>
    <div class="col-md-4">
        <input type="text" placeholder="Filière" class="form-control input-md" name="filiere" value="{{$etudiants['filiere']}}" />
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label">Nom d'utilisateur</label>
    <div class="col-md-4">
        <input type="text" placeholder="nom_user" class="form-control input-md" name="nom_user" value="{{$etudiants['nom_user']}}" />
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label">Numero d'etudiant</label>
    <div class="col-md-4">
        <input type="text" placeholder="Numero d'etudiant" class="form-control input-md" name="nom_user" value="{{$etudiants['num_etudiant']}}" />
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





@endsection