@extends('admin.layout.main')

@section('content')

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Mensagem</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('dashboard') }}">Dashboard</a></li>
                <li><a href="{{ url('messages') }}">Mensagens</a></li>
                <li class="active">Mensagem</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- row -->
    <div class="row">
        <!-- Left sidebar -->
        <div class="col-md-12">
            <div class="white-box">
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 inbox-panel">
                        <div>
                            <div class="list-group mail-list m-t-20">
                                <a href="{{ url('messages') }}" class="list-group-item active">Mensagens <span class="label label-rouded label-success pull-right">{{ $unread }}</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-9 col-sm-8 col-xs-12 mail_listing">
                        <div class="media m-b-30 p-t-20">
                            <a href="javascript:;" onclick="document.getElementById('message-del-{{ $message->id }}').submit();" class="text-inverse" title="Deletar" data-toggle="tooltip"><i class="ti-trash text-danger"></i></a>
                            {!! Form::open(['url' => 'messages/' . $message->id, 'method' => 'DELETE', 'id' => 'message-del-' . $message->id , 'style' => 'display: none']) !!}
                            {!! Form::close() !!}
                            <h4 class="font-bold m-t-0">{{ $message->subject }}</h4>
                            <hr>
                            <div class="media-body">
                                <span class="media-meta pull-right">{{ $message->created_at->format('d/m/Y H:i') }}</span>
                                <h4 class="text-danger m-0">{{ $message->name }}</h4>
                                <small class="text-muted">Por: {{ $message->email }}</small>
                            </div>
                        </div>
                        <p><b>Mensagem:</b></p>
                        <p>{{ $message->message }}</p>
                        <hr>
                        @if($message->phone != null)
                        <p><b>Telefone: </b> {{ $message->phone }}</p>
                        @endif
                    </div>
                    <a href="{{ url('messages') }}" class="m-t-40 btn btn-inverse waves-effect waves-light">Voltar</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

@endsection
