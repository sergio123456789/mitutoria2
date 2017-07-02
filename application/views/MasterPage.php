<!DOCTYPE html>
<html>

<head>
<style type="text/css">
.thumbnail {
  max-width: 40%;
}
  .lightbox {
  /** Default lightbox to hidden */
  display: none;

  /** Position and style */
  position: fixed;
  z-index: 999;
  width: 100%;
  height: 100%;
  text-align: center;
  top: 0;
  left: 0;
  background: rgba(0,0,0,0.8);
}

.lightbox img {
  /** Pad the lightbox image */
  max-width: 80%;
  max-height: 80%;
  margin-top: 8%;

}

.lightbox:target {
  /** Remove default browser outline */
  outline: none;

  /** Unhide lightbox **/
  display: block;
}
</style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MITUTORIA</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?=base_url('resources/bootstrap/css/bootstrap.min.css')?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?=base_url('resources/plugins/datatables/dataTables.bootstrap.css')?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url('resources/dist/css/AdminLTE.css')?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url('resources/dist/css/skins/_all-skins.min.css')?>">
  <link rel="stylesheet" href="<?=base_url('resources/select2-4.0.3/dist/css/select2.min.css')?>">
  <script src="<?=base_url('resources/js/jquery.min.js')?>"></script>
    <?php $user = $this->session->userdata('logged_in');?>
