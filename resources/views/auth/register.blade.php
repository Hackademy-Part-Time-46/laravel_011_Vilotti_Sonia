<x-main>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{route('register')}}" method="POST">
        @csrf
        <div class="mb-3 m-5">
            <label for="name" class="form-label"> Enter You're Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
        </div>
        <div class="mb-3 m-5">
            <label for="email" class="form-label"> Enter You're Email Address</label>
            <input type="email" class="form-control" id="email" name="email">
            <div class="mb-3 m-5">
                <label for="password" class="form-label">Enter You're Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3 m-5">
                <label for="password_confirmation" class="form-label">Confirm Your Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password">
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
    </form>
</x-main>