@extends('admin.layout.main')

@section('content')

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Adicionar Serviço</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('dashboard') }}">Dashboard</a></li>
                <li><a href="{{ url('services') }}">Serviços</a></li>
                <li class="active">Adicionar Serviço</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- .row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">Adicionar Serviço</h3>
                @include('errors.errors')
                {!! Form::open(['url' => 'services', 'class' => 'form-horizontal']) !!}
                @include('admin.services.form', ['submitButton' => 'Adicionar'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <!-- /.row -->

@endsection
