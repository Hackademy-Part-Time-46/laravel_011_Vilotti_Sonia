<x-main>
    <form action="{{route('login')}}" method="POST">
        @csrf
        <div class="mb-3 m-5">
            <label for="email" class="form-label"> Enter You're Email Address</label>
            <input type="email" class="form-control" id="email" name="email">
            <div class="mb-3 m-5">
                <label for="password" class="form-label">Enter You're Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
    </form>
</x-main>