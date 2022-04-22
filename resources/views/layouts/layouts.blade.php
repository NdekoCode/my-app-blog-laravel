@include('layouts.partials.header')
<main class="container">
    @include('layouts.partials.errors')
    @yield('content')
</section>
@include('layouts.partials.footer')
