<section>
    <div class="section-content">
        <div class="container">
            <div class="section-header onscroll-animate" data-animation="fadeInLeft">
                <h1>Nossos grandes corretores</h1>
                <h4>Veja nossos grandes Corretores e eles ajudarão você a encontrar suas casas.</h4>
            </div>
            <div class="onscroll-animate">
                <div id="agents-slider">
                    @foreach(\App\User::where('admin', '=', false)->inRandomOrder()->get() as $agent)
                    <div class="profile">
                        <div class="profile-img">
                            <img alt="agent" src="{{ $agent->getAvatar() }}">
                            <div class="profile-img-info">
                                @if($settings->facebook != null)
                                    <a href="{{ $settings->facebook }}" class="profile-social" target="_blank"><i class="fa fa-facebook"></i></a>
                                @endif
                                @if($settings->twitter != null)
                                    <a href="{{ $settings->twitter }}" class="profile-social" target="_blank"><i class="fa fa-twitter"></i></a>
                                @endif
                                @if($settings->googleplus != null)
                                    <a href="{{ $settings->googleplus }}" class="profile-social" target="_blank"><i class="fa fa-google-plus"></i></a>
                                @endif
                                @if($settings->linkedin != null)
                                    <a href="{{ $settings->linkedin }}" class="profile-social" target="_blank"><i class="fa fa-linkedin"></i></a>
                                @endif
                                @if($settings->link != null)
                                    <a href="{{ $settings->link }}" class="profile-social" target="_blank"><i class="fa fa-globe"></i></a>
                                @endif
                            </div>
                        </div>
                        <h5 class="profile-heading">{{ $agent->name }}</h5>
                        <p>{{ $agent->job }}</p>
                        <p>
                            <i class="fa fa-phone"></i> {{ $settings->phone1 }}<br>
                            <i class="fa fa-phone"></i> {{ $settings->phone2 }}<br>
                            <i class="fa fa-envelope-alt"></i> <a href="#">{{ $agent->email }}</a><br>
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
