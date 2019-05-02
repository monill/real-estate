<div class="section-header onscroll-animate" data-animation="fadeInLeft">
    <h1>Listagens Recentes</h1>
    <h4>Veja nossas listas recentes aqui, você vai encontrar todos os tipos de casas.</h4>
</div>
<div class="row">
    @foreach($properties as $property)
        <div class="col-md-4 onscroll-animate">
            <article>
                <div class="post-preview">
                    <a href="{{ route('propriedade', [$property->id, $property->slug]) }}">
                        <section>
                            <div class="post-preview-img">
                                <div class="post-preview-img-inner">
                                    <img alt="post img" src="{{ $property->getMainImage() }}">
                                </div>
                                <div class="post-preview-label{{ $property->getPurposeColor() }}">{{ $property->getPurpose() }}</div>
                                @if($property->featured)
                                    <div class="post-preview-label-alt-wrapper">
                                        <div class="post-preview-label-alt">Destaque <i class="fa fa-star"></i></div>
                                    </div>
                                @endif
                            </div>
                        </section>
                    </a>
                    <div class="post-preview-content">
                        <h2 class="post-preview-heading">{{ $property->name }}</h2>
                        <p>{!! str_limit($property->description, 107, '...') !!}</p>
                        <div class="post-preview-price-container">
                            <a href="{{ route('propriedade', [$property->id, $property->slug]) }}"
                               class="read-more-link-alt">Leia mais</a>
                            <p class="listing-price">
                                R&#36; {{ priceFormat($property->price) }}
                                {!! $property->purposeFormat() !!}
                            </p>
                        </div>
                        <div class="post-preview-detail">
                            @if($property->area != null)
                                Área: {{ $property->area }} <span class="delimiter-inline-alt"></span>
                            @endif
                            @if($property->bedrooms > 0)
                                Quartos: {{ $property->bedrooms }} <span class="delimiter-inline"></span>
                            @endif
                            @if($property->bathrooms > 0)
                                Banheiros: {{ $property->bathrooms }} <span class="delimiter-inline"></span>
                            @endif
                            @if($property->garage > 0)
                                Garagens: {{ $property->garage }}
                            @endif
                        </div>
                    </div>
                </div>
            </article>
        </div><!-- .col-md-4 -->
    @endforeach
</div>
<!-- .row -->