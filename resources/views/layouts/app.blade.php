<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sweetalert2.min.css') }}" rel="stylesheet">
</head>
<body>
    @include('layouts.navbar')
    <main class="container mt-5">
        @yield('content')
    </main>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/sweetalert2.all.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            @if (session('message'))
                Swal.fire({
                    title: 'Felicitaciones',
                    text: '{{ session('message') }}',
                    icon: 'success',
                    confirmButtonColor: '#F6E831',
                    confirmButtonText: 'Aceptar'
                });
            @endif

            @if(session('error'))
                Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: 'Acceso Denegado',
                    text: '{{ session('error') }}',
                    showConfirmButton: false,
                    timer: 2500
                });
            @endif

            $('.btn-delete').click(function(event) {
                Swal.fire({
                    title: 'Esta usted seguro ?',
                    text: 'Desea eliminar este registro',
                    icon: 'error',
                    showCancelButton: true,
                    cancelButtonColor: '#d0211c',
                    cancelButtonText: 'Cancelar',
                    confirmButtonColor: '#F6E831',
                    confirmButtonText: 'Aceptar',
                }).then((result) => {
                    if(result.value) {
                        $(this).parent().submit();
                    }
                });
            });

            $('#image').change(function(event) {
                let reader = new FileReader();
                reader.onload = function(event) {
                    $('#preview').attr('src', event.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });

        });
    </script>
</body>
</html>
