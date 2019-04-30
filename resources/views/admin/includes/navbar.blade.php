<nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header">
        <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="{{ url('dashboard') }}" data-toggle="collapse" data-target=".navbar-collapse">
            <i class="ti-menu"></i>
        </a>
        <div class="top-left-part">
            <a class="logo" href="{{ url('dashboard') }}">
                <b><img src="{{ asset('admin/images/eliteadmin-logo.png') }}" alt="dashboard"/></b>
                <span class="hidden-xs"><strong>{{ str_limit($settings->site_title, 12, '') }}</strong></span>
            </a>
        </div>
        <ul class="nav navbar-top-links navbar-left hidden-xs">
            <li>
                <a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light">
                    <i class="icon-arrow-left-circle ti-menu"></i>
                </a>
            </li>
        </ul>
    </div>
    <!-- /.navbar-header -->
    <!-- /.navbar-top-links -->
    <!-- /.navbar-static-side -->
</nav>