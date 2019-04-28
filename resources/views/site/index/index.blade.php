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

            <div class="slide-1 bg-image bg-pattern">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 pull-right">
                            <div class="slide-box arrow-left">
                                <h2>25688 Portafino Pl, Whittier, LA 15998</h2>
                                <p>An entertainer's paradise in the Friendly Hills community, priced to sell. Featuring 4 spacious bedrooms and 3 bathrooms (one bedroom/bath downstairs), 3170 sq ft of living space with a good size lot at approx.13414 sq ft.</p>
                                <p><a title="Tooltip example" data-toggle="tooltip" href="#">I'm tooltip</a></p>
                                <hr>
                                <a href="#">4 Bedrooms</a> <span class="delimiter-inline"></span> <a href="#">3 Bathrooms</a> <span class="delimiter-inline"></span> <a href="#">1 Kitchen</a> <span class="delimiter-inline"></span> <a href="#">2 Garages</a>
                                <hr>
                                <div class="slide-price-container">
                                    <a href="property_single.html#" class="read-more-link-alt">Learn more</a>
                                    <p class="listing-price">$350.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .container -->
            </div><!-- .slide-1 -->

        </div><!-- .master-slider -->
    </section>

    @include('site.includes.search')

    <section id="citation-section" class="section-contrast">
        <div class="bg-image bg-pattern bg-cover parallax-background">
            <div class="section-content onscroll-animate" data-animation="fadeInUp">
                <p class="citation">“O segredo da criatividade é saber como esconder suas fontes.”</p>
                <p class="citation-author">Albert EINSTEIN</p>
            </div>
        </div>
    </section>

    <section>
        <div class="section-content">
            <div class="container">
                <div class="section-header onscroll-animate" data-animation="fadeInLeft">
                    <h1>Recent Listings</h1>
                    <h4>See our recent listings here, you will find all kinds of homes.</h4>
                </div>
                <div class="row">
                    <div class="col-md-4 onscroll-animate">
                        <article>
                            <div class="post-preview">
                                <a href="property_single.html">
                                    <section>
                                        <div class="post-preview-img">
                                            <div class="post-preview-img-inner">
                                                <img alt="post img" src="images/listings/1.jpg">
                                            </div>
                                            <div class="post-preview-label">For Rent</div>
                                        </div>
                                    </section>
                                </a>
                                <div class="post-preview-content">
                                    <h2 class="post-preview-heading">568 E 1st Ave, Ney Jersey</h2>
                                    <p>This is a 5 bedroom, 1.5 bathroom, single family home. It is located at 335 W 2nd Ave Artesian, California.</p>
                                    <div class="post-preview-price-container">
                                        <a href="property_single.html" class="read-more-link-alt">Read more</a>
                                        <p class="listing-price">$2.500 <span class="small">per month</span></p>
                                    </div>
                                    <div class="post-preview-detail">
                                        <a href="#">2500 Sq Ft</a> <span class="delimiter-inline-alt"></span> <a href="#">4 Bedrooms</a> <span class="delimiter-inline-alt"></span> <a href="#">2 Bathrooms</a> <span class="delimiter-inline-alt"></span> <a href="#">1 Garage</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div><!-- .col-md-4 -->
                    <div class="col-md-4 onscroll-animate" data-delay="400">
                        <article>
                            <div class="post-preview">
                                <a href="property_single.html">
                                    <section>
                                        <div class="post-preview-img">
                                            <div class="post-preview-img-inner">
                                                <img alt="post img" src="images/listings/2.jpg">
                                            </div>
                                            <div class="post-preview-label2">For Sale</div>
                                        </div>
                                    </section>
                                </a>
                                <div class="post-preview-content">
                                    <h2 class="post-preview-heading">335 W 2nd Ave, California</h2>
                                    <p>This is a 5 bedroom, 1.5 bathroom, single family home. It is located at 335 W 2nd Ave Artesian, California.</p>
                                    <div class="post-preview-price-container">
                                        <a href="property_single.html" class="read-more-link-alt">Read more</a>
                                        <p class="listing-price">$350.000</p>
                                    </div>
                                    <div class="post-preview-detail">
                                        <a href="#">2500 Sq Ft</a> <span class="delimiter-inline-alt"></span> <a href="#">4 Bedrooms</a> <span class="delimiter-inline-alt"></span> <a href="#">2 Bathrooms</a> <span class="delimiter-inline-alt"></span> <a href="#">1 Garage</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div><!-- .col-md-4 -->
                    <div class="col-md-4 onscroll-animate" data-delay="600">
                        <article>
                            <div class="post-preview">
                                <a href="property_single.html">
                                    <section>
                                        <div class="post-preview-img">
                                            <div class="post-preview-img-inner">
                                                <img alt="post img" src="images/listings/3.jpg">
                                            </div>
                                            <div class="post-preview-label">For Rent</div>
                                        </div>
                                    </section>
                                </a>
                                <div class="post-preview-content">
                                    <h2 class="post-preview-heading">658 L 2nd Ave, Boston</h2>
                                    <p>This is a 5 bedroom, 1.5 bathroom, single family home. It is located at 335 W 2nd Ave Artesian, California.</p>
                                    <div class="post-preview-price-container">
                                        <a href="property_single.html" class="read-more-link-alt">Read more</a>
                                        <p class="listing-price">$1.500 <span class="small">per month</span></p>
                                    </div>
                                    <div class="post-preview-detail">
                                        <a href="#">2500 Sq Ft</a> <span class="delimiter-inline-alt"></span> <a href="#">4 Bedrooms</a> <span class="delimiter-inline-alt"></span> <a href="#">2 Bathrooms</a> <span class="delimiter-inline-alt"></span> <a href="#">1 Garage</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div><!-- .col-md-4 -->
                </div><!-- .row -->
                <div class="row">
                    <div class="col-md-4 onscroll-animate">
                        <article>
                            <div class="post-preview">
                                <a href="property_single.html">
                                    <section>
                                        <div class="post-preview-img">
                                            <div class="post-preview-img-inner">
                                                <img alt="post img" src="images/listings/4.jpg">
                                            </div>
                                            <div class="post-preview-label2">For Sale</div>
                                        </div>
                                    </section>
                                </a>
                                <div class="post-preview-content">
                                    <h2 class="post-preview-heading">6879 W 2nd Ave, Washington</h2>
                                    <p>This is a 5 bedroom, 1.5 bathroom, single family home. It is located at 335 W 2nd Ave Artesian, California.</p>
                                    <div class="post-preview-price-container">
                                        <a href="property_single.html" class="read-more-link-alt">Read more</a>
                                        <p class="listing-price">$50.000</p>
                                    </div>
                                    <div class="post-preview-detail">
                                        <a href="#">2500 Sq Ft</a> <span class="delimiter-inline-alt"></span> <a href="#">4 Bedrooms</a> <span class="delimiter-inline-alt"></span> <a href="#">2 Bathrooms</a> <span class="delimiter-inline-alt"></span> <a href="#">1 Garage</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div><!-- .col-md-4 -->
                    <div class="col-md-4 onscroll-animate" data-delay="400">
                        <article>
                            <div class="post-preview">
                                <a href="property_single.html">
                                    <section>
                                        <div class="post-preview-img">
                                            <div class="post-preview-img-inner">
                                                <img alt="post img" src="images/listings/5.jpg">
                                            </div>
                                            <div class="post-preview-label">For Rent</div>
                                        </div>
                                    </section>
                                </a>
                                <div class="post-preview-content">
                                    <h2 class="post-preview-heading">1258 E 1st Ave, Alabama</h2>
                                    <p>This is a 5 bedroom, 1.5 bathroom, single family home. It is located at 335 W 2nd Ave Artesian, California.</p>
                                    <div class="post-preview-price-container">
                                        <a href="property_single.html" class="read-more-link-alt">Read more</a>
                                        <p class="listing-price">$3.800 <span class="small">per month</span></p>
                                    </div>
                                    <div class="post-preview-detail">
                                        <a href="#">2500 Sq Ft</a> <span class="delimiter-inline-alt"></span> <a href="#">4 Bedrooms</a> <span class="delimiter-inline-alt"></span> <a href="#">2 Bathrooms</a> <span class="delimiter-inline-alt"></span> <a href="#">1 Garage</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div><!-- .col-md-4 -->
                    <div class="col-md-4 onscroll-animate" data-delay="600">
                        <article>
                            <div class="post-preview">
                                <a href="property_single.html">
                                    <section>
                                        <div class="post-preview-img">
                                            <div class="post-preview-img-inner">
                                                <img alt="post img" src="images/listings/6.jpg">
                                            </div>
                                            <div class="post-preview-label2">For Sale</div>
                                            <div class="post-preview-label-alt-wrapper">
                                                <div class="post-preview-label-alt">Featured <i class="fa fa-star"></i></div>
                                            </div>
                                        </div>
                                    </section>
                                </a>
                                <div class="post-preview-content">
                                    <h2 class="post-preview-heading">5690 W 2nd Ave, Texas</h2>
                                    <p>This is a 5 bedroom, 1.5 bathroom, single family home. It is located at 335 W 2nd Ave Artesian, California.</p>
                                    <div class="post-preview-price-container">
                                        <a href="property_single.html" class="read-more-link-alt">Read more</a>
                                        <p class="listing-price">$155.000</p>
                                    </div>
                                    <div class="post-preview-detail">
                                        <a href="#">2500 Sq Ft</a> <span class="delimiter-inline-alt"></span> <a href="#">4 Bedrooms</a> <span class="delimiter-inline-alt"></span> <a href="#">2 Bathrooms</a> <span class="delimiter-inline-alt"></span> <a href="#">1 Garage</a>
                                    </div>
                                </div>
                            </div>
                        </article>
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

    <div class="margin-30 visible-lg-block visible-md-block"></div>

    <section id="mobile-section" class="section-contrast">
        <div class="bg-image bg-pattern bg-cover bg-fixed">
            <div class="section-content no-offset">
                <div class="margin-30"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 onscroll-animate" data-animation="fadeInUp">
                            <div class="section-header-alt">
                                <h1><img alt="Hometastic" src="images/logo2.png"> Now is availaible for your smartphones</h1>
                            </div>
                            <p>It was under very similar circumstances to the first performance; but this time he did not breast out the line; and hence, when the whale started to run, Pip was left behind on the sea, like a hurried traveller's trunk. Alas! Stubb was but too true to his word. It was a beautiful, bounteous, blue day; the spangled sea calm and cool, and flatly stretching away, all round, to the horizon, like gold-beater's skin hammered out to the extremest.</p>
                            <p class="text-right">
                                <a href="#" class="black-box black-box-apple">
                                    <span class="small">Download on the</span><br>
                                    <strong>App Store</strong>
                                </a>
                                <a href="#" class="black-box black-box-google">
                                    <span class="small">Get it on</span><br>
                                    <span class="google-text">Google</span> play
                                </a>
                            </p>
                            <div class="margin-40"></div>
                        </div>
                        <div class="col-md-4" id="mobile-img-col">
                            <img id="mobile-img" alt="mobile phone" class="img-responsive" src="images/mobile.png">
                        </div>
                    </div><!-- .row -->
                </div><!-- .container -->
            </div><!-- .section-content -->
        </div><!-- .bg-image -->
    </section>

    <section>
        <div class="section-content">
            <div class="container">
                <div class="section-header onscroll-animate" data-animation="fadeInLeft">
                    <h1>OUR GREAT AGENTS</h1>
                    <h4>See our great agents and they will help you find your homes.</h4>
                </div>
                <div class="onscroll-animate">
                    <div id="agents-slider">
                        <div class="profile">
                            <div class="profile-img">
                                <img alt="agent" src="images/agents/1.jpg">
                                <div class="profile-img-info">
                                    <a href="#" class="profile-social"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="profile-social"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="profile-social"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" class="profile-social"><i class="fa fa-linkedin"></i></a>
                                    <a href="#" class="profile-social"><i class="fa fa-dribbble"></i></a>
                                </div>
                            </div>
                            <h5 class="profile-heading">Hansom Rob</h5>
                            <p>home expert</p>
                            <p>
                                <i class="fa fa-phone"></i> 0 800 50 555 123<br>
                                <i class="fa fa-envelope"></i> <a href="#">hansom.rob@hometastic.com</a><br>
                                <i class="fa fa-money"></i> 57 Sales done
                            </p>
                            <a href="agents.html" class="read-more-link-alt">See Full Profile</a>
                        </div><!-- .profile -->
                        <div class="profile">
                            <div class="profile-img">
                                <img alt="agent" src="images/agents/2.jpg">
                                <div class="profile-img-info">
                                    <a href="#" class="profile-social"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="profile-social"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="profile-social"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" class="profile-social"><i class="fa fa-linkedin"></i></a>
                                    <a href="#" class="profile-social"><i class="fa fa-dribbble"></i></a>
                                </div>
                            </div>
                            <h5 class="profile-heading">Rocky Alboa</h5>
                            <p>property expert</p>
                            <p>
                                <i class="fa fa-phone"></i> 0 800 50 555 123<br>
                                <i class="fa fa-envelope"></i> <a href="#">rocky.alboa@hometastic.com</a><br>
                                <i class="fa fa-money"></i> 11 Sales done
                            </p>
                            <a href="agents.html" class="read-more-link-alt">See Full Profile</a>
                        </div><!-- .profile -->
                        <div class="profile">
                            <div class="profile-img">
                                <img alt="agent" src="images/agents/3.jpg">
                                <div class="profile-img-info">
                                    <a href="#" class="profile-social"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="profile-social"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="profile-social"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" class="profile-social"><i class="fa fa-linkedin"></i></a>
                                    <a href="#" class="profile-social"><i class="fa fa-dribbble"></i></a>
                                </div>
                            </div>
                            <h5 class="profile-heading">Haman Gates</h5>
                            <p>designer</p>
                            <p>
                                <i class="fa fa-phone"></i> 0 800 50 555 123<br>
                                <i class="fa fa-envelope"></i> <a href="#">haman.gates@hometastic.com</a><br>
                                <i class="fa fa-money"></i> 25 Sales done
                            </p>
                            <a href="agents.html" class="read-more-link-alt">See Full Profile</a>
                        </div><!-- .profile -->
                        <div class="profile">
                            <div class="profile-img">
                                <img alt="agent" src="images/agents/4.jpg">
                                <div class="profile-img-info">
                                    <a href="#" class="profile-social"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="profile-social"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="profile-social"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" class="profile-social"><i class="fa fa-linkedin"></i></a>
                                    <a href="#" class="profile-social"><i class="fa fa-dribbble"></i></a>
                                </div>
                            </div>
                            <h5 class="profile-heading">Malik Barrymore</h5>
                            <p>accountant</p>
                            <p>
                                <i class="fa fa-phone"></i> 0 800 50 555 123<br>
                                <i class="fa fa-envelope"></i> <a href="#">malik.barrymore@hometastic.com</a><br>
                                <i class="fa fa-money"></i> 88 Sales done
                            </p>
                            <a href="agents.html" class="read-more-link-alt">See Full Profile</a>
                        </div><!-- .profile -->
                        <div class="profile">
                            <div class="profile-img">
                                <img alt="agent" src="images/agents/2.jpg">
                                <div class="profile-img-info">
                                    <a href="#" class="profile-social"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="profile-social"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="profile-social"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" class="profile-social"><i class="fa fa-linkedin"></i></a>
                                    <a href="#" class="profile-social"><i class="fa fa-dribbble"></i></a>
                                </div>
                            </div>
                            <h5 class="profile-heading">Rocky Alboa</h5>
                            <p>property expert</p>
                            <p>
                                <i class="fa fa-phone"></i> 0 800 50 555 123<br>
                                <i class="fa fa-envelope"></i> <a href="#">rocky.alboa@hometastic.com</a><br>
                                <i class="fa fa-money"></i> 11 Sales done
                            </p>
                            <a href="agents.html" class="read-more-link-alt">See Full Profile</a>
                        </div><!-- .profile -->
                        <div class="profile">
                            <div class="profile-img">
                                <img alt="agent" src="images/agents/3.jpg">
                                <div class="profile-img-info">
                                    <a href="#" class="profile-social"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="profile-social"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="profile-social"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" class="profile-social"><i class="fa fa-linkedin"></i></a>
                                    <a href="#" class="profile-social"><i class="fa fa-dribbble"></i></a>
                                </div>
                            </div>
                            <h5 class="profile-heading">Haman Gates</h5>
                            <p>designer</p>
                            <p>
                                <i class="fa fa-phone"></i> 0 800 50 555 123<br>
                                <i class="fa fa-envelope"></i> <a href="#">haman.gates@hometastic.com</a><br>
                                <i class="fa fa-money"></i> 25 Sales done
                            </p>
                            <a href="agents.html" class="read-more-link-alt">See Full Profile</a>
                        </div><!-- .profile -->
                    </div><!-- #agents-slider -->
                </div><!-- .onscroll-animate -->
                <p class="text-center onscroll-animate" data-animation="flipInY">
                    <a href="agents.html" class="button-void">See All Agents</a>
                </p>
            </div><!-- .container -->
        </div><!-- .section-content -->
    </section>

    <section class="section-dark">
        <div class="section-content">
            <div class="container">
                <div class="section-header onscroll-animate" data-animation="fadeInLeft">
                    <h1>SERVICES</h1>
                    <h4>Some of our main services.</h4>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6 onscroll-animate" data-animation="fadeInUp">
                                <div class="icon-box">
                                    <div class="icon-box-icon">
                                        <i class="fa fa-signal"></i>
                                    </div>
                                    <h3>Skilled team</h3>
                                    <p>Many whalemen have a method of absorbing it into some other substance, and then partaking of it.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 onscroll-animate" data-delay="400" data-animation="fadeInUp">
                                <div class="icon-box">
                                    <div class="icon-box-icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <h3>Homes for sale</h3>
                                    <p>Many whalemen have a method of absorbing it into some other substance, and then partaking of it.</p>
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
                                    <h3>House for rest</h3>
                                    <p>Many whalemen have a method of absorbing it into some other substance, and then partaking of it.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 onscroll-animate" data-delay="800" data-animation="fadeInUp">
                                <div class="icon-box">
                                    <div class="icon-box-icon">
                                        <i class="fa fa-th"></i>
                                    </div>
                                    <h3>Lots of colors</h3>
                                    <p>Many whalemen have a method of absorbing it into some other substance, and then partaking of it.</p>
                                </div>
                            </div>
                        </div><!-- .row -->
                    </div><!-- .col-md-6 -->
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
                            <div class="button-container"><a class="button" href="#">Template</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
