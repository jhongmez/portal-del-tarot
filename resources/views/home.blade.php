@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Escritorio</h1>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card mb-3">
                        <div class="content-image d-flex justify-content-center">
                            <img src="{{ asset('images/illustrations/users.svg')}}" alt="" width="60%">
                        </div>
                        <div class="card-body d-flex justify-content-center">
                            <a href="{{ route('users.index') }}" class="btn btn-block button-primary">
                                Usuarios
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card mb-3">
                        <div class="content-image d-flex justify-content-center">
                            <img src="{{ asset('images/illustrations/headers.svg')}}" alt="" width="60%">
                        </div>
                        <div class="card-body d-flex justify-content-center">
                            <a href="{{ route('headers.index') }}" class="btn btn-block button-primary">
                                Encabezados
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card">
                        <div class="content-image d-flex justify-content-center">
                            <img src="{{ asset('images/illustrations/services.svg')}}" alt="" width="60%">
                        </div>
                        <div class="card-body d-flex justify-content-center">
                            <a href="{{ route('services.index') }}" class="btn btn-block button-primary">
                                Servicios
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card">
                        <div class="content-image d-flex justify-content-center">
                            <img src="{{ asset('images/illustrations/testimonials.svg')}}" alt="" width="60%">
                        </div>
                        <div class="card-body d-flex justify-content-center">
                            <a href="{{ route('testimonials.index') }}" class="btn btn-block button-primary">
                                Testimonios
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
