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
    <meta property="og:url" content="{{ url('blog') }}" />
    <meta property="og:title" content="{{ $settings->site_title }}" />
    <meta property="og:description" content="{{ $settings->meta_description }}" />
@endsection

@section('title', 'Blog')

@section('css')
    <link href="{{ asset('site/vendor/lightbox/css/lightbox.css') }}" rel="stylesheet" />
@endsection

@section('content')

    <section>
        <div class="page-title-container bg-image bg-cover bg-pattern">
            <div class="page-title">
                <div class="container">
                    <h1>Blog</h1>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="section-content">
            <div class="container">
                <div class="section-header onscroll-animate" data-animation="fadeInLeft">
                    <h1>Blog</h1>
                    <h4>Confira a seção do blog, ótimo layout fácil de ler e comentar.</h4>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        @foreach($blogs as $blog)
                        <article class="onscroll-animate">
                            <div class="post-preview blog-post-full">
                                <section>
                                    <div class="post-preview-img">
                                        <div class="post-preview-img-inner">
                                            <a href="{{ $blog->getMainImage() }}" data-lightbox="{{ $blog->getMainImage() }}">
                                                <img alt="post img" src="{{ $blog->getMainImage() }}">
                                            </a>
                                        </div>
                                        <div class="post-img-detail">
                                            <div class="post-img-detail-wrapper">
                                                <div class="post-img-detail-content">
                                                    <a href="{{ route('blog.view', [$blog->id, $blog->slug]) }}" class="read-more-link-alt">Veja Mais</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <div class="post-preview-content">
                                    <h2 class="post-preview-heading"><a href="{{ route('blog.view', [$blog->id, $blog->slug]) }}">{{ $blog->title }}</a></h2>
                                    <p class="post-preview-info">
                                        <a href="#"><i class="fa fa-user"></i> {{ $blog->user->name }}</a> <span class="delimiter-inline-alt"></span>
                                        <a href="#"><i class="fa fa-comments"></i> {{ $blog->comments->count() }} comentários</a> <span class="delimiter-inline-alt"></span>
                                        <a href="#"><i class="fa fa-calendar"></i> {{ $blog->created_at->format('d.m.Y') }}</a>
                                    </p>
                                    {!! str_limit($blog->content, 317, '...') !!}
                                    <div class="post-preview-detail">
                                        <i class="fa fa-tag"></i>
                                        @foreach($blog->tags as $tag)
                                        <a href="#">{{ $tag->name }}</a>,
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </article>
                        @endforeach
                        <div class="text-center onscroll-animate">
                            <div class="pagination">
                                {{ $blogs->links() }}
                            </div>
                        </div>
                    </div><!-- .col-md-9 -->

                    @include('site.includes.blog_sidebar')

                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .section-content -->
    </section>

    @include('site.includes.quote')

@endsection

@section('scripts')
    <script src="{{ asset('site/vendor/lightbox/js/lightbox.min.js') }}"></script>
@endsection
