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
                <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#new_modal"><i class="fa fa-user-plus"></i> Agregar Miembro </button>
            </div>
            <!-- /.box-header -->
            <link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css" />
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                
                <thead>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Cargo</th>
                <th>Foto</th>
                <th>Editar</th>
                <th>Eliminar</th>
                </thead>

                <tbody>
                <tr>
                  
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style="width: 5px;"> <a type='button' fakeid="" class='btn btn-default editUsr pull-right'><i class="fa fa-pencil"></i></a></td>
                    <td style="width: 4px;"><a type='button' fakeid="" class='btn btn-danger deleteUsr pull-right deleteUsr' data-toggle='modal' data-target='#delete_modal'> <i class="fa fa-user-times" ></i></a></td>
                    </tr>
                

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

    <!--==== Modal Nuevas Redes sociales ====-->

      <div id="new_modal" class="modal fade" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" >Agregar Miembro</h4>
                </div>
                <div class="modal-body text-center">
                    <form class="form-horizontal form-label-left" enctype="multipart/form-data" action="<?=site_url('teamController/agregarUsuEqui')?>" method="POST">
                      
                        <div class="form-group">
                            <label class="control-label col-md-3" for="last-name">Nombre<span class="required">*</span>
                            </label>
                            <div class="col-md-7">
                                <input type="text" id="userName" name="userName"  required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3" for="last-name">Descripción<span class="required">*</span>
                            </label>
                            <div class="col-md-7">
                                <input type="text" id="desc" name="desc"  required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3" for="last-name">Cargo<span class="required">*</span>
                            </label>
                            <div class="col-md-7">
                                <input type="text" id="cargo" name="cargo"  required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3" for="img">Foto</label>
                          <input type="file" name="logo" accept="image/*">
                          <input type="text" style="visibility: hidden;" name="photo">
                        </div>      
                </div>

                <div class="modal-footer">
                    <div class="col-md-8">
                        <button type="button" id="modal_cancel" class="btn btn-default pull-right" data-dismiss="modal">Cancelar</button>
                    </div>
                    <div class="col-md-2">
                        <button id="btnAdd" type="submit" class="btn btn-success">Guardar</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!--==== fin modal agregar redes sociales =====-->
    
    <!--==== Modal editar red social ====-->

    <div id="edit_modal" class="modal fade" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" >Editar Miembro</h4>
                </div>
                    <div class="modal-body text-center">
                    <form class="form-horizontal form-label-left" enctype="multipart/form-data" action="<?=site_url('teamController/editarUsu')?>" method="POST">
                        
                        <div class="form-group">
                            <label class="control-label col-md-3" for="last-name">Nombre<span class="required">*</span>
                            </label>
                            <div class="col-md-7">
                                <input type="text" id="editUserName" name="editUserName"  required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3" for="last-name">Descripción<span class="required">*</span>
                            </label>
                            <div class="col-md-7">
                                <input type="text" id="editDesc" name="editDesc"  required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3" for="last-name">Cargo<span class="required">*</span>
                            </label>
                            <div class="col-md-7">
                                <input type="text" id="editCargo" name="editCargo"  required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3" for="img">Foto</label>
                          <input type="file" name="logo" accept="image/*">
                          <input type="text" style="visibility: hidden;" id="photo" name="photo">
                        </div>           
                </div>

               
                <div class="modal-footer">

                  
                    <div class="col-md-2 pull-left">
                        <input type="hidden" id="editUsu" name="editUsu"   class="form-control col-md-7 col-xs-12">
                    </div>
                    <div class="col-md-8">
                        <button type="button" id="modal_cancel" class="btn btn-default pull-right" data-dismiss="modal">Cancelar</button>
                    </div>
                    <div class="col-md-2">
                        <button id="btnAdd" type="submit" class="btn btn-success">Guardar</button>
                    </div>
                </div>
                </form>
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
 // <==== Editar Botón ===>

  $(".editUsr").click(function () {
            var id = $(this).attr('fakeid');
            console.log(id);
            $.ajax({
                type: "POST",
                url: "<?=site_url('teamController/detallesEquiUsu')?>",
                dataType: "json",
                data:{"editUsu" : id},
                beforeSend:function () {
                    $("#editUsu").val("");
                    $("#editUserName").val("");
                    $("#editDesc").val("");
                    $("#editCargo").val("");
                    $("#photo").val("");
                    $('#carga_modal').modal('show');
                },
                success: function(data) {
                    console.log(data);
                    $('#carga_modal').modal('hide');
                    $('#edit_modal').modal('show').fadeIn(800);
                    $("#editUserName").val(data.usuName); //Cambiar al que esta seleccionado
                    $("#editUsu").val(id);
                    $("#editDesc").val(data.usuDesc);
                    $("#editCargo").val(data.usuCargo);
                    $("#photo").val(data.imagen);
                },
                complete : function(xhr, status) {
                    $('#carga_modal').modal('hide');
                }
            });
        });

 // <==== Fin Editar Botón ===>

  var iddelete = 0;
        $(".deleteUsr").click(function () {
            iddelete = $(this).attr('fakeid');
        });

        $('#btnDel').click(function () {
            if (iddelete != 0) {
                $('#delete_modal').modal('hide');
                $.ajax({
                    type: "POST",
                    url: "<?=site_url('teamController/eliminarUsuTeam')?>",
                    dataType: "json",
                    data: {"editUsu": iddelete},
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

 $(function () {
        setTimeout(function() {
            $(".messages").fadeOut(3000);
        },3000);

    });

</script>