 <!--::inicio del navegador::-->
 <header class="main_menu home_menu">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="/"> <img src="/img/icon/icono.png" alt="logo" style="width: 80px; height: 70px"> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_icon"></span>
                    </button>

                    <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active_color" href="/">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/serv">Servicios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/nosotros">Sobre Nosotros</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('aporte.index') }}">Tu aporte</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Role
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                    @can('empresa.index')
                                    <a class="dropdown-item" href="{{ route('empresa.index') }}"> Transportadoras</a>
                                    @endcan


                                    @can('generadoras.index')
                                    <a class="dropdown-item" href="{{ route('generadoras.index') }}">Generadoras</a>
                                    @endcan

                                    @can('propietarios.index')
                                    <a class="dropdown-item" href="{{ route('propietarios.index') }}">Propietarios</a>
                                    @endcan

                                    @can('transportes.index')
                                    <a class="dropdown-item" href="{{ route('transportes.index') }}">Conductores</a>
                                    @endcan

                                    @can('posts.index')
                                    <a class="dropdown-item" href="{{ route('posts.index') }}">Noticias</a>
                                    @endcan

                                    @can('encuestas.index')
                                    <a class="dropdown-item" href="{{ route('questionnaire.index') }}">Encuestas</a>
                                    @endcan

                                    @can('lider.index')
                                    <a class="dropdown-item" href="{{ route('lider.index') }}">Elegir Lider</a>
                                    @endcan

                                    @can('users.index')
                                    <a class="dropdown-item" href="{{ route('users.index') }}">Usuarios</a>
                                    @endcan

                                    @can('role.index')
                                    <a class="dropdown-item" href="{{ route('roles.index') }}">Roles</a>
                                    @endcan


                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/contacto">Contactanos</a>
                            </li>

                            @guest
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Ingresar</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="/register">Registrarse</a>
                            </li>
                        @endif
                    @else

                        <li class="nav-item" style="margin-right: -2%;">
                            <div class="media">
                            <img src="/uploads/avatars/{{ Auth::user()->avatar}}" alt="Avatar" class="img-size-50 img-circle mr-3" style="width: 35px; margin-top: 40%;">{{ Auth::user()->imagen }}
                            </div>

                        </li>

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?=route('users.profile', Auth::user()->id); ?>">
                                    <?php echo e(__('Perfil')); ?>

                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('cerrar seccion') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest

                        </ul>
                    </div>
                   
                </nav>
            </div>
        </div>
    </div>
   
</header>
<!-- fin navegador-->
