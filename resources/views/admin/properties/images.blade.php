@extends('admin.layout.main')

@section('css')
    <!-- Dropzone -->
    <link href="{{ asset('admin/vendor/dropzone/dist/dropzone.css') }}" rel="stylesheet" />
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
                <p class="text-muted m-b-30">Adicionar multiplas imagens</p>
                <form action="#" class="dropzone">
                    <div class="fallback">
                        <input name="file" type="file" multiple />
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <!-- .row -->
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">Remover</h3>
                <p class="text-muted m-b-30">Remover imagens</p>
                <form action="#" class="form-horizontal">

                </form>
            </div>
        </div>
    </div>
    <!-- /.row -->

@endsection

@section('scripts')
    <!-- Dropzone Plugin JavaScript -->
    <script src="{{ asset('admin/vendor/dropzone/dist/dropzone.js') }}"></script>
@endsection
