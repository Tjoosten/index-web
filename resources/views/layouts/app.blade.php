<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="content">
<div id="app">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-newspaper-o"></i> Nieuws</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"><i class="fa fa-calendar"></i> Kalender</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="fa fa-file-text-o"></i> Onze Visie
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="fa fa-heart"></i> Ondersteund ons
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-envelope-o"></i> Contact</a>
                    </li>
                </ul>
            </div>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    @if (Auth::guest())
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="flag-icon flag-icon-squared flag-icon-nl"></span> NL
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="flag-icon flag-icon-squared flag-icon-fr"></span> FR
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="flag-icon flag-icon-squared flag-icon-us"></span> EN
                            </a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link">
                                <i class="fa fa-bell-o"></i>
                                <span class="badge badge-light">9</span>
                                <span class="sr-only">unread messages</span>
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user"></i> {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a href="" class="dropdown-item">
                                    <i class="fa fa-fw fa-cogs"></i> Instellingen
                                </a>

                                <a href="" class="dropdown-item">
                                    <i class="fa fa-fw fa-bug"></i> Meld een probleem
                                </a>

                                <div class="dropdown-divider"></div>

                                <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    <i class="fa fa-fw fa-sign-out"></i> Afmelden
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </li>
                    @endif
                </ul>
            </div>

        </div>
    </nav>

    @yield('content')

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <h5>Activisme_BE.</h5>
                    <div class="row">
                        <div class="col-6">
                            <ul class="list-unstyled">
                                <li><a href="https://www.vrede.be/">Vrede VZW</a></li>
                                <li><a href="https://nonukes.be/">Belgische coalitie kernwapens</a></li>
                                <li><a href="http://www.solidarityforall.be/">Solidarity for all</a></li>
                                <li><a href="http://www.icanw.org/">ICAN</a></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="">Visie</a></li>
                                <li><a href="">Ondersteun ons</a></li>
                                <li><a href="{{ route('disclaimer.index') }}">Disclaimer</a></li>
                            </ul>
                        </div>
                    </div>
                    <ul class="nav">
                        <li class="nav-item"><a href="" class="social-facebook nav-link pl-0"><i class="fa fa-facebook fa-lg"></i></a></li>
                        <li class="nav-item"><a href="" class="social-twitter nav-link"><i class="fa fa-twitter fa-lg"></i></a></li>
                        <li class="nav-item"><a href="" class="social-github nav-link"><i class="fa fa-github fa-lg"></i></a></li>
                        <li class="nav-item"><a href="" class="social-flickr nav-link"><i class="fa fa-flickr fa-lg"></i></a></li>
                    </ul>
                    <br>
                </div>
                <div class="col-2">
                    <h5 class="text-md-right">Contacteer ons</h5>
                    <hr>
                </div>
                <div class="col-5">
                    <form>
                        <fieldset class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </fieldset>
                        <fieldset class="form-group">
                            <textarea class="form-control" id="exampleMessage" placeholder="Message"></textarea>
                        </fieldset>
                        <fieldset class="form-group text-xs-right">
                            <button type="button" class="br-card btn btn-secondary-outline btn-md"><i class="fa fa-send"></i> Verstuur</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </footer>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
