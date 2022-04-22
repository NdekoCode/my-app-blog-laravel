@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center form">
                <main class="form-signin w-100">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <h1 class="h3 mb-3 fw-normal">Please {{ __('Register') }}</h1>
                        <div class="form-floating mb-3">
                            <input id="name" type="text"
                                class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                                value="{{ old('name') }}" placeholder="Nom" required autofocus>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                            <label for="name">{{ __('Name') }}</label>

                        </div>
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

                        <div class="form-floating mb-3">

                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                placeholder="Confirmation" required>

                            <label for="password-confirm">{{ __('Confirm Password') }}</label>
                        </div>


                        <button class="w-100 btn btn-lg btn-primary" type="submit">{{ __('Register') }}</button>
                        <p class="mt-5 mb-3 text-muted">© 2017–2021</p>

                    </form>
                </main>
            </div>
        </div>
    </div>
@endsection
