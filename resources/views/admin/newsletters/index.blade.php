@extends('admin.layout.main')

@section('content')

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Newsletters</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('dashboard') }}">Dashboard</a></li>
                <li class="active">Newsletters</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title">Newsletters</h3>
                <div class="table-responsive">
                    <table class="table color-bordered-table info-bordered-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Opções</th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse($newsletters as $newsletter)
                            <tr>
                                <td>{{ $newsletter->id }}</td>
                                <td>{{ $newsletter->name }}</td>
                                <td>{{ $newsletter->email }}</td>
                                <td>
                                    <a href="javascript:;" onclick="document.getElementById('newsletter-del-{{ $newsletter->id }}').submit();" class="text-inverse" title="Deletar" data-toggle="tooltip"><i class="ti-trash text-danger"></i></a>
                                    {!! Form::open(['url' => 'newsletters/' . $newsletter->id, 'method' => 'DELETE', 'id' => 'newsletter-del-' . $newsletter->id , 'style' => 'display: none']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">Nada cadastrado no momento.</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
                {{ $newsletters->links() }}
            </div>
        </div>
    </div>

@endsection
