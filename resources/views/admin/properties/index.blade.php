@extends('admin.layout.main')

@section('css')
    <!-- bootstrap-select -->
    <link href="{{ asset('admin/vendor/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet" />
@endsection

@section('content')

    <div class="row bg-title">
        <!-- .page title -->
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Propriedades</h4> </div>
        <!-- /.page title -->
        <!-- .breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('dashboard') }}">Dashboard</a></li>
                <li class="active">Propriedades</li>
            </ol>
        </div>
        <!-- /.breadcrumb -->
    </div>
    <!-- .row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title">Pesquisar</h3>
                @include('errors.errors')
                <div class="form-inline padding-bottom-15">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <a href="{{ url('properties/create') }}" class="btn btn-outline btn-info btn-sm m-b-20">
                                    <i class="icon wb-plus" aria-hidden="true"></i>Adicionar Propriedade
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                {!! Form::open(['url' => 'search', 'role' => 'form', 'class' => 'row']) !!}
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label for="purpose"></label>
                            <select class="selectpicker show-tick" name="purpose" id="purpose" data-style="form-control">
                                <option value="0" disabled selected>Proposito</option>
                                <option value="1">Locação</option>
                                <option value="2">Venda</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label for="city"></label>
                            <input name="city" id="city" placeholder="Cidade" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label for="slider"></label>
                            <select class="selectpicker show-tick" name="slider" id="slider" data-style="form-control">
                                <option value="" disabled selected>Tela inicial</option>
                                <option value="0">Não</option>
                                <option value="1">Sim</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-2">
                        <div class="form-group">
                            <label for="type"></label>
                            <select class="selectpicker show-tick" name="type" id="type" data-style="form-control">
                                <option value="" disabled selected>Tipo</option>
                                <option value="1">Casa</option>
                                <option value="2">Apartamento</option>
                                <option value="3">Terreno</option>
                                <option value="4">Flat</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-1">
                        <label></label>
                        <button type="submit" class="btn btn-inverse btn-block form-control"><i class="fa fa-search"></i></button>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <!-- /.row -->
    <!-- .row -->
    <div class="row">
        @foreach($properties as $property)
        <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="white-box pro-box p-0">
                <div class="pro-list-img" style="background: url('{{ $property->getMainImage() }}') center center / cover no-repeat;">
                    @if($property->featured)
                        <span class="pro-label-img"><i class="fa fa-heart text-warning fa-2x"></i></span>
                    @endif
                </div>
                <div class="pro-content-3-col">
                    <div class="pro-list-details">
                        <h4><a class="text-dark" href="javascript:void(0)">{{ $property->name }}</a></h4>
                        <h4 class="text-danger"><small>R&#36;</small> {{ number_format($property->price) }}</h4>
                    </div>
                </div>
                <hr class="m-0"> <span class="label pro-col-label label-white text-dark">{{ $property->getPurpose() }}</span>
                <div class="pro-list-info-3-col">
                    <ul class="pro-info text-muted m-b-0">
                        @if($property->bathrooms > 0)
                        <li><span><img src="{{ asset('admin/images/property/pro-bath.png') }}" alt="bath"></span>
                            <span>Banheiros</span><span class="label label-default pull-right text-inverse">{{ $property->bathrooms }}</span>
                        </li>
                        @endif
                        @if($property->bedrooms > 0)
                        <li><span><img src="{{ asset('admin/images/property/pro-bed.png') }}" alt="bed"></span>
                            <span>Quartos</span><span class="label label-default pull-right text-inverse">{{ $property->bedrooms }}</span>
                        </li>
                        @endif
                        @if($property->garage > 0)
                        <li><span><img src="{{ asset('admin/images/property/pro-garage.png') }}" alt="garage"></span>
                            <span>Garagem</span><span class="label label-default pull-right text-inverse">{{ $property->garage }}</span>
                        </li>
                        @endif
                    </ul>
                </div>
                <hr class="m-0">
                <div class="pro-agent-col-3">
                    <div class="agent-name m-l-10">
                        <a href="javascript:;" class="text-inverse p-r-10" onclick="document.getElementById('property-feature-{{ $property->id }}').submit();">
                            @if($property->slider)
                                <i class="fa fa-history" data-toggle="tooltip" title="Remover da tela inicial" data-title="Remover do inicial"></i>
                            @else
                                <i class="fa fa-desktop" data-toggle="tooltip" title="Colocar na tela inicial" data-title="Colocar na tela inicial"></i>
                            @endif
                        </a>
                        {!! Form::open(['url' => 'slider/' . $property->id, 'method' => 'PUT', 'id' => 'property-feature-' . $property->id, 'style' => 'display: none']) !!}
                        {!! Form::close() !!}
                        <a href="javascript:;" class="text-inverse p-r-10" onclick="document.getElementById('property-feature-{{ $property->id }}').submit();">
                            @if($property->featured)
                                <i class="fa fa-star text-warning" data-toggle="tooltip" title="Remover destaque" data-title="Remover destaque"></i>
                            @else
                                <i class="fa fa-star-o" data-toggle="tooltip" title="Colocar em destaque" data-title="Colocar em destaque"></i>
                            @endif
                        </a>
                        {!! Form::open(['url' => 'feature/' . $property->id, 'method' => 'PUT', 'id' => 'property-feature-' . $property->id, 'style' => 'display: none']) !!}
                        {!! Form::close() !!}
                        <a href="{{ url('properties/' . $property->id . '/images') }}" class="text-inverse p-r-10" data-toggle="tooltip" title="Imagens"><i class="fa fa-picture-o"></i></a>
                        <a href="{{ url('properties/' . $property->id . '/edit') }}" class="text-inverse p-r-10" data-toggle="tooltip" title="Editar"><i class="ti-marker-alt"></i></a>
                        <a href="javascript:;" onclick="document.getElementById('property-del-{{ $property->id }}').submit();" class="text-inverse" title="Deletar" data-toggle="tooltip"><i class="ti-trash text-danger"></i></a>
                        {!! Form::open(['url' => 'properties/' . $property->id, 'method' => 'DELETE', 'id' => 'property-del-' . $property->id , 'style' => 'display: none']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        @endforeach
    </div>
    <!-- /.row -->
    <!-- .row -->
    <div class="row">
        <div class="col-md-12 text-center">
            {{ $properties->links() }}
        </div>
    </div>
    <!-- /.row -->

@endsection

@section('scripts')
    <!-- bootstrap-select javascript -->
    <script src="{{ asset('admin/vendor/bootstrap-select/bootstrap-select.min.js') }}"></script>
@endsection
