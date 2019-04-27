@extends('admin.layout.main')

@section('css')
    <!-- Dropzone -->
    <link href="{{ asset('admin/vendor/dropzone/dist/dropzone.css') }}" rel="stylesheet" />
    <!-- Popup CSS -->
    <link href="{{ asset('admin/vendor/Magnific-Popup-master/dist/magnific-popup.css') }}" rel="stylesheet">
@endsection

@section('content')

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Adicionar/Remover Imagens</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('properties') }}">Propriedades</a></li>
                <li class="active">Images</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- .row -->
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">Adicionar</h3>
                <p class="text-muted m-b-0">Adicionar multiplas imagens</p>
                <p class="text-muted m-b-0">Tamanho máximo permitido da imagem é de 3 MB</p>
                <p class="m-b-30 text-center"><b>Atualize a página assim que terminar o upload de todas a imagens.</b></p>

                {!! Form::open(['url' => 'upload', 'files' => true, 'class' => 'dropzone']) !!}
                {!! Form::hidden('pp_id', $property->id) !!}
                    <div class="fallback">
                        <input name="file" type="file" multiple accept="image/x-png,image/jpg,image/jpeg" />
                    </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
    <!-- /.row -->
    <!-- .row -->
    <div class="row el-element-overlay m-b-40">
        <!-- /.usercard -->
        <div class="col-md-12 m-b-30">
            <h4><strong>Remover</strong></h4>
            <p>Remover Imagens</p>

            @include('errors.errors')
        </div>
        @foreach($images as $image)
        <!-- /.usercard-->
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="white-box">
                <div class="el-card-item" style="padding-bottom: 0px;">
                    <div class="el-card-avatar el-overlay-1">
                        <img src="{{ asset('uploads/properties/' . $image->property_id . '/' . $image->filename) }}" alt="Avatar" />
                        <div class="el-overlay scrl-dwn">
                            <ul class="el-info">
                                <li><a class="btn default btn-outline image-popup-vertical-fit" href="{{ $image->getImages() }}"><i class="icon-magnifier"></i></a></li>
                                <li>
                                    <a href="javascript:;" onclick="document.getElementById('main-img-{{ $image->id }}').submit();" class="btn default btn-outline">
                                        {!! $image->getFeature() !!}
                                    </a>
                                </li>
                                {!! Form::open(['url' => 'main-image/' . $image->id, 'method' => 'PUT', 'id' => 'main-img-' . $image->id , 'style' => 'display: none']) !!}
                                {!! Form::hidden('pp_id', $property->id) !!}
                                {!! Form::close() !!}
                                <li><a href="javascript:;" onclick="document.getElementById('image-del-{{ $image->id }}').submit();" class="btn default btn-outline"><i class="fa fa-trash"></i></a></li>
                                {!! Form::open(['url' => 'upload/delete/' . $image->id, 'id' => 'image-del-' . $image->id , 'style' => 'display: none']) !!}
                                {!! Form::close() !!}
                            </ul>
                        </div>
                        {!! $image->getFeature('fa-2x') !!}
                    </div>
                </div>
            </div>
        </div>
        <!-- /.usercard-->
        @endforeach
    </div>
    <!-- /.row -->

@endsection

@section('scripts')
    <!-- Dropzone Plugin JavaScript -->
    <script src="{{ asset('admin/vendor/dropzone/dist/dropzone.js') }}"></script>
    <script src="{{ asset('admin/js/dropzone-config.js') }}"></script>
    <!-- Magnific popup JavaScript -->
    <script src="{{ asset('admin/vendor/Magnific-Popup-master/dist/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/Magnific-Popup-master/dist/jquery.magnific-popup-init.js') }}"></script>
@endsection
