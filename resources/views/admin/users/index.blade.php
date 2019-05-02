@extends('admin.layout.main')

@section('css')
    <!-- Popup CSS -->
    <link href="{{ asset('admin/vendor/Magnific-Popup-master/dist/magnific-popup.css') }}" rel="stylesheet">
@endsection

@section('content')

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Corretores</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('dashboard') }}">Dashboard</a></li>
                <li class="active">Corretores</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- row -->
    <div class="row el-element-overlay m-b-40">
        <!-- /.usercard -->
        <div class="col-md-12">
            <h4>Corretores</h4>
            <div class="form-inline padding-bottom-15">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <a href="{{ url('users/create') }}" class="btn btn-outline btn-info btn-sm m-b-20"><i class="icon wb-plus" aria-hidden="true"></i>Adicionar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @foreach($users as $user)
            @if($user->admin != true)
            <!-- /.usercard-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="white-box">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1">
                            <img src="{{ $user->getAvatar() }}" alt="Avatar" />
                            <div class="el-overlay scrl-dwn">
                                <ul class="el-info">
                                    <li><a class="btn default btn-outline image-popup-vertical-fit" href="{{ $user->getAvatar() }}"><i class="icon-magnifier"></i></a></li>
                                    @if(auth()->user()->isAdmin())
                                    <li><a class="btn default btn-outline" href="{{ route('users.edit', [$user->id]) }}"><i class="fa fa-pencil"></i></a></li>
                                    <li><a href="javascript:;" onclick="document.getElementById('user-del-{{ $user->id }}').submit();" class="btn default btn-outline"><i class="fa fa-trash"></i></a></li>
                                    {!! Form::open(['url' => 'users/' . $user->id, 'method' => 'DELETE', 'id' => 'user-del-' . $user->id , 'style' => 'display: none']) !!}
                                    {!! Form::close() !!}
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="el-card-content">
                            <h3 class="box-title">{{ $user->name }}</h3>
                            <small>{{ $user->job }}</small>
                            <br/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.usercard-->
            @endif
        @endforeach
    </div>
    <!-- /.row -->

@endsection

@section('scripts')
    <!-- Magnific popup JavaScript -->
    <script src="{{ asset('admin/vendor/Magnific-Popup-master/dist/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/Magnific-Popup-master/dist/jquery.magnific-popup-init.js') }}"></script>
@endsection
