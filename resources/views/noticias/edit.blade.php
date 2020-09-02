@extends('layouts.admin_role')

@section('admin')
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">

          <!-- Navbar -->
          <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: #f6a515; color: #fff;">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
              <li class="nav-item" >
                <a class="nav-link" data-widget="pushmenu" href="#" role="button" ><i class="fas fa-bars" ></i></a>
              </li>
              <li class="nav-item d-none d-sm-inline-block">
                <a href="/" class="nav-link" style="color: #fff; font-weight: bold;">Inicio</a>
              </li>
              <li class="nav-item d-none d-sm-inline-block">
                <a href="/servicios" class="nav-link" style="color: #fff; font-weight: bold;">Servicios</a>
              </li>

              <li class="nav-item d-none d-sm-inline-block">
                <a href="/nosotros" class="nav-link" style="color: #fff; font-weight: bold;">Sobre Nosotros</a>
              </li>

              <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('aporte.index') }}" class="nav-link" style="color: #fff; font-weight: bold;">Tu Aporte</a>
              </li>

              <li class="nav-item d-none d-sm-inline-block">
                <a href="/contacto" class="nav-link" style="color: #fff; font-weight: bold;">Contactanos</a>
              </li>

              <li class="nav-item" style="margin-right: -2%;">
                            <div class="media">
                            <img src="/uploads/avatars/<?php echo e(Auth::user()->avatar); ?>" alt="Avatar" class="img-size-50 img-circle mr-3" style="width: 35px; margin-top: 10%;"><?php echo e(Auth::user()->imagen); ?>

                            </div>

                        </li>
              
              <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color: #fff; font-weight: bold;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="<?=route('users.profile', Auth::user()->id); ?>">
                                    <?php echo e(__('Configuración')); ?>

                                </a>
                                
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    <?php echo e(__('cerrar sesión')); ?>

                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </div>
                        </li>

            </ul>


          </nav>
          <!-- /.navbar -->

          <!-- Main Sidebar Container -->
          <aside class="main-sidebar sidebar-dark-primary elevation-4" >
            <!-- Brand Logo -->
            <a href="/" class="brand-link">

              <img src="/img/icon/icono.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                   style="opacity: .8">
              <span class="brand-text font-weight-light" style="font-size: 13px;">Central de Riesgos de Transporte</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
              <!-- Sidebar user panel (optional) -->
              <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                  <img src="/uploads/avatars/<?php echo e(Auth::user()->avatar); ?>" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                  <a href="<?=route('users.profile', Auth::user()->id); ?>" class="d-block">{{ Auth::user()->name }}</a>
                </div>
              </div>

              <!-- Sidebar Menu -->
              <nav class="mt-2">
                @can('empresa.index')
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
                       with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview menu-open">
                          <a href="#" class="nav-link active">
                            <svg class="bi bi-truck-flatbed" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="margin-right: 5px;">
                                <path fill-rule="evenodd" d="M11 5h2.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5h-1v-1h1a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4.5h-1V5zm-8 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 1a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                                <path fill-rule="evenodd" d="M12 13a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 1a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                                <path d="M0 10h11v2H4.5v-1h-3v1H1a1 1 0 0 1-1-1v-1zm11-6a1 1 0 0 1 1 1v6h-1V4z"/>
                              </svg>
                            <p style="color: blanchedalmond;">
                              Transportadora
                              <i class="right fas fa-angle-left"></i>
                            </p>
                          </a>
                          <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <a href="./index.html" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Lista de Empresas</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="./index2.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Servicio</p>
                              </a>
                            </li>
                            <li class="nav-item">
                                <a href="./index2.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Noticias</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="./index2.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Subir Imagenes</p>
                                </a>
                            </li>
                        </li>
                    </ul>
                    @endcan

                    @can('generadoras.index')
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->
                              <li class="nav-item has-treeview menu-open">
                                <a href="{{ route('generadoras.index') }}" class="nav-link active">
                                  <svg class="bi bi-box-seam" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="margin-right: 5px;">
                                      <path fill-rule="evenodd" d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
                                    </svg>
                                  <p style="color: blanchedalmond;">
                                    Generadoras
                                    <i class="right fas fa-angle-left"></i>
                                  </p>
                                </a>
                                <ul class="nav nav-treeview">
                                  <li class="nav-item">
                                    <a href="{{ route('generadoras.index') }}" class="nav-link active">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Lista de Empresas</p>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="{{ route('generadoras.index') }}" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Servicio</p>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ route('generadoras.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Noticias</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ route('generadoras.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Subir Imagenes</p>
                                      </a>
                                  </li>
                              </li>
                          </ul>
                        @endcan

                        @can('propietarios.index')
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
                                 with font-awesome or any other icon font library -->
                                  <li class="nav-item has-treeview menu-open">
                                    <a href="{{ route('propietarios.index') }}" class="nav-link active">
                                        <svg class="bi bi-award-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="margin-right: 5px;">
                                            <path d="M8 0l1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
                                            <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
                                        </svg>
                                      <p style="color: blanchedalmond;">
                                        Propietarios
                                        <i class="right fas fa-angle-left"></i>
                                      </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                      <li class="nav-item">
                                        <a href="{{ route('propietarios.index') }}" class="nav-link active">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>Lista de Vehiculos</p>
                                        </a>
                                      </li>
                                      <li class="nav-item">
                                        <a href="{{ route('propietarios.index') }}" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>Servicio</p>
                                        </a>
                                      </li>
                                      <li class="nav-item">
                                          <a href="{{ route('propietarios.index') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Noticias</p>
                                          </a>
                                      </li>
                                      <li class="nav-item">
                                          <a href="{{ route('propietarios.index') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Subir Imagenes</p>
                                          </a>
                                      </li>
                                  </li>
                              </ul>
                            @endcan

                            @can('transportes.index')
                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                              <!-- Add icons to the links using the .nav-icon class
                                   with font-awesome or any other icon font library -->
                                    <li class="nav-item has-treeview menu-open">
                                      <a href="{{ route('transportes.index') }}" class="nav-link active">
                                        <svg class="bi bi-truck" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="margin-right: 5px;">
                                            <path fill-rule="evenodd" d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5v7h-1v-7a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .5.5v1A1.5 1.5 0 0 1 0 10.5v-7zM4.5 11h6v1h-6v-1z"/>
                                            <path fill-rule="evenodd" d="M11 5h2.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5h-1v-1h1a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4.5h-1V5zm-8 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 1a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                                            <path fill-rule="evenodd" d="M12 13a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 1a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                                          </svg>
                                        <p style="color: blanchedalmond;">
                                          Conductores
                                          <i class="right fas fa-angle-left"></i>
                                        </p>
                                      </a>
                                      <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                          <a href="{{ route('transportes.index') }}" class="nav-link active">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Subir curruculum</p>
                                          </a>
                                        </li>
                                        <li class="nav-item">
                                          <a href="{{ route('transportes.index') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Servicio</p>
                                          </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('transportes.index') }}" class="nav-link">
                                              <i class="far fa-circle nav-icon"></i>
                                              <p>Noticias</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('transportes.index') }}" class="nav-link">
                                              <i class="far fa-circle nav-icon"></i>
                                              <p>Comentarios</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('transportes.index') }}" class="nav-link">
                                              <i class="far fa-circle nav-icon"></i>
                                              <p>Subir Imagenes</p>
                                            </a>
                                        </li>
                                    </li>
                                </ul>
                            @endcan

                    @can('users.index')
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->
                              <li class="nav-item has-treeview menu-open">

                                <a href="{{ route('users.index') }}" class="nav-link active">

                                  <svg class="bi bi-people-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="margin-right: 5px;">
                                      <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                                    </svg>
                                  <p style="color: blanchedalmond;">
                                    Usuarios
                                    <i class="right fas fa-angle-left"></i>
                                  </p>
                                </a>
                                <ul class="nav nav-treeview">
                                  <li class="nav-item">
                                    <a href="{{ route('users.index') }}" class="nav-link active">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Lista de Usuarios</p>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="{{ route('users.index') }}" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Folders</p>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ route('users.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Social</p>
                                      </a>
                                    </li>
                              </li>
                          </ul>
                          @endcan

                          @can('roles.index')
                          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                              <!-- Add icons to the links using the .nav-icon class
                                   with font-awesome or any other icon font library -->
                                    <li class="nav-item has-treeview menu-open">
                                      <a href="{{route('roles.index')}}" class="nav-link active">
                                          <svg class="bi bi-gear-wide-connected" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="margin-right: 5px;">
                                              <path fill-rule="evenodd" d="M8.932.727c-.243-.97-1.62-.97-1.864 0l-.071.286a.96.96 0 0 1-1.622.434l-.205-.211c-.695-.719-1.888-.03-1.613.931l.08.284a.96.96 0 0 1-1.186 1.187l-.284-.081c-.96-.275-1.65.918-.931 1.613l.211.205a.96.96 0 0 1-.434 1.622l-.286.071c-.97.243-.97 1.62 0 1.864l.286.071a.96.96 0 0 1 .434 1.622l-.211.205c-.719.695-.03 1.888.931 1.613l.284-.08a.96.96 0 0 1 1.187 1.187l-.081.283c-.275.96.918 1.65 1.613.931l.205-.211a.96.96 0 0 1 1.622.434l.071.286c.243.97 1.62.97 1.864 0l.071-.286a.96.96 0 0 1 1.622-.434l.205.211c.695.719 1.888.03 1.613-.931l-.08-.284a.96.96 0 0 1 1.187-1.187l.283.081c.96.275 1.65-.918.931-1.613l-.211-.205a.96.96 0 0 1 .434-1.622l.286-.071c.97-.243.97-1.62 0-1.864l-.286-.071a.96.96 0 0 1-.434-1.622l.211-.205c.719-.695.03-1.888-.931-1.613l-.284.08a.96.96 0 0 1-1.187-1.186l.081-.284c.275-.96-.918-1.65-1.613-.931l-.205.211a.96.96 0 0 1-1.622-.434L8.932.727zM8 12.997a4.998 4.998 0 1 0 0-9.995 4.998 4.998 0 0 0 0 9.996z"/>
                                              <path fill-rule="evenodd" d="M7.375 8L4.602 4.302l.8-.6L8.25 7.5h4.748v1H8.25L5.4 12.298l-.8-.6L7.376 8z"/>
                                            </svg>
                                        <p style="color: blanchedalmond;">
                                          Roles
                                          <i class="right fas fa-angle-left"></i>
                                        </p>
                                      </a>
                                      <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                          <a href="{{route('roles.index')}}" class="nav-link active">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Lista de Roles</p>
                                          </a>
                                        </li>
                                        <li class="nav-item">
                                          <a href="{{route('roles.index')}}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Folders</p>
                                          </a>
                                        </li>
                                    </li>
                                </ul>
                              @endcan
                </nav>
              <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
          </aside>

    <!-- Contenido body -->
    <div class="content-wrapper">
        <!-- Content Header (separador) -->
        <div class="content-header">

        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

            <form action="/posts/{{ $post->id }}" method="POST" enctype="multipart/form-data">
                @method('PATCH')
                {{ csrf_field() }}

                <div class="form group">
                    <label for="tittle">Título</label>
                    <input type="text" name="tittle" class="form-control" id="tittle" placeholder="Título..." value="{{ $post->tittle }}">
                </div>
                <div class="form group">
                    <label for="image">Selecciona la imagen</label>
                    <input type="file" name="image" class="form-control" id="image" value="{{ old('image_url') }}">
                </div>
                <div class="form group">
                    <img src="{{ asset('/public/images/noticias/'.$post['image_url']) }}" style="width:200px;" alt="{{ $post['image_url'] }}">
                </div>
                <div class="form group">
                    <label for="tittle">Historia</label>
                    <textarea name="post_content" id="content">{{ $post->content }}</textarea>
                </div>

                <div class="form group pt-2">
                    <input class="btn btn-primary" type="submit" value="Actualizar">
                </div>
            </form>

            <script>
                CKEDITOR.replace( 'post_content' );
            </script>
        <!--Fin Content header -->
        </div>
    <!--Fin Contenido body -->
    </div>

@endsection