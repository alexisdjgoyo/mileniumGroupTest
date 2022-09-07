@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <img class="img-fluid" src="/images/logo.png" alt="">
                    <h1 class=" mt-5 text-center">
                        INICIA SESIÓN
                    </h1>
                </div>

                <div class="card-body">
                    <form class="mb-2" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <input id="email" placeholder="EMAIL" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <input id="password" type="password" placeholder="PASSWORD"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0 text-center">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                                    GUARDAR
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="row mb-2" id="not-registered">
                        <div class="col-md-12 text-center">
                            Aún no tienes una cuenta?
                            <a class="" href="{{ route('register') }}">
                                Regístrate
                            </a>

                        </div>
                    </div>
                    @if(Session::has('message'))
                    <div class="row mb-2" id="not-registered">
                        <div class="col-md-12 text-center">
                            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">
                                {{Session::get('message') }}
                            </p>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
