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

@section('title', 'Blog')

@section('content')

    <section>
        <div class="page-title-container bg-image bg-cover bg-pattern">
            <div class="page-title">
                <div class="container">
                    <h1>Blog</h1>
                    <h4>featuers / blog single</h4>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="section-content">
            <div class="container">
                <div class="section-header onscroll-animate" data-animation="fadeInLeft">
                    <h1>Blog Single</h1>
                    <h4>Check the blog section, great layout easy to read and write.</h4>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <article>
                            <div class="post-preview blog-post-single">
                                <section class="onscroll-animate">
                                    <div class="post-preview-img">
                                        <div class="post-preview-slider" id="post-preview-slider-1">
                                            <a href="images/blog/big_01.jpg" data-lightbox="images/blog/big_01.jpg"><img alt="post img" src="images/blog/big_01.jpg"></a>
                                        </div>
                                    </div>
                                </section>
                                <div class="post-preview-content">
                                    <h2 class="post-preview-heading"><a href="#">Interior beauty for sale</a></h2>
                                    <p class="post-preview-info"><a href="#"><i class="fa fa-user"></i> Johny Bravo</a> <span class="delimiter-inline-alt"></span> <a href="#"><i class="fa fa-comments"></i> 33 comments</a> <span class="delimiter-inline-alt"></span> <a href="#"><i class="fa fa-calendar"></i> 12.02.2014</a></p>
                                    <p>We do what is best for our clients, in order to get full satisfaction and perfection. Our primary goal is to make thing work and make them happy on the eve of a Nantucket voyage, I regarded those marble tablets, and by the murky light of that darkened, doleful day read the fate of the whalemen who had gone before me.</p>
                                    <div class="quote onscroll-animate" data-animation="fadeInLeft">
                                        Every time I ascended to the deck from my watches below, I instantly gazed aft to mark if any strange face were visible; for my first vague disquietude touching the unknown captain, now in the seclusion of the sea, became almost a perturbation. This was strangely heightened at times by the ragged Elijah's diabolical incoherences uninvitedly recurring to me.
                                    </div>
                                    <p>But poorly could I withstand them, much as in other moods I was almost ready to smile at the solemn whimsicalities of that outlandish prophet of the wharves. But whatever it was of apprehensiveness or uneasiness—to call it so—which I felt, yet whenever I came to look about me in the ship, it seemed against all warrantry to cherish such emotions. For though the harpooneers, with the great body of the crew.</p>
                                    <div class="post-preview-detail">
                                        <i class="fa fa-tag"></i> <a href="#">quotes</a>, <a href="#">illustration</a>, <a href="#">design</a>
                                    </div>
                                </div>
                                <div class="author-box onscroll-animate">
                                    <div class="author-box-avatar">
                                        <div class="centered-columns">
                                            <div class="centered-column">
                                                <img alt="avatar" src="images/avatars/1.png">
                                            </div>
                                            <div class="centered-column">
                                                <span class="author-name">Posted by <strong>Hansom Rob</strong></span><br>
                                                <span class="author-info">Designer & Developer</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="author-box-content">
                                        Phileas Fogg, with body erect and legs wide apart, standing like a sailor, gazed without staggering at the swelling waters. The young woman, who was seated aft, was profoundly affected as she looked out upon the ocean, darkening now with the twilight, on which she had ventured in so frail a vessel.
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article>
                            <div class="section-header-smaller onscroll-animate" data-animation="fadeInLeft">
                                <h1>12 Comments</h1>
                            </div>
                            <div class="comments-container">
                                <div class="comment onscroll-animate" data-animation="fadeInRight">
                                    <div class="comment-img">
                                        <img alt="avatar" src="images/avatars/2.png">
                                    </div>
                                    <div class="comment-content">
                                        <div class="comment-author">
                                            Sticky Fingerz
                                        </div>
                                        <div class="comment-detail">
                                            on 02.12.2014 / <a href="#"><strong>REPLY</strong></a>
                                        </div>
                                        This is a test so don’t be scared hehe!!!
                                    </div>
                                    <div class="comment">
                                        <div class="comment-img">
                                            <img alt="avatar" src="images/avatars/3.png">
                                        </div>
                                        <div class="comment-content">
                                            <div class="comment-author">
                                                Hansom Rob
                                            </div>
                                            <div class="comment-detail">
                                                on 02.12.2014 / <a href="#"><strong>REPLY</strong></a>
                                            </div>
                                            This is a test so don’t be scared hehe!!!
                                        </div>
                                    </div><!-- .comment -->
                                </div><!-- .comment -->
                                <div class="comment onscroll-animate" data-animation="fadeInRight" data-delay="300">
                                    <div class="comment-img">
                                        <img alt="avatar" src="images/avatars/4.png">
                                    </div>
                                    <div class="comment-content">
                                        <div class="comment-author">
                                            Hansom Rob
                                        </div>
                                        <div class="comment-detail">
                                            on 02.12.2014 / <a href="#"><strong>REPLY</strong></a>
                                        </div>
                                        This is a test so don’t be scared hehe!!!
                                    </div>
                                </div><!-- .comment -->
                            </div><!-- .comments-container -->
                        </article>
                        <article>
                            <div class="section-header-smaller onscroll-animate" data-animation="fadeInLeft">
                                <h1>Leave a comment</h1>
                            </div>
                            <form class="form-contact-full">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" placeholder="Name">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" placeholder="Email">
                                    </div>
                                </div>
                                <textarea placeholder="Message"></textarea>
                                <div class="text-right">
                                    <div class="form-contact-full-submit">
                                        <input type="submit" value="Send Message">
                                    </div>
                                </div>
                            </form>
                        </article>
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
                                            <a href="#"><img alt="img" src="images/listings/thumbnails/7.jpg"></a>
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
                                            <a href="#"><img alt="img" src="images/listings/thumbnails/8.jpg"></a>
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
                                            <a href="#"><img alt="img" src="images/listings/thumbnails/9.jpg"></a>
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
                                                <img alt="post img" src="images/listings/6.jpg">
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
                                    <h1>News Letter</h1>
                                </div>
                                <p>Subscribe for latest news</p>
                                <form class="form-layout1" id="rss-subscribe-2" action="http://ignitionthemes.eu/theme/homet/save_rss.php" method="post" data-email-not-set-msg="Email must be set" data-ajax-fail-msg="Ajax could not set the request" data-success-msg="Email successfully added">
                                    <input type="text" name="email" placeholder="your email...">
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

    <section>
        <div class="bg-buildings">
            <div class="container-big section-content bg-logo">
                <div class="container clearfix">
                    <div class="big-notice onscroll-animate">
                        <h3><span class="text-uppercase"><strong>Home</strong>tastic</span> is a beautifull Template for Real Estate businesses, includes all elements needed to start the job</h3>
                        <div class="onscroll-animate pull-right" data-delay="700" data-animation="flipInY">
                            <div class="button-container"><a class="button" href="#">Buy The Template</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
