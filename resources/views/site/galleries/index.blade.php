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
    <meta property="og:url" content="{{ url('galeria') }}" />
    <meta property="og:title" content="{{ $settings->site_title }}" />
    <meta property="og:description" content="{{ $settings->meta_description }}" />
@endsection

@section('css')
    <link href="{{ asset('site/vendor/lightbox/css/lightbox.css') }}" rel="stylesheet" />
@endsection

@section('title', 'Galeria')

@section('content')

    <section>
        <div class="page-title-container bg-image bg-cover bg-pattern">
            <div class="page-title">
                <div class="container">
                    <h1>Galeria</h1>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="section-content">
            <div class="container">
                <div class="section-header onscroll-animate" data-animation="fadeInLeft">
                    <h1>Galeria</h1>
                    <h4>Aqui você encontrará algumas de nossas melhores propriedades que vendemos.</h4>
                </div>
                <div class="row">

                    @foreach($images as $image)
                    <div class="col-md-4 onscroll-animate" data-delay="400">
                        <div class="post-preview gallery-post">
                            <div class="post-preview-img">
                                <div class="post-preview-img-inner">
                                    <img alt="post img" src="{{ $image->getImages() }}">
                                </div>
                                <div class="post-img-detail">
                                    <div class="post-img-detail-wrapper">
                                        <div class="post-img-detail-content">
                                            <a href="{{ $image->getImages() }}" data-lightbox="post2-img" class="post-img-detail-icon">
                                                <i class="fa fa-search"></i>
                                            </a>
                                            <a href="{{ route('propriedade', [$image->property->id, $image->property->slug]) }}" class="post-img-detail-icon"><i class="fa fa-share-alt"></i></a>
                                            <h3>{{ str_limit($image->property->name, 200, '') }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .col-md-4 -->
                    @endforeach

                </div><!-- .row -->

                <div class="text-center onscroll-animate">
                    <div class="pagination">
                        {{ $images->links() }}
                    </div>
                </div>
            </div><!-- .container -->
        </div><!-- .section-content -->
    </section>

    @include('site.includes.quote')

@endsection

@section('scripts')
    <script src="{{ asset('site/vendor/lightbox/js/lightbox.min.js') }}"></script>
@endsection
