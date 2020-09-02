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
                <a href="/home" class="nav-link" style="color: #fff; font-weight: bold;">Inicio</a>
              </li>
              <li class="nav-item d-none d-sm-inline-block">
                <a href="/serv" class="nav-link" style="color: #fff; font-weight: bold;">Servicios</a>
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
                                    <?php echo e(__('Configuraci贸n')); ?>

                                </a>
                                
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    <?php echo e(__('cerrar sesi贸n')); ?>

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

              <img src="img/icon/icono.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                   style="opacity: .8">
              <span class="brand-text font-weight-light" style="font-size: 12px;">Comunidad Camionera de Colombia</span>
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
                
              @can('questionnaire.index')
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
                       with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview menu-close">
                          <a href="{{ route('questionnaire.index') }}" class="nav-link active">
                          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-archive-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="margin-right: 5px;">
                             <path fill-rule="evenodd" d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM6 7a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1H6zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"/>
                          </svg>
                            <p style="color: blanchedalmond;">
                              Crear Encuestas
                              <i class="right fas fa-angle-left"></i>
                            </p>
                          </a>
                          <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <a href="{{ route('questionnaire.index') }}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Lista de Encuestas</p>
                              </a>
                            </li>
                            
                    </ul>
                    @endcan


                @can('empresa.index')
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
                       with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview menu-close">
                          <a href="{{ route('empresa.index') }}" class="nav-link active">
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
                              <a href="{{ route('empresa.index') }}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Lista de Empresas</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="{{ route('servicios.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Crear Servicio</p>
                              </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('subirArchivo.index') }}" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Mis Archivos</p>
                                </a>
                            </li>                           
                        </li>
                    </ul>
                    @endcan

                    @can('generadoras.index')
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->
                              <li class="nav-item has-treeview menu-close">
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
                                    <a href="{{ route('servicios.index') }}" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Crear Servicio</p>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ route('subirArchivo.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Mis Archivos</p>
                                      </a>
                                  </li>                                
                              </li>
                          </ul>
                        @endcan

                        @can('propietarios.index')
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
                                 with font-awesome or any other icon font library -->
                                  <li class="nav-item has-treeview menu-close">
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
                                        <a href="{{ route('servicios.index') }}" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>Crear Servicio</p>
                                        </a>
                                      </li>
                                      <li class="nav-item">
                                          <a href="{{ route('subirArchivo.index') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Mis Archivos</p>
                                          </a>
                                      </li>                                     
                                  </li>
                              </ul>
                            @endcan

                            @can('transportes.index')
                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                              <!-- Add icons to the links using the .nav-icon class
                                   with font-awesome or any other icon font library -->
                                    <li class="nav-item has-treeview menu-close">
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
                                          <a href="{{ route('servicios.index') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p> Crear Servicio</p>
                                          </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('subirArchivo.index') }}" class="nav-link">
                                              <i class="far fa-circle nav-icon"></i>
                                              <p>Mis Archivos</p>
                                            </a>
                                        </li>                                      
                                    </li>
                                </ul>
                            @endcan

                        @can('posts.index')
                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                              <!-- Add icons to the links using the .nav-icon class
                                   with font-awesome or any other icon font library -->
                                    <li class="nav-item has-treeview menu-close">
                                      <a href="/posts" class="nav-link active">
                                      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-newspaper" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="margin-right: 5px;">
                                        <path fill-rule="evenodd" d="M0 2A1.5 1.5 0 0 1 1.5.5h11A1.5 1.5 0 0 1 14 2v12a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 0 14V2zm1.5-.5A.5.5 0 0 0 1 2v12a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 .5-.5V2a.5.5 0 0 0-.5-.5h-11z"/>
                                        <path fill-rule="evenodd" d="M15.5 3a.5.5 0 0 1 .5.5V14a1.5 1.5 0 0 1-1.5 1.5h-3v-1h3a.5.5 0 0 0 .5-.5V3.5a.5.5 0 0 1 .5-.5z"/>
                                        <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"/>
                                      </svg>
                                        <p style="color: blanchedalmond;">
                                          Noticias
                                          <i class="right fas fa-angle-left"></i>
                                        </p>
                                      </a>
                                      <ul class="nav nav-treeview">
                                      <li class="nav-item">
                                     <a href="/posts" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                   <p>Crear Noticia</p>
                                 </a>
                                </li>                                      
                            </li>
                          </ul>
                    @endcan


                    @can('lider.index')
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
                       with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview menu-close">
                          <a href="{{ route('empresa.index') }}" class="nav-link active">
                          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-hand-index" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="margin-right: 5px;">
                             <path fill-rule="evenodd" d="M6.75 1a.75.75 0 0 0-.75.75V9a.5.5 0 0 1-1 0v-.89l-1.003.2a.5.5 0 0 0-.399.546l.345 3.105a1.5 1.5 0 0 0 .243.666l1.433 2.15a.5.5 0 0 0 .416.223h6.385a.5.5 0 0 0 .434-.252l1.395-2.442a2.5 2.5 0 0 0 .317-.991l.272-2.715a1 1 0 0 0-.995-1.1H13.5v1a.5.5 0 0 1-1 0V7.154a4.208 4.208 0 0 0-.2-.26c-.187-.222-.368-.383-.486-.43-.124-.05-.392-.063-.708-.039a4.844 4.844 0 0 0-.106.01V8a.5.5 0 0 1-1 0V5.986c0-.167-.073-.272-.15-.314a1.657 1.657 0 0 0-.448-.182c-.179-.035-.5-.04-.816-.027l-.086.004V8a.5.5 0 0 1-1 0V1.75A.75.75 0 0 0 6.75 1zM8.5 4.466V1.75a1.75 1.75 0 0 0-3.5 0v5.34l-1.199.24a1.5 1.5 0 0 0-1.197 1.636l.345 3.106a2.5 2.5 0 0 0 .405 1.11l1.433 2.15A1.5 1.5 0 0 0 6.035 16h6.385a1.5 1.5 0 0 0 1.302-.756l1.395-2.441a3.5 3.5 0 0 0 .444-1.389l.272-2.715a2 2 0 0 0-1.99-2.199h-.582a5.184 5.184 0 0 0-.195-.248c-.191-.229-.51-.568-.88-.716-.364-.146-.846-.132-1.158-.108l-.132.012a1.26 1.26 0 0 0-.56-.642 2.634 2.634 0 0 0-.738-.288c-.31-.062-.739-.058-1.05-.046l-.048.002zm2.094 2.025z"/>
                            </svg>
                            <p style="color: blanchedalmond;">
                              Elegir Lider
                              <i class="right fas fa-angle-left"></i>
                            </p>
                          </a>
                          <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <a href="{{ route('lider.index') }}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Lista de Lider</p>
                              </a>
                            </li>
                            
                    </ul>
                    @endcan       
                 

                    @can('users.index')
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->
                              <li class="nav-item has-treeview menu-close">

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
                                    <li class="nav-item has-treeview menu-close">
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



             <!-- fondo encuestas-->
    <section class="breadcrumb fondo_encuestas" style="margin-top: 0%;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item" >
                            <h2 style="margin-left: 20%;">Crear Encuestas</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <!-- Contenido body -->
    <div class="content-wrapper">
        <!-- Content Header (separador) -->
        <div class="content-header">

        <section class="content-header">
             <div class="container-fluid">
               <div class="row mb-2">
                 <div class="col-sm-6">
                  
                 </div>



               </div>
             </div><!-- /.container-fluid -->
           </section>

         <!-- contenido de control de noticias-->
      <section class="content">
             <div class="row">
               <div class="col-md-3">
                 <a href="#" class="btn btn-primary btn-block mb-3">Control Encuestas</a>

                 <div class="card">
                   <div class="card-header">
                     <h3 class="card-title">Folders</h3>

                     <div class="card-tools">
                       <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                       </button>
                     </div>
                   </div>
                   <div class="card-body p-0">
                     <ul class="nav nav-pills flex-column">
                       <li class="nav-item active">
                         <a href="#" class="nav-link">
                         <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-archive-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="margin-right: 5px;">
                             <path fill-rule="evenodd" d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM6 7a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1H6zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"/>
                          </svg> Encuestas                          
                           <span class="badge bg-primary float-right">{{ $encuestas_count }}</span>
                         </a>
                       </li>
                       <li class="nav-item">          
                            <a href="#" class="nav-link" style="float: left;">
                             <svg class="bi bi-plus-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                                 <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                                 <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                              </svg> Nueva            
                                  <a href="{{route('questionnaire.create')}}"
                                     class="btn btn-sm btn-primary float-right" style="margin: 5px;">
                                    Crear encuesta
                                  </a>              
                            </a>
                         </li>
                       <li class="nav-item">
                         <a href="#" class="nav-link">
                            <svg class="bi bi-eye-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"  style="margin-right: 2px;">
                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                              </svg> Vistas
                           <span class="badge bg-success float-right">65</span>
                         </a>
                       </li>
                       <li class="nav-item">
                         <a href="#" class="nav-link">
                            <svg class="bi bi-pencil-square" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"  style="margin-right: 2px; text-decoration: none;">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                              </svg> Editadas
                           <span class="badge bg-primary float-right">30</span>
                         </a>
                       </li>
                       <li class="nav-item">
                         <a href="#" class="nav-link">
                           <i class="far fa-trash-alt"></i> Borradas
                           <span class="badge bg-danger float-right">20</span>
                         </a>
                       </li>
                     </ul>
                   </div>
                   <!-- /.card-body -->
                 </div>
                 <!-- /.card -->

                 <!-- /.card -->
               </div>

               
               <!-- /seccion lista de roles -->
               <div class="col-sm-9">
                 <div class="card card-primary card-outline" >
                   <div class="card-header">
                     <h3 class="card-title">Lista de encuestas</h3>
                     <!-- /.card-tools -->
                   </div>
                   <!-- /.card-header -->
                   <div class="card-body p-0">
                     <div class="direct-chat-messages">
                            <!--================lista edicion, ver y borrar empresa =================-->
                            <div style="border: 1px solid rgb(228, 228, 228);">
                              <div class="container">
                                  <div class="row">
                                      <div class="col-md-12">
                                        <table class="table-responsive-xl">                                         
                                            <table class="table table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                    <th width="10px">ID</th>
                                                    <th>Titulo</th>
                                                    <th>Razón de encuesta</th>
                                                    <th>Preguntas</th>
                                                    <th>Opciones</th>
                                                    <th colspan="3">&nbsp;</th>                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                               
                                                    @foreach ($questionnaire as $pos)
                                                    <tr>
                                                    <td>{{ $pos->id }}</td>
                                                    <td>{{ $pos->tittle }}</td>
                                                    <td>{!! getShorterString ($pos['purpose'], 50) !!}</td>                               
                                                    <td>
                                                      <a class="btn btn-dark" href="/questionnaire/{{ $pos->id }}/questions/create"><i class="fas fa-plus"></i></a>
                                                    </td>
                                                    <td colspan="3">                                                   

                                                    <div class="mailbox-controls">
                                                        <!-- Check all button -->                        
                                                       <div class="btn-group">

                                                       @can('encuestas.show')
                                                       <a href="{{ route('encuestas.show', $pos->id)}}">
                                                       <button type="button" class="btn btn-success btn-sm" style="float: left;">
                                                          <svg class="bi bi-eye-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="margin-top: -5px;">
                                                              <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                              <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                                          </svg>
                                                       </button>
                                                        </a>
                                                        @endcan 
                                                        
                                                        <a href="{{ route('questionnaire.edit', $pos->id)}}" style="float: left; margin-left: 10%;">
                                                          <button type="button" class="btn btn-primary btn-sm">
                                                           <svg class="bi bi-pencil" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="margin-top: -5px;">
                                                           <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z"/>
                                                           <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5H4v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5H3z"/>
                                                           </svg>
                                                         </button>
                                                       </a>
                                                    
                                                  
                                                        <form action="{{ route('encuestas.delete', $pos->id) }}" method="post">
                                                          @method('DELETE')
                                                          @csrf
                                                        <button class="btn btn-sm btn-danger" style="float: left; margin-left: 30%;"><i class="fas fa-trash-alt" style="color: #fff;"></i></button>
                                                        </form>                                 

                                                    </div>
                                                  </div>
                                                    </td>
                                                    </tr>
                                                    @endforeach
                                                  
                                                </tbody>
                                            </table>                                            
                                            {{$questionnaire->links()}}
                                          </table>
                                     </div>
                                  </div>
                              </div>
                            </div> 
                            <!--================Fin lista edicion, ver y borrar empresa =================-->

                        </div>  
                        
                      </div>

               <!-- /.col -->
             </div>
             <!-- /.row -->
            </div>
           </section>

      
         

    <!--Fin Content header -->
        </div>
<!--Fin Contenido body -->
    </div>



     

@endsection