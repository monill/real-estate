@extends('site.layout.main')

@section('seo')
    <meta name="description" content="{{ $property->meta_description }}">
    <meta name="keywords" content="{{ $property->meta_keywords }}">
    <meta name="robots" content="index, follow">

    <meta property="og:locale" content="pt_BR" />
    <meta property="og:site_name" content="{{ $settings->site_title }}" />
    <meta property="og:type" content="article" />
    <meta property="og:image" content="" />
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="761">
    <meta property="og:url" content="{{ route('propriedade', [$property->id, $property->slug]) }}" />
    <meta property="og:title" content="{{ $property->name }}" />
    <meta property="og:description" content="{{ $property->meta_description }}" />
@endsection

@section('css')
    <link href="{{ asset('site/vendor/flexslider/flexslider.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('site/vendor/lightbox/css/lightbox.css') }}" rel="stylesheet" />
@endsection

@section('title', 'Propriedade')

@section('content')
        
    <section>
        <div class="page-title-container bg-image bg-cover bg-pattern">
            <div class="page-title">
                <div class="container">
                    <h1>{{ $property->name }}</h1>
                </div>
            </div>
        </div>
    </section>
    
    @include('site.includes.search')
    
    <section>
        <div class="section-content">
            <div class="container">
                <div class="section-header onscroll-animate" data-animation="fadeInLeft">
                    <h1>{{ $property->name }}</h1>
                    <h4>Veja nossas listas recentes aqui, você vai encontrar todos os tipos de casas.</h4>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <section id="slider-section">
                            <div id="flex-slider" class="preview-images-slider">
                                <ul class="slides">
                                    @foreach($images as $image)
                                    <li>
                                        <div class="preview-single">
                                            <a href="{{ $image->getImages() }}" data-lightbox="post1-img">
                                                <img alt="slide-1" src="{{ $image->getImages() }}" style="width: 100%">
                                            </a>
                                            <div class="preview-single-labels">
                                                <div class="clearfix">
                                                    <div class="label-black pull-left">
                                                        <h3>{{ $property->name }}</h3>
                                                        <p>
                                                            <a href="#">Área: {{ $property->area }}</a> <span class="delimiter-inline-alt"></span>
                                                            <a href="#">Quartos: {{ $property->bedrooms }}</a> <span class="delimiter-inline-alt"></span>
                                                            <a href="#">Banheiros: {{ $property->bathrooms }}</a> <span class="delimiter-inline-alt"></span>
                                                            <a href="#">Garagens: {{ $property->garage }}</a>
                                                        </p>
                                                    </div>
                                                    <div class="label-white pull-right">
                                                        <div class="listing-price">
                                                            R$ {{ priceFormat($property->price) }}
                                                            {!! $property->purposeFormat() !!}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="label-color">
                                                    <h3 class="no-margin">{{ $property->getPurpose() }}</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div><!-- #slider -->
                            <div class="onscroll-animate" data-animation="fadeInUp">
                                <div id="flex-carousel" class="preview-thumnails-slider">
                                    <ul class="slides">
                                        @foreach($images as $image)
                                        <li><img alt="slide-1 thumbnail" src="{{ $image->getImages() }}" style="width: 70%"></li>
                                        @endforeach
                                    </ul>
                                </div><!-- #carousel -->
                            </div><!-- .onscroll-animate -->
                            <p class="onscroll-animate" data-animation="fadeInUp">
                                {!! $property->description !!}
                            </p>
                        </section>
    
                        <section id="checkbox-list-section">
                            <div class="section-content">
                                <div class="section-header onscroll-animate" data-animation="fadeInLeft">
                                    <h1>Características</h1>
                                </div>
                                <ul class="list-checkbox">
                                    @foreach($features as $feature)
                                        <li>{{ $feature->feature->name }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </section>

                        @if($property->video1 != null OR $property->video2 != null)
                        <section id="videos-section">
                            <div class="section-content">
                                <div class="section-header onscroll-animate" data-animation="fadeInLeft">
                                    <h1>Live preview - videos</h1>
                                </div>
                                <div class="row">
                                    @if($property->video1 != null)
                                    <div class="col-md-6 onscroll-animate">
                                        <div class="embed-responsive embed-responsive-4by3">
                                            <iframe class="embed-responsive-item" src="{{ $property->videoOne() }}"></iframe>
                                        </div>
                                        <div class="margin-20"></div>
                                    </div>
                                    @endif
                                    @if($property->video2 != null)
                                    <div class="col-md-6 onscroll-animate" data-delay="500">
                                        <div class="embed-responsive embed-responsive-4by3">
                                            <iframe class="embed-responsive-item" src="{{ $property->videoTwo() }}"></iframe>
                                        </div>
                                        <div class="margin-20"></div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </section>
                        @endif

                        @if($property->latitude != null AND $property->longitude != null)
                        <section id="map-section">
                            <div class="section-content">
                                <div class="section-header onscroll-animate" data-animation="fadeInLeft">
                                    <h1>Localização</h1>
                                </div>
                                <!-- Google Map -->
                                <div class="google-map-container">
                                    <div class="google-map">
                                        <div id="map-canvas"></div>
                                    </div>
                                </div>
                                <!-- /Google Map -->
                            </div>
                        </section>
                        @endif
    
                        <section id="listings-section">
                            <div class="section-content">
                                <div class="section-header onscroll-animate" data-animation="fadeInLeft">
                                    <h1>Contate um Corretor</h1>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="profile">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="profile-img">
                                                        <img alt="agente" src="{{ $property->user->getAvatar() }}">
                                                        <div class="profile-img-info">
                                                            @if($settings->facebook != null)
                                                                <a href="{{ $settings->facebook }}" class="profile-social" target="_blank"><i class="fa fa-facebook"></i></a>
                                                            @endif
                                                            @if($settings->twitter != null)
                                                                <a href="{{ $settings->twitter }}" class="profile-social" target="_blank"><i class="fa fa-twitter"></i></a>
                                                            @endif
                                                            @if($settings->googleplus != null)
                                                                <a href="{{ $settings->googleplus }}" class="profile-social" target="_blank"><i class="fa fa-google-plus"></i></a>
                                                            @endif
                                                            @if($settings->linkedin != null)
                                                                <a href="{{ $settings->linkedin }}" class="profile-social" target="_blank"><i class="fa fa-linkedin"></i></a>
                                                            @endif
                                                            @if($settings->link != null)
                                                                <a href="{{ $settings->link }}" class="profile-social" target="_blank"><i class="fa fa-globe"></i></a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 text-left onscroll-animate" data-animation="fadeInUp">
                                                    <h5 class="profile-heading">{{ $property->user->name }}</h5>
                                                    <p>{{ $property->user->job }}</p>
                                                    <div class="profile-cotent">
                                                        <p>{{ str_limit($property->user->about, 200) }}</p>
                                                    </div>
                                                    <p>
                                                        <i class="fa fa-phone"></i> {{ $settings->phone1 }}<br>
                                                        <i class="fa fa-phone"></i> {{ $settings->phone2 }}<br>
                                                        <i class="fa fa-envelope-alt"></i> {{ $property->user->email }}<br>
                                                    </p>
                                                    <a href="{{ url('corretores') }}" class="read-more-link-alt">
                                                        <span class="text-smaller">Ver o perfil completo</span>
                                                    </a>
                                                </div>
                                            </div><!-- .row -->
                                        </div><!-- .profile -->
                                    </div><!-- .col-md-8 -->
                                    <div class="col-md-4 onscroll-animate" data-animation="fadeInUp">
                                        <h3 class="section-small-heading">Envie uma mensagem</h3>
                                        {!! Form::open(['url' => 'question', 'class' => 'form-contact', 'id' => 'contact-form-agent']) !!}
                                        {!! Form::hidden('property_id', $property->id) !!}
                                            <input type="text" name="name" placeholder="Nome">
                                            <input type="text" name="email" placeholder="E-mail">
                                            <textarea name="message" placeholder="Mensagem"></textarea>
                                            <input type="submit" class="submit-alt pull-right" value="Enviar">
                                            <p class="return-msg"></p>
                                        {!! Form::close() !!}
                                    </div>
                                </div><!-- .row -->
                            </div><!-- .section-content -->
                        </section>
    
                        <section id="recent-properties-section">
                            <div class="section-content">
                                <div class="section-header onscroll-animate" data-animation="fadeInLeft">
                                    <h1>Propriedades recentes adicionadas</h1>
                                </div>
                                <div class="onscroll-animate" data-animation="fadeInUp">
                                    <div id="recent_prop_slider" class="pagination-alt">
                                        @foreach(\App\Models\Property::orderBy('id', 'DESC')->take(6)->get() as $recent)
                                        <article>
                                            <div class="post-preview-alt">
                                                <a href="{{ route('propriedade', [$recent->id, $recent->slug]) }}">
                                                    <section>
                                                        <div class="post-preview-img">
                                                            <div class="post-preview-img-inner">
                                                                <img alt="post img" src="{{ $recent->getMainImage() }}">
                                                            </div>
                                                            <div class="post-preview-label{{ $recent->getPurposeColor() }}">{{ $recent->getPurpose() }}</div>
                                                            <div class="post-img-detail">
                                                                <div class="post-img-detail-wrapper">
                                                                    <div class="post-img-detail-content">
                                                                        <div class="post-img-detail-box">R$ {{ priceFormat($recent->price) }}</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </a>
                                                <div class="post-preview-content">
                                                    <h2 class="post-preview-heading">
                                                        <a href="{{ route('propriedade', [$recent->id, $recent->slug]) }}">{{ $recent->name }}</a>
                                                    </h2>
                                                    <div class="post-preview-detail">
                                                        @if($recent->area != null)
                                                            Área: {{ $recent->area }} <span class="delimiter-inline-alt"></span>
                                                        @endif
                                                        @if($recent->bedrooms > 0)
                                                            Quartos: {{ $recent->bedrooms }} <span class="delimiter-inline"></span>
                                                        @endif
                                                        @if($recent->bathrooms > 0)
                                                            Banheiros: {{ $recent->bathrooms }} <span class="delimiter-inline"></span>
                                                        @endif
                                                        @if($recent->garage > 0)
                                                            Garagens: {{ $recent->garage }}
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        @endforeach
                                    </div><!-- #recent_prop_slider -->
                                </div><!-- .onscroll-animate -->
                            </div><!-- .section-content -->
                        </section>
    
                        <div class="margin-30 visible-sm-block visible-xs-block"></div>
                    </div><!-- .col-md-9 -->
                    @include('site.includes.property_sidebar')
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .section-content -->
    </section>

    @include('site.includes.quote')

@endsection

@section('scripts')
    <script src="{{ asset('site/vendor/flexslider/jquery.flexslider-min.js') }}"></script>
    <script src="{{ asset('site/vendor/lightbox/js/lightbox.min.js') }}"></script>

    @if($property->latitude != null || $property->longitude != null)
    <script>
        function initMap() {
            let uluru = {lat: {{ $property->latitude }}, lng: {{ $property->longitude }}};
            let map = new google.maps.Map(document.getElementById('map-canvas'), {
                zoom: 18,
                center: uluru
            });
            let marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBI6yreMxqsm-wuLrBIdNvawJcbkyAOnj8&callback=initMap"> </script>
    @endif
@endsection
