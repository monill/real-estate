@extends('site.layout.main')

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
                                                <img alt="post img" src="assets/images/listings/1.jpg">
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
