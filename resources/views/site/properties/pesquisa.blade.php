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
                    <h1>Listagens Recentes</h1>
                    <h4>Veja nossas listas recentes aqui, você vai encontrar todos os tipos de casas.</h4>
                </div>
                <div class="row">
                    @forelse($properties as $property)
                        <div class="col-md-4 onscroll-animate">
                            <article>
                                <div class="post-preview">
                                    <a href="{{ route('propriedade', [$property->id, $property->slug]) }}">
                                        <section>
                                            <div class="post-preview-img">
                                                <div class="post-preview-img-inner">
                                                    <img alt="post img" src="{{ propertyMainImage($property->id) }}">
                                                </div>
                                                <div class="post-preview-label{{ $property->purpose == 1 ? '2' : '' }}">{{ $property->purpose == 1 ? 'Locação' : 'Venda' }}</div>
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
                                                R$ {{ priceFormat($property->price) }}
                                                {!! $property->purpose == 1 ? '<span class="small">por mês</span>' : '' !!}
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
                    @empty
                        <div class="col-md-12 onscroll-animate">
                            <p class="text-center text-uppercase"><b>Nenhuma pesquisa encontrada.</b></p>
                        </div>
                    @endforelse
                </div>
                <!-- .row -->

                <div class="text-center onscroll-animate">
                    {{ $properties->links() }}
                </div>
            </div><!-- .container -->
        </div><!-- .section-content -->
    </section>

    @include('site.includes.quote')

@endsection
