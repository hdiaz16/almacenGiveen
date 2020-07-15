<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Sistema Giveen</title>
  <meta name="description" content="Sistema de almacen y otra cosas" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
  <link rel="apple-touch-icon" href="assets/images/logo.png">
  <meta name="apple-mobile-web-app-title" content="Flatkit">
  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" sizes="196x196" href="assets/images/logo.png">
  
  <!-- style -->
  <link rel="stylesheet" href="assets/animate.css/animate.min.css" type="text/css" />
  <link rel="stylesheet" href="assets/glyphicons/glyphicons.css" type="text/css" />
  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="assets/material-design-icons/material-design-icons.css" type="text/css" />

  <link rel="stylesheet" href="assets/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
  <!-- build:css ../assets/styles/app.min.css -->
  <link rel="stylesheet" href="assets/styles/app.css" type="text/css" />
  <!-- endbuild -->
  <link rel="stylesheet" href="assets/styles/font.css" type="text/css" />

  <link rel="stylesheet" href="assets/mycss/mycss.css" type="text/css" />


  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="assets/material-design-icons/material-design-icons.css" type="text/css" />

  
</head>
<body>
  <div class="app" id="app">

<!-- ############ LAYOUT START-->

  <!-- aside -->
  <div id="aside" class="app-aside modal fade sm nav-dropdown">
    <div class="left navside grey dk" layout="column">
      <div class="navbar no-radius">
        <!-- brand -->
        <a class="navbar-brand text-center" href=" <?php echo base_url('dashboard') ?> ">
          <img src="assets/images/logo.png" alt="." width="100" >
        </a>
        <!-- / brand -->
      </div>
      <div flex class="hide-scroll">
        <nav class="scroll nav-border b-primary">
          
            <ul class="nav" ui-nav>
              <li class="nav-header hidden-folded">
                <small class="text-muted">Inicio </small>
              </li>
              
              <li>
                <a href="<?php echo base_url('dashboard') ?>" >
                  <span class="nav-icon">
                    <i class="material-icons">&#xe3fc;
                    </i>
                  </span>
                  <span class="nav-text">Dashboard</span>
                </a>
              </li>
          
              <li>
                <a>
                  <span class="nav-caret">
                    <i class="fa fa-caret-down"></i>
                  </span>
                  <span class="nav-label">
                    <b class="label rounded label-sm primary"></b>
                  </span>
                  <span class="nav-icon">
                    <i class="material-icons">&#xe5c3;
                    </i>
                  </span>
                  <span class="nav-text">Almacen</span>
                </a>
                <ul class="nav-sub">
                  <li>
                    <a href=" <?php echo base_url('products') ?> " >
                      <span class="nav-text">Agregar Producto</span>
                    </a>
                  </li>
                  <li>
                    <a href=" <?php echo base_url('list-products') ?> " >
                      <span class="nav-text">Lista de Productos</span>
                    </a>
                  </li>

                  <li>
                    <a href=" <?php echo base_url('add-to-stock') ?> " >
                      <span class="nav-text">Ingreso de Stock</span>
                    </a>
                  </li>
                 
                </ul>
              </li>


              <li>
                <a>
                  <span class="nav-caret">
                    <i class="fa fa-caret-down"></i>
                  </span>
                  <span class="nav-icon">
                    <i class="fa fa-usd"></i>
                  </span>
                  <span class="nav-text">Ventas</span>
                </a>
                <ul class="nav-sub">
                  <li>
                    <a href=" <?php echo base_url('ventas') ?> " >
                      <span class="nav-text">Agregar Venta</span>
                    </a>
                  </li>
                  <li>
                    <a href=" <?php echo base_url('list-ventas') ?> " >
                      <span class="nav-text">Lista de Ventas</span>
                    </a>
                  </li>
                 
                </ul>
              </li>
          
            </ul>

        </nav>
      </div>

      <div class="b-t">
        <div class="nav-fold">
          <a href="profile.html">
              <span class="pull-left">
                <img src="<?php echo $img ?>" alt="..." class="w-40 img-circle">
              </span>
              <span class="clear hidden-folded p-x">
                <span class="block _500"><?php echo $name ?> </span>
                <small class="block text-muted"><i class="fa fa-circle text-success m-r-sm"></i>online</small>
              </span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- / aside -->
  
  <!-- content -->
  <div id="content" class="app-content box-shadow-z2 box-radius-1x" role="main">
    <div class="app-header white box-shadow">
       <div class="navbar navbar-toggleable-sm flex-row align-items-center">
           <!-- Open side - Naviation on mobile -->
           <a data-toggle="modal" data-target="#aside" class="hidden-lg-up mr-3">
             <i class="material-icons">&#xe5d2;</i>
           </a>
           <!-- / -->
       
           <!-- Page title - Bind to $state's title -->
           <div class="mb-0 h5 no-wrap" ng-bind="$state.current.data.title" id="pageTitle"></div>
       
           <!-- navbar collapse -->
           <div class="collapse navbar-collapse" id="collapse">
             <!-- link and dropdown -->
             <ul class="nav navbar-nav mr-auto">
               <li>
                  <div class="btn-group dropdown">
                    <button class="btn white dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-fw fa-plus text-muted"></i> Nuevo</button>
                    <div class="dropdown-menu dropdown-menu-scale">
                      <a class="dropdown-item" href="<?php echo base_url('products') ?>">Productos</a>
                      <a class="dropdown-item" href="<?php echo base_url('ventas') ?>">Ventas</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item">Usuarios</a>
                    </div>
                  </div>

               </li>

             </ul>

             <ul class="nav navbar-nav ml-auto flex-row">

              <li class="nav-item dropdown pos-stc-xs">
                <a type="button" class="nav-link mr-2" href=" <?php echo base_url('log-out') ?> " alt="Salir">
                 <i class="fa fa-sign-out fa-1x "></i>
                  
                </a>
              </li>
             
            </ul>
       
             <!-- / -->
           </div>
           <!-- / navbar collapse -->
       
           
       </div>
    </div>
    <div class="app-footer">
      <div class="p-2 text-xs">
        <div class="pull-right text-muted py-1">
          &copy; Copyright <strong>Giveen</strong> <span class="hidden-xs-down">- Built with Love v1.0</span>
          <a ui-scroll-to="content"><i class="fa fa-long-arrow-up p-x-sm"></i></a>
        </div>
        
      </div>
    </div>
    <div ui-view class="app-body" id="view">
