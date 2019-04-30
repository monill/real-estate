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
    <meta property="og:url" content="{{ url('/') }}" />
    <meta property="og:title" content="{{ $settings->site_title }}" />
    <meta property="og:description" content="{{ $settings->meta_description }}" />
@endsection

@section('title', 'Home')

@section('content')

    <section>
        <div id="main-slider">
            @foreach($sliders as $slider)
            <div class="slide-img bg-image bg-pattern" style="background-image: url('{{ $slider->getMainImage() }}')">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 pull-right">
                            <div class="slide-box arrow-left">
                                <h2>{{ $slider->name }}</h2>
                                <p>{!! str_limit($slider->description, 230) !!}</p>
                                <hr>
                                @if($slider->bedrooms > 0)
                                {{ $slider->bedrooms }} Quartos <span class="delimiter-inline"></span>
                                @endif
                                @if($slider->bathrooms > 0)
                                {{ $slider->bathrooms }} Banheiros <span class="delimiter-inline"></span>
                                @endif
                                @if($slider->garage > 0)
                                {{ $slider->garage }} Garagem
                                @endif
                                <hr>
                                <div class="slide-price-container">
                                    <a href="{{ route('propriedade', [$slider->id, $slider->slug]) }}" class="read-more-link-alt">Saiba mais</a>
                                    <p class="listing-price">R$ {{ $slider->price }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .container -->
            </div><!-- .slide-1 -->
            @endforeach
        </div><!-- .master-slider -->
    </section>

    @include('site.includes.search')

    <section id="citation-section" class="section-contrast">
        <div class="bg-image bg-pattern bg-cover parallax-background">
            <div class="section-content onscroll-animate" data-animation="fadeInUp">
                <p class="citation">“O segredo da criatividade é saber como esconder suas fontes.”</p>
                <p class="citation-author">Albert Einstein</p>
            </div>
        </div>
    </section>

    <section>
        <div class="section-content">
            <div class="container">

                @include('site.includes.properties')

                <div class="text-center onscroll-animate flipInY" data-animation="flipInY">
                    <a href="{{ url('propriedades') }}" class="button-void">Todas as propriedades</a>
                </div>
            </div><!-- .container -->
        </div><!-- .section-content -->
    </section>

    <div class="margin-30 visible-lg-block visible-md-block"></div>

    @include('site.includes.smartphone')

    @include('site.includes.agents')

    <section class="section-dark">
        <div class="section-content">
            <div class="container">
                <div class="section-header onscroll-animate" data-animation="fadeInLeft">
                    <h1>Serviços</h1>
                    <h4>Alguns dos nossos principais serviços.</h4>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6 onscroll-animate" data-animation="fadeInUp">
                                <div class="icon-box">
                                    <div class="icon-box-icon">
                                        <i class="fa fa-signal"></i>
                                    </div>
                                    <h3>Equipe qualificada</h3>
                                    <p>colocar um texto legal aqui.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 onscroll-animate" data-delay="400" data-animation="fadeInUp">
                                <div class="icon-box">
                                    <div class="icon-box-icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <h3>Casas para venda</h3>
                                    <p>colocar um texto legal aqui.</p>
                                </div>
                            </div>
                        </div><!-- .row -->
                    </div><!-- .col-md-6 -->
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6 onscroll-animate" data-delay="600" data-animation="fadeInUp">
                                <div class="icon-box">
                                    <div class="icon-box-icon">
                                        <i class="fa fa-building"></i>
                                    </div>
                                    <h3>Vistoria</h3>
                                    <p>A vistoria tem como objetivo registrar as condições de conservação do imóvel no início do contrato.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 onscroll-animate" data-delay="800" data-animation="fadeInUp">
                                <div class="icon-box">
                                    <div class="icon-box-icon">
                                        <i class="fa fa-th"></i>
                                    </div>
                                    <h3>Terrenos</h3>
                                    <p>colocar um texto legal aqui.</p>
                                </div>
                            </div>
                        </div><!-- .row -->
                    </div><!-- .col-md-6 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .section-content -->
    </section>

    @include('site.includes.quote')

@endsection
