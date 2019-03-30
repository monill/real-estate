@extends('admin.layout.main')

@section('css')
    <!-- summernotes CSS -->
    <link href="{{ asset('admin/vendor/summernote/dist/summernote.css') }}" rel="stylesheet" />
    <style>
        #map {height: 400px; width: 100%;}
    </style>
@endsection

@section('content')

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Configurações</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('dashboard') }}">Dashboard</a></li>
                <li class="active">Configurações</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- .row -->
    <div class="row">
        <div class="col-md-12 col-lg-12 col-xs-12">
            <div class="white-box">
                <h3 class="box-title m-b-20">Configurações</h3>
                <!-- Nav tabs -->
                <ul class="nav customtab2 nav-tabs" role="tablist">
                    <li role="presentation" class="nav-item"><a href="#geral" class="nav-link active" aria-controls="geral" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-home"></i></span><span class="hidden-xs"> Geral</span></a></li>
                    <li role="presentation" class="nav-item"><a href="#social" class="nav-link" aria-controls="social" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-user"></i></span> <span class="hidden-xs">Social</span></a></li>
                    <li role="presentation" class="nav-item"><a href="#analytics" class="nav-link" aria-controls="analytics" role="tab" data-toggle="tab" aria-expanded="true"><span class="visible-xs"><i class="ti-email"></i></span> <span class="hidden-xs">Analytics</span></a></li>
                    <li role="presentation" class="nav-item"><a href="#empresa" class="nav-link" aria-controls="empresa" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-settings"></i></span> <span class="hidden-xs">Empresa</span></a></li>
                    <li role="presentation" class="nav-item"><a href="#gmaps" class="nav-link" aria-controls="gmaps" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-settings"></i></span> <span class="hidden-xs">Google Maps</span></a></li>
                    <li role="presentation" class="nav-item"><a href="#terms-privacy" class="nav-link" aria-controls="terms-privacy" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-settings"></i></span> <span class="hidden-xs">Termos e Privacidade</span></a></li>
                </ul>
                <!-- Tab panes -->
                {!! Form::open(['url' => 'settings', 'class' => 'form-horizontal']) !!}
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active fade in" id="geral">
                        <div class="form-group">
                            <div class="col-sm-6">
                                <div class="form-material">
                                    {!! Form::label('site_title', 'Site Título:') !!}
                                    {!! Form::text('site_title', $setting->site_title, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9">
                                <div class="form-material">
                                    {!! Form::label('meta_title', 'Meta Título:') !!}
                                    {!! Form::textarea('meta_title', $setting->meta_title, ['class' => 'form-control', 'rows' => '3']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9">
                                <div class="form-material">
                                    {!! Form::label('meta_keywords', 'Meta Keywords') !!}
                                    {!! Form::textarea('meta_keywords', $setting->meta_keywords, ['class' => 'form-control', 'rows' => '3']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9">
                                <div class="form-material">
                                    {!! Form::label('meta_description', 'Meta Descrição') !!}
                                    {!! Form::textarea('meta_description', $setting->meta_description, ['class' => 'form-control', 'rows' => '3']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="social">
                        <div class="form-group">
                            <div class="col-sm-6">
                                <div class="form-material">
                                    {!! Form::label('facebook', 'Facebook:') !!}
                                    {!! Form::text('facebook', $setting->facebook, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <div class="form-material">
                                    {!! Form::label('twitter', 'Twitter:') !!}
                                    {!! Form::text('twitter', $setting->twitter, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <div class="form-material">
                                    {!! Form::label('googleplus', 'Google Plus:') !!}
                                    {!! Form::text('googleplus', $setting->googleplus, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <div class="form-material">
                                    {!! Form::label('linkedin', 'LinkedIn:') !!}
                                    {!! Form::text('linkedin', $setting->youtube, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <div class="form-material">
                                    {!! Form::label('link', 'Link:') !!}
                                    {!! Form::text('link', $setting->instagram, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="analytics">
                        <div class="form-group">
                            <div class="col-sm-9">
                                <div class="form-material">
                                    {!! Form::label('analytics', 'Analytics') !!}
                                    {!! Form::textarea('analytics', $setting->analytics, ['class' => 'form-control', 'rows' => '5']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="empresa">
                        <div class="form-group">
                            <div class="col-sm-6">
                                <div class="form-material">
                                    {!! Form::label('about', 'Sobre a empresa:') !!}
                                    {!! Form::textarea('about', $setting->about, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9">
                                <div class="form-material">
                                    {!! Form::label('address', 'Endereço:') !!}
                                    {!! Form::text('address', $setting->address, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9">
                                <div class="form-material">
                                    {!! Form::label('email', 'E-mail:') !!}
                                    {!! Form::text('email', $setting->email, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9">
                                <div class="form-material">
                                    {!! Form::label('phone1', 'Telefone 1:') !!}
                                    {!! Form::text('phone1', $setting->phone1, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9">
                                <div class="form-material">
                                    {!! Form::label('phone2', 'Telefone 2:') !!}
                                    {!! Form::text('phone2', $setting->phone2, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="gmaps">
                        <div class="form-group">
                            Latitude
                            {!! Form::text('latitude', null, ['autocomplete' => 'off', 'id' => 'latitude']) !!}
                            Longitude
                            {!! Form::text('longitude', null, ['autocomplete' => 'off', 'id' => 'longitude']) !!}
                        </div>
                        <br>
                        <div class="form-group">
                            <div id="map"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="terms-privacy">
                        <div class="form-group">
                            <div class="col-sm-9">
                                <div class="form-material">
                                    {!! Form::label('terms', 'Termos:') !!}
                                    {!! Form::textarea('terms', $setting->terms, ['class' => 'summernote form-control', 'rows' => '5']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9">
                                <div class="form-material">
                                    {!! Form::label('privacy', 'Privacidade:') !!}
                                    {!! Form::textarea('privacy', $setting->privacy, ['class' => 'summernote form-control', 'rows' => '5']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    {!! Form::submit('Atualizar', ['class' => 'btn btn-success btn-rounded btn-outline']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    <!-- summernote -->
    <script src="{{ asset('admin/vendor/summernote/dist/summernote.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/summernote/lang/summernote-pt-BR.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                height: 350, // set editor height
                lang: 'pt-BR',
                minHeight: null, // set minimum height of editor
                maxHeight: null, // set maximum height of editor
                focus: false // set focus to editable area after initializing summernote
            });
        });
    </script>
    <script>
        function initMap() {
            let uluru = {
                @if($setting->latitude != null) lat: {{ $setting->latitude }}, @else lat: -23.082125, @endif
                @if($setting->longitude != null) lng: {{ $setting->longitude }}, @else lng: -46.950334, @endif
            };
            let map = new google.maps.Map(document.getElementById('map'), {
                zoom: 14,
                center: uluru
            });
            let marker = new google.maps.Marker({
                position: uluru,
                map: map,
                draggable: true
            });
            google.maps.event.addListener(marker, 'dragend', function ( event ) {
                document.getElementById("latitude").value = this.getPosition().lat();
                document.getElementById("longitude").value = this.getPosition().lng();
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBI6yreMxqsm-wuLrBIdNvawJcbkyAOnj8&callback=initMap"></script>

@endsection
