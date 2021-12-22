@extends('layouts.app')

@section('title', 'Portal del Tarot - Editar Testimonio')

@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2>
                <i class="fas fa-pen"></i>  Editar testimonio
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
                      <a href="{{ route('testimonials.index') }}">
                          <i class="fa fa-users"></i>  
                           Módulo testimonios
                      </a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                      <i class="fas fa-pen"></i> 
                      Editar Testimonio
                  </li>
                </ol>
            </nav>

            <form method="POST" action="{{ url('testimonials/'.$testimonial->id) }}" class="mt-5">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="description">
                        Descripción del testimonio
                    </label>

                    <textarea name="description" id="description" cols="30" rows="5" class="form-control @error('description') is-invalid @enderror" value="{{ old('description') }}" autocomplete="description" autofocus>{{ $testimonial->description }}</textarea>
    
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nameAuthor">
                        Autor del testimonio
                    </label>
                    <input id="nameAuthor" type="text" class="form-control @error('nameAuthor') is-invalid @enderror" name="nameAuthor" value="{{ old('nameAuthor', $testimonial->nameAuthor) }}" autocomplete="nameAuthor" autofocus>

                    @error('nameAuthor')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">
                        Ingresar testimonio
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection