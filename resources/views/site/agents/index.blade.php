@extends('site.layout.main')

@section('seo')
    <meta name="keywords" content="{{ $settings->meta_keywords }}">
    <meta name="description" content="{{ $settings->meta_description }}">
    <meta name="robots" content="index, follow">

    <meta property="og:locale" content="pt_BR"/>
    <meta property="og:site_name" content="{{ $settings->site_title }}"/>
    <meta property="og:type" content="article"/>
    <meta property="og:image" content="{{ asset('imobiliaria.jpg') }}"/>
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="761">
    <meta property="og:url" content="{{ url('corretores') }}"/>
    <meta property="og:title" content="{{ $settings->site_title }}"/>
    <meta property="og:description" content="{{ $settings->meta_description }}"/>
@endsection

@section('title', 'Corretores')

@section('content')

    <section>
        <div class="page-title-container bg-image bg-cover bg-pattern">
            <div class="page-title">
                <div class="container">
                    <h1>Corretores</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="section-delimiter"></div>
    </div>

    <section>
        <div class="section-content">
            <div class="container">
                <div class="section-header onscroll-animate" data-animation="fadeInLeft">
                    <h1>Nossos corretores</h1>
                    <h4>Veja nossos grandes corretores e eles ajudarão você a encontrar o que você precisa.</h4>
                </div>
                @foreach($agents as $agent)
                    <article class="onscroll-animate" data-animation="fadeInRight">
                        <div class="profile-full">
                            <div class="row flex">
                                <div class="col-md-3 profile-full-photo">
                                    <img alt="profile photo" src="{{ $agent->getAvatar() }}">
                                </div>
                                <div class="col-md-9">
                                    <div class="profile-full-content">
                                        <h1>{{ $agent->name }}</h1>
                                        <h4>{{ $agent->job }}</h4>
                                        <p>{{ $agent->about }}</p>
                                        <div class="profile-full-info">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <i class="fa fa-phone"></i> {{ $settings->phone1 }}<br>
                                                    <i class="fa fa-phone"></i> {{ $settings->phone2 }}<br>
                                                    <i class="fa fa-envelope-alt"></i> {{ $agent->email }}<br>
                                                </div>
                                                <div class="col-md-6 text-right">
                                                    <div class="profile-socials-container">
                                                        @if($settings->facebook != null)
                                                            <a href="{{ $settings->facebook }}" class="profile-social"
                                                               target="_blank"><i class="fa fa-facebook"></i></a>
                                                        @endif
                                                        @if($settings->twitter != null)
                                                            <a href="{{ $settings->twitter }}" class="profile-social"
                                                               target="_blank"><i class="fa fa-twitter"></i></a>
                                                        @endif
                                                        @if($settings->googleplus != null)
                                                            <a href="{{ $settings->googleplus }}" class="profile-social"
                                                               target="_blank"><i class="fa fa-google-plus"></i></a>
                                                        @endif
                                                        @if($settings->linkedin != null)
                                                            <a href="{{ $settings->linkedin }}" class="profile-social"
                                                               target="_blank"><i class="fa fa-linkedin"></i></a>
                                                        @endif
                                                        @if($settings->link != null)
                                                            <a href="{{ $settings->link }}" class="profile-social"
                                                               target="_blank"><i class="fa fa-globe"></i></a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .profile-full-info -->
                                    </div><!-- .profile-full-content -->
                                </div><!-- .col-md-9 -->
                            </div><!-- .row -->
                        </div><!-- .profile-full -->
                    </article>
                @endforeach
            </div><!-- .container -->
        </div><!-- .section-content -->
    </section>

    <div class="margin-80 visible-lg-block visible-md-block"></div>

    @include('site.includes.smartphone')

    <section>
        <div class="bg-buildings">
            <div class="section-content">
                <div class="container">
                    <div class="section-header onscroll-animate" data-animation="fadeInLeft">
                        <h1>Parceiros</h1>
                        <h4>Veja alguns de nossos parceiros e ótimos marcas com quem trabalhamos.</h4>
                    </div>
                    <div class="row text-center">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img class="logo-img" alt="parceiro 1"
                                         src="{{ asset('site/images/partners/partner1.png') }}">
                                </div>
                                <div class="col-sm-4">
                                    <img class="logo-img" alt="parceiro 2"
                                         src="{{ asset('site/images/partners/partner2.png') }}">
                                </div>
                                <div class="col-sm-4">
                                    <img class="logo-img" alt="parceiro 3"
                                         src="{{ asset('site/images/partners/partner3.png') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img class="logo-img" alt="parceiro 4"
                                         src="{{ asset('site/images/partners/partner4.png') }}">
                                </div>
                                <div class="col-sm-4">
                                    <img class="logo-img" alt="parceiro 5"
                                         src="{{ asset('site/images/partners/partner5.png') }}">
                                </div>
                                <div class="col-sm-4">
                                    <img class="logo-img" alt="parceiro 6"
                                         src="{{ asset('site/images/partners/partner2.png') }}">
                                </div>
                            </div>
                        </div>
                    </div><!-- .row -->
                </div><!-- .container -->
            </div><!-- .section-content -->
        </div><!-- .bg-buildings -->
    </section>

@endsection
