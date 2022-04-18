@extends('templates/index&login')

@section('titre', 'Connection')

@section('content')


<div class="container-lg my-5">
    <div class="conteneur">
        <div class="list-group">
            <h5>Vous êtes ?</h5>
            <a href="{{URL::to('/connection/etudiant')}}" class="list-group-item list-group-item-action">Etudiant</a>
            <a href="{{URL::to('/connection/membre-jury')}}" class="list-group-item list-group-item-action">Membre de jury</a>
            <a href="{{URL::to('/connection/admin')}}" class="list-group-item list-group-item-action">Admin</a>
        </div>
    </div>
</div>



@endsection