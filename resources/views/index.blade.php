<x-main>
    <a href="{{route('create')}}"><button class="btn bg-success" type="submit" name="button">Insert a Car</button></a>
    <ul>
        @forelse($cars as $car)
        <li><a href="{{route('show', ['car' => $car])}}">{{$car->name}}</a></li>
        @empty
        There are no cars in the database.
        @endforelse

    </ul>
</x-main>