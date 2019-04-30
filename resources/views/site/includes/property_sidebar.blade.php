<!-- .col-md-9 -->
<div class="col-md-3 sidebar">
    <section>
        <div class="section-content">
            <div class="section-header onscroll-animate" data-animation="fadeInLeft">
                <h1>Compartilhe</h1>
            </div>
            <div class="onscroll-animate" data-animation="fadeInUp">
                @if($settings->facebook != null)
                    <div class="social-container">
                        <a href="{{ $settings->facebook }}" target="_blank"><i class="fa fa-facebook"></i></a>
                    </div>
                @endif
                @if($settings->twitter != null)
                    <div class="social-container">
                        <a href="{{ $settings->twitter }}" target="_blank"><i class="fa fa-twitter"></i></a>
                    </div>
                @endif
                @if($settings->googleplus != null)
                    <div class="social-container">
                        <a href="{{ $settings->googleplus }}" target="_blank"><i class="fa fa-google-plus"></i></a>
                    </div>
                @endif
                @if($settings->linkedin != null)
                    <div class="social-container">
                        <a href="{{ $settings->linkedin }}" target="_blank"><i class="fa fa-linkedin"></i></a>
                    </div>
                @endif
                @if($settings->link != null)
                    <div class="social-container">
                        <a href="{{ $settings->link }}" target="_blank"><i class="fa fa-globe"></i></a>
                    </div>
                @endif
            </div>
        </div><!-- .section-content -->
    </section>

    <section>
        <div class="section-content">
            <div class="section-header onscroll-animate" data-animation="fadeInLeft">
                <h1>Categorias</h1>
            </div>
            <ul class="list-values">
                @foreach(\App\Models\Category::orderBy('name', 'DESC')->get() as $category)
                    <li class="onscroll-animate" data-animation="fadeInRight" data-delay="300">
                        <a href="#">
                            <article>
                                <div class="list-values-content">{{ $category->name }}</div>
                                <div class="list-values-value">{{ $category->properties()->count() }}</div>
                            </article>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div><!-- .section-content -->
    </section>

    <section>
        <div class="section-content">
            <div class="section-header onscroll-animate" data-animation="fadeInLeft">
                <h1>Nossos Corretores</h1>
            </div>

            @foreach(\App\User::where('admin', '==', false)->inRandomOrder()->take(3)->get() as $agent)
            <article class="onscroll-animate" data-animation="fadeInRight" data-delay="400">
                <div class="profile-small">
                    <div class="profile-small-photo">
                        <img alt="avatar 1" src="{{ $agent->getAvatar() }}" style="width: 70px">
                    </div>
                    <div class="profile-small-content">
                        <h5>{{ $agent->name }}</h5>
                        {{ $agent->job }}<br>
                    </div>
                </div>
            </article>
            @endforeach

            <p class="text-center">
                <a href="{{ url('corretores') }}" class="read-more-link-alt">
                    <span class="text-smaller">Veja todos os corretores</span>
                </a>
            </p>
        </div><!-- .section-content -->
    </section>

    <section>
        <div class="section-content">
            <div class="section-header onscroll-animate" data-animation="fadeInLeft">
                <h1>Tags</h1>
            </div>
            <div class="onscroll-animate">
                @foreach(\App\Models\Tag::inRandomOrder()->get() as $tag)
                    <div class="tag-container"><a class="tag" href="#">{{ $tag->name }}</a></div>
                @endforeach
            </div>
        </div>
    </section>

</div><!-- .col-md-3 -->