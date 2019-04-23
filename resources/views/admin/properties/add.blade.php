@extends('admin.layout.main')

@section('css')
    <!-- Dropify -->
    <link rel="stylesheet" href="{{ asset('admin/vendor/dropify/dist/css/dropify.min.css') }}">
    <!-- bootstrap-select -->
    <link href="{{ asset('admin/vendor/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet" />
    <!-- custom-select -->
    <link rel="stylesheet" href="{{ asset('admin/vendor/custom-select/custom-select.css') }}">
    <!-- summernotes CSS -->
    <link href="{{ asset('admin/vendor/summernote/dist/summernote.css') }}" rel="stylesheet" />
@endsection

@section('content')

    <div class="row bg-title">
        <!-- .page title -->
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Add Property</h4> </div>
        <!-- /.page title -->
        <!-- .breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-the-ultimate-dashboard-web-app-kit-material-design/16750820?ref=suniljoshi" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
            <ol class="breadcrumb">
                <li><a href="#">Real Estate</a></li>
                <li class="active">Add Property</li>
            </ol>
        </div>
        <!-- /.breadcrumb -->
    </div>
    <!-- .row -->
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <form class="pro-add-form">
                    <div class="form-group">
                        {!! Form::label('name', 'Nome: *') !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('address', 'Endereço: *') !!}
                        {!! Form::text('address', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('description', 'Descrição: *') !!}
                        {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => 6]) !!}
                    </div>
                    <div class="form-group">
                        <label class="m-b-10">Property For</label>
                        <br>
                        <div class="radio radio-info radio-inline">
                            <input type="radio" id="radio1" value="option1" name="ptype" checked="">
                            <label for="radio1"> For Rent </label>
                        </div>
                        <div class="radio radio-info radio-inline">
                            <input type="radio" id="radio2" value="option2" name="ptype">
                            <label for="radio2"> For Sale </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="plocation">Price / Rent</label>
                        <input type="email" class="form-control" id="plocation" placeholder="Enter Number">
                    </div>
                    <div class="form-group">
                        <label for="paddress">Property Address</label>
                        <textarea class="form-control" rows="3" id="paddress"></textarea>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                                {!! Form::label('bathrooms', 'Banheiros:') !!}
                                <input id="tch1" type="text" value="" name="tch1" data-bts-button-down-class="btn btn-default btn-outline" data-bts-button-up-class="btn btn-default btn-outline">
                            </div>
                            <div class="col-sm-4">
                                {!! Form::label('bedrooms', 'Quartos:') !!}
                                <input id="tch2" type="text" value="" name="tch2" data-bts-button-down-class="btn btn-default btn-outline" data-bts-button-up-class="btn btn-default btn-outline">
                            </div>
                            <div class="col-sm-4">
                                {!! Form::label('garage', 'Garagens:') !!}
                                <input id="tch3" type="text" value="" name="tch3" data-bts-button-down-class="btn btn-default btn-outline" data-bts-button-up-class="btn btn-default btn-outline">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                                {!! Form::label('year', 'Ano:') !!}
                                <select class="selectpicker" data-style="form-control" id="pyear">
                                    <option value="0" disabled selected>Year</option>
                                    <option value="1">2015</option>
                                    <option value="2">2017</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <label for="style">Style</label>
                                <select class="selectpicker" data-style="form-control" id="style">
                                    <option value="0" disabled selected>Style</option>
                                    <option value="1">Bi-level</option>
                                    <option value="2">Tri-level</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <label for="status">Status</label>
                                <select class="selectpicker" data-style="form-control" id="status">
                                    <option value="0" disabled selected>Status</option>
                                    <option value="1">Active</option>
                                    <option value="2">Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="type">Type</label>
                                <select class="selectpicker" data-style="form-control" id="type">
                                    <option value="0" disabled selected>Type</option>
                                    <option value="1">Single</option>
                                    <option value="2">Double</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <label for="subdiv">Subdivision</label>
                                <select class="selectpicker" data-style="form-control" id="subdiv">
                                    <option value="0" disabled selected>Subdivision</option>
                                    <option value="1">Matindale</option>
                                    <option value="2">citadel</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <label for="city">City</label>
                                <select class="selectpicker" data-style="form-control" id="city">
                                    <option value="0" disabled selected>City</option>
                                    <option value="1">Ahmedabad</option>
                                    <option value="2">Mountain View</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Características</label>
                        <div class="row">
                            @foreach($features as $feature)
                            <div class="col-sm-4">

                                <div class="checkbox checkbox-info checkbox-circle">
                                    <input id="checkbox1" type="checkbox">
                                    <label for="checkbox1"> {{ $feature->name }} </label>
                                </div>

                            </div>
                            @endforeach
                        </div>
                    </div>
                    <h3 class="box-title">Dimensions</h3>
                    <hr>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="diningroom">Dining Room</label>
                                <input type="text" class="form-control" id="diningroom" data-mask="99x99"> </div>
                            <div class="col-sm-4">
                                <label for="kitchen">Kitchen</label>
                                <input type="text" class="form-control" id="kitchen" data-mask="99x99"> </div>
                            <div class="col-sm-4">
                                <label for="livingroom">Living Room</label>
                                <input type="text" class="form-control" id="livingroom" data-mask="99x99"> </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="mbedroom">Master Bedroom</label>
                                <input type="text" class="form-control" id="mbedroom" data-mask="99x99"> </div>
                            <div class="col-sm-4">
                                <label for="bed2">Bedroom 2</label>
                                <input type="text" class="form-control" id="bed2" data-mask="99x99"> </div>
                            <div class="col-sm-4">
                                <label for="otherroom">Other Room</label>
                                <input type="text" class="form-control" id="otherroom" data-mask="99x99"> </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input-file-now">Upload Files</label>
                        <input type="file" id="input-file-now" class="dropify" />
                    </div>
                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Add Property</button>
                    <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
    <!-- .row -->

@endsection

@section('scripts')
    <!-- jQuery file upload -->
    <script src="{{ asset('admin/vendor/dropify/dist/js/dropify.min.js') }}"></script>
    <!-- bootstrap-select -->
    <script src="{{ asset('admin/vendor/bootstrap-select/bootstrap-select.min.js') }}"></script>
    <!-- custom-select -->
    <script src="{{ asset('admin/vendor/custom-select/custom-select.min.js') }}"></script>
    <!-- summernote -->
    <script src="{{ asset('admin/vendor/summernote/dist/summernote.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/summernote/lang/summernote-pt-BR.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.dropify').dropify();

            $(".select2").select2();

            $('.summernote').summernote({
                height: 350, // set editor height
                lang: 'pt-BR',
                minHeight: null, // set minimum height of editor
                maxHeight: null, // set maximum height of editor
                focus: false // set focus to editable area after initializing summernote
            });
        });
    </script>
@endsection
