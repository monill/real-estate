@extends('admin.layout.main')

@section('content')

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Dúvidas</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('dashboard') }}">Dashboard</a></li>
                <li><a href="{{ url('properties') }}">Propriedades</a></li>
                <li class="active">Dúvidas</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title">Dúvidas</h3>
                <p class="text-muted">Não lidas: <code>{{ $unread }}</code></p>
                <p class="text-muted">Clique no nome da pessoa para ler a mensagem.</p>
                <div class="table-responsive">
                    <table class="table color-table info-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Propriedade</th>
                                <th>Nome</th>
                                <th>Quando</th>
                                <th>Opções</th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse($questions as $question)

                            <tr @if($question->unread == false) class="font-weight-bold" @endif>
                                <td class="hidden-xs">{{ $question->id }}</td>
                                <td class="hidden-xs">{{ $question->property->name }}</td>
                                <td class="hidden-xs"><a href="{{ url('questions/' . $question->id) }}">{{ $question->name }}</a></td>
                                <td class="hidden-xs">{{ $question->created_at->format('d/m/Y H:i') }}</td>
                                <td class="hidden-xs">
                                    <a href="javascript:;" onclick="document.getElementById('question-del-{{ $question->id }}').submit();" class="text-inverse" title="Deletar" data-toggle="tooltip"><i class="ti-trash text-danger"></i></a>
                                    {!! Form::open(['url' => 'questions/' . $question->id, 'method' => 'DELETE', 'id' => 'question-del-' . $question->id , 'style' => 'display: none']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>

                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Nenhuma mensagem até o momento.</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    {{ $questions->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection
