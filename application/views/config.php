<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Data Tables</title>
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
  <link rel="stylesheet" href="<?=base_url('resources/dist/css/AdminLTE.min.css')?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url('resources/dist/css/skins/_all-skins.min.css')?>">
  <link rel="stylesheet" href="<?=base_url('resources/select2-4.0.3/dist/css/select2.min.css')?>">
  <link rel="stylesheet" href="<?=base_url('resources/pnotify/dist/pnotify.custom.min.css')?>">
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

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <?php foreach ($log as $logo): ?>
      <?php if($logo->get('con_logo') != NULL || !empty($logo->get('con_logo')) ){?>
        <a href="<?=site_url('loginController/volverIndex')?>" class="logo">
      <span class="logo-mini"><img src="<?=base_url('')?>resources/images/logo/<?=$logo->get('con_logo')?>" style="width: 100%; height: 100%;"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="<?=base_url('')?>resources/images/logo/<?=$logo->get('con_logo')?>" style="width: 140px; height: 50px;"></span>
    </a>
    <?php }else{?>
     <a href="<?=site_url('loginController/volverIndex')?>" class="logo">
      <span class="logo-mini">SLG</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Sin Logo</span>
    </a>
    <?php } ?>
    <?php endforeach ?>
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
              <img src="<?=base_url('')?>resources/images/<?=$this->session->userdata('imagen')?>" style ="width:25px; height:25px" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->userdata('username');?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?=base_url('')?>resources/images/<?=$this->session->userdata('imagen')?>"  class="img-circle" alt="User Image">

                <p>
                  <?php echo $this->session->userdata('username');?>
                  <small>Administrador</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <center>
                <div class="pull" style="float: center;">
                  <a href="<?=site_url('loginController/logoutUser')?>" class="btn btn-danger btn-flat"><i class="fa fa-power-off" aria-hidden="true"></i> Salir</a>
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
          <img src="<?=base_url('')?>resources/images/<?=$this->session->userdata('imagen')?>" style="width:40px; height: 40px" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('username');?></p>
          Administrador
         
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">Navegación</li>

       <li class="treeview">
                  <a href="<?=site_url('loginController/volverIndex')?>">
                    <i class="fa fa-home"></i>
                    <span>Inicio</span>
                    <span class="pull-right-container">
                      <span class="label label-primary pull-right"></span>
                    </span>
                  </a>
                </li>

             <li class="treeview active">
          <a href="<?=site_url('confController')?>">
            <i class="fa fa-cog"></i>
            <span>Configuración</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
        </li>
         <li class="treeview">
          <a href="<?=site_url('empresaController')?>">
            <i class="fa fa-book"></i>
            <span>Empresa</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
        </li>

              <li class="treeview">
          <a href="<?=site_url('ProductoController')?>">
            <i class="fa fa-archive" aria-hidden="true"></i>
            <span>Productos</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
        </li>


           <li class="treeview">
          <a href="<?=site_url('CategoriasController')?>">
            <i class="fa fa-tag" aria-hidden="true"></i>
            <span>Categoría</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
        </li>    
            
         <li class="treeview">
          <a href="<?=site_url('redesController')?>">
            <i class="fa fa-facebook-official"></i>
            <span>Redes Sociales</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
        </li>

        <li class="treeview">
          <a href="<?=site_url('teamController')?>">
            <i class="fa fa-users"></i>
            <span>Equipo de trabajo</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="<?=site_url('adminController')?>">
            <i class="fa fa-user"></i>
            <span>Usuarios</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
        </li>
           <li class="treeview">
          <a href="#">
            <i class="fa fa-envelope-o"></i>
            <span>Mensajes</span>
            <span class="pull-right-container">
              <span class="fa fa-angle-left pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=site_url('msjController')?>"><i class="fa fa-circle-o"></i> Sin Responder</a></li>
            <li><a href="<?=site_url('msjController/msjRespondidos')?>"><i class="fa fa-circle-o"></i> Respondidos/Enviados</a></li>
            <li><a href="<?=site_url('msjController/msjAll')?>"><i class="fa fa-circle-o"></i> Todos </a></li>
          </ul>
        </li>

         <li class="treeview">
          <a href="<?=site_url('msjController/viewCorreos')?>">
            <i class="fa fa-exchange"></i>
            <span>Correos Registrados</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
        </li>

        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header' -->
   <section class="content-header">
      <h1>
        Configuración
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-xs-12">
                 <!-- MENSAJES DE OPERACIONES -->
                              <div class="messages">
                 <?php $notice = $this->session->flashdata('notice');
                       $alert = $this->session->flashdata('alert'); 
                       $info = $this->session->flashdata('info'); 
                  ?>
                    <?php if($notice){?>
                        <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Éxito!</h4>
                  <?=$notice?>             
              </div>
                     <?php } ?>
                      <?php if($alert){ ?>
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4><i class="icon fa fa-ban"></i> Error!</h4>
                            <?=$alert?>
                     <?php } ?>
                      <?php if($info){ ?>
                        <div class="alert alert-info alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4><i class="icon fa fa-info"></i> Información!</h4>
                            <?=$info?>
                     <?php } ?>
                </div>
            </div> 
            </div>
            <!-- FIN MENSAJES DE OPERACIONES -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
                <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#new_modal"><i class="fa fa-plus"></i> Nueva Configuración </button>
            </div>  
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                
                <thead>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Logo</th>
                <th>Fondo</th>
                <th>Footer</th>
                <th>Navbar</th>
                <th>Fuente</th>
                <th>Estado</th>
                <th>Editar</th>
                <th>Eliminar</th>
                </thead>

                <tbody>
                <tr>
                 <?php foreach ($conf as $con): ?>
                  
                    <td><?=$con->get('con_nombrefantasia')?></td>
                    <td><?=$con->get('con_phonenumber')?></td>
                    <td><?=$con->get('con_email')?></td>
                    <?php if($con->get('con_logo') != NULL && !empty($con->get('con_logo'))){?>
                     <td align="center"><a href="#<?=$con->get('con_id')?>"><img src="<?=base_url('')?>resources/images/logo/<?=$con->get('con_logo')?>" style="width:40px; height:40px;  border-radius: 50%;"></a></td>
                    <?php }else{ ?>
                    <td>Sin Logo</td>
                    <?php }?>
                    
                    <td><p style="background-color: <?=$con->get('con_background')?>;  height: 20px; width: 35px;"></p></td>
                    <td><p style="background-color: <?=$con->get('con_footer')?>;  height: 20px; width: 35px;"></p></td>
                    <td><p style="background-color: <?=$con->get('con_navbar')?>;  height: 20px; width: 35px;"></p></td>
                    <td><p style="font-style: <?=$con->get('con_fontstyle')?>;"><?=$con->get('con_fontstyle')?></p></td>
                    <?php if($con->get('con_status')==1){?>
                    <td>Habilitado</td>
                    <?php }else{?>
                    <td>Deshabilitado</td>
                    <?php }?>
                    <td style="width: 5px;"> <a type='button' fakeid="<?=$con->get('con_id')?>" class='btn btn-default editUsr pull-right'><i class="fa fa-pencil"></i></a></td>
                    <td style="width: 4px;"><a type='button' fakeid="<?=$con->get('con_id')?>" class='btn btn-danger deleteUsr pull-right deleteUsr' data-toggle='modal' data-target='#delete_modal'> <i class="fa fa-user-times" ></i></a></td>
                    </tr>
                    <a href="#_" class="lightbox" id="<?=$con->get('con_id')?>">
                      <img src="<?=base_url('')?>resources/images/logo/<?=$con->get('con_logo')?>">
                    </a>
                   <?php endforeach ?>
                

                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

  <!-- modal eliminar-->
