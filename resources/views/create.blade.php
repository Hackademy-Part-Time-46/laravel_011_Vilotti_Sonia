<x-main>
    <form method="POST" action="{{route('store')}}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nameCar" class="form-label">Insert name Car</label>
            <input type="text" class="form-control" id="nameCar" name="name">
            <div class="mb-3">
                <label for="priceCar" class="form-label">Insert a Price</label>
                <input type="text" class="form-control" id="priceCar" name="price">
            </div>
            <div class="mb-3 form-check">
                <label class="form-check-label" for="imgCar">Insert an Image</label>
                <input type="file" class="form-check-input" id="imgCar" name="path">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
    </form>
</x-main>