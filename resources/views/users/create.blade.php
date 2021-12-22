@extends('layouts.app')

@section('title', 'Portal del Tarot - Crear usuario')

@section('content')

    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2>
                <i class="fas fa-user"></i>  Creación de usuario
            </h2>
            <hr>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                      <a href="{{ url('home') }}">
                          <i class="fa fa-clipboard-list"></i>  
                          Escritorio
                      </a>
                  </li>
                  <li class="breadcrumb-item">
                      <a href="{{ route('users.index') }}">
                          <i class="fa fa-users"></i>  
                           Módulo Usuarios
                      </a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                      <i class="fa fa-pen"></i> 
                      Crear Usuario
                  </li>
                </ol>
            </nav>
            <form method="POST" action="{{ route('users.store') }}" class="mt-5">
                @csrf
                <div class="form-group">
                    <label for="name">
                        Nombre del usuario
                    </label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">
                        Correo electrónico
                    </label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">
                        Contraseña
                    </label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password-confirm">
                        Confirmar contraseña
                    </label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">
                        Ingresar usuario
                    </button>
                </div>
            </form>
        </div>
    </div>
    
@endsection