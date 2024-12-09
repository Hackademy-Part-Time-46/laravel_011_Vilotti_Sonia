<x-main>
    <h1>{{$car->name}}</h1>
    <span>{{$car->price}}</span>
    <img src="{{Storage::url($car->path)}}" alt="{{$car->name}}" />
</x-main>