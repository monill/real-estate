@extends('admin.layout.main')

@section('css')
    <!-- Footable CSS -->
    <link href="{{ asset('admin/vendor/footable/css/footable.core.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet" />
@endsection

@section('content')

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Blog Comentários</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('dashboard') }}">Dashboard</a></li>
                <li><a href="{{ url('blogs') }}">Blogs</a></li>
                <li class="active">Comentários</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">Blog Comentários</h3>
                <p class="text-muted m-b-20">Para aprovar ou desaprovar o comentário, clique no botão em Status</p>
                @include('errors.errors')
                <table id="demo-foo-row-toggler" class="table toggle-circle table-hover">
                    <thead>
                        <tr>
                            <th data-toggle="true">Blog</th>
                            <th>Nome</th>
                            <th data-hide="email">E-mail</th>
                            <th data-hide="all"> Mensagem </th>
                            <th data-hide="all"> Status </th>
                            <th data-hide="all"> Deletar? </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($comments as $comment)
                        <tr>
                            <td>{{ $comment->blog->name }}</td>
                            <td>{{ $comment->name }}</td>
                            <td>{{ $comment->email }}</td>
                            <td>{{ $comment->message }}</td>
                            <td>
                                <a href="javascript:;" onclick="document.getElementById('comment-upd-{{ $comment->id }}').submit();">
                                    @if($comment->allowed)
                                        <span class="label label-table label-success" data-toggle="tooltip" title="Aprovado">Aprovado</span>
                                    @else
                                        <span class="label label-table label-inverse" data-toggle="tooltip" title="Não Aprovado">Não Aprovado</span>
                                    @endif
                                </a>
                                {!! Form::open(['url' => 'comments/' . $comment->id, 'method' => 'PUT', 'id' => 'comment-upd-' . $comment->id, 'style' => 'display: none']) !!}
                                {!! Form::close() !!}
                            </td>
                            <td>
                                <a href="javascript:;" onclick="document.getElementById('comment-del-{{ $comment->id }}').submit();" class="text-inverse" title="Deletar" data-toggle="tooltip"><i class="ti-trash text-danger"></i></a>
                                {!! Form::open(['url' => 'comments/' . $comment->id, 'method' => 'DELETE', 'id' => 'comment-del-' . $comment->id , 'style' => 'display: none']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">Nenhum comentário no momento.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /.row -->

@endsection

@section('scripts')
    <!-- Footable -->
    <script src="{{ asset('admin/vendor/footable/js/footable.all.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap-select/bootstrap-select.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#demo-foo-row-toggler').footable();
        });
    </script>
@endsection
