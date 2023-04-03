@extends('layouts.main')

@section('title', 'ABCJPêga - Identificação')
@section('content')
    <div class="container my-5">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-5 my-5">
                <div class="card text-bg-dark p-3">
                    <div class="card-header">
                        <h3 class="text-center">{{ __('Identificação') }}</h3>
                    </div>
                    <div class="card-body ">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
                                <label for="email">E-mail:</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input id="password" type="password" class="form-control" placeholder="Password" name="password">
                                <label for="password">Senha:</label>
                            </div>

                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                <label class="form-check-label" for="remember">
                                    {{ __('Manter conectado') }}
                                </label>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-custom btn-block">
                                    {{ __('Entrar') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Esqueceu sua senha?') }}
                                    </a>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
