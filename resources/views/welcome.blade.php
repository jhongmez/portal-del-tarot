<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=7">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Johnsoft - Jhon Gómez Marín">
        <meta property="og:title" content="Portal del Tarot | Amarres de Amor - Limpieza Espiritual">
        <meta property="og:site_name" content="Portal del Tarot | Amarres de Amor - Limpieza Espiritual">
        <meta property="og:description" content="Portal del Tarot es un sitio web donde puedes contactarnos para agendar una cita, ver nuestros servicios y algunos de nuestros clientes dan sus testimonios. Realizamos AMARRES DE AMOR, LIMPIEZA ESPIRITUAL, ENTRE OTROS..." />

        <title>Portal del Tarot | Amarres de Amor - Limpieza Espiritual</title>

        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.theme.default.min.css')}}">
        <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">

    </head>
    <body>
        <section class="hero">
            <div class="container">
                <div class="hero-content">
                    <div class="hero-content__logo">
                        <img src="{{ asset('images/logo/logotype.svg')}}" alt="portal del tarot">
                    </div>
                    <div class="hero-content__title">
                        @foreach ($headers as $header)
                            <h1>
                                {{ $header->description }}
                            </h1>
                        @endforeach
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="https://wa.link/cshv85" class="btn button-primary">
                            <i class="fab fa-whatsapp"></i>
                            Contáctanos
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="services">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="services-content">
                            <h2 class="services-content__title">En qué te ayudamos?</h2>
                            <div class="services-content__carousel owl-carousel owl-theme">
                                @foreach ($services as $service)
                                    <div class="card">
                                        <img src="{{ asset($service->image)}}" alt="portal del tarot">
                                        <div class="card-body">
                                            <h5 class="card-title">
                                                {{ $service->title}}
                                            </h5>
                                            <p class="card-text">
                                                {{ $service->description }}
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="d-flex justify-content-center">
                                <button class="btn button-primary mt-5">
                                    Quiero conocer más
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="testimonials-content">
                            <h2 class="testimonials-content__title">Nuestros Testimonios</h2>
                            <div class="testimonials-content__description">
                                <div class="testimonials-content__carousel owl-carousel owl-theme">
                                    @foreach ($testimonials as $testimonial)
                                        <p class="text">
                                            “{{ $testimonial->description }}”
                                            <br>
                                            <small class="mt-4">
                                                {{ $testimonial->nameAuthor }}
                                            </small>
                                        </p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="observations">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="observations-content">
                            <h2 class="observations-content__title">Para tener en cuenta</h2>
                            <article>
                                <ul class="observations-content__list">
                                    <li>
                                        Este sitio va dirigido exclusivamente a <strong>mayores de edad (18 años).</strong>
                                    </li>
                                    <li>
                                        De acuerdo con las legislaciones vigentes, se establece que las predicciones, videncias psiquicas, lecturas de cartas y hechizos tienen fines de entretenimiento y ayuda personal. 
                                    </li>
                                    <li>
                                        Estos servicios no sustituiran la debida atención médica, legal, financiera, psicológica y psiquiátrica.
                                    </li>
                                    <li>
                                        Todas las personas son diferentes, por tanto los resultados pueden variar de una persona a otra.
                                    </li>
                                    <li>
                                        Los resultados ante cada caso son probables y no existe evidencia científica o eficacia de los mismos.
                                    </li>
                                </ul>
                                <p class="terms">
                                    *Los resultados pueden variar de persona a persona y no pueden ser comprobados científicamente. Más información, consulte nuestros Términos de uso…
                                </p>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="contact-content">
                            <h2 class="contact-content__title">Contáctanos</h2>
                            <p class="contact-content__text">
                                Nuestro trabajo es garantizado y contamos con mas de 4 años de experiencia,  por eso si quieres recibir una atención personalizada puedes escribirnos a nuestro WhatsApp dando clic en este botón.
                            </p>
                            <div class="d-flex justify-content-center">
                                <a href="https://wa.link/cshv85" class="btn btn-lg big-button-primary mt-5">
                                    <i class="fab fa-whatsapp"></i>
                                    Quiero una consulta
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Aside --}}
        <aside>
            {{-- Facebook --}}
            <a href="https://www.facebook.com/Lecturadetarott1" class="icons icon-facebook">
                <i class="fab fa-facebook-f"></i>
            </a>
            {{-- Whatsapp --}}
            <a href="https://wa.link/cshv85" class="icons icon-whatsapp">
                <i class="fab fa-whatsapp"></i>
            </a>
        </aside>
        <footer>
            <div class="d-flex justify-content-center">
                <p>
                    Copyright @ 2021 El Portal Del Tarot - Desarrollado por <a href="https://www.instagram.com/jhon_gomezm"><img src="{{ asset('images/logo/johnsoft.svg')}}" alt="Jhon Gomez Marin"></a>
                </p>
            </div>
        </footer>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
        <script>
            $(document).ready(function(){
                $(".services-content__carousel").owlCarousel({
                    loop:true,
                    margin:10,
                    responsiveClass: true,
                    responsive:{
                        0:{
                            items:1,
                            nav:true
                        },
                        600:{
                            items:3,
                            nav:false,
                            autoplay: true
                        },
                        1000:{
                            items:4,
                            nav:true,
                            loop:true,
                        }
                    }
                });

                $(".testimonials-content__carousel").owlCarousel({
                    loop: true,
                    margin:10,
                    responsiveClass: true,
                    responsive:{
                        0:{
                            items:1,
                            loop:true,
                            nav:true
                        },
                        600:{
                            items:1,
                            nav:true,
                            loop:true,
                            autoplay: true
                        },
                        1000:{
                            items:1,
                            nav:true,
                            loop:true,
                            autoplay: true
                        }
                    }
                });
            });
        </script>
    </body>
</html>
