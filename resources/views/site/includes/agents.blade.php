<section>
    <div class="section-content">
        <div class="container">
            <div class="section-header onscroll-animate" data-animation="fadeInLeft">
                <h1>NOSSOS GRANDES AGENTES</h1>
                <h4>Veja nossos grandes agentes e eles ajudarão você a encontrar suas casas.</h4>
            </div>
            <div class="onscroll-animate">
                <div id="agents-slider">
                    @foreach(\App\User::where('admin', '==', false)->get() as $agent)
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
                        <a href="{{ url('corretores') }}" class="read-more-link-alt">Ver o perfil completo</a>
                    </div><!-- .profile -->
                    @endforeach
                </div><!-- #agents-slider -->
            </div><!-- .onscroll-animate -->
            <p class="text-center onscroll-animate" data-animation="flipInY">
                <a href="{{ url('corretores') }}" class="button-void">Veja todos os corretores</a>
            </p>
        </div><!-- .container -->
    </div><!-- .section-content -->
</section>