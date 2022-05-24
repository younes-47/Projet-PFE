@extends('/etudiant-panel/template')

@section('titre','Consulter votre soutenance!')

@section('content')

<br>
<div class="text-center text-gray-800">
        <h1>Bienvenue @foreach ($nom_complet as $smia)
                <strong>{{ $smia->nom }} {{ $smia->prenom }}</strong>
            @endforeach
        </h1>
    </div>
    <br>
    <br>

    <table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>Etudiant</th>
      <th>Projet</th>
      <th>Filière</th>
      <th>date de soutenance</th>
      <th>Salle</th>
      <th>Note</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($soutenance as $item)
    <tr>
      <td>
        <div class="d-flex align-items-center">
          
          <div class="ms-3">
            <p class="fw-bold mb-1">{{$item['nom_etudiant']}} {{$item['prenom_etudiant']}}</p>
            
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1">{{$item['nom_projet']}}</p>
        
      </td>
      <td>
      <?php $filiere_etd = App\Models\Etudiant::where('nom',$item['nom_etudiant'])->first();
?>
        {{$filiere_etd->filiere}}
      </td>
      <td>{{$item['date_soutenance']}}</td>
      <td>
        {{$item['num_salle']}}
        </td>
    <td>
      <?php if(empty ($item['note'])){?> <a href=# >Noter La soutenance</a> <?php }?>
      
</td>
         
    </tr>
   @endforeach
  </tbody>
</table>

@endsection