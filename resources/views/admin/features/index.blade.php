@extends('admin.layout.main')

@section('content')

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Destaques</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('dashboard') }}">Dashboard</a></li>
                <li class="active">Destaques</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title">Destaques</h3>
                <p class="text-muted">Para editar, clique em cima do nome</p>
                <div class="table-responsive">
                    <table class="table color-bordered-table info-bordered-table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Em uso</th>
                            <th>Opções</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($features as $feature)
                            <tr>
                                <td>{{ $feature->id }}</td>
                                <td>{{ $feature->name }}</td>
                                <td>{{ $feature->properties()->count() }}</td>
                                <td>
                                    <a href="javascript:void(0)" class="text-inverse" title="Deletar" data-toggle="tooltip"><i class="ti-trash"></i></a>
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
