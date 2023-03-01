<div class="card" style="width: 18rem;">
    <img src="{{$img}}" style="width: 18rem;" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$name}}</h5>
            <p class="card-text">{{$portata}}</p>
            <p class="card-text">{{$nation}}</p>
            <a href="{{route('recipes-dettaglio', ['id' => $id])}}" class="btn btn-primary">Visualizza prodotto</a>
    </div>
</div>