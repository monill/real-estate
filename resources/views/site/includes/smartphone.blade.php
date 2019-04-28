<section id="mobile-section" class="section-contrast">
    <div class="bg-image bg-pattern bg-cover bg-fixed">
        <div class="section-content no-offset">
            <div class="margin-30"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 onscroll-animate" data-animation="fadeInUp">
                        <div class="section-header-alt">
                            <h1><img alt="Hometastic" src="{{ asset('site/images/logo2.png') }}"> Acessível também para o seu smartphone</h1>
                        </div>
                        <p>{{ $settings->about }}</p>
                        <p class="text-right">
                            <a href="#" class="black-box black-box-apple">
                                <span class="small">Usando</span><br>
                                <strong>iOS</strong>
                            </a>
                            <a href="#" class="black-box black-box-google">
                                <span class="small">Usando</span><br>
                                <span class="google-text">Android</span>
                            </a>
                        </p>
                        <div class="margin-40"></div>
                    </div>
                    <div class="col-md-4" id="mobile-img-col">
                        <img id="mobile-img" alt="mobile" class="img-responsive" src="{{ asset('site/images/mobile.png') }}">
                    </div>
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .section-content -->
    </div><!-- .bg-image -->
</section>