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

                    <div class="col-md-3 sidebar">
                        <section>
                            <div class="section-content">
                                <p>Search your choice</p>
                                <form class="form-layout1">
                                    <input type="text" name="s" placeholder="Type here">
                                    <a href="#" class="form-submit"><i class="fa fa-search"></i></a>
                                    <p class="return-msg"></p>
                                </form>
                            </div>
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

                        <section>
                            <div class="section-content">
                                <div class="section-header onscroll-animate" data-animation="fadeInLeft">
                                    <h1>Latest News</h1>
                                </div>
                                <article class="onscroll-animate" data-animation="fadeInRight">
                                    <div class="post-small">
                                        <div class="post-small-img">
                                            <a href="blog_single.html"><img alt="img" src="assets/images/listings/thumbnails/7.jpg"></a>
                                        </div>
                                        <div class="post-small-content">
                                            <h5>Awesome Real Estate</h5>
                                            12.April.2014 <span class="delimiter-inline"></span> <a href="#">2 Comments</a>
                                        </div>
                                    </div>
                                </article>
                                <article class="onscroll-animate" data-animation="fadeInRight" data-delay="400">
                                    <div class="post-small">
                                        <div class="post-small-img">
                                            <a href="blog_single.html"><img alt="img" src="assets/images/listings/thumbnails/8.jpg"></a>
                                        </div>
                                        <div class="post-small-content">
                                            <h5>Wordpress Template</h5>
                                            12.April.2014 <span class="delimiter-inline"></span> <a href="#">2 Comments</a>
                                        </div>
                                    </div>
                                </article>
                                <article class="onscroll-animate" data-animation="fadeInRight" data-delay="600">
                                    <div class="post-small">
                                        <div class="post-small-img">
                                            <a href="blog_single.html"><img alt="img" src="assets/images/listings/thumbnails/9.jpg"></a>
                                        </div>
                                        <div class="post-small-content">
                                            <h5>PSD Themes for Sale</h5>
                                            12.April.2014 <span class="delimiter-inline"></span> <a href="#">2 Comments</a>
                                        </div>
                                    </div>
                                </article>
                            </div><!-- .section-content -->
                        </section>

                        <section>
                            <div class="section-content">
                                <div class="section-header onscroll-animate" data-animation="fadeInLeft">
                                    <h1>Categories</h1>
                                </div>
                                <ul class="list-values">
                                    <li class="onscroll-animate" data-animation="fadeInRight">
                                        <a href="#">
                                            <article>
                                                <div class="list-values-content">Sport Properties</div>
                                                <div class="list-values-value">15</div>
                                            </article>
                                        </a>
                                    </li>
                                    <li class="onscroll-animate" data-animation="fadeInRight" data-delay="300">
                                        <a href="#">
                                            <article>
                                                <div class="list-values-content">Gardens</div>
                                                <div class="list-values-value">25</div>
                                            </article>
                                        </a>
                                    </li>
                                    <li class="onscroll-animate" data-animation="fadeInRight" data-delay="400">
                                        <a href="#">
                                            <article>
                                                <div class="list-values-content">Building Properties</div>
                                                <div class="list-values-value">44</div>
                                            </article>
                                        </a>
                                    </li>
                                    <li class="onscroll-animate" data-animation="fadeInRight" data-delay="500">
                                        <a href="#">
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
                                    <h1>Featured Property</h1>
                                </div>
                                <div class="post-preview">
                                    <a href="#">
                                        <section>
                                            <div class="post-preview-img">
                                                <img alt="post img" src="assets/images/listings/6.jpg">
                                                <div class="post-preview-label-big">
                                                    California Residence<br>
                                                    <strong>$300.000.00</strong>
                                                </div>
                                            </div>
                                        </section>
                                    </a>
                                </div>
                            </div>
                        </section>

                        <section>
                            <div class="section-content">
                                <div class="section-header onscroll-animate" data-animation="fadeInLeft">
                                    <h1>Newsletter</h1>
                                </div>
                                <p>Subscribe for latest news</p>
                                <form class="form-layout1" id="rss-subscribe-2" action="" method="post" data-email-not-set-msg="Email must be set" data-ajax-fail-msg="Ajax could not set the request" data-success-msg="Email successfully added">
                                    <input type="text" name="email" placeholder="seu e-mail...">
                                    <a href="#" class="form-submit"><i class="fa fa-envelope-alt"></i></a>
                                    <p class="return-msg"></p>
                                </form>
                            </div>
                        </section>

                        <section>
                            <div class="section-content">
                                <div class="section-header onscroll-animate" data-animation="fadeInLeft">
                                    <h1>Share It</h1>
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
                    </div><!-- .col-md-3 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .section-content -->
    </section>

    @include('site.includes.quote')

@endsection

@section('scripts')
    <script src="{{ asset('site/vendor/lightbox/js/lightbox.min.js') }}"></script>
@endsection
