<!-- .col-md-9 -->
<div class="col-md-3 sidebar">

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

    <section>
        <div class="section-content">
            <div class="section-header onscroll-animate" data-animation="fadeInLeft">
                <h1>Mais visualizados</h1>
            </div>
            @foreach(\App\Models\Blog::orderBy('views', 'DESC')->take(3)->get() as $blog)
            <article class="onscroll-animate" data-animation="fadeInRight" data-delay="400">
                <div class="post-small">
                    <div class="post-small-img">
                        <a href="{{ route('blog.view', [$blog->id, $blog->slug]) }}">
                            <img alt="img" src="{{ $blog->getMainImage() }}" style="width: 70px">
                        </a>
                    </div>
                    <div class="post-small-content">
                        <h5>{{ str_limit($blog->title, 20) }}</h5>
                        {{ $blog->created_at->format('d.m.Y') }}
                        <br>
                        {{ $blog->comments()->count() }} Comentários
                    </div>
                </div>
            </article>
            @endforeach
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
                <h1>Propriedade em Destaque</h1>
            </div>
            <div class="post-preview">
                @foreach(\App\Models\Property::orderBy('views', 'DESC')->take(1)->get() as $feature)
                <a href="{{ route('propriedade', [$feature->id, $feature->slug]) }}">
                    <section>
                        <div class="post-preview-img">
                            <img alt="post img" src="{{ $feature->getMainImage() }}">
                            <div class="post-preview-label-big">
                                {{ $feature->name }}<br>
                                <strong>R&#36; {{ priceFormat($feature->price) }}</strong>
                            </div>
                        </div>
                    </section>
                </a>
                @endforeach
            </div>
        </div>
    </section>

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
</div><!-- .col-md-3 -->