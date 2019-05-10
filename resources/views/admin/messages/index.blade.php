@extends('admin.layout.main')

@section('content')

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Mensagens</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('dashboard') }}">Dashboard</a></li>
                <li class="active">Mensagens</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- row -->
    <div class="row">
        <!-- Left sidebar -->
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title">Mensagens</h3>
                <p class="text-muted">Para visualizar, clique em cima do assunto</p>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-2 col-md-3  col-sm-12 col-xs-12 inbox-panel">
                        <div>
                            <div class="list-group mail-list m-t-20">
                                <a href="#" class="list-group-item active">Mensagens <span class="label label-rouded label-success pull-right">{{ $unread }}</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-9 col-sm-12 col-xs-12 mail_listing">
                        <div class="inbox-center">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nome</th>
                                        <th>Assunto (Clique)</th>
                                        <th>Recebido em</th>
                                        <th>Opções</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @forelse($messages as $message)
                                    <tr @if($message->unread == false) class="unread" @endif>
                                        <td>
                                            <div class="checkbox m-t-0 m-b-0">
                                            </div>
                                        </td>
                                        <td class="hidden-xs">{{ $message->name }}</td>
                                        <td class="max-texts">
                                            <a href="{{ url('messages/' . $message->id) }}"> {{ $message->subject }}</a>
                                        </td>
                                        <td class="hidden-xs"> {{ $message->created_at->format('d/m/Y H:i') }} </td>
                                        <td class="hidden-xs">
                                            <a href="javascript:;" onclick="document.getElementById('message-del-{{ $message->id }}').submit();" class="text-inverse" title="Deletar" data-toggle="tooltip"><i class="ti-trash text-danger"></i></a>
                                            {!! Form::open(['url' => 'messages/' . $message->id, 'method' => 'DELETE', 'id' => 'message-del-' . $message->id , 'style' => 'display: none']) !!}
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
                            {{ $messages->links() }}
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
        </div>
    </div>
    <!-- /.row -->

@endsection
