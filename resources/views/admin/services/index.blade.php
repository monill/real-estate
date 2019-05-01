@extends('admin.layout.main')

@section('content')

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Serviços</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('dashboard') }}">Dashboard</a></li>
                <li class="active">Serviços</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title">Serviços</h3>
                <p class="text-muted">Serviços ofertados pela empresa, são exibidos na página SOBRE</p>
                @include('errors.errors')
                <div class="form-inline padding-bottom-15">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <a href="{{ url('services/create') }}" class="btn btn-outline btn-info btn-sm m-b-20">
                                    <i class="icon wb-plus" aria-hidden="true"></i>Adicionar Serviço
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @include('errors.errors')
                <div class="table-responsive">
                    <table class="table color-bordered-table info-bordered-table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Título</th>
                            <th>Opções</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($services as $service)
                            <tr>
                                <td>{{ $service->id }}</td>
                                <td>{{ $service->title }}</td>
                                <td>
                                    <a href="{{ url('services/' . $service->id . '/edit') }}" class="text-inverse p-r-10" data-toggle="tooltip" title="Editar"><i class="ti-marker-alt"></i></a>
                                    <a href="javascript:;" onclick="document.getElementById('service-del-{{ $service->id }}').submit();" class="text-inverse" title="Deletar" data-toggle="tooltip"><i class="ti-trash text-danger"></i></a>
                                    {!! Form::open(['url' => 'services/' . $service->id, 'method' => 'DELETE', 'id' => 'service-del-' . $service->id , 'style' => 'display: none']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Nada cadastrado no momento.</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

@endsection
