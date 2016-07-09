<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sistema de Administración</title>
    <?php 
    $usr = $this->session->userdata();
    if(count($usr)==1){redirect('/sistema','refresh');}
    ?>
    <!-- Bootstrap -->
    <link href="<?=base_url();?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url();?>/assets/css/main.css" rel="stylesheet">
    <script src="dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
     <link href="<?=base_url();?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url();?>/assets/css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?=base_url()?>/index.php/sistema/administrar_propiedades">Corredora de Propiedades</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?=base_url()?>/index.php/sistema/admin_propiedad">Agregar Propiedad</a></li>
        <li><a href="<?=base_url()?>/index.php/sistema/administrar_propiedades">Administra Propiedades</a></li>
        <li><a href="<?=base_url()?>/index.php/sistema/listar_usuario">Administrar Usuarios</a></li>
        <li><a href="<?=base_url()?>/index.php/sistema/listar_transaccion">Administrar Transaccion</a></li>
        <li><a href="<?=base_url()?>/index.php/sistema/listar_tipo">Administrar Tipo Propiedad</a></li>
        <li role="presentation"><a href="<?=base_url()?>/index.php/sistema/desplegar_solicitud">Alertas <span class="badge"><?=$not;?></span></a></li>
        <li><a href="<?=base_url()?>/index.php/sistema/logout">Cerrar Sesíon</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>