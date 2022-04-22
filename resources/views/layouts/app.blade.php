@include('layouts.partials.header')
<main class="py-4">
    @include('layouts.partials.errors')
    @yield('content')
</main>
@include('layouts.partials.footer')
