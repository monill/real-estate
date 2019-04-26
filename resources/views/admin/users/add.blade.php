@extends('admin.layout.main')

@section('css')
    <!-- Dropify -->
    <link href="{{ asset('admin/vendor/dropify/dist/css/dropify.min.css') }}" rel="stylesheet" />
@endsection

@section('content')

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Corretores</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('dashboard') }}">Dashboard</a></li>
                <li><a href="{{ url('users') }}">Corretores</a></li>
                <li class="active">Adicionar</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- .row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">Adicionar Corretor(a)</h3>
                {!! Form::open(['url' => 'users', 'files' => true, 'class' => 'form-horizontal']) !!}
                    <div class="form-group">
                        {!! Form::label('name', 'Nome:', ['class' => 'col-md-12']) !!}
                        <div class="col-md-12">
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nome', 'maxlength' => 255]) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('email', 'E-mail:', ['class' => 'col-md-12']) !!}
                        <div class="col-md-12">
                            {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'E-mail', 'maxlength' => 255]) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('senha', 'Senha:', ['class' => 'col-md-12']) !!}
                        <div class="col-md-12">
                            {!! Form::text('senha', null, ['class' => 'form-control', 'placeholder' => 'Senha', 'maxlength' => 16]) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('job', 'Cargo:', ['class' => 'col-md-12']) !!}
                        <div class="col-md-12">
                            {!! Form::text('job', null, ['class' => 'form-control', 'placeholder' => 'Cargo', 'maxlength' => 255]) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('about', 'Sobre o(a) corretor(a):', ['class' => 'col-md-12']) !!}
                        <div class="col-md-12">
                            {!! Form::textarea('about', null, ['class' => 'form-control', 'rows' => 5, 'maxlength' => 1500]) !!}
                        </div>
                    </div>
                @if(auth()->user()->isAdmin())
                    <div class="form-check">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" name="admin" value="true" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description"> Admin ?</span>
                        </label>
                    </div>
                @endif
                    <div class="form-group">
                        {!! Form::label('avatar', 'Foto:', ['class' => 'col-md-12']) !!}
                        <div class="col-md-12">
                            {!! Form::file('avatar', ['class' => 'dropify', 'accept' => 'image/*']) !!}
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Adicionar</button>
                    <a href="{{ url('users') }}" class="btn btn-inverse waves-effect waves-light">Cancelar</a>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <!-- /.row -->

@endsection

@section('scripts')
    <!-- file upload -->
    <script src="{{ asset('admin/vendor/dropify/dist/js/dropify.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.dropify').dropify();
        });
    </script>
@endsection