<div id="delete_modal" class="modal fade " role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">Eliminar Configuración</h4>
            </div>
            <div class="modal-body">
                <h4 style="text-align: center;">¿Seguro/a que desea eliminar la configuración?</h4><h3 id="modal_name"></h3>
                <div class="modal-footer">
                    <div class="col-md-4">

                        <button id="btnDel" type="button" class="btn btn-danger">Eliminar</button>
                    </div>
                    <div class="col-md-8">
                        <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /modal eliminar -->

<!-- modal agregar -->
<div id="new_modal" class="modal fade " role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" >Nueva Configuración</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal form-label-left" enctype="multipart/form-data" action="<?=site_url('confController/agregarConfiguracion')?>" method="POST">
                    <div class="col-lg-12">
                          <div class="col-lg-6">
                            <label >Nombre Empresa<span class="required">*</span>
                            </label>
                            <input type="text" id="name" name="name"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        <div class="col-lg-6">
                            <label >Correo Electrónico
                            </label>
                            <input type="email" id="email" name="email" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="col-lg-6">
                            <label >Color del Fondo del Sitio Web<span class="required">*</span>
                            </label>
                            <input type="color" id="background" name="background" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                         <div class="col-lg-6">
                            <label >Color del pie de página<span class="required">*</span>
                            </label>
                            <input type="color" id="footer" name="footer" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="col-lg-6">
                            <label>Color de la Barra de navegación<span class="required">*</span>
                            </label>
                            <input type="color" id="navbar" name="navbar" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        <div class="col-lg-6">
                            <label>Color de la fuente
                            </label>
                            <input type="color" id="fontcolor" name="fontcolor" class="form-control col-md-7 col-xs-12">
                        </div>
                        
                    </div>
                    <div class="col-lg-12">
                        <div class="col-lg-6">
                            <label>Logo</label>
                            <input type="file" name="logo" accept="image/*" class="form-control col-md-7 col-xs-12">
                        </div>
                        <div class="col-lg-6">
                            <label>Banner</label>
                            <input type="file" name="banner" accept="image/*" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="col-lg-12">
                            
                        <div class="col-lg-6">
                            <label >Número de Teléfono<span class="required">*</span></label>
                            <input type="text" id="number" name="number" required="required" class="form-control col-md-7 col-xs-12">
                        </div>

                            <div class="col-lg-6">
                            <label>Tamaño de Fuente
                            </label>
                            <select name="fontsize" id="fontsize"  class="js-example-tokenizer form-control select2"  style="width: 100%">
                                     <option style="font-size: 10px" value="10">10  Hola</option>
                                     <option style="font-size: 11px" value="11">11  Hola</option>
                                     <option style="font-size: 12px" value="12">12  Hola</option>
                                     <option style="font-size: 13px" value="13">13  Hola</option>
                                     <option style="font-size: 14px" value="14">14  Hola</option>
                                     <option style="font-size: 15px" value="15">15  Hola</option>
                                     <option style="font-size: 16px" value="16">16  Hola</option>
                                     <option style="font-size: 17px" value="17">17  Hola</option>
                                     <option style="font-size: 18px" value="18">18  Hola</option>
                                     <option style="font-size: 19px" value="19">19  Hola</option>
                                     <option style="font-size: 20px" value="20">20  Hola</option>
                                     <option style="font-size: 21px" value="21">21  Hola</option>

                                </select>
                        </div>
                    </div>

                    <div class="col-lg-12">

                        <div class="col-lg-6">
                            <label >Estilo de fuente
                            </label>
                             <select name="fontstyle" id="fontstyle"  class="js-example-tokenizer form-control select2"  style="width: 100%">
                                     <option style="font-family: 'Comic Sans MS'" value="Comic Sans MS">Comic Sans MS</option>
                                     <option style="font-family: Arial" value="Arial">Arial</option>
                                     <option style="font-family: 'Times New Roman'" value="Times New Roman">Times New Roman</option>
                                     <option style="font-family: Calibri" value="Calibri">Calibri</option>
                                     <option style="font-family: Glyphicons Halflings" value="Glyphicons Halflings">Glyphicons Halflings</option>

                                </select>
                        </div>
                            <div class="col-lg-6">
                            <label>Link del Video
                            </label>
                            <input type="text" id="video" name="video" class="form-control col-md-7 col-xs-12">
                        </div>   
                    </div>
            </div>
            <div class="modal-footer">
                <div class="col-md-8">
                <br>
                    <button type="button" id="modal_cancel" class="btn btn-default pull-right" data-dismiss="modal">Cancelar</button>
                </div>
                <div class="col-md-2">
                <br>
                    <button id="btnAdd" type="submit" class="btn btn-success">Guardar</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- /modal agregar -->

