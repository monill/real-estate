@extends('site.layout.main')

@section('seo')
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="robots" content="index, follow">

    <meta property="og:locale" content="pt_BR" />
    <meta property="og:site_name" content="" />
    <meta property="og:type" content="article" />
    <meta property="og:image" content="" />
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:url" content="{{ url('/') }}" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
@endsection

@section('title', 'Propriedade')

@section('css')
    <link rel="stylesheet" href="{{ asset('site/vendor/stroll/stroll.min.css') }}">
    <link rel="stylesheet" href="{{ asset('site/vendor/flexslider/flexslider.min.css') }}">
@endsection

@section('content')
        
    <section>
        <div class="page-title-container bg-image bg-cover bg-pattern">
            <div class="page-title">
                <div class="container">
                    <h1>Property Listings</h1>
                    <h4>featuers / property listings</h4>
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
                                                <img alt="slide1" src="{{ $image->getImages() }}">
                                            </a>
                                            <div class="preview-single-labels">
                                                <div class="clearfix">
                                                    <div class="label-black pull-left">
                                                        <h3>{{ $property->name }}</h3>
                                                        <p>
                                                            <a href="#">Área: {{ $property->area }}</a> <span class="delimiter-inline-alt"></span>
                                                            <a href="#">{{ $property->bedrooms }} Quartos</a> <span class="delimiter-inline-alt"></span>
                                                            <a href="#">{{ $property->bathrooms }} Banheiros</a> <span class="delimiter-inline-alt"></span>
                                                            <a href="#">{{ $property->garage }} Garagem</a>
                                                        </p>
                                                    </div>
                                                    <div class="label-white pull-right">
                                                        <div class="listing-price">
                                                            R$ {{ $property->price }} <span class="small">per month</span>
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
                                        <li><img alt="slide1 thumbnail" src="{{ $image->getImages() }}"></li>
                                        @endforeach
                                    </ul>
                                </div><!-- #carousel -->
                            </div><!-- .onscroll-animate -->
                            <p class="onscroll-animate" data-animation="fadeInUp">{!! $property->description !!}</p>
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
                                                        <i class="fa fa-envelope-alt"></i> <a href="#">{{ $property->user->email }}</a><br>
                                                    </p>
                                                    <a href="{{ url('corretores') }}" class="read-more-link-alt"><span class="text-smaller">Ver o perfil completo</span></a>
                                                </div>
                                            </div><!-- .row -->
                                        </div><!-- .profile -->
                                    </div><!-- .col-md-8 -->
                                    <div class="col-md-4 onscroll-animate" data-animation="fadeInUp">
                                        <h3 class="section-small-heading">Envie uma mensagem</h3>
                                        {!! Form::open(['url' => '/', 'class' => 'form-contact', 'id' => 'contact-form-agent']) !!}
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
                                                            <div class="post-preview-label2">{{ $recent->getPurpose() }}</div>
                                                            <div class="post-img-detail">
                                                                <div class="post-img-detail-wrapper">
                                                                    <div class="post-img-detail-content">
                                                                        <div class="post-img-detail-box">R$ {{ $recent->getValue() }}</div>
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
                    <div class="col-md-3 sidebar">
                        <section>
                            <div class="section-content">
                                <div class="section-header onscroll-animate" data-animation="fadeInLeft">
                                    <h1>Compartilhe It</h1>
                                </div>
                                <div class="onscroll-animate" data-animation="fadeInUp">
                                    <div class="social-container">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                    </div>
                                    <div class="social-container">
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                    </div>
                                    <div class="social-container">
                                        <a href="#"><i class="fa fa-rss"></i></a>
                                    </div>
                                    <div class="social-container">
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                    </div>
                                    <div class="social-container">
                                        <a href="#"><i class="fa fa-tumblr"></i></a>
                                    </div>
                                </div>
                            </div><!-- .section-content -->
                        </section>
    
                        <section>
                            <div class="section-content">
                                <div class="section-header onscroll-animate" data-animation="fadeInLeft">
                                    <h1>Categories</h1>
                                </div>
                                <ul class="list-values">
                                    <li class="onscroll-animate" data-animation="fadeInRight">
                                        <a href="blog_one_column.html">
                                            <article>
                                                <div class="list-values-content">Sport Properties</div>
                                                <div class="list-values-value">15</div>
                                            </article>
                                        </a>
                                    </li>
                                    <li class="onscroll-animate" data-animation="fadeInRight" data-delay="300">
                                        <a href="blog_one_column.html">
                                            <article>
                                                <div class="list-values-content">Gardens</div>
                                                <div class="list-values-value">25</div>
                                            </article>
                                        </a>
                                    </li>
                                    <li class="onscroll-animate" data-animation="fadeInRight" data-delay="400">
                                        <a href="blog_one_column.html">
                                            <article>
                                                <div class="list-values-content">Building Properties</div>
                                                <div class="list-values-value">44</div>
                                            </article>
                                        </a>
                                    </li>
                                    <li class="onscroll-animate" data-animation="fadeInRight" data-delay="500">
                                        <a href="blog_one_column.html">
                                            <article>
                                                <div class="list-values-content">Lake Properties</div>
                                                <div class="list-values-value">12</div>
                                            </article>
                                        </a>
                                    </li>
                                </ul>
                            </div><!-- .section-content -->
                        </section>
    
                        <section>
                            <div class="section-content">
                                <div class="section-header onscroll-animate" data-animation="fadeInLeft">
                                    <h1>Best Agents</h1>
                                </div>
                                <article class="onscroll-animate" data-animation="fadeInRight">
                                    <div class="profile-small">
                                        <div class="profile-small-photo">
                                            <a href="agents.html"><img alt="avatar 1" src="assets/images/agents/1_small.jpg"></a>
                                        </div>
                                        <div class="profile-small-content">
                                            <h5>Hansom Rob</h5>
                                            home expert<br>
                                            <span class="highlight"><i class="fa fa-money"></i> 57 Sales done</span>
                                        </div>
                                    </div>
                                </article>
                                <article class="onscroll-animate" data-animation="fadeInRight" data-delay="400">
                                    <div class="profile-small">
                                        <div class="profile-small-photo">
                                            <a href="agents.html"><img alt="avatar 2" src="assets/images/agents/2_small.jpg"></a>
                                        </div>
                                        <div class="profile-small-content">
                                            <h5>Hakim Quick</h5>
                                            jurist<br>
                                            <span class="highlight"><i class="fa fa-money"></i> 21 Sales done</span>
                                        </div>
                                    </div>
                                </article>
                                <article class="onscroll-animate" data-animation="fadeInRight" data-delay="600">
                                    <div class="profile-small">
                                        <div class="profile-small-photo">
                                            <a href="agents.html"><img alt="avatar 3" src="assets/images/agents/3_small.jpg"></a>
                                        </div>
                                        <div class="profile-small-content">
                                            <h5>John Doe</h5>
                                            property guy<br>
                                            <span class="highlight"><i class="fa fa-money"></i> 11 Sales done</span>
                                        </div>
                                    </div>
                                </article>
                                <p class="text-center">
                                    <a href="agents.html" class="read-more-link-alt"><span class="text-smaller">See all agents</span></a>
                                </p>
                            </div><!-- .section-content -->
                        </section>
    
                        <section>
                            <div class="section-content">
                                <div class="section-header onscroll-animate" data-animation="fadeInLeft">
                                    <h1>Tags</h1>
                                </div>
                                <div class="onscroll-animate">
                                    <div class="tag-container"><a class="tag" href="#">villa lux home</a></div>
                                    <div class="tag-container"><a class="tag" href="#">24ft</a></div>
                                    <div class="tag-container active"><a class="tag" href="#">residence 23ft</a></div>
                                    <div class="tag-container"><a class="tag" href="#">design</a></div>
                                    <div class="tag-container active"><a class="tag" href="#">properties</a></div>
                                    <div class="tag-container"><a class="tag" href="#">developmet</a></div>
                                    <div class="tag-container"><a class="tag" href="#">visualisation</a></div>
                                </div>
                            </div>
                        </section>

                    </div><!-- .col-md-3 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .section-content -->
    </section>

    @include('site.includes.quote')

@endsection

@section('scripts')
    <script src="{{ asset('site/vendor/stroll/stroll.min.js') }}"></script>
    <script src="{{ asset('site/vendor/flexslider/jquery.flexslider-min.js') }}"></script>

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
@endsection
