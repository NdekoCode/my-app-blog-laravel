@if (count($errors) > 0)
    <div class="alert alert-danger mt-3">
        @foreach ($errors->all() as $error)
            {{ $error }}
        @endforeach
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success mt-3 mx-3">
        {{ session('success') }}
    </div>
@endif
@if (session('error'))
    <div class="alert alert-danger mt-3 mx-3">
        {{ session('error') }}
    </div>
@endif
