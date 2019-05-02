@extends('site.layout.main')

@section('seo')
    <meta name="description" content="{{ $blog->meta_description }}">
    <meta name="keywords" content="{{ $blog->meta_keywords }}">
    <meta name="robots" content="index, follow">

    <meta property="og:locale" content="pt_BR" />
    <meta property="og:site_name" content="{{ $settings->site_title }}" />
    <meta property="og:type" content="article" />
    <meta property="og:image" content="{{ $blog->getMainImage() }}" />
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="761">
    <meta property="og:url" content="{{ route('blog.view', [$blog->id, $blog->slug]) }}" />
    <meta property="og:title" content="{{ $blog->title }}" />
    <meta property="og:description" content="{{ $blog->meta_description }}" />
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
                    @include('errors.errors')
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <article>
                            <div class="post-preview blog-post-single">
                                <section class="onscroll-animate">
                                    <div class="post-preview-img">
                                        <div class="post-preview-slider" id="post-preview-slider-1">
                                            <a href="{{ $blog->getMainImage() }}" data-lightbox="{{ $blog->getMainImage() }}">
                                                <img alt="post img" src="{{ $blog->getMainImage() }}">
                                            </a>
                                        </div>
                                    </div>
                                </section>
                                <div class="post-preview-content">
                                    <h2 class="post-preview-heading"><a href="#">{{ $blog->title }}</a></h2>
                                    <p class="post-preview-info">
                                        <a href="#"><i class="fa fa-user"></i> {{ $blog->user->name }}</a> <span class="delimiter-inline-alt"></span>
                                        <a href="#"><i class="fa fa-comments"></i> {{ $blog->comments->count() }} comentários</a> <span class="delimiter-inline-alt"></span>
                                        <a href="#"><i class="fa fa-calendar"></i> {{ $blog->created_at->format('d.m.Y') }}</a>
                                    </p>
                                    {!! $blog->content !!}
                                    <div class="post-preview-detail">
                                        <i class="fa fa-tag"></i>
                                        @foreach($blog->tags as $tag)
                                            <a href="#">{{ $tag->name }}</a>,
                                        @endforeach
                                    </div>
                                </div>
                                <div class="author-box onscroll-animate">
                                    <div class="author-box-avatar">
                                        <div class="centered-columns">
                                            <div class="centered-column">
                                                <img alt="avatar" src="{{ $blog->user->getAvatar() }}">
                                            </div>
                                            <div class="centered-column">
                                                <span class="author-name">Postado por <strong>{{ $blog->user->name }}</strong></span><br>
                                                <span class="author-info">{{ $blog->user->job }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="author-box-content">
                                        {{ $blog->user->about }}
                                    </div>
                                </div>
                            </div>
                        </article>

                        @if($blog->comments()->count() > 0)
                            @foreach($comments as $comment)
                            <article>
                                <div class="section-header-smaller onscroll-animate" data-animation="fadeInLeft">
                                    <h1>{{ $blog->comments()->count() }} Comentários</h1>
                                </div>
                                <div class="comments-container">
                                    <div class="comment onscroll-animate" data-animation="fadeInRight">
                                        <div class="comment-img">
                                            <img alt="avatar" src="{{ asset('uploads/avatar.jpg') }}">
                                        </div>
                                        <div class="comment-content">
                                            <div class="comment-author">
                                                {{ $comment->name }}
                                            </div>
                                            <div class="comment-detail">
                                                em {{ $comment->created_at->format('d.m.Y') }}
                                            </div>
                                            {{ $comment->message }}
                                        </div>
                                    </div><!-- .comment -->
                                </div><!-- .comments-container -->
                            </article>
                            @endforeach
                        @endif
                        <article>
                            <div class="section-header-smaller onscroll-animate" data-animation="fadeInLeft">
                                <h1>Deixe um comentário</h1>
                            </div>
                            {!! Form::open(['url' => 'comment', 'class' => 'form-contact-full']) !!}
                            {!! Form::hidden('blog_id', $blog->id) !!}
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="name" id="name" placeholder="Nome">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="email" id="email" placeholder="E-mail">
                                    </div>
                                </div>
                                <textarea name="message" id="message" placeholder="Mensagem"></textarea>
                                <div class="text-right">
                                    <div class="form-contact-full-submit">
                                        <input type="submit" value="Enviar Comentário">
                                    </div>
                                </div>
                            {!! Form::close() !!}
                        </article>
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
