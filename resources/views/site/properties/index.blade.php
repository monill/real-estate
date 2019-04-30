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
    <meta property="og:url" content="{{ url('propriedades') }}" />
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

                @include('site.includes.properties')

                <div class="text-center onscroll-animate">
                    {{ $properties->links() }}
                </div>
            </div><!-- .container -->
        </div><!-- .section-content -->
    </section>

    @include('site.includes.quote')

@endsection
