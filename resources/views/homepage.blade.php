<x-main>
    <section class="py-5 text-center container">
    </section>
    <div class="album py-5 bg-body-tertiary">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($cars as $car)
                <x-card:$car />
                @endforeach
</x-main>