@extends('admin.layout.main')

@section('css')
    <!-- morris CSS -->
    <link href="{{ asset('admin/vendor/morrisjs/morris.css') }}" rel="stylesheet">
@endsection

@section('content')

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Visitantes</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('dashboard') }}">Dashboard</a></li>
                <li class="active">Visitantes</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-md-5 col-lg-4 col-sm-12 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">Sistemas operacionais</h3>
                <div id="morris-os" class="ecomm-donute" style="height: 317px;"></div>
            </div>
        </div>

        <div class="col-md-5 col-lg-4 col-sm-12 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">Navegadores</h3>
                <div id="morris-browsers" class="ecomm-donute" style="height: 317px;"></div>
            </div>
        </div>

        <div class="col-md-5 col-lg-4 col-sm-12 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">Paises</h3>
                <div id="morris-countries" class="ecomm-donute" style="height: 317px;"></div>
            </div>
        </div>

    </div>
    <!-- row -->
    <div class="row">
        <div class="col-md-5 col-lg-4 col-sm-12 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">Estados</h3>
                <div id="morris-estates" class="ecomm-donute" style="height: 317px;"></div>
            </div>
        </div>

        <div class="col-md-5 col-lg-4 col-sm-12 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">Cidades</h3>
                <div id="morris-cities" class="ecomm-donute" style="height: 317px;"></div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-lg-12 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">Meses mais acessados</h3>
                <p>Valores referente ao ano de {{ date('Y') }}</p>
                <div id="morris-bar-chart"></div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <!--Morris JavaScript -->
    <script src="{{ asset('admin/vendor/raphael/raphael-min.js') }}"></script>
    <script src="{{ asset('admin/vendor/morrisjs/morris.js') }}"></script>
    <script src="{{ asset('admin/js/visitors-data.js') }}"></script>
@endsection