</head>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->


      <!-- mini logo for sidebar mini 50x50 pixels -->
        <a  class="logo">
      <span class="logo-mini"><img src="<?=base_url('')?>resources/images/favicon/favicon-32x32.png" style="width: 100%; height: 100%;"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="<?=base_url('')?>resources/images/materialize-logo.png" style="width: 200px; height: 50px;"></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        
         <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="glyphicon glyphicon-off" aria-hidden="true"></i> 
            
              <span class="hidden-xs"><?php echo $this->session->userdata('username');?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?=base_url('')?>resources/images/user.png"  class="img-circle" alt="User Image">
                <p>
                  <?php echo $this->session->userdata('username');?>
                  <small><?=$user["nombre"]?></small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <center>
                <div class="pull" style="float: center;">
                  <a href="<?=site_url('Login_Controller/logout')?>" class="btn btn-danger btn-flat"><i class="fa fa-power-off" aria-hidden="true"></i> Salir</a>
                </div>
              </center>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
      
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url('')?>resources/images/user.png" style="width:40px; height: 40px" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('username');?></p>
         <?=$user["nombre"]?>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
       <ul class="sidebar-menu">
        <li class="header">Navegación</li>
  <?php if ((in_array(1, $user['permisos'])) ) { ?>
                    <li class="treeview">
                  <a href="<?=site_url()?>/Asesor_Controller/index">
                    <i class="fa fa-home"></i>
                    <span>Inicio</span>
                    <span class="pull-right-container">
                      <span class="label label-primary pull-right"></span>
                    </span>
                  </a>
                </li>
                  <li class="treeview">
                  <a href="<?=site_url()?>/Asesor_Controller/verAlumnos">
                    <i class="fa fa-user"></i>
                    <span>Ver Alumnos</span>
                    <span class="pull-right-container">
                      <span class="label label-primary pull-right"></span>
                    </span>
                  </a>
                </li>
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-group"></i>
                    <span>Profesores</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?=site_url()?>/Asesor_Controller/verProfesor"><i class="fa fa-user-secret"></i>Profesores</a></li>
                    <li><a href="<?=site_url()?>/Asesor_Controller/verTutor"><i class="fa fa-graduation-cap"></i>Tutores</a></li>
                    <li><a href="<?=site_url()?>/Asesor_Controller/verTutorProgresion"><i class="fa fa-line-chart"></i>Tutores Progresión</a></li>
                  </ul>
                </li>
                 <li class="treeview">
                  <a href="<?=site_url()?>/Asesor_Controller/Importar">
                    <i class="fa fa-upload"></i>
                    <span>Importar</span>
                    <span class="pull-right-container">
                      <span class="label label-primary pull-right"></span>
                    </span>
                  </a>
                </li>
                <li class="treeview">
                  <a href="<?=site_url()?>/Asesor_Controller/Exportar">
                    <i class="fa fa-download"></i>
                    <span>Exportar</span>
                    <span class="pull-right-container">
                      <span class="label label-primary pull-right"></span>
                    </span>
                  </a>
                </li>
                    <?php } ?>
                    <?php if ((in_array(2, $user['permisos'])) ) { ?>
                               <li class="treeview">
                  <a href="<?=site_url()?>/Asistente_Controller/index">
                    <i class="fa fa-home"></i>
                    <span>Inicio</span>
                    <span class="pull-right-container">
                      <span class="label label-primary pull-right"></span>
                    </span>
                  </a>
                </li>

                  <li class="treeview">
                  <a href="<?=site_url()?>/Asistente_Controller/verAlumnos">
                    <i class="fa fa-user"></i>
                    <span>Ver Alumnos</span>
                    <span class="pull-right-container">
                      <span class="label label-primary pull-right"></span>
                    </span>
                  </a>
                </li>
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-group"></i>
                    <span>Profesores</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?=site_url()?>/Asistente_Controller/verProfesor"><i class="fa fa-user-secret"></i>Profesores</a></li>
                    <li><a href="<?=site_url()?>/Asistente_Controller/verTutor"><i class="fa fa-graduation-cap"></i>Tutores</a></li>
                    <li><a href="<?=site_url()?>/Asistente_Controller/verTutorProgresion"><i class="fa fa-line-chart"></i>Tutores Progresión</a></li>
                  </ul>
                </li>

                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-bookmark-o"></i>
                    <span>Ayudas</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?=site_url()?>/Asistente_Controller/verProfesor"><i class="fa fa-book"></i>Tutorías</a></li>
                    <li><a href="<?=site_url()?>/Asistente_Controller/verTutor"><i class="fa fa-graduation-cap"></i>Reforzamientos</a></li>
                    <li><a href="<?=site_url()?>/Asistente_Controller/verTutorProgresion"><i class="fa fa-line-chart"></i>Ayudantías</a></li>
                  </ul>
                </li>
                 <li class="treeview">
                  <a href="<?=site_url()?>/Asistente_Controller/Importar">
                    <i class="fa fa-upload"></i>
                    <span>Importar</span>
                    <span class="pull-right-container">
                      <span class="label label-primary pull-right"></span>
                    </span>
                  </a>
                </li>
                <li class="treeview">
                  <a href="<?=site_url()?>/Asistente_Controller/Exportar">
                    <i class="fa fa-download"></i>
                    <span>Exportar</span>
                    <span class="pull-right-container">
                      <span class="label label-primary pull-right"></span>
                    </span>
                  </a>
                </li>
                    <?php } ?>
                    <?php if ((in_array(3, $user['permisos'])) ) { ?>
                       <li class="treeview">
                  <a href="<?=site_url()?>/Tutor_Controller/index">
                    <i class="fa fa-home"></i>
                    <span>Inicio</span>
                    <span class="pull-right-container">
                      <span class="label label-primary pull-right"></span>
                    </span>
                  </a>
                </li>
                      <li class="treeview">
                  <a href="<?=site_url()?>/Tutor_Controller/miPerfil">
                    <i class="fa fa-child"></i>
                    <span>Mi Perfil</span>
                    <span class="pull-right-container">
                      <span class="label label-primary pull-right"></span>
                    </span>
                  </a>ss
                </li>
                     <li class="treeview">
                  <a  onclick="abrir()" >
                    <i class="fa fa-calendar-o"></i>
                    <script type="text/javascript">
                     function abrir(idProd) { 

                open('<?=site_url('Tutor_Controller/miHorario')?>','','top=300,left=300,width=550,height=600') ; 

                }

                </script>
                    <span>Mi Horario</span>
                    <span class="pull-right-container">
                      <span class="label label-primary pull-right"></span>
                    </span>
                  </a>
                </li>
                   <li class="treeview">
                  <a href="<?=site_url()?>/Tutor_Controller/misRamos">
                    <i class="fa fa-calendar-o"></i>
                    <span>Mis Ramos</span>
                    <span class="pull-right-container">
                      <span class="label label-primary pull-right"></span>
                    </span>
                  </a>
                </li>

                <li class="treeview">
                  <a href="<?=site_url()?>/Tutor_Controller/solReforzamientos">
                    <i class="fa fa-graduation-cap"></i>
                    <span>Solicitar Reforzamientos</span>
                    <span class="pull-right-container">
                      <span class="label label-primary pull-right"></span>
                    </span>
                  </a>
                </li>                  
                    <?php } ?>
                    <?php if ((in_array(4, $user['permisos'])) ) { ?>
                         <li class="treeview">
                  <a href="<?=site_url()?>/Profesor_Controller/index">
                    <i class="fa fa-home"></i>
                    <span>Inicio</span>
                    <span class="pull-right-container">
                      <span class="label label-primary pull-right"></span>
                    </span>
                  </a>
                </li>
                      <li class="treeview">
                  <a href="<?=site_url()?>/Profesor_Controller/miPerfil">
                    <i class="fa fa-child"></i>
                    <span>Mi Perfil</span>
                    <span class="pull-right-container">
                      <span class="label label-primary pull-right"></span>
                    </span>
                  </a>
                </li>
                     <li class="treeview">
                  <a href="<?=site_url()?>/Profesor_Controller/historial">
                    <i class="fa fa-calendar-o"></i>
                    <span>Historial</span>
                    <span class="pull-right-container">
                      <span class="label label-primary pull-right"></span>
                    </span>
                  </a>
                </li>
                <li class="treeview">
                  <a href="<?=site_url()?>/Profesor_Controller/createdispo">
                    <i class="fa fa-clock-o"></i>
                    <span>Disponibilidad</span>
                    <span class="pull-right-container">
                      <span class="label label-primary pull-right"></span>
                    </span>
                  </a>
                </li>
                <li class="treeview">
                  <a href="<?=site_url()?>/Profesor_Controller/refor">
                    <i class="fa fa-list-alt"></i>
                    <span>Solicitar Reforzamiento</span>
                    <span class="pull-right-container">
                      <span class="label label-primary pull-right"></span>
                    </span>
                  </a>
                </li>
                    <?php } ?>
                    <?php if ((in_array(5, $user['permisos']))|| in_array(6, $user['permisos']))  { ?>
                              <li class="treeview">
                  <a href="<?=site_url()?>/Alumno_Controller/index">
                    <i class="fa fa-home"></i>
                    <span>Inicio</span>
                    <span class="pull-right-container">
                      <span class="label label-primary pull-right"></span>
                    </span>
                  </a>
                </li>
                    <li class="treeview">
                  <a href="<?=site_url()?>/Alumno_Controller/miPerfil">
                    <i class="fa fa-child"></i>
                    <span>Mi Perfil</span>
                    <span class="pull-right-container">
                      <span class="label label-primary pull-right"></span>
                    </span>
                  </a>
                </li>
                   <li class="treeview">
                  <a href="<?=site_url()?>/Alumno_Controller/misRamos">
                    <i class="fa fa-calendar-o"></i>
                    <span>Mis Ramos</span>
                    <span class="pull-right-container">
                      <span class="label label-primary pull-right"></span>
                    </span>
                  </a>
                </li>
                       <li class="treeview">
                  <a href="<?=site_url()?>/Alumno_Controller/historialTutorias">
                    <i class="fa fa-history"></i>
                    <span>Historial de tutorías</span>
                    <span class="pull-right-container">
                      <span class="label label-primary pull-right"></span>
                    </span>
                  </a>
                </li>
                   
                 
                    <?php } ?>
        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
              

        <!--aqui termina la wea -->
        <div class="row">
  <div class="col-xs-12">
    <div class="content-wrapper">
  <?php echo $content_for_layout; ?>
  </div>
  </div>
</div>
            </body>

<!-- Bootstrap 3.3.6 -->
<script src="<?=base_url('resources/bootstrap/js/bootstrap.min.js')?>"></script>
<!-- DataTables -->
<script src="<?=base_url('resources/plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?=base_url('resources/plugins/datatables/dataTables.bootstrap.min.js')?>"></script>
<!-- SlimScroll -->
<script src="<?=base_url('resources/plugins/slimScroll/jquery.slimscroll.min.js')?>"></script>
<!-- FastClick -->
<script src="<?=base_url('resources/plugins/fastclick/fastclick.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?=base_url('resources/dist/js/app.min.js')?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url('resources/dist/js/demo.js')?>"></script>
<script src="<?=base_url('resources/select2-4.0.3/dist/js/select2.min.js')?>"></script>
<script type="text/javascript">
    
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive":true
    });

     $("#nombrered").select2({
     theme: "classic"
});
$("#nombrered").select2();

  });
</script>
          
            </html>