<!-- modal editar -->
<div id="edit_modal" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content">
             <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" >Editar Configuración</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal form-label-left" enctype="multipart/form-data" action="<?=site_url('confController/editarConfiguracion')?>" method="POST">
                    <div class="col-lg-12">
                     <div class="col-lg-6">
                            <label >Nombre Empresa<span class="required">*</span>
                            </label>
                            <input type="text" id="editname" name="editname"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        <div class="col-lg-6">
                            <label >Correo Electrónico
                            </label>
                            <input type="email" id="editemail" name="editemail" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="col-lg-6">
                            <label >Fondo del Sitio Web<span class="required">*</span>
                            </label>
                            <input type="color" id="editbackground" name="editbackground" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                         <div class="col-lg-6">
                            <label >Color de pie de página<span class="required">*</span>
                            </label>
                            <input type="color" id="editfooter" name="editfooter" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="col-lg-6">
                            <label>Color de barra de navegación<span class="required">*</span>
                            </label>
                            <input type="color" id="editnavbar" name="editnavbar" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        <div class="col-lg-6">
                            <label>Color de fuente
                            </label>
                            <input type="color" id="editfontcolor" name="editfontcolor" class="form-control col-md-7 col-xs-12">
                        </div>
                       
                    </div>
                    <div class="col-lg-12">
                        
                         <div class="col-lg-6">
                            <label>Logo
                            </label>
                            <input type="file" id="editlogo" name="editlogo" class="form-control col-md-7 col-xs-12">
                        </div>
                        <div class="col-lg-6">
                            <label>Banner</label>
                            <input type="file" name="editbanner" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="col-lg-12">
                          <div class="col-lg-6">
                            <label >Número de Teléfono<span class="required">*</span></label>
                            <input type="text" id="editnumber" name="editnumber" required="required" class="form-control col-md-7 col-xs-12">
                        </div>

                        <div class="col-lg-6">
                            <label>Tamaño de Fuente
                            </label>
                            <select name="editfontsize" id="editfontsize"  class="js-example-tokenizer form-control select2"  style="width: 100%">
                                     <option style="font-size: 10px" value="10">10  Hola</option>
                                     <option style="font-size: 11px" value="11">11  Hola</option>
                                     <option style="font-size: 12px" value="12">12  Hola</option>
                                     <option style="font-size: 13px" value="13">13  Hola</option>
                                     <option style="font-size: 14px" value="14">14  Hola</option>
                                     <option style="font-size: 15px" value="15">15  Hola</option>
                                     <option style="font-size: 16px" value="16">16  Hola</option>
                                     <option style="font-size: 17px" value="17">17  Hola</option>
                                     <option style="font-size: 18px" value="18">18  Hola</option>
                                     <option style="font-size: 19px" value="19">19  Hola</option>
                                     <option style="font-size: 20px" value="20">20  Hola</option>
                                     <option style="font-size: 21px" value="21">21  Hola</option>

                                </select>
                        </div>
                    </div>

                    <div class="col-lg-12">

                        <div class="col-lg-6">
                            <label >Estilo de fuente
                            </label>
                             <select name="editfontstyle" id="editfontstyle"  class="js-example-tokenizer form-control select2"  style="width: 100%">
                                     <option style="font-family: 'Comic Sans MS'" value="Comic Sans MS">Comic Sans MS</option>
                                     <option style="font-family: Arial" value="Arial">Arial</option>
                                     <option style="font-family: 'Times New Roman'" value="Times New Roman">Times New Roman</option>
                                     <option style="font-family: Calibri" value="Calibri">Calibri</option>
                                      <option style="font-family: Glyphicons Halflings" value="Glyphicons Halflings">Glyphicons Halflings</option>
                                </select>
                        </div>

                        <div class="col-lg-6">
                            <label>Link Video
                            </label>
                            <input type="text" id="editvideo" name="editvideo" class="form-control col-md-7 col-xs-12">
                        </div>

                        <div class="col-lg-6">
                            <label >Estado </label>
                             <select name="editestado" id="editestado"  class="js-example-tokenizer form-control select2"  style="width: 100%">
                                     <option  value="0">Deshabilitado</option>
                                     <option  value="1">Habilitado</option>
                                </select>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
            <div class="col-lg-2">
                    <input type="hidden" id="editid" name="editid"   class="form-control col-md-7 col-xs-12">
                    <input type="hidden" id="oldlogo" name="oldlogo"  class="form-control col-md-7 col-xs-12">
                    <input type="hidden" id="oldbanner" name="oldbanner"  class="form-control col-md-7 col-xs-12">
                </div>
                <div class="col-lg-8">
                <br>
                    <button type="button" id="modal_cancel" class="btn btn-default pull-right" data-dismiss="modal">Cancelar</button>
                </div>
                <div class="col-lg-2">
                    <br>
                    <button id="btnAdd" type="submit" class="btn btn-success">Guardar</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>


    <!-- /modal editar -->

  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>
    <strong>Copyright Clínica MYPE inacap</a>.</strong> derechos reservados
  </footer>

  <!-- Control Sidebar -->
 
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?=base_url('resources/plugins/jQuery/jquery-2.2.3.min.js')?>"></script>
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
<script src="<?=base_url('resources/pnotify/dist/pnotify.custom.min.js')?>"></script>
<!-- page script -->
<script>
// <==== DataTable Options ===>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });

   /*  $("#fontsize").select2({
     theme: "classic"
});
$("#editfontsize").select2(); */
  });

   $(function () {
        setTimeout(function() {
            $(".messages").fadeOut(3000);
        },3000);

    });


 // <==== Fin DataTable Options ===>


  // <==== Editar Botón ===>
  $(".editUsr").click(function () {
            var id = $(this).attr('fakeid');
            console.log(id);
            $.ajax({
                type: "POST",
                url: "<?=site_url('confController/detallesConfiguracion')?>",
                dataType: "json",
                data:{"idconf" : id},
                beforeSend: function () {
                    $("#editnumber").val("");
                    $("#editemail").val("");
                    $("#editbackground").val("");
                    $("#editfooter").val("");
                    $("#editnavbar").val("");
                    $("#editlogo").val("");
                    $("#editvideo").val("");
                    $("#editname").val("");
                    $("#editfontcolor").val("");
                    $("#editfontstyle").val("");
                    $("#editfontsize").val("");
                    $("#oldlogo").val("");
                    $("#editestado").val("");
                    $('#carga_modal').modal('show');
                },
                success: function(data) {
                    console.log(data);
                    $("#editnumber").val(data.number);
                    $("#editemail").val(data.email);
                    $("#editbackground").val(data.background);
                    $("#editfooter").val(data.footer);
                    $("#editnavbar").val(data.navbar);
                    $("#editvideo").val(data.video);
                    $("#editname").val(data.nombre);
                    $("#editfontcolor").val(data.fontcolor);
                    $("#editfontstyle").val(data.fontstyle).trigger("change");
                    $("#editfontsize").val(data.fontsize).trigger("change");
                    $("#oldlogo").val(data.logo);
                    $("#editestado").val(data.estado);
                    $("#editid").val(id);
                    $("#oldbanner").val(data.banner);    
                    $('#carga_modal').modal('hide');
                    $('#edit_modal').modal('show').fadeIn(800);
                    
                },
                   error:function (data) {
                    $('#carga_modal').modal('hide');
                    alert("lo sentimos no pudimos cargar los datos solicitados, favor intente mas tarde");
                },
                
                complete : function(xhr, status) {
                    $('#carga_modal').modal('hide');
                }
            });
        });

    // <==== Fin Editar Botón ===>







        // <==== Eliminar Botón ===>
        var iddelete = 0;
        $(".deleteUsr").click(function () {
            iddelete = $(this).attr('fakeid');
        });

        $('#btnDel').click(function () {
            if (iddelete != 0) {
                $('#delete_modal').modal('hide');
                $.ajax({
                    type: "POST",
                    url: "<?=site_url('confController/eliminarConfiguracion')?>",
                    dataType: "json",
                    data: {"idconf": iddelete},
                    beforeSend: function () {
                        $('#carga_modal').modal('show');
                    },
                    success: function (data) {
                        $('#carga_modal').modal('hide');
                    },
                    complete: function (xhr, status) {
                        $('#carga_modal').modal('hide');
                        location.reload();
                    }
                });
            }else{
                alert("No se ha seleccionado ningun usuario a eliminar");
            }
        });
  // <==== Fin Eliminar Botón ===>




</script>
</body>
</html>
