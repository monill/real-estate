<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                <!-- input-group -->
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Pesquisar...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li>
            <li class="user-pro">
                <a href="#" class="waves-effect">
                    <img src="./admin/images/users/d1.jpg" alt="user-img" class="img-circle">
                    <span class="hide-menu">Steve Gection<span class="fa arrow"></span></span>
                </a>
                <ul class="nav nav-second-level">
                    <li><a href="javascript:void(0)"><i class="ti-user"></i> Editar Perfil</a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-power-off"></i> Sair</a></li>
                </ul>
            </li>
            <li class="nav-small-cap m-t-10">--- Menu</li>
            <li> <a href="{{ url('dashboard') }}" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu"> Dashboard </span></a></li>
            <li> <a href="{{ url('messages') }}" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu"> Mensagens </span></a></li>

            <li class="nav-small-cap">--- Blogs</li>
            <li> <a href="{{ url('blogs') }}" class="waves-effect"><i class="ti-home fa-fw"></i> <span class="hide-menu">Blogs</span></a> </li>
            <li> <a href="{{ url('tags') }}" class="waves-effect"><i class="ti-plus fa-fw"></i> <span class="hide-menu">Tags</span></a> </li>
            <li> <a href="{{ url('comments') }}" class="waves-effect"><i class="ti-menu-alt fa-fw"></i> <span class="hide-menu">Blog Comentários</span></a> </li>

            <li class="nav-small-cap">--- Imóveis</li>
            <li> <a href="{{ url('properties') }}" class="waves-effect"><i class="ti-check-box fa-fw"></i> <span class="hide-menu">Propriedades</span></a> </li>
            <li> <a href="{{ url('categories') }}" class="waves-effect"><i class="ti-support fa-fw"></i> <span class="hide-menu">Categorias</span></a> </li>
            <li> <a href="{{ url('features') }}" class="waves-effect"><i class="ti-support fa-fw"></i> <span class="hide-menu">Destaques</span></a> </li>
            <li> <a href="{{ url('questions') }}" class="waves-effect"><i class="ti-support fa-fw"></i> <span class="hide-menu">Dúvidas</span></a> </li>

            <li class="nav-small-cap">--- Usuários</li>
            <li> <a href="{{ url('users') }}" class="waves-effect"><i data-icon="P" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Corretores</span></a> </li>

            <li class="nav-small-cap">--- Suporte</li>
            <li> <a href="{{ url('settings') }}" class="waves-effect"><i data-icon="P" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Configurações</span></a> </li>
            <li> <a href="{{ url('newsletters') }}" class="waves-effect"><i data-icon="P" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Newsletters</span></a> </li>
            <li> <a href="{{ url('visitors') }}" class="waves-effect"><i data-icon="P" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Visitantes</span></a> </li>

            <li><a href="#" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Sair</span></a></li>

        </ul>
    </div>
</div>