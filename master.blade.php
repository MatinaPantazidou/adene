<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Portal Energia</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">

    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/icon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/icon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/icon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/icon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/icon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/icon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/icon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/icon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/icon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('img/icon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/icon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/icon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/icon/favicon-16x16.png') }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link rel="manifest" href="{{ asset('manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('img/icon/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="{{ asset(mix('css/front.css')) }}">

</head>
<body class="@stack('body-classes')">
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please
  <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
<div id="app">
    <header>
        <div id="header" class="container items-center text-right">
            <ul>
                <li><a href="#">Cinergia</a></li>
                <li><a href="#">Observatório de Energia</a></li>
                <li><a href="#">Poupa Energia</a></li>
                <li><a href="#">Casa +</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" role="button" @click.prevent="toggle('locales')"
                       aria-haspopup="true"
                       :aria-expanded="toggleables['locales'] ? 'true' : 'false'">{{ strtoupper(app()->getLocale()) }}
                        <span class="caret"></span></a>
                    <div class="dropdown-content">
                        <ul>
                            @foreach(config('app.locales') as $locale => $description)
                                <li><a href="{{ __URL($locale) }}">{{ $description }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </li>
                <li><a href="#"><i class="fa fa-user"></i></a></li>
                <li><a href="#"><i class="fa fa-search"></i></a></li>
            </ul>
        </div>

        <nav id="primaryMenuNav">
            <div class="row container">
                <input type="checkbox" id="nav-primary" class="hidden"/>
                <div class="menu-primary">
                    <label for="nav-primary" class="nav-open"><i></i><i></i><i></i></label>
                </div>
                <div class="col-md-3 self-center">
                    <a class="" href="{{ __innerURL(env('APP_URL')) }}">
                        <img alt="Portugal Energia" src="{{ asset('img/portugal-energia.svg') }}" width="200"
                             height="100">
                    </a>
                </div>
                <div class="row col-md-9 nav-container text-right justify-end items-center">
                    <ul>
                        <li class="col text-left">
                            <a href="">Oportunidades de Financiamento</a>
                        </li>
                        <li class="col text-left">
                            <a href="">Comunicar Energia</a>
                        </li>
                        <li class="col">
                            <a href="">Ajuda</a>
                        </li>
                        <li class="col">
                            <a href="">Outros</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
  </header>
  <div class="container">

  @yield("main")

    </div>
    <footer>
        <div class="container row footer-menus">
            <div class="col-lg-6 col-xs-12">
                <img src="{{ asset('images/temp/observa.png')}}" class="responsive">
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
            <div class="col-lg-3 col-xs-12 col-sm-6">
                <ul>
                    <li>
                        <a href="#" class="text-bold text-positive">Oportunidades de Financiamento</a>
                        <ul>
                            <li><a href="#">Nacional</a></li>
                            <li><a href="#">Europeu</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="text-bold text-positive">Comunicar Energia</a>
                        <ul>
                            <li><a href="#">Energia nas medias</a></li>
                            <li><a href="#">Publicações Periódicas</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="text-bold text-positive">Ajuda</a></li>
                    <li><a href="#" class="text-bold text-positive">Outros</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-xs-12 col-sm-6">
                <ul>
                    <li><strong>Outros websites Portugal Energia</strong></li>
                    <li><a href="#">Portugal energia</a></li>
                    <li><a href="#">Casa +</a></li>
                    <li><a href="#">Observatório da energia</a></li>
                    <li><a href="#">Poupa energia</a></li>
                </ul>
                <ul>
                    <li><strong>Sina-nos nas redes sociais</strong></li>
                    <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i> Twitter</li>
                    <li><a href="#"><i class="fa fa-linkedin"></i> LinkedIn</a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i> Instagram</a></li>
                </ul>
            </div>
        </div>
    </footer>
</div>
<script>
    window.globals = {
        APP_URL: '{{ env('APP_URL') }}',
        CSRF_TOKEN: '{{ csrf_token() }}'
    };

    window.ga = function () {
        ga.q.push(arguments)
    };
    ga.q = [];
    ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto');
    ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>
<script src="{{ asset(mix('js/manifest.js')) }}" defer></script>
<script src="{{ asset(mix('js/vendor.js')) }}" defer></script>
<script src="{{ asset(mix('js/front.js')) }}"  defer></script>
@stack("scripts")
</body>
</html>
