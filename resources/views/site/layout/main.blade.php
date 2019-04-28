<!DOCTYPE html>
<!--[if IE 7 ]> <html lang="{{ app()->getLocale() }}" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]> <html lang="{{ app()->getLocale() }}" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]> <html lang="{{ app()->getLocale() }}" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="{{ app()->getLocale() }}" xml:lang="{{ app()->getLocale() }}" class="no-js"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <!--[if lt IE 9]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Joao">
    <meta name="robots" content="index, follow">
    @yield('seo')

    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700,500,400italic,500italic%7CMontserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Icon-Font -->
    <link rel="stylesheet" href="{{ asset('site/vendor/font-awesome/css/font-awesome.min.css') }}" type="text/css">

    <link rel="stylesheet" href="{{ asset('site/vendor/bootstrap/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('site/vendor/stroll/stroll.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('site/vendor/owl-carousel/owl.carousel.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('site/css/animate.min.css') }}" type="text/css">
    <link id="main-stylesheet" rel="stylesheet" href="{{ asset('site/css/main.css') }}" type="text/css">

    <title>Site - @yield('title')</title>

    <script type="text/javascript" src="{{ asset('site/js/modernizr.js') }}"></script>

    <style>
        #theme-customizer {
            font-size: 15px;
            position: fixed;
            background-color: #FFF;
            width: 290px;
            left: -290px;
            top: 50px;
            color: #000;
            -webkit-transition: left 0.7s ease-out;
            -moz-transition: left 0.7s ease-out;
            -o-transition: left 0.7s ease-out;
            transition: left 0.7s ease-out;
            font-style: italic;
            text-align: center;
            padding: 0 5px 5px 5px;
            z-index: 99999;
            border: 1px #e1e1e1 solid;
            border-left: none;
        }

        #theme-customizer.active {
            left: 0;
        }

        #theme-customizer .customizer-heading {
            font-size: 20px;
            margin: 25px 0;
        }

        #theme-customizer .customizer-info {
            color: #969696;
            font-size: 13px;
        }

        #theme-customizer hr {
            margin: 20px auto;
            height: 1px;
            width: 80%;
            background-color: #e8e8e8;
        }

        #theme-customizer-trigger {
            position: absolute;
            background-color: #FFF;
            width: 50px;
            height: 50px;
            right: -50px;
            top: -1px;
            font-size: 27px;
            line-height: 50px;
            text-align: center;
            cursor: pointer;
            border: 1px #e1e1e1 solid;
            border-left: none;
        }

        .theme-setting {
            width: 54px;
            height: 54px;
            display: inline-block;
            margin: 0px 2px;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            border: 2px #FFF solid;
            -webkit-transition: border 0.2s ease-out;
            -moz-transition: border 0.2s ease-out;
            -o-transition: border 0.2s ease-out;
            transition: border 0.2s ease-out;
            cursor: pointer;
        }

        .theme-setting.theme-pattern {
            border-color: #E1E1E1;
        }

        .theme-setting:hover {
            border-color: #B1B1B1;
        }

        .theme-setting.active {
            border-color: #B1B1B1;
        }
    </style>
</head>

<body>
<div id="theme-customizer">
    <div id="theme-customizer-trigger">
        <i class="fa fa-gears"></i>
    </div>
    <p class="customizer-heading">Personalização</p>
    <hr>
    <p>Trocar Cor</p>
    <div class="theme-setting theme-stylesheet active" style="background-color:#51bbe5" data-stylesheet="css/styles/main.css"></div>
    <div class="theme-setting theme-stylesheet" style="background-color:#336699" data-stylesheet="css/skins/dark-blue.css"></div>
    <div class="theme-setting theme-stylesheet" style="background-color:#8cc739" data-stylesheet="css/skins/light-green.css"></div>
    <div class="theme-setting theme-stylesheet" style="background-color:#ba6222" data-stylesheet="css/skins/brown.css"></div>
    <div class="theme-setting theme-stylesheet" style="background-color:#cc0000" data-stylesheet="css/skins/red.css"></div>
    <div class="theme-setting theme-stylesheet" style="background-color:#ff717e" data-stylesheet="css/skins/pink.css"></div>
    <div class="theme-setting theme-stylesheet" style="background-color:#7aba7a" data-stylesheet="css/skins/dark-green.css"></div>
    <div class="theme-setting theme-stylesheet" style="background-color:#84596b" data-stylesheet="css/skins/purple.css"></div>
    <div class="theme-setting theme-stylesheet" style="background-color:#ff9900" data-stylesheet="css/skins/orange.css"></div>
    <hr>
    <p>Trocar Padrão/Fundo</p>
    <div class="theme-setting theme-pattern active" style="background:#FFF" data-background="#FFF"></div>
    <div class="theme-setting theme-pattern" style="background:url('site/images/patterns/1.jpg')" data-background="url('site/images/patterns/1.jpg')"></div>
    <div class="theme-setting theme-pattern" style="background:url('site/images/patterns/2.jpg')" data-background="url('site/images/patterns/2.jpg')"></div>
    <div class="theme-setting theme-pattern" style="background:url('site/images/patterns/3.jpg')" data-background="url('site/images/patterns/3.jpg')"></div>
    <div class="theme-setting theme-pattern" style="background:url('site/images/patterns/4.jpg')" data-background="url('site/images/patterns/4.jpg')"></div>
    <hr>
    <p class="customizer-info">Novas peles podem ser facilmente feitas alterando-se algumas variáveis em menos folhas de estilo, de modo que elas possam se ajustar, por exemplo, às cores do logotipo.</p>
</div>

<div id="page-loader">
    <div class="centered-columns">
        <div class="centered-column">
            <img alt="loader" src="{{ asset('site/images/loader.gif') }}">
        </div>
    </div>
</div>

<header id="header-section">
    <div class="site-top">
        <div class="container clearfix">
            <div class="pull-left">
                @if($settings->email != null)
                <span class="site-top-item">
                    <i class="fa fa-envelope"></i> {{ $settings->email }}
                </span>
                @endif
                @if($settings->phone1 != null)
                <span class="site-top-item">
                    <i class="fa fa-phone"></i> {{ $settings->phone1 }}
                </span>
                @endif
                @if($settings->phone2 != null)
                <span class="site-top-item">
                    <i class="fa fa-phone"></i> {{ $settings->phone2 }}
                </span>
                @endif
            </div>
            @if (Route::has('login'))
                <div class="pull-right">
                    @auth
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    @else
                        <div class="site-top-item">
                            <a href="{{ route('login') }}"><i class="fa fa-user"></i> Login</a>
                        </div>
                    @endauth
                </div>
            @endif
        </div><!-- .container -->
    </div><!-- .site-top -->
    <div class="main-menu">
        <div class="container">
            <img class="pull-left main-logo" alt="hometastic" src="{{ asset('site/images/logo.png') }}">
            <div class="menu-button"><i class="fa fa-reorder"></i></div>
            <nav class="menu-container underscore-container menu-container-fade">
                <ul>
                    <li class="active"><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('propriedades') }}">Propriedades</a></li>
                    <li><a href="{{ url('corretores') }}">Corretores</a></li>
                    <li><a href="{{ url('galeria') }}">Galeria</a></li>
                    <li><a href="{{ url('blog') }}">Blog</a></li>
                    <li><a href="{{ url('contato') }}">Contato</a></li>
                </ul>
                <div class="underscore"><div class="underscore-inner"></div></div>
            </nav>
        </div><!-- .container -->
    </div><!-- .main-menu -->
</header>

@yield('content')

<footer id="footer-section">
    <a href="#header-section" class="scroll-to" id="to-top"></a>
    <div class="container footer-info">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-sm-6 footer-column onscroll-animate">
                        <h4><img alt="Hometastic" src="{{ asset('site/images/logo.png') }}"></h4>
                        <p>{{ $settings->about }}</p>
                    </div>
                    <div class="col-sm-6 footer-column onscroll-animate" data-delay="400">
                        <h4>Posts Recentes</h4>
                        <ul class="list-links-simple">
                            <li><a href="#">Lorem Post With Video Format</a></li>
                            <li><a href="#">Example Video Image Post</a></li>
                            <li><a href="#">Example Post With Portfolio Post Format</a></li>
                            <li><a href="#">Example Post With Image Post Format</a></li>
                            <li><a href="#">Lorem Ipsum Dolor Sit Amet</a></li>
                        </ul>
                    </div>
                </div><!-- .row -->
            </div><!-- .col-md-6 -->
            <div class="col-md-6">
                <div class="row">
                    <div class="col-sm-6 footer-column font-normal onscroll-animate" data-delay="600">
                        <h4>Informações de Contato</h4>
                        @if($settings->phone1 != null)
                            <div class="icon-opening-wrapper">
                                <div class="icon-opening-container">
                                    <div class="icon-opening"><i class="fa fa-phone"></i></div>
                                    <div class="icon-opening-content">{{ $settings->phone1 }}</div>
                                </div>
                            </div>
                        @endif
                        @if($settings->phone2 != null)
                            <div class="icon-opening-wrapper">
                                <div class="icon-opening-container">
                                    <div class="icon-opening"><i class="fa fa-phone"></i></div>
                                    <div class="icon-opening-content">{{ $settings->phone2 }}</div>
                                </div>
                            </div>
                        @endif
                        @if($settings->email != null)
                            <div class="icon-opening-wrapper">
                                <div class="icon-opening-container">
                                    <div class="icon-opening"><i class="fa fa-envelope-alt"></i></div>
                                    <div class="icon-opening-content">{{ $settings->email }}</div>
                                </div>
                            </div>
                        @endif
                        @if($settings->address != null)
                            <div class="icon-opening-wrapper">
                                <div class="icon-opening-container">
                                    <div class="icon-opening"><i class="fa fa-globe"></i></div>
                                    <div class="icon-opening-content">{{ $settings->address }}</div>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="col-sm-6 footer-column onscroll-animate" data-delay="800">
                        <h4>Newsletter</h4>
                        <p>Subscreva a nossa newsletter e iremos mantê-lo informado sobre novas ofertas.</p>
                        <form class="form-subscribe" id="rss-subscribe" action="#" method="post" data-email-not-set-msg="E-mail deve ser definido" data-ajax-fail-msg="Ajax não pôde definir a solicitação" data-success-msg="Email adicionado com sucesso">
                            <input type="text" name="name" placeholder="seu nome" required>
                            <input type="text" name="email" placeholder="seu e-mail..." required>
                            <div class="text-right">
                                <input type="submit" value="Cadastrar-me">
                            </div>
                            <p class="return-msg"></p>
                        </form>
                    </div>
                </div><!-- .row -->
            </div><!-- .col-md-6 -->
        </div><!-- .row -->
    </div><!-- .container -->
    <div class="main-menu-alt">
        <div class="container">
            <div class="menu-button"><i class="fa fa-reorder"></i></div>
            <nav id="bottom-menu" class="menu-container menu-container-slide">
                <div class="underscore-container">
                    <ul>
                        <li class="active"><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('propriedades') }}">Propriedades</a></li>
                        <li><a href="{{ url('corretores') }}">Corretores</a></li>
                        <li><a href="{{ url('galeria') }}">Galeria</a></li>
                        <li><a href="{{ url('blog') }}">Blog</a></li>
                        <li><a href="{{ url('contato') }}">Contato</a></li>
                    </ul>
                    <div class="underscore"><div class="underscore-inner"></div></div>
                </div>
            </nav>
        </div><!-- .container -->
    </div><!-- .main-menu-alt -->
    <div class="site-info">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 onscroll-animate" data-animation="fadeInLeft">
                    <p>{{ date('Y') }} Todos os direitos reservados. Feito com <i class="red fa fa-heart-empty"></i> por Nós</p>
                </div>
                <div class="col-xs-6 text-right onscroll-animate" data-animation="fadeInRight">
                    <div class="socials-wrapper">
                        @if($settings->facebook != null)
                        <div class="social-round-container">
                            <a href="{{ $settings->facebook }}" target="_blank"><i class="fa fa-facebook"></i></a>
                        </div>
                        @endif
                        @if($settings->twitter != null)
                        <div class="social-round-container">
                            <a href="{{ $settings->twitter }}" target="_blank"><i class="fa fa-twitter"></i></a>
                        </div>
                        @endif
                        @if($settings->googleplus != null)
                        <div class="social-round-container">
                            <a href="{{ $settings->googleplus }}" target="_blank"><i class="fa fa-google-plus"></i></a>
                        </div>
                        @endif
                        @if($settings->linkedin != null)
                        <div class="social-round-container">
                            <a href="{{ $settings->linkedin }}" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                        @endif
                        @if($settings->link != null)
                        <div class="social-round-container">
                            <a href="{{ $settings->link }}" target="_blank"><i class="fa fa-globe"></i></a>
                        </div>
                        @endif
                    </div>
                </div>
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .site-info -->
</footer>

<script src="{{ asset('site/vendor/jquery/jquery-1.11.2.min.js') }}"></script>
<script src="{{ asset('site/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('site/vendor/owl-carousel/owl.carousel.min.js') }}"></script>
@yield('scripts')
<script src="{{ asset('site/vendor/stroll/stroll.min.js') }}"></script>
<script src="{{ asset('site/js/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('site/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('site/js/jquery.inview.min.js') }}"></script>
<script src="{{ asset('site/js/custom.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function(e) {
        var main_stylesheet = $('#main-stylesheet');
        var theme_customizer = $('#theme-customizer');
        var theme_stylesheets = $('.theme-stylesheet');
        var theme_patterns = $('.theme-pattern');
        $('#theme-customizer-trigger').on('click', function(e) {
            theme_customizer.toggleClass('active');
        });

        theme_stylesheets.on('click', function(e) {
            theme_stylesheets.removeClass('active');
            main_stylesheet.attr('href', $(this).data('stylesheet'));
            $(this).addClass('active');
        });
        theme_patterns.on('click', function(e) {
            theme_patterns.removeClass('active');
            $('body').css('background', $(this).data('background'));
            $(this).addClass('active');
        });
    });
</script>
</body>
</html>
