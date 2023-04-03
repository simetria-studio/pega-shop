@extends('layouts.main')

@section('title', 'ABCJPêga - Criar conta')
@section('content')
    <div class="container my-5">
        <div class="row justify-content-center ">
            <div class="col-md-5 my-5">
                <div class="card text-bg-dark p-3">
                    <div class="card-header text-center">
                        <h3>Crie sua conta</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="name" placeholder="Username"
                                    name="name">
                                <label for="name">Nome completo</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" placeholder="name@example.com"
                                    name="email">
                                <label for="email">E-mail</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="password" placeholder="Password"
                                    name="password">
                                <label for="password">Crie uma senha</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="password-confirm" placeholder="Password"
                                    name="password_confirmation">
                                <label class="form-label" for="password-confirm">Repita a senha</label>

                            </div>
                            <button type="submit" class="btn btn-custom btn-block">
                                {{ __('Cadastrar') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
