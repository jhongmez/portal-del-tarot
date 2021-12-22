@extends('layouts.app')

@section('title', 'Portal del Tarot - Editar Servicio')

@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2>
                <i class="fas fa-pen"></i>  Editar Servicio
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
                      <a href="{{ route('services.index') }}">
                          <i class="fa fa-users"></i>  
                           Módulo servicios
                      </a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                      <i class="fas fa-pen"></i> 
                      Editar Servicio
                  </li>
                </ol>
            </nav>
            <form method="POST" action="{{ url('services/'.$service->id) }}" enctype="multipart/form-data" class="mt-5">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">
                        Titulo
                    </label>
                    <input value="{{ old('title', $service->title) }}" @error('title') is-invalid @enderror" name="title" id="title" type="text" class="form-control">

                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="title">
                        Descripción
                    </label>
                    <textarea name="description" id="description" cols="30" rows="5" class="form-control @error('description') is-invalid @enderror" value="{{ old('description') }}" autocomplete="description" autofocus>{{ $service->description }}</textarea>

                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image">Imagen del servicio</label>

                    <div class="text-center my-3">
                        <img src="{{ asset($service->image) }}" class="img-thumbnail" id="preview" width="120px">
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
                        Editar
                        <i class="fa fa-save"></i> 
                    </button>
            </div>
            </form>
        </div>
    </div>
@endsection