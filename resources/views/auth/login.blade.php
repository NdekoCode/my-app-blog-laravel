@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center form">
                <main class="form-signin">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}"
                        class="w-100">
                        @csrf
                        <h1 class="h3 mb-3 fw-normal">Please {{ __('Login') }}</h1>

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                name="email" value="{{ old('email') }}" required autofocus id="floatingInput"
                                placeholder="name@example.com">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                            <label for="floatingInput">{{ __('E-Mail Address') }}</label>

                        </div>
                        <div class="form-floating mb-3">
                            <input id="password" type="password"
                                class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                placeholder="password" id="floatingPassword" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                            <label for="floatingPassword">{{ __('Password') }}</label>
                        </div>

                        <div class="checkbox mb-3">
                            <label for="remember">
                                <input name="remember" id="remember" type="checkbox" value="remember-me"
                                    {{ old('remember') ? 'checked' : '' }}>{{ __('Remember Me') }}
                            </label>
                        </div>


                        <button class="w-100 btn btn-lg btn-primary" type="submit">{{ __('Login') }}</button>
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        <p class="mt-5 mb-3 text-muted">© 2017–2021</p>
                    </form>
                </main>
            </div>
        </div>
    </div>
@endsection
