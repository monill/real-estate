<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
        <ul class="nav" id="side-menu">
            <li class="user-pro">
                <a href="#" class="waves-effect">
                    <img src="{{ auth()->user()->getAvatar() }}" alt="user-avatar" class="img-circle">
                    <span class="hide-menu">{{ auth()->user()->name }}<span class="fa arrow"></span></span>
                </a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ route('users.edit', ['id' => auth()->user()->id]) }}"><i class="ti-user"></i> Editar Perfil</a></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Sair</a></li>
                    {!! Form::open(['url' => 'logout', 'id' => 'logout-form', 'style' => 'display: none']) !!}
                    {!! Form::close() !!}
                </ul>
            </li>
            <li class="nav-small-cap m-t-10">--- Menu</li>
            <li> <a href="{{ url('dashboard') }}" class="waves-effect"><i class="fa fa-dashboard fa-fw"></i> <span class="hide-menu"> Dashboard </span></a></li>
            <li> <a href="{{ url('messages') }}" class="waves-effect"><i class="fa fa-envelope-o fa-fw"></i> <span class="hide-menu"> Mensagens </span></a></li>

            <li class="nav-small-cap m-t-10">--- Site</li>
            <li> <a href="{{ url('/') }}" target="_blank" class="waves-effect"><i class="fa fa-television fa-fw"></i> <span class="hide-menu"> Visitar site </span></a></li>

            <li class="nav-small-cap">--- Blogs</li>
            <li> <a href="{{ url('blogs') }}" class="waves-effect"><i class="ti-book fa-fw"></i> <span class="hide-menu">Blogs</span></a> </li>
            <li> <a href="{{ url('tags') }}" class="waves-effect"><i class="ti-tag fa-fw"></i> <span class="hide-menu">Tags</span></a> </li>
            <li> <a href="{{ url('comments') }}" class="waves-effect"><i class="ti-comments fa-fw"></i> <span class="hide-menu">Comentários</span></a> </li>

            <li class="nav-small-cap">--- Propriedades</li>
            <li> <a href="{{ url('properties') }}" class="waves-effect"><i class="ti-home fa-fw"></i> <span class="hide-menu">Propriedades</span></a> </li>
            <li> <a href="{{ url('categories') }}" class="waves-effect"><i class="ti-layers fa-fw"></i> <span class="hide-menu">Categorias</span></a> </li>
            <li> <a href="{{ url('features') }}" class="waves-effect"><i class="ti-check-box fa-fw"></i> <span class="hide-menu">Características</span></a> </li>
            <li> <a href="{{ url('questions') }}" class="waves-effect"><i class="ti-help fa-fw"></i> <span class="hide-menu">Dúvidas</span></a> </li>

            <li class="nav-small-cap">--- Usuários</li>
            <li> <a href="{{ url('users') }}" class="waves-effect"><i class="ti-user fa-fw"></i> <span class="hide-menu">Corretores</span></a> </li>

            <li class="nav-small-cap">--- Newsletter</li>
            <li> <a href="{{ url('newsletters') }}" class="waves-effect"><i class="ti-cloud fa-fw"></i> <span class="hide-menu">Newsletters</span></a> </li>

            <li class="nav-small-cap">--- Suporte</li>
            <li> <a href="{{ url('settings') }}" class="waves-effect"><i class="ti-settings fa-fw"></i> <span class="hide-menu">Configurações</span></a> </li>
            <li> <a href="{{ url('visitors') }}" class="waves-effect"><i class="fa fa-globe fa-fw"></i> <span class="hide-menu">Visitantes</span></a> </li>
            @if(auth()->user()->isAdmin())
            <li> <a href="{{ url('logs') }}" class="waves-effect"><i class="ti-blackboard  fa-fw"></i> <span class="hide-menu">Logs</span></a> </li>
            @endif

            @if(auth()->user()->isAdmin())
            <li class="nav-small-cap">--- Cache</li>
            <li> <a href="{{ url('cleancache') }}" class="waves-effect"><i class="ti-alarm-clock fa-fw"></i> <span class="hide-menu">Limpar cache</span></a> </li>
            @endif

            <li class="nav-small-cap">--- Sair</li>
            <li><a href="{{ route('logout') }}" class="waves-effect" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon-logout fa-fw"></i><span class="hide-menu"> Sair</span></a></li>
        </ul>
    </div>
</div>