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

@section('title', 'Contato')

@section('content')

    <section>
        <div class="page-title-container bg-image bg-cover bg-pattern">
            <div class="page-title">
                <div class="container">
                    <h1>Contato</h1>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="margin-10"></div>
        <!-- Google Map -->
        <div class="google-map-container">
            <div class="google-map">
                <div id="map-canvas"></div>
            </div>
        </div>
        <!-- /Google Map -->
        <div class="margin-10"></div>
    </section>

    <section>
        <div class="section-content">
            <div class="container">
                <div class="section-header onscroll-animate" data-animation="fadeInLeft">
                    <h1>Entre em contato</h1>
                    <h4>If you want to ask us about property do it right away, we are waitng.</h4>
                </div>
                <div class="row">
                    <div class="col-md-4 onscroll-animate">
                        <div class="clearfix">
                            <img class="img-inline logo-style3" alt="hometastic" src="images/logo3.png"> <span class="heading-small-inline">Real Estate Template</span>
                        </div>
                        <hr>

                        <h6 class="heading-small-inline">Sobre</h6>
                        <p>Some hours after midnight, the Typhoon abated so much, that through the strenuous exertions of Starbuck and Stubb—one engaged forward and the other aft—the shivered remnants of the jib and fore and main-top-sails were cut adrift from the spars.</p>

                        <div class="margin-10"></div>
                        <div class="text-bigger">
                            <div class="icon-opening-wrapper">
                                <div class="icon-opening-container">
                                    <div class="icon-opening"><i class="fa fa-phone"></i></div>
                                    <div class="icon-opening-content">0 800 123 456 88</div>
                                </div>
                            </div>
                            <div class="icon-opening-wrapper">
                                <div class="icon-opening-container">
                                    <div class="icon-opening"><i class="fa fa-mobile-phone text-big"></i></div>
                                    <div class="icon-opening-content">0 800 777 456 88</div>
                                </div>
                            </div>
                            <div class="icon-opening-wrapper">
                                <div class="icon-opening-container">
                                    <div class="icon-opening"><i class="fa fa-envelope-alt"></i></div>
                                    <div class="icon-opening-content">
                                        office@hometastic.com<br>
                                        support@hometastic.com<br>
                                        helpdesk@hometastic.com
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="margin-40"></div>
                    </div><!-- .col-md-4 -->
                    <div class="col-md-8 onscroll-animate" data-delay="400">
                        <form class="form-contact-full" id="contact-form" action="http://ignitionthemes.eu/theme/homet/send_email_contact.php" method="post" data-name-not-set-msg="Name is required" data-message-not-set-msg="Message is required" data-email-not-set-msg="Email is required" data-ajax-fail-msg="Ajax could not set the request" data-success-msg="Email successfully sent.">
                            <div class="row">
                                <div class="col-xs-6">
                                    Nome *
                                    <input type="text" name="name" placeholder="Nome">
                                    Assunto *
                                    <input type="text" name="website" placeholder="Assunto">
                                </div>
                                <div class="col-xs-6">
                                    E-mail *
                                    <input type="text" name="email" placeholder="E-mail">
                                    Telefone
                                    <input type="text" name="phone" placeholder="Telefone para contato">
                                </div>
                            </div>
                            Mensagem
                            <textarea name="message" placeholder="Mensagem"></textarea>
                            <p class="return-msg"></p>
                            <div class="text-right">
                                <div class="form-contact-full-submit">
                                    <input type="submit" value="Enviar Mensagem">
                                </div>
                            </div>
                        </form>
                    </div><!-- .col-md-4 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .section-content -->
    </section>

    <section>
        <div class="section-content no-top-padding">
            <div class="container">
                <div class="section-header onscroll-animate" data-animation="fadeInLeft">
                    <h1>Contact one of our agents</h1>
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