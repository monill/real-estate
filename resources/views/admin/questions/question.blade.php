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
        <!-- Left sidebar -->
        <div class="col-md-12">
            <div class="white-box">
                <div class="row">
                    <div class="col-lg-12 col-md-9 col-sm-8 col-xs-12 mail_listing">
                        <div class="media m-b-30 p-t-20">
                            <a href="javascript:;" onclick="document.getElementById('question-del-{{ $question->id }}').submit();" class="pull-right text-inverse" title="Deletar" data-toggle="tooltip"><i class="ti-trash text-danger"></i></a>
                            {!! Form::open(['url' => 'questions/' . $question->id, 'method' => 'DELETE', 'id' => 'question-del-' . $question->id , 'style' => 'display: none']) !!}
                            {!! Form::close() !!}
                            <p>Propriedade:</p>
                            <h4 class="font-bold m-t-0">{{ $question->property->name }}</h4>
                            <hr>
                            <div class="media-body">
                                <span class="media-meta pull-right">{{ $question->created_at->format('d/m/Y H:i') }}</span>
                                <h4 class="text-danger m-0">{{ $question->name }}</h4>
                                <small class="text-muted">Por: {{ $question->email }}</small>

                            </div>
                        </div>
                        <p><b>Dúvida:</b></p>
                        <p>{{ $question->message }}</p>
                    </div>
                    <a href="{{ url('questions') }}" class="m-t-40 btn btn-inverse waves-effect waves-light">Voltar</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

@endsection
