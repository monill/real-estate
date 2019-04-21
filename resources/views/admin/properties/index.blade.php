@extends('admin.layout.main')

@section('css')
    <!-- bootstrap-select -->
    <link href="{{ asset('admin/vendor/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet" />
@endsection

@section('content')

    <div class="row bg-title">
        <!-- .page title -->
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Propriedades</h4> </div>
        <!-- /.page title -->
        <!-- .breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('dashboard') }}">Dashboard</a></li>
                <li class="active">Propriedades</li>
            </ol>
        </div>
        <!-- /.breadcrumb -->
    </div>
    <!-- .row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title">Pesquisar</h3>
                <div class="form-inline padding-bottom-15">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <a href="{{ url('properties/create') }}" class="btn btn-outline btn-info btn-sm m-b-20"><i class="icon wb-plus" aria-hidden="true"></i>Adicionar Propriedade</a>
                            </div>
                        </div>
                    </div>
                </div>
                @include('errors.errors')
                <form role="form" class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <select class="selectpicker show-tick" data-style="form-control">
                                <option value="0" disabled selected>Status</option>
                                <option value="1">Rent</option>
                                <option value="2">Sale</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <select class="selectpicker show-tick" data-style="form-control">
                                <option value="">Country</option>
                                <option value="1">India</option>
                                <option value="2">Germany</option>
                                <option value="3">Spain</option>
                                <option value="4">Russia</option>
                                <option value="5">United States</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <select class="selectpicker show-tick" data-style="form-control">
                                <option value="">City</option>
                                <option value="1">Moscow</option>
                                <option value="2">Barcelona</option>
                                <option value="3">Mumbai</option>
                                <option value="4">Houston</option>
                                <option value="5">Sokovia</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-2">
                        <div class="form-group">
                            <select class="selectpicker show-tick" data-style="form-control">
                                <option value="">Property Type</option>
                                <option value="1">Apartment</option>
                                <option value="2">Villa/Mansion</option>
                                <option value="3">Cottage</option>
                                <option value="4">Flat</option>
                                <option value="5">House</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-1">
                        <button type="submit" class="btn btn-inverse btn-block form-control"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <!-- .row -->
    <div class="row">
        <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="white-box pro-box p-0">
                <div class="pro-list-img" style="background: url('../plugins/images/property/prop5.jpg') center center / cover no-repeat;"> <span class="pro-label-img"><img src="../plugins/images/property/heart.png" alt="heart"></span> </div>
                <div class="pro-content-3-col">
                    <div class="pro-list-details">
                        <h4>
                            <a class="text-dark" href="javascript:void(0)">Florida 5, Pinecrest, FL</a>
                        </h4>
                        <h4 class="text-danger"><small>&#36;</small> 220,000</h4> </div>
                </div>
                <hr class="m-0"> <span class="label pro-col-label label-white text-dark">For Rent</span>
                <div class="pro-list-info-3-col">
                    <ul class="pro-info text-muted m-b-0">
                        <li> <span><img src="../plugins/images/property/pro-bath.png"></span> <span>Bathrooms</span><span class="label label-default pull-right text-inverse">2</span></li>
                        <li> <span><img src="../plugins/images/property/pro-bed.png"></span> <span>Beds</span><span class="label label-default pull-right text-inverse">2</span></li>
                        <li> <span><img src="../plugins/images/property/pro-garage.png"></span> <span>Garages</span><span class="label label-default pull-right text-inverse">1</span></li>
                    </ul>
                </div>
                <hr class="m-0">
                <div class="pro-agent-col-3">
                    <div class="agent-img">
                        <a href="javascript:void(0)"><img alt="img" class="thumb-md img-circle" src="../plugins/images/users/agent2.jpg"></a>
                    </div>
                    <div class="agent-name">
                        <h5 class="m-b-0">Janet Richmond</h5> <small class="text-muted">5 Properties</small> </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="white-box pro-box p-0">
                <div class="pro-list-img" style="background: url('../plugins/images/property/prop5.jpg') center center / cover no-repeat;"> <span class="pro-label-img"><img src="../plugins/images/property/heart.png" alt="heart"></span> </div>
                <div class="pro-content-3-col">
                    <div class="pro-list-details">
                        <h4>
                            <a class="text-dark" href="javascript:void(0)">Florida 5, Pinecrest, FL</a>
                        </h4>
                        <h4 class="text-danger"><small>&#36;</small> 220,000</h4> </div>
                </div>
                <hr class="m-0"> <span class="label pro-col-label label-white text-dark">For Rent</span>
                <div class="pro-list-info-3-col">
                    <ul class="pro-info text-muted m-b-0">
                        <li> <span><img src="../plugins/images/property/pro-bath.png"></span> <span>Bathrooms</span><span class="label label-default pull-right text-inverse">2</span></li>
                        <li> <span><img src="../plugins/images/property/pro-bed.png"></span> <span>Beds</span><span class="label label-default pull-right text-inverse">2</span></li>
                        <li> <span><img src="../plugins/images/property/pro-garage.png"></span> <span>Garages</span><span class="label label-default pull-right text-inverse">1</span></li>
                    </ul>
                </div>
                <hr class="m-0">
                <div class="pro-agent-col-3">
                    <div class="agent-img">
                        <a href="javascript:void(0)"><img alt="img" class="thumb-md img-circle" src="../plugins/images/users/agent2.jpg"></a>
                    </div>
                    <div class="agent-name">
                        <h5 class="m-b-0">Janet Richmond</h5> <small class="text-muted">5 Properties</small> </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="white-box pro-box p-0">
                <div class="pro-list-img" style="background: url('../plugins/images/property/prop5.jpg') center center / cover no-repeat;"> <span class="pro-label-img"><img src="../plugins/images/property/heart.png" alt="heart"></span> </div>
                <div class="pro-content-3-col">
                    <div class="pro-list-details">
                        <h4>
                            <a class="text-dark" href="javascript:void(0)">Florida 5, Pinecrest, FL</a>
                        </h4>
                        <h4 class="text-danger"><small>&#36;</small> 220,000</h4> </div>
                </div>
                <hr class="m-0"> <span class="label pro-col-label label-white text-dark">For Rent</span>
                <div class="pro-list-info-3-col">
                    <ul class="pro-info text-muted m-b-0">
                        <li> <span><img src="../plugins/images/property/pro-bath.png"></span> <span>Bathrooms</span><span class="label label-default pull-right text-inverse">2</span></li>
                        <li> <span><img src="../plugins/images/property/pro-bed.png"></span> <span>Beds</span><span class="label label-default pull-right text-inverse">2</span></li>
                        <li> <span><img src="../plugins/images/property/pro-garage.png"></span> <span>Garages</span><span class="label label-default pull-right text-inverse">1</span></li>
                    </ul>
                </div>
                <hr class="m-0">
                <div class="pro-agent-col-3">
                    <div class="agent-img">
                        <a href="javascript:void(0)"><img alt="img" class="thumb-md img-circle" src="../plugins/images/users/agent2.jpg"></a>
                    </div>
                    <div class="agent-name">
                        <h5 class="m-b-0">Janet Richmond</h5> <small class="text-muted">5 Properties</small> </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="white-box pro-box p-0">
                <div class="pro-list-img" style="background: url('../plugins/images/property/prop5.jpg') center center / cover no-repeat;"> <span class="pro-label-img"><img src="../plugins/images/property/heart.png" alt="heart"></span> </div>
                <div class="pro-content-3-col">
                    <div class="pro-list-details">
                        <h4>
                            <a class="text-dark" href="javascript:void(0)">Florida 5, Pinecrest, FL</a>
                        </h4>
                        <h4 class="text-danger"><small>&#36;</small> 220,000</h4> </div>
                </div>
                <hr class="m-0"> <span class="label pro-col-label label-white text-dark">For Rent</span>
                <div class="pro-list-info-3-col">
                    <ul class="pro-info text-muted m-b-0">
                        <li> <span><img src="../plugins/images/property/pro-bath.png"></span> <span>Bathrooms</span><span class="label label-default pull-right text-inverse">2</span></li>
                        <li> <span><img src="../plugins/images/property/pro-bed.png"></span> <span>Beds</span><span class="label label-default pull-right text-inverse">2</span></li>
                        <li> <span><img src="../plugins/images/property/pro-garage.png"></span> <span>Garages</span><span class="label label-default pull-right text-inverse">1</span></li>
                    </ul>
                </div>
                <hr class="m-0">
                <div class="pro-agent-col-3">
                    <div class="agent-img">
                        <a href="javascript:void(0)"><img alt="img" class="thumb-md img-circle" src="../plugins/images/users/agent2.jpg"></a>
                    </div>
                    <div class="agent-name">
                        <h5 class="m-b-0">Janet Richmond</h5> <small class="text-muted">5 Properties</small> </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="white-box pro-box p-0">
                <div class="pro-list-img" style="background: url('../plugins/images/property/prop5.jpg') center center / cover no-repeat;"> <span class="pro-label-img"><img src="../plugins/images/property/heart.png" alt="heart"></span> </div>
                <div class="pro-content-3-col">
                    <div class="pro-list-details">
                        <h4>
                            <a class="text-dark" href="javascript:void(0)">Florida 5, Pinecrest, FL</a>
                        </h4>
                        <h4 class="text-danger"><small>&#36;</small> 220,000</h4> </div>
                </div>
                <hr class="m-0"> <span class="label pro-col-label label-white text-dark">For Rent</span>
                <div class="pro-list-info-3-col">
                    <ul class="pro-info text-muted m-b-0">
                        <li> <span><img src="../plugins/images/property/pro-bath.png"></span> <span>Bathrooms</span><span class="label label-default pull-right text-inverse">2</span></li>
                        <li> <span><img src="../plugins/images/property/pro-bed.png"></span> <span>Beds</span><span class="label label-default pull-right text-inverse">2</span></li>
                        <li> <span><img src="../plugins/images/property/pro-garage.png"></span> <span>Garages</span><span class="label label-default pull-right text-inverse">1</span></li>
                    </ul>
                </div>
                <hr class="m-0">
                <div class="pro-agent-col-3">
                    <div class="agent-img">
                        <a href="javascript:void(0)"><img alt="img" class="thumb-md img-circle" src="../plugins/images/users/agent2.jpg"></a>
                    </div>
                    <div class="agent-name">
                        <h5 class="m-b-0">Janet Richmond</h5> <small class="text-muted">5 Properties</small> </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="white-box pro-box p-0">
                <div class="pro-list-img" style="background: url('../plugins/images/property/prop5.jpg') center center / cover no-repeat;"> <span class="pro-label-img"><img src="../plugins/images/property/heart.png" alt="heart"></span> </div>
                <div class="pro-content-3-col">
                    <div class="pro-list-details">
                        <h4>
                            <a class="text-dark" href="javascript:void(0)">Florida 5, Pinecrest, FL</a>
                        </h4>
                        <h4 class="text-danger"><small>&#36;</small> 220,000</h4> </div>
                </div>
                <hr class="m-0"> <span class="label pro-col-label label-white text-dark">For Rent</span>
                <div class="pro-list-info-3-col">
                    <ul class="pro-info text-muted m-b-0">
                        <li> <span><img src="../plugins/images/property/pro-bath.png"></span> <span>Bathrooms</span><span class="label label-default pull-right text-inverse">2</span></li>
                        <li> <span><img src="../plugins/images/property/pro-bed.png"></span> <span>Beds</span><span class="label label-default pull-right text-inverse">2</span></li>
                        <li> <span><img src="../plugins/images/property/pro-garage.png"></span> <span>Garages</span><span class="label label-default pull-right text-inverse">1</span></li>
                    </ul>
                </div>
                <hr class="m-0">
                <div class="pro-agent-col-3">
                    <div class="agent-img">
                        <a href="javascript:void(0)"><img alt="img" class="thumb-md img-circle" src="../plugins/images/users/agent2.jpg"></a>
                    </div>
                    <div class="agent-name">
                        <h5 class="m-b-0">Janet Richmond</h5> <small class="text-muted">5 Properties</small> </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="white-box pro-box p-0">
                <div class="pro-list-img" style="background: url('../plugins/images/property/prop5.jpg') center center / cover no-repeat;"> <span class="pro-label-img"><img src="../plugins/images/property/heart.png" alt="heart"></span> </div>
                <div class="pro-content-3-col">
                    <div class="pro-list-details">
                        <h4>
                            <a class="text-dark" href="javascript:void(0)">Florida 5, Pinecrest, FL</a>
                        </h4>
                        <h4 class="text-danger"><small>&#36;</small> 220,000</h4> </div>
                </div>
                <hr class="m-0"> <span class="label pro-col-label label-white text-dark">For Rent</span>
                <div class="pro-list-info-3-col">
                    <ul class="pro-info text-muted m-b-0">
                        <li> <span><img src="../plugins/images/property/pro-bath.png"></span> <span>Bathrooms</span><span class="label label-default pull-right text-inverse">2</span></li>
                        <li> <span><img src="../plugins/images/property/pro-bed.png"></span> <span>Beds</span><span class="label label-default pull-right text-inverse">2</span></li>
                        <li> <span><img src="../plugins/images/property/pro-garage.png"></span> <span>Garages</span><span class="label label-default pull-right text-inverse">1</span></li>
                    </ul>
                </div>
                <hr class="m-0">
                <div class="pro-agent-col-3">
                    <div class="agent-img">
                        <a href="javascript:void(0)"><img alt="img" class="thumb-md img-circle" src="../plugins/images/users/agent2.jpg"></a>
                    </div>
                    <div class="agent-name">
                        <h5 class="m-b-0">Janet Richmond</h5> <small class="text-muted">5 Properties</small> </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="white-box pro-box p-0">
                <div class="pro-list-img" style="background: url('../plugins/images/property/prop5.jpg') center center / cover no-repeat;"> <span class="pro-label-img"><img src="../plugins/images/property/heart.png" alt="heart"></span> </div>
                <div class="pro-content-3-col">
                    <div class="pro-list-details">
                        <h4>
                            <a class="text-dark" href="javascript:void(0)">Florida 5, Pinecrest, FL</a>
                        </h4>
                        <h4 class="text-danger"><small>&#36;</small> 220,000</h4> </div>
                </div>
                <hr class="m-0"> <span class="label pro-col-label label-white text-dark">For Rent</span>
                <div class="pro-list-info-3-col">
                    <ul class="pro-info text-muted m-b-0">
                        <li> <span><img src="../plugins/images/property/pro-bath.png"></span> <span>Bathrooms</span><span class="label label-default pull-right text-inverse">2</span></li>
                        <li> <span><img src="../plugins/images/property/pro-bed.png"></span> <span>Beds</span><span class="label label-default pull-right text-inverse">2</span></li>
                        <li> <span><img src="../plugins/images/property/pro-garage.png"></span> <span>Garages</span><span class="label label-default pull-right text-inverse">1</span></li>
                    </ul>
                </div>
                <hr class="m-0">
                <div class="pro-agent-col-3">
                    <div class="agent-img">
                        <a href="javascript:void(0)"><img alt="img" class="thumb-md img-circle" src="../plugins/images/users/agent2.jpg"></a>
                    </div>
                    <div class="agent-name">
                        <h5 class="m-b-0">Janet Richmond</h5> <small class="text-muted">5 Properties</small> </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <!-- .row -->
    <div class="row">
        <div class="col-md-12 text-center">
            <ul class="pagination pagination-split">
                <li class="disabled"> <a href="#"><i class="fa fa-angle-left"></i></a> </li>
                <li class="active"> <a href="#">1</a> </li>
                <li> <a href="#">2</a> </li>
                <li> <a href="#">3</a> </li>
                <li> <a href="#">4</a> </li>
                <li> <a href="#">5</a> </li>
                <li> <a href="#"><i class="fa fa-angle-right"></i></a> </li>
            </ul>
        </div>
    </div>
    <!-- /.row -->

@endsection

@section('scripts')
    <!-- bootstrap-select javascript -->
    <script src="{{ asset('admin/vendor/bootstrap-select/bootstrap-select.min.js') }}"></script>
@endsection
