  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header' -->
   <section class="content-header">
      <h1>
      Inicio
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
            </div>
            <!-- /.box-header -->
            <link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css" />
            <div class="box-body">
            	<form class="form-horizontal form-label-left form-in" id="form" method="POST">
                    <div class="col-lg-6">
                        <div class="col-lg-4">
                            <label>Rut<span class="required">*</span>
                            </label>
                            <input type="text" id="rut" name="rut"  required="required" maxlength="8" class="form-control col-md-5 col-xs-12">
                        </div>
                        <div class="col-md-2">
                            <label>Dv<span class="required">*</span>
                            </label>
                            <input type="text" id="dv" name="dv"  required="required" maxlength="1" class="form-control col-md-2 col-xs-12">
                        </div>
                        <br>
                        <div class="col-lg-1">
                  <div class="col-lg-6"><button type="submit" rel="tooltip" title="Buscar" class="btn btn-info  btn-round btn-just-icon" data-toggle="modal" data-target="#edit_modal" ><i class="fa fa-search"></i></button></div>
                </div>
                    </div>
			</form>
            </div>
            

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

    <!--==== Modal editar red social ====-->

    <div id="edit_modal" class="modal fade" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" >Profesor</h4>
                </div>
                    <div class="modal-body text-center">
                     <center>
                	
                     <div class="col-md-12">
         <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?=base_url('')?>resources/images/marc.jpg" alt="User profile picture">

              <h3 class="profile-username text-center"><div id="name"></div></h3>

              <p class="text-muted text-center">Profesor</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>InacapMail</b> <a class="pull-right"><div id="correo"></div></a>
                </li>
                <li class="list-group-item">
                  <b>Teléfono</b> <a class="pull-right">543</a>
                </li>
                <li>
               	<h3><i class="fa fa-pencil margin-r-5"></i>Asignaturas</h3>
                <span class="label label-danger">Matemática</span>
                <span class="label label-success">Informática</span>
                <span class="label label-info">Android</span>
                <span class="label label-warning">PHP</span>
                <span class="label label-primary">lala</span>
                </li>
              </ul>

              <a href="#" class="btn btn-primary btn-block"><b>Horario Disponibilidad</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        </center> 

                </div>               
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--==== Fin Modal editar red social ====-->

     <!--====Modal Eliminar red social =====-->
 <div id="delete_modal" class="modal fade" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" >Eliminar Miembro</h4>
                </div>
                <div class="modal-body text-center">
                    <h4>¿Seguro/a que desea eliminar al miembro del equipo?</h4><h3 id="modal_name"></h3>
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
<!--======== Fin Modal Eliminar red social ========= -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>
    <strong>Copyright Finblem</a>.</strong> Derechos Reservados
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0'">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0'">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800'555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0'">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0'">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0'">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0'">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0'">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0'">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0'" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

<!-- ./wrapper -->

<script>
$("#form").submit(function(e){
	 e.preventDefault();
	    $.ajax({
                type: "POST",
                url: "<?=site_url('Asesor_Controller/detalleProfesor')?>",
                dataType: "json",
                data: $(this).serialize(),
                success: function(data) {
                    console.log(data);
                    $("#name").html(data.nombre); //Cambiar al que esta seleccionado
                    $("#correo").html(data.correo);
                    $('#carga_modal').modal('hide');
                    $('#edit_modal').modal('show').fadeIn(800);
                },
                complete : function(xhr, status) {
                    $('#carga_modal').modal('hide');
                }
            });
    
     });

 

 $(function () {
        setTimeout(function() {
            $(".messages").fadeOut(3000);
        },3000);

    });

</script>