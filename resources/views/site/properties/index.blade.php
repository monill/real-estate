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

@section('title', 'Propriedades')

@section('content')

    <section>
        <div class="page-title-container bg-image bg-cover bg-pattern">
            <div class="page-title">
                <div class="container">
                    <h1>Propriedades</h1>
                </div>
            </div>
        </div>
    </section>

    @include('site.includes.search')

    <section>
        <div class="section-content">
            <div class="container">
                <div class="section-header onscroll-animate" data-animation="fadeInLeft">
                    <h1>Listagens Recentes</h1>
                    <h4>Veja nossas listas recentes aqui, você vai encontrar todos os tipos de casas.</h4>
                </div>
                <div class="row">
                    @foreach($properties as $property)
                    <div class="col-md-4 onscroll-animate">
                        <article>
                            <div class="post-preview">
                                <a href="{{ route('propriedade', [$property->id, $property->slug]) }}">
                                    <section>
                                        <div class="post-preview-img">
                                            <div class="post-preview-img-inner">
                                                <img alt="post img" src="{{ $property->getMainImage() }}">
                                            </div>
                                            <div class="post-preview-label">{{ $property->getPurpose() }}</div>
                                        </div>
                                    </section>
                                </a>
                                <div class="post-preview-content">
                                    <h2 class="post-preview-heading">{{ $property->name }}</h2>
                                    <p> {!! str_limit($property->description, 107, '...') !!}</p>
                                    <div class="post-preview-price-container">
                                        <a href="{{ route('propriedade', [$property->id, $property->slug]) }}" class="read-more-link-alt">Leia mais</a>
                                        <p class="listing-price">R$ {{ $property->getValue() }}<span class="small">per month</span></p>
                                    </div>
                                    <div class="post-preview-detail">
                                        <a href="#">2500 Sq Ft</a> <span class="delimiter-inline-alt"></span>
                                        <a href="#">4 Bedrooms</a> <span class="delimiter-inline-alt"></span>
                                        <a href="#">2 Bathrooms</a> <span class="delimiter-inline-alt"></span>
                                        <a href="#">1 Garage</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div><!-- .col-md-4 -->
                    @endforeach

                </div><!-- .row -->
                <div class="text-center onscroll-animate">
                    {{ $properties->links() }}
                </div>
            </div><!-- .container -->
        </div><!-- .section-content -->
    </section>

    <section>
        <div class="bg-buildings">
            <div class="container-big section-content bg-logo">
                <div class="container clearfix">
                    <div class="big-notice onscroll-animate">
                        <h3><span class="text-uppercase"><strong>Home</strong>tastic</span> is a beautifull Template for Real Estate businesses, includes all elements needed to start the job</h3>
                        <div class="onscroll-animate pull-right" data-delay="700" data-animation="flipInY">
                            <div class="button-container"><a class="button" href="#">Template</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
