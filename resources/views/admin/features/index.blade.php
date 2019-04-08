@extends('admin.layout.main')

@section('css')
    <!-- X-Editable -->
    <link href="{{ asset('admin/vendor/x-editable/dist/css/bootstrap-editable.css') }}" rel="stylesheet">
@endsection

@section('content')

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Características</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('dashboard') }}">Dashboard</a></li>
                <li class="active">Características</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title">Características</h3>
                <p class="text-muted">Para editar, clique em cima do nome</p>
                <div class="form-inline padding-bottom-15">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-outline btn-info btn-sm m-b-20"><i class="icon wb-plus" aria-hidden="true"></i>Adicionar Destaque</a>
                            </div>
                        </div>
                    </div>
                </div>
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
                                <td>
                                    <a href="#" class="featureEdit" id="name" data-type="text"
                                       data-column="name"
                                       data-title="Editar Destaque"
                                       data-name="name"
                                       data-value="{{ $feature->name }}"
                                       data-pk="{{ $feature->id }}"
                                       data-url="{{ route('features.update', ['id' => $feature->id]) }}">{{ $feature->name }}</a>
                                </td>
                                <td>{{ $feature->properties()->count() }}</td>
                                <td>
                                    <a href="javascript:;" onclick="document.getElementById('feature-del-{{ $feature->id }}').submit();" class="text-inverse" title="Deletar" data-toggle="tooltip"><i class="ti-trash text-danger"></i></a>
                                    {!! Form::open(['url' => 'features/' . $feature->id, 'method' => 'DELETE', 'id' => 'feature-del-' . $feature->id , 'style' => 'display: none']) !!}
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
            <!-- modal -->
            <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    {!! Form::open(['url' => 'features']) !!}
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" id="myModalLabel">Adicionar Destaque</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                {!! Form::label('name', 'Nome: *') !!}
                                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="modal-footer">
                            {!! Form::submit('Salvar', ['class' => 'btn btn-success']) !!}
                            <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
        </div>
    </div>

@endsection

@section('scripts')
    <!-- X-Editable -->
    <script src="{{ asset('admin/vendor/x-editable/dist/js/bootstrap-editable.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('.featureEdit').editable({
                mode: 'inline',
                type: 'text',
                min: '1',
                max: '255',
                ajaxOptions: {
                    type: 'put',
                    dataType: 'json'
                },
                validate:function(string){
                    if ($.trim(string) === '') {
                        return "Campo é obrigatório";
                    }
                    let texto = $.trim(string.length);
                    if (texto <= 0 || texto >= 255) {
                        return "Minimo 1 e Máximo de 255 caracteres.";
                    }
                },
                success:function(data){
                    console.log(data);
                } ,
                error:function(data) {
                    console.log(data);
                }
            });
        });
    </script>
@endsection
