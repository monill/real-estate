@extends('admin.layout.main')

@section('css')
    <link href="{{ asset('admin/vendor/datatables/jquery.dataTables.min.css') }}" rel="stylesheet"/>
@endsection

@section('content')

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Logs</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('dashboard') }}">Dashboard</a></li>
                <li class="active">Logs</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">Logs</h3>
                <p class="text-muted m-b-30">Data table logs</p>
                <div class="table-responsive">
                    <table id="myTable" class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Usuário</th>
                            <th>Ação</th>
                            <th>Quando</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($logs as $log)
                            <tr>
                                <td>{{ $log->id }}</td>
                                <td>{{ $log->user->name }}</td>
                                <td>{{ $log->content }}</td>
                                <td>{{ $log->created_at->format('d-m-Y H:i') }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

@endsection

@section('scripts')
    <script src="{{ asset('admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable({
                "displayLength": 50,
                "searching": true,
                "responsive": true,
                "order": [[ 0, "desc" ]],
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
                }
            });
        });
    </script>
@endsection
