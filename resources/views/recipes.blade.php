<x-layout>
  <div class="container py-5 my-5">
    <div class="row">
      <div class="col-12">
        <h1>Ricette</h1>
      </div>    
    </div>                    
  </div>

  <div class="container py-2 my-2">
    <div class="row">
      @foreach($recipes as $recipe)
      <div class="col-md-3 py-5 my-5">
        <x-card 
        id="{{$recipe['id']}}"
        name="{{$recipe['name']}}"
        portata="{{$recipe['portata']}}"
        nation="{{$recipe['nation']}}"
        img="{{$recipe['img']}}"
        />
      </div>
      @endforeach
    </div>                    
  </div>
</x-layout>