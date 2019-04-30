@extends('site.layout.main')

@section('seo')
    <meta name="keywords" content="{{ $settings->meta_keywords }}">
    <meta name="description" content="{{ $settings->meta_description }}">
    <meta name="robots" content="index, follow">

    <meta property="og:locale" content="pt_BR" />
    <meta property="og:site_name" content="{{ $settings->site_title }}" />
    <meta property="og:type" content="article" />
    <meta property="og:image" content="{{ asset('site/images/logo.png') }}" />
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:url" content="{{ url('contato') }}" />
    <meta property="og:title" content="{{ $settings->site_title }}" />
    <meta property="og:description" content="{{ $settings->meta_description }}" />
@endsection

@section('title', 'Contato')

@section('content')

    <section>
        <div class="page-title-container bg-image bg-cover bg-pattern">
            <div class="page-title">
                <div class="container">
                    <h1>Contato</h1>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="margin-10"></div>
        <!-- Google Map -->
        <div class="google-map-container">
            <div class="google-map">
                <div id="map-canvas"></div>
            </div>
        </div>
        <!-- /Google Map -->
        <div class="margin-10"></div>
    </section>

    <section>
        <div class="section-content">
            <div class="container">
                <div class="section-header onscroll-animate" data-animation="fadeInLeft">
                    <h1>Entre em contato</h1>
                    <h4>Se você quiser nos perguntar sobre a propriedade faça isso imediatamente, estamos esperando.</h4>
                </div>
                <div class="row">
                    <div class="col-md-4 onscroll-animate">
                        <div class="clearfix">
                            <img class="img-inline logo-style3" alt="Logo" src="{{ asset('site/images/logo3.png') }}"> <span class="heading-small-inline">{{ $settings->site_title }}</span>
                        </div>
                        <hr>

                        <h6 class="heading-small-inline">Sobre</h6>
                        <p>{{ str_limit($settings->about, 250) }}</p>

                        <div class="margin-10"></div>
                        <div class="text-bigger">
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
                        </div>
                        <div class="margin-40"></div>
                    </div><!-- .col-md-4 -->
                    <div class="col-md-8 onscroll-animate" data-delay="400">
                        {!! Form::open(['url' => 'contato', 'class' => 'form-contact-full']) !!}
                            <div class="row">
                                <div class="col-xs-6">
                                    <label for="name">Nome *</label>
                                    <input type="text" name="name" id="name" placeholder="Nome" required maxlength="100" minlength="2">
                                    <label for="subject">Assunto *</label>
                                    <input type="text" name="subject" id="subject" placeholder="Assunto" required maxlength="100" minlength="2">
                                </div>
                                <div class="col-xs-6">
                                    <label for="email">E-mail *</label>
                                    <input type="email" name="email" id="email" placeholder="E-mail" required maxlength="120" minlength="5">
                                    <label for="phone">Telefone</label>
                                    <input type="text" name="phone" id="phone" placeholder="Telefone para contato" maxlength="100">
                                </div>
                            </div>
                            <label for="message">Mensagem *</label>
                            <textarea name="message" id="message" placeholder="Mensagem" required maxlength="1000" minlength="10"></textarea>
                            <p class="return-msg"></p>
                            <div class="text-right">
                                <div class="form-contact-full-submit">
                                    <input type="submit" value="Enviar Mensagem">
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div><!-- .col-md-4 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .section-content -->
    </section>

    @include('site.includes.agents')

    @include('site.includes.quote')

@endsection

@section('scripts')

    <script>
        function initMap() {
            let uluru = {lat: {{ $settings->latitude }}, lng: {{ $settings->longitude }}};
            let map = new google.maps.Map(document.getElementById('map-canvas'), {
                zoom: 15,
                center: uluru,
                zoomControl: true,
                zoomControlOpt: {
                    style: 'SMALL',
                    position: 'TOP_LEFT'
                },
                panControl: false,
                streetViewControl: false,
                mapTypeControl: false,
                overviewMapControl: false,
                scrollwheel: false,
                draggable: true,
            });
            let marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBI6yreMxqsm-wuLrBIdNvawJcbkyAOnj8&callback=initMap"></script>

@endsection
