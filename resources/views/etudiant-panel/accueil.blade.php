@extends('/etudiant-panel/template')


@section('titre','Consulter votre soutenance!')

@section('content')
<div class="text-center">
    <h1>Bienvenue <strong>nom etd</strong> </h1>
</div>

<br>



<form action="/accueil" method="POST">
     @csrf
                    
        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px; padding-top:50px; text-align:center;"><strong>Veuillez choisissez votre sujet du projet PFE</strong></h5>

        <div class="form-outline mb-4" style=" padding-left:120px; padding-top:40px; padding-bottom:50px;width:1130px;">
        <input type="text" id="form2Example17" class="form-control form-control-lg" name="projet" />
        <p></p>
                    
        <button type="submit" class="btn btn-outline-success" >Enregistrer</button>
        </div>
</form>














@endsection