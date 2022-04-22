<nav class="d-flex">

    <a class="navbar-brand" href="{{ url('/') }}">
        {{ config('app.name', 'Laravel') }}
    </a>
    <div class="mr-auto w-100 d-flex flex-wrap align-items-center justify-content-center justify-content-lg-between">
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 mr-auto">
            @auth
                @include('layouts.partials.links', [
                    'classLink' => 'nav-link px-2',
                    'link' => '/',
                    'list' => true,
                    'title' => 'Admin',
                ])
            @endauth
            @include('layouts.partials.links', [
                'classLink' => 'nav-link px-2',
                'link' => '/posts',
                'list' => true,
                'title' => 'Blog',
            ])
            @include('layouts.partials.links', [
                'classLink' => 'nav-link px-2',
                'link' => '/about',
                'list' => true,
                'title' => 'A propos',
            ])
            @include('layouts.partials.links', [
                'classLink' => 'nav-link px-2',
                'link' => '/contact',
                'list' => true,
                'title' => 'Nous contacter',
            ])
        </ul>

        <div class="text-end ml-auto">
            @auth
                <div class="dropdown text-end">
                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('img/profile.jpeg') }}" alt="mdo" width="32" height="32" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" style="">
                        <li><a class="dropdown-item" href="/settings">Parametres</a></li>
                        <li>
                            <a class="dropdown-item" href="/profile">Profile</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">Se
                                deconnecter</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf</form>
                        </li>
                    </ul>
                </div>
            @else
                <a href="/login" class="btn btn-outline-light me-2">Se connecter</a>
                <a href="/register" class="btn btn-warning">Créer un compte</a>
            @endauth

        </div>
    </div>
</nav>
