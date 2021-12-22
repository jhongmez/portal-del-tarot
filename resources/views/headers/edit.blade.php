@extends('layouts.app')

@section('title', 'Portal del Tarot - Editar Encabezado')

@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2>
                <i class="fas fa-pen"></i>  Editar encabezado
            </h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                      <a href="{{ url('home') }}">
                          <i class="fa fa-clipboard-list"></i>  
                          Escritorio
                      </a>
                  </li>
                  <li class="breadcrumb-item">
                      <a href="{{ route('headers.index') }}">
                          <i class="fa fa-users"></i>  
                           Módulo Encabezados
                      </a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                      <i class="fas fa-pen"></i> 
                      Editar Encabezado
                  </li>
                </ol>
            </nav>

            <form method="POST" action="{{ url('headers/'.$header->id) }}" class="mt-5">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $header->id }}">
                <div class="form-group">
                    <label for="description">
                        Descripción del encabezado
                    </label>

                    <textarea name="description" id="description" cols="30" rows="5" class="form-control @error('description') is-invalid @enderror" value="{{ old('description') }}" autocomplete="description" autofocus>{{ $header->description }}</textarea>
    
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">
                        Editar encabezado
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection