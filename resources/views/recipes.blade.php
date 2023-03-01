<x-layout>
  <div class="container py-5 my-5">
    <div class="row">
      <div class="col-12">
        <h1>Prodotti</h1>
      </div>    
    </div>                    
  </div>

  <div class="container py-2 my-2">
    <div class="row">
      @foreach($recipes as $recipe)
      <div class="col-md-3 py-5 my-5">
        <div class="card" style="width: 18rem;">
          <img src="{{$recipe['img']}}" style="width: 18rem;" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$recipe['name']}}</h5>
            <p class="card-text">{{$recipe['console']}}</p>
            <p class="card-text">{{$recipe['date']}}</p>
            <a href="{{route('recipes-dettaglio', ['id' => $recipe['id']])}}" class="btn btn-primary">Visualizza prodotto</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>                    
  </div>
</x-layout>