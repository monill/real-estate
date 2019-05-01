@extends('admin.layout.main')

@section('css')
    <!-- Dropify -->
    <link rel="stylesheet" href="{{ asset('admin/vendor/dropify/dist/css/dropify.min.css') }}">
    <!-- bootstrap-select -->
    <link href="{{ asset('admin/vendor/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet" />
    <!-- custom-select -->
    <link rel="stylesheet" href="{{ asset('admin/vendor/custom-select/custom-select.css') }}">
    <!-- summernotes CSS -->
    <link href="{{ asset('admin/vendor/summernote/dist/summernote.css') }}" rel="stylesheet" />
@endsection

@section('content')

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Editar Blog</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('dashboard') }}">Dashboard</a></li>
                <li><a href="{{ url('blogs') }}">Blogs</a></li>
                <li class="active">Editar Blog</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- .row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">Editar Blog</h3>
                @include('errors.errors')
                <p class="text-muted m-b-30 font-13"> {{ $blog->title }} </p>
                {!! Form::model($blog, ['url' => 'blogs/' . $blog->id, 'files' => true, 'method' => 'PUT', 'class' => 'form-horizontal']) !!}
                    <div class="form-group">
                        {!! Form::label('title', 'Título: *', ['class' => 'col-md-12']) !!}
                        <div class="col-md-12">
                            {!! Form::text('title', $blog->title, ['class' => 'form-control', 'placeholder' => 'Título']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('image', 'Imagem: *') !!}
                        {!! Form::file('image', ['class' => 'dropify', 'accept' => 'image/*']) !!}
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('meta_keywords', 'Palavras-chaves:', ['class' => 'col-md-12']) !!}
                                <div class="col-md-12">
                                    {!! Form::textarea('meta_keywords', $blog->meta_keywords, ['class' => 'form-control', 'placeholder' => 'Meta Keywords', 'rows' => 3]) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('meta_description', 'Descrição:', ['class' => 'col-md-12']) !!}
                                <div class="col-md-12">
                                    {!! Form::textarea('meta_description', $blog->meta_description, ['class' => 'form-control', 'placeholder' => 'Meta Description', 'rows' => 3]) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="form-group">
                    {!! Form::label('tags', 'Tags:', ['class' => 'col-md-12']) !!}
                    <div class="col-md-12">
                        {!! Form::select('tags[]', $tags, null, ['class' => 'select2 m-b-10 select2-multiple', 'multiple' => 'multiple', 'data-placeholder' => 'Tags']) !!}
                    </div>
                </div>
                    <div class="form-group">
                        {!! Form::label('content', 'Conteúdo: *', ['class' => 'col-md-12']) !!}
                        <div class="col-md-12">
                            {!! Form::textarea('content', $blog->content, ['class' => 'form-control summernote', 'placeholder' => 'Conteúdo', 'rows' => 6]) !!}
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Editar</button>
                    <a href="{{ url('blogs') }}" class="btn btn-inverse waves-effect waves-light">Cancelar</a>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <!-- /.row -->

@endsection

@section('scripts')
    <!-- jQuery file upload -->
    <script src="{{ asset('admin/vendor/dropify/dist/js/dropify.min.js') }}"></script>
    <!-- bootstrap-select -->
    <script src="{{ asset('admin/vendor/bootstrap-select/bootstrap-select.min.js') }}"></script>
    <!-- custom-select -->
    <script src="{{ asset('admin/vendor/custom-select/custom-select.min.js') }}"></script>
    <!-- summernote -->
    <script src="{{ asset('admin/vendor/summernote/dist/summernote.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/summernote/lang/summernote-pt-BR.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.dropify').dropify();

            $(".select2").select2();

            $('.summernote').summernote({
                height: 350, // set editor height
                lang: 'pt-BR',
                minHeight: null, // set minimum height of editor
                maxHeight: null, // set maximum height of editor
                focus: false // set focus to editable area after initializing summernote
            });
        });
    </script>
@endsection
