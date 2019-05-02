@extends('admin.layout.main')

@section('css')
    <!-- morris CSS -->
    <link href="{{ asset('admin/vendor/morrisjs/morris.css') }}" rel="stylesheet">
@endsection

@section('content')

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Dashboard</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li class="active">Dashboard</li>
                <li><a href="{{ url('/') }}" target="_blank">Visitar site</a></li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!--.row -->
    <div class="row re">
        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">Todas as propriedades</h3>
                <ul class="list-inline two-part">
                    <li><i class="ti-home text-info"></i></li>
                    <li class="text-right"><span class="counter">{{ $totalProperties }}</span></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">Propriedades a venda</h3>
                <ul class="list-inline two-part">
                    <li><i class="icon-basket text-purple"></i></li>
                    <li class="text-right"><span class="counter">{{ $forSale }}</span></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">Propriedades para locação</h3>
                <ul class="list-inline two-part">
                    <li><i class="icon-tag text-danger"></i></li>
                    <li class="text-right"><span class="counter">{{ $forRent }}</span></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">Visitas ao site</h3>
                <ul class="list-inline two-part">
                    <li><i class="ti-user text-success"></i></li>
                    <li class="text-right"><span class="counter">{{ $totalVisitors }}</span></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <!-- .row -->
    <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">Estatísticas</h3>
                <ul class="list-inline text-right">
                    <li>
                        <h5><i class="fa fa-circle m-r-5" style="color: #b8edf0;"></i>Venda</h5></li>
                    <li>
                        <h5><i class="fa fa-circle m-r-5" style="color: #b4c1d7;"></i>Locação</h5></li>
                    <li>
                        <h5><i class="fa fa-circle m-r-5" style="color: #fcc9ba;"></i>Total</h5>
                    </li>
                </ul>
                <div id="morris-years" style="height:372px;"></div>
            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box m-b-15">
                        <h3 class="box-title">Valor total para venda</h3>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6  m-t-30">
                                <h1 class="text-info">R&#36; {{ $totalForSale }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="white-box bg-purple m-b-15">
                        <h3 class="text-white box-title">Valor total para locação</h3>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6  m-t-30">
                                <h1 class="text-white">R&#36; {{ $totalForRent }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <!-- row -->
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">Top 5 Propriedades</h3>
                <p class="text-muted">Mais vistos no site</p>
                <div class="table-responsive">
                    <table class="table product-overview">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Foto</th>
                                <th>Propriedade</th>
                                <th>Tipo</th>
                                <th>Data</th>
                                <th>Valor</th>
                                <th>Views</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($topFiveProperties as $topFiveProperty)
                            <tr>
                                <td>#{{ $topFiveProperty->id }}</td>
                                <td><img src="{{ $topFiveProperty->getMainImage() }}" alt="Property" width="80"></td>
                                <td>{{ $topFiveProperty->name }}</td>
                                <td>{{ $topFiveProperty->getType() }}</td>
                                <td>{{ $topFiveProperty->created_at->format('d-m-Y') }}</td>
                                <td>R&#36; {{ priceFormat($topFiveProperty->price) }}</td>
                                <td>{{ $topFiveProperty->views }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <!-- .row  -->
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="white-box">
                <h4 class="box-title">Top 3 Blogs visualizados</h4>
                @foreach($topThreeBlogs as $topThreeBlog)
                <div class="pro-list">
                    <div class="pro-img p-r-10">
                        <img src="{{ $topThreeBlog->getMainImage() }}" alt="top-blog" style="width: 100px; height: 66px;">
                    </div>
                    <div class="pro-detail">
                        <h5 class="m-t-0 m-b-5">{{ $topThreeBlog->title }}</h5>
                        <p class="text-muted font-12">{{ $topThreeBlog->created_at->format('d-m-Y') }} | {{ $topThreeBlog->user->name }}</p>
                        <p class="text-muted font-12">Views: {{ $topThreeBlog->views }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="white-box">
                <h4 class="box-title">Últimos 3 Blogs cadastrados</h4>
                @foreach($lastThreeBlogs as $lastThreeBlog)
                    <div class="pro-list">
                        <div class="pro-img p-r-10">
                            <img src="{{ $lastThreeBlog->getMainImage() }}" alt="last-blog" style="width: 100px; height: 66px;">
                        </div>
                        <div class="pro-detail">
                            <h5 class="m-t-0 m-b-5">{{ $lastThreeBlog->title }}</h5>
                            <p class="text-muted font-12">{{ $lastThreeBlog->created_at->format('d-m-Y') }} | {{ $lastThreeBlog->user->name }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <!--Morris JavaScript -->
    <script src="{{ asset('admin/vendor/raphael/raphael-min.js') }}"></script>
    <script src="{{ asset('admin/vendor/morrisjs/morris.js') }}"></script>
    <script src="{{ asset('admin/js/properties-data.js') }}"></script>
@endsection
