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
                    <div class="col-md-4 onscroll-animate">
                        <div class="post-preview gallery-post">
                            <div class="post-preview-img">
                                <div class="post-preview-img-inner">
                                    <img alt="post img" src="assets/images/listings/1.jpg">
                                </div>
                                <div class="post-img-detail">
                                    <div class="post-img-detail-wrapper">
                                        <div class="post-img-detail-content">
                                            <a href="assets/images/blog/big_01.jpg" data-lightbox="post1-img" class="post-img-detail-icon"><i class="fa fa-search"></i></a>
                                            <a href="property_single.html" class="post-img-detail-icon"><i class="fa fa-share-alt"></i></a>
                                            <h3>Big Beautifull Villa</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .col-md-4 -->
                    <div class="col-md-4 onscroll-animate" data-delay="400">
                        <div class="post-preview gallery-post">
                            <div class="post-preview-img">
                                <div class="post-preview-img-inner">
                                    <img alt="post img" src="assets/images/listings/2.jpg">
                                </div>
                                <div class="post-img-detail">
                                    <div class="post-img-detail-wrapper">
                                        <div class="post-img-detail-content">
                                            <a href="assets/images/blog/big_01.jpg" data-lightbox="post2-img" class="post-img-detail-icon"><i class="fa fa-search"></i></a>
                                            <a href="property_single.html" class="post-img-detail-icon"><i class="fa fa-share-alt"></i></a>
                                            <h3>Big Beautifull Villa</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .col-md-4 -->
                    <div class="col-md-4 onscroll-animate" data-delay="600">
                        <div class="post-preview gallery-post">
                            <div class="post-preview-img">
                                <div class="post-preview-img-inner">
                                    <img alt="post img" src="assets/images/listings/3.jpg">
                                </div>
                                <div class="post-img-detail">
                                    <div class="post-img-detail-wrapper">
                                        <div class="post-img-detail-content">
                                            <a href="assets/images/blog/big_01.jpg" data-lightbox="post3-img" class="post-img-detail-icon"><i class="fa fa-search"></i></a>
                                            <a href="property_single.html" class="post-img-detail-icon"><i class="fa fa-share-alt"></i></a>
                                            <h3>Big Beautifull Villa</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .col-md-4 -->
                </div><!-- .row -->
                <div class="row">
                    <div class="col-md-4 onscroll-animate">
                        <div class="post-preview gallery-post">
                            <div class="post-preview-img">
                                <div class="post-preview-img-inner">
                                    <img alt="post img" src="assets/images/listings/4.jpg">
                                </div>
                                <div class="post-img-detail">
                                    <div class="post-img-detail-wrapper">
                                        <div class="post-img-detail-content">
                                            <a href="assets/images/blog/big_01.jpg" data-lightbox="post4-img" class="post-img-detail-icon"><i class="fa fa-search"></i></a>
                                            <a href="property_single.html" class="post-img-detail-icon"><i class="fa fa-share-alt"></i></a>
                                            <h3>Big Beautifull Villa</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .col-md-4 -->
                    <div class="col-md-4 onscroll-animate" data-delay="400">
                        <div class="post-preview gallery-post">
                            <div class="post-preview-img">
                                <div class="post-preview-img-inner">
                                    <img alt="post img" src="assets/images/listings/5.jpg">
                                </div>
                                <div class="post-img-detail">
                                    <div class="post-img-detail-wrapper">
                                        <div class="post-img-detail-content">
                                            <a href="assets/images/blog/big_01.jpg" data-lightbox="post5-img" class="post-img-detail-icon"><i class="fa fa-search"></i></a>
                                            <a href="property_single.html" class="post-img-detail-icon"><i class="fa fa-share-alt"></i></a>
                                            <h3>Big Beautifull Villa</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .col-md-4 -->
                    <div class="col-md-4 onscroll-animate" data-delay="600">
                        <div class="post-preview gallery-post">
                            <div class="post-preview-img">
                                <div class="post-preview-img-inner">
                                    <img alt="post img" src="assets/images/listings/6.jpg">
                                </div>
                                <div class="post-img-detail">
                                    <div class="post-img-detail-wrapper">
                                        <div class="post-img-detail-content">
                                            <a href="assets/images/blog/big_01.jpg" data-lightbox="post6-img" class="post-img-detail-icon"><i class="fa fa-search"></i></a>
                                            <a href="property_single.html" class="post-img-detail-icon"><i class="fa fa-share-alt"></i></a>
                                            <h3>Big Beautifull Villa</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .col-md-4 -->
                </div><!-- .row -->
                <div class="row">
                    <div class="col-md-4 onscroll-animate">
                        <div class="post-preview gallery-post">
                            <div class="post-preview-img">
                                <div class="post-preview-img-inner">
                                    <img alt="post img" src="assets/images/listings/7.jpg">
                                </div>
                                <div class="post-img-detail">
                                    <div class="post-img-detail-wrapper">
                                        <div class="post-img-detail-content">
                                            <a href="assets/images/blog/big_01.jpg" data-lightbox="post7-img" class="post-img-detail-icon"><i class="fa fa-search"></i></a>
                                            <a href="property_single.html" class="post-img-detail-icon"><i class="fa fa-share-alt"></i></a>
                                            <h3>Big Beautifull Villa</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .col-md-4 -->
                    <div class="col-md-4 onscroll-animate" data-delay="400">
                        <div class="post-preview gallery-post">
                            <div class="post-preview-img">
                                <div class="post-preview-img-inner">
                                    <img alt="post img" src="assets/images/listings/8.jpg">
                                </div>
                                <div class="post-img-detail">
                                    <div class="post-img-detail-wrapper">
                                        <div class="post-img-detail-content">
                                            <a href="assets/images/blog/big_01.jpg" data-lightbox="post8-img" class="post-img-detail-icon"><i class="fa fa-search"></i></a>
                                            <a href="property_single.html" class="post-img-detail-icon"><i class="fa fa-share-alt"></i></a>
                                            <h3>Big Beautifull Villa</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .col-md-4 -->
                    <div class="col-md-4 onscroll-animate" data-delay="600">
                        <div class="post-preview gallery-post">
                            <div class="post-preview-img">
                                <div class="post-preview-img-inner">
                                    <img alt="post img" src="assets/images/listings/9.jpg">
                                </div>
                                <div class="post-img-detail">
                                    <div class="post-img-detail-wrapper">
                                        <div class="post-img-detail-content">
                                            <a href="assets/images/blog/big_01.jpg" data-lightbox="post9-img" class="post-img-detail-icon"><i class="fa fa-search"></i></a>
                                            <a href="property_single.html" class="post-img-detail-icon"><i class="fa fa-share-alt"></i></a>
                                            <h3>Big Beautifull Villa</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .col-md-4 -->
                </div><!-- .row -->
                <div class="text-center onscroll-animate">
                    <div class="pagination">
                        <div class="pagination-item pagination-first"><a href="#">First</a></div>
                        <div class="pagination-item"><a href="#">1</a></div>
                        <div class="pagination-item active"><a href="#">2</a></div>
                        <div class="pagination-item"><a href="#">3</a></div>
                        <div class="pagination-item"><a href="#">4</a></div>
                        <div class="pagination-item"><a href="#">5</a></div>
                        <div class="pagination-item pagination-last"><a href="#">Last</a></div>
                    </div>
                </div>
            </div><!-- .container -->
        </div><!-- .section-content -->
    </section>

    @include('site.includes.quote')

@endsection
