@extends('auth.layout.main')

@section('content')

    <section id="wrapper" class="login-register">
        <div class="login-box">
            <div class="white-box">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                {!! Form::open(['url' => 'login', 'class' => 'form-horizontal form-material', 'id' => 'loginform']) !!}
                <h3 class="box-title m-b-20">Login</h3>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email"
                               value="{{ old('email') }}" name="email" required placeholder="E-mail" autocomplete="off">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password"
                               name="password" required placeholder="Senha" autocomplete="off">
                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="checkbox checkbox-primary pull-left p-t-0">
                            <input id="checkbox-signup" type="checkbox">
                            <label for="checkbox-signup" name="remember" {{ old('remember') ? 'checked' : '' }}> Lembrar
                                me </label>
                        </div>
                        <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i
                                    class="fa fa-lock m-r-5"></i> Esqueceu sua senha?</a>
                    </div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light"
                                type="submit">Login
                        </button>
                    </div>
                </div>

                <div class="form-group m-b-0">
                    <div class="col-sm-12 text-center">
                        <p>Área Restrita - Clique<a href="{{ url('/') }}" class="text-primary m-l-5"><b>aqui</b></a>
                            para voltar à Home</p>
                    </div>
                </div>
                {!! Form::close() !!}

                {!! Form::open(['url' => 'password/email', 'class' => 'form-horizontal', 'id' => 'recoverform']) !!}
                <div class="form-group ">
                    <div class="col-xs-12">
                        <h3>Resetar senha</h3>
                        <p class="text-muted">Digite seu e-mail e as instruções serão enviadas para você!</p>
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="email" name="email" required autocomplete="off"
                               placeholder="E-mail">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light"
                                type="submit">Resetar
                        </button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </section>

@endsection
