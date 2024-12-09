<div class="col">
    <img src="{{Storage::url($car->path)}}" alt="Product 1" class="card-img-top">
    <div class="card-body">
        <p class="card-text">{{$car->name}}</p>
    </div>
    <a href="{{route('detail', [$car => $car])}}">Buy</a>