@extends('layouts.app')

@section('title', 'Portal del Tarot - Crear un servicio')
    
@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2>Crear un Servicio</h2>
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
                      <a href="{{ route('services.index') }}">
                          <i class="fa fa-users"></i>  
                           Módulo Servicios
                      </a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                      <i class="fa fa-plus"></i> 
                      Crear Servicio
                  </li>
                </ol>
            </nav>
            <form method="POST" action="{{ route('services.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">
                        Titulo
                    </label>
                    <input name="title" id="title" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="title">
                        Descripción
                    </label>
                    <textarea name="description" id="description" cols="30" rows="5" class="form-control @error('description') is-invalid @enderror" value="{{ old('description') }}" autocomplete="description" autofocus></textarea>
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image">Imagen del servicio</label>

                    <div class="text-center my-3">
                        <img src="{{ asset('images/no-photo.png') }}" class="img-thumbnail" id="preview" width="220">
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image" name="image" lang="es">
                        <label class="custom-file-label" for="image">Seleccionar Archivo</label>
                    </div>

                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">
                        Agregar servicio
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection