<!DOCTYPE html>
<!--[if IE 7 ]>    <html lang="{{ app()->getLocale() }}" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="{{ app()->getLocale() }}" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="{{ app()->getLocale() }}" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="{{ app()->getLocale() }}" xml:lang="{{ app()->getLocale() }}" class="no-js"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <!--[if lt IE 9]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Joao">
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
    <link rel="stylesheet" href="{{ asset('site/assets/css/animate.min.css') }}" type="text/css">
    <link id="main-stylesheet" rel="stylesheet" href="{{ asset('site/assets/css/main.css') }}" type="text/css">

    <title>Site - @yield('title')</title>

    <script type="text/javascript" src="{{ asset('site/assets/js/modernizr.js') }}"></script>

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
    <div class="theme-setting theme-stylesheet active" style="background-color:#51bbe5" data-stylesheet="assets/css/styles/main.css"></div>
    <div class="theme-setting theme-stylesheet" style="background-color:#336699" data-stylesheet="assets/css/skins/dark-blue.css"></div>
    <div class="theme-setting theme-stylesheet" style="background-color:#8cc739" data-stylesheet="assets/css/skins/light-green.css"></div>
    <div class="theme-setting theme-stylesheet" style="background-color:#ba6222" data-stylesheet="assets/css/skins/brown.css"></div>
    <div class="theme-setting theme-stylesheet" style="background-color:#cc0000" data-stylesheet="assets/css/skins/red.css"></div>
    <div class="theme-setting theme-stylesheet" style="background-color:#ff717e" data-stylesheet="assets/css/skins/pink.css"></div>
    <div class="theme-setting theme-stylesheet" style="background-color:#7aba7a" data-stylesheet="assets/css/skins/dark-green.css"></div>
    <div class="theme-setting theme-stylesheet" style="background-color:#84596b" data-stylesheet="assets/css/skins/purple.css"></div>
    <div class="theme-setting theme-stylesheet" style="background-color:#ff9900" data-stylesheet="assets/css/skins/orange.css"></div>
    <hr>
    <p>Trocar Padrão/Fundo</p>
    <div class="theme-setting theme-pattern active" style="background:#FFF" data-background="#FFF"></div>
    <div class="theme-setting theme-pattern" style="background:url('assets/images/patterns/1.jpg')" data-background="url('assets/images/patterns/1.jpg')"></div>
    <div class="theme-setting theme-pattern" style="background:url('assets/images/patterns/2.jpg')" data-background="url('assets/images/patterns/2.jpg')"></div>
    <div class="theme-setting theme-pattern" style="background:url('assets/images/patterns/3.jpg')" data-background="url('assets/images/patterns/3.jpg')"></div>
    <div class="theme-setting theme-pattern" style="background:url('assets/images/patterns/4.jpg')" data-background="url('assets/images/patterns/4.jpg')"></div>
    <hr>
    <p class="customizer-info">Novas peles podem ser facilmente feitas alterando-se algumas variáveis em menos folhas de estilo, de modo que elas possam se ajustar, por exemplo, às cores do logotipo.</p>
</div>

<div id="page-loader">
    <div class="centered-columns">
        <div class="centered-column">
            <img alt="loader" src="{{ asset('site/assets/images/loader.gif') }}">
        </div>
    </div>
</div>

<header id="header-section">
    <div class="site-top">
        <div class="container clearfix">
            <div class="pull-left">
                <span class="site-top-item">
                    <a href="#"><i class="fa fa-envelope"></i> info@mail.com</a>
                </span>
                <span class="site-top-item">
                    <i class="fa fa-phone"></i> 0800-555-0123
                </span>
            </div>
            @if (Route::has('login'))
                <div class="pull-right">
                    @auth
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    @else
                        <div class="site-top-item">
                            <a href="{{ route('login') }}"><i class="fa fa-user"></i> Login</a>
                        </div>
                        @if (Route::has('register'))
                            <div class="site-top-item">
                                <a href="{{ route('register') }}"><i class="fa fa-pencil"></i> Register</a>
                            </div>
                        @endif
                    @endauth
                    <div class="site-top-item">
                        <form id="form-top-search">
                            <input type="text" name="s">
                            <input type="submit" value="Go">
                        </form>
                        <a id="form-top-search-trigger" href="#"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            @endif
        </div><!-- .container -->
    </div><!-- .site-top -->
    <div class="main-menu">
        <div class="container">
            <img class="pull-left main-logo" alt="hometastic" src="images/logo.png">
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
                        <h4><img alt="Hometastic" src="images/logo.png"></h4>
                        <p>Alarmed at this terrible outburst between the two principal and responsible owners of the ship, and feeling half a mind to give up all idea of sailing in a vessel so questionably owned and temporarily commanded.</p>
                        <a href="#" class="read-more-link-alt">Read more</a>
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
                        <h4>Contact Info</h4>
                        <div class="icon-opening-wrapper">
                            <div class="icon-opening-container">
                                <div class="icon-opening"><i class="fa fa-phone"></i></div>
                                <div class="icon-opening-content">0 800 123 456 88</div>
                            </div>
                        </div>
                        <div class="icon-opening-wrapper">
                            <div class="icon-opening-container">
                                <div class="icon-opening"><i class="fa fa-envelope"></i></div>
                                <div class="icon-opening-content">haman.gates@hometastic.com</div>
                            </div>
                        </div>
                        <div class="icon-opening-wrapper">
                            <div class="icon-opening-container">
                                <div class="icon-opening"><i class="fa fa-globe"></i></div>
                                <div class="icon-opening-content">123 Park Avenue, New York, USA</div>
                            </div>
                        </div>
                        <div class="icon-opening-wrapper">
                            <div class="icon-opening-container">
                                <div class="icon-opening"><i class="fa fa-money"></i></div>
                                <div class="icon-opening-content">5,600 Sales done till now</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 footer-column onscroll-animate" data-delay="800">
                        <h4>Newsletter</h4>
                        <p>Subscribe for out newsletter, and we will keep you inform of new offers.</p>
                        <form class="form-subscribe" id="rss-subscribe" action="http://ignitionthemes.eu/theme/homet/save_rss.php" method="post" data-email-not-set-msg="Email must be set" data-ajax-fail-msg="Ajax could not set the request" data-success-msg="Email successfully added">
                            <input type="text" name="email" placeholder="your email...">
                            <div class="text-right">
                                <input type="submit" value="Submit">
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
                    <p>{{ date('Y') }} Todos os direitos reservados. Feito com <i class="red fa fa-heart-empty"></i> por <a title="Us" data-toggle="tooltip" href="http://ignitionthemes.eu/"><em>Us</em></a></p>
                </div>
                <div class="col-xs-6 text-right onscroll-animate" data-animation="fadeInRight">
                    <div class="socials-wrapper">
                        <div class="social-round-container">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </div>
                        <div class="social-round-container">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                        <div class="social-round-container">
                            <a href="#"><i class="fa fa-rss"></i></a>
                        </div>
                        <div class="social-round-container">
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                        <div class="social-round-container">
                            <a href="#"><i class="fa fa-tumblr"></i></a>
                        </div>
                    </div>
                </div>
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .site-info -->
</footer>

<script type="text/javascript" src="{{ asset('site/vendor/jquery/jquery-1.11.2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('site/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('site/vendor/owl-carousel/owl.carousel.min.js') }}"></script>
@yield('scripts')
<script type="text/javascript" src="{{ asset('site/vendor/stroll/stroll.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('site/assets/js/jquery.scrollTo.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('site/assets/js/jquery.stellar.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('site/assets/js/jquery.inview.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('site/assets/js/custom.js') }}"></script>

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
