<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin Dashboard</title>

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon.png') }}">

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('admin/vendor/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/bootstrap-extension/css/bootstrap-extension.css') }}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{ asset('admin/css/animate.css') }}" rel="stylesheet">
    @yield('css')
    <!-- Custom CSS -->
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{ asset('admin/css/colors/blue.css') }}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="fix-sidebar">
<!-- Preloader -->
{{--<div class="preloader">--}}
    {{--<div class="cssload-speeding-wheel"></div>--}}
{{--</div>--}}
<div id="wrapper">
    <!-- Top Navigation -->
    @include('admin.includes.navbar')

    <!-- End Top Navigation -->
    <!-- Left navbar-header -->
    @include('admin.includes.sidebar')
    <!-- Left navbar-header end -->
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            @yield('content')
        </div>
        <!-- /.container-fluid -->
        <footer class="footer text-center"> {{ date('Y') }} &copy; Dashboard Admin </footer>
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- jQuery -->
<script src="{{ asset('admin/vendor/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('admin/vendor/bootstrap/dist/js/tether.min.js') }}"></script>
<script src="{{ asset('admin/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/vendor/bootstrap-extension/js/bootstrap-extension.min.js') }}"></script>
<!-- Menu Plugin JavaScript -->
<script src="{{ asset('admin/vendor/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
@yield('scripts')
<!--slimscroll JavaScript -->
<script src="{{ asset('admin/js/jquery.slimscroll.js') }}"></script>
<!--Wave Effects -->
<script src="{{ asset('admin/js/waves.js') }}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{ asset('admin/js/custom.min.js') }}"></script>
</body>
</html>
