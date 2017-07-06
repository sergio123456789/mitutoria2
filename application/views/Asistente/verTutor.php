<link rel="stylesheet" href="<?=base_url('resources/bootstrap/css/style.css')?>">
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
                                     </div> 
                     <?php } ?>
                      <?php if($info){ ?>
                        <div class="alert alert-info alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4><i class="icon fa fa-info"></i> Información!</h4>
                            <?=$info?>
                </div>
                     <?php } ?>

                </div>
            <!-- FIN MENSAJES DE OPERACIONES -->   
        <div class="container-fluid">
          <div class="row">
               <div class="col-md-12">
                          <div class="card">
                              <div class="card-header" data-background-color="purple">
                                  <h4 class="title">Tutores</h4>
                                  <p class="category">Acá puedes buscar, editar y añadir Tutores</p>
                              </div>
                              <br>
                                <script>
$(function(){
$("#flip-1").on("change", function(){
if ($(this).val() == "off")
{
$('#dispodel').modal('show');
}
else
{
$('#dispoactiv').modal('show');
}
});
});
</script>
                               <center>
<label for="flip-1">Disponibilidad:
<select class="form-control" name="flip-1" id="flip-1" data-role="slider">
<option>-----</option>
<?php if ($usuario->get('usu_dispo_estado') == 1): ?>
  <option value="on">Activar</option>
<?php endif ?>
<?php if ($usuario->get('usu_dispo_estado') == 0): ?>
<option value="off">Desactivar</option>  
<?php endif ?>
</select>
</label>
                                <button class="btn btn-success" data-toggle="modal" data-target="#new_modal"><i class="fa fa-plus"></i> Añadir Tutor</button>
                              </center>

                              <div class="card-content table-responsive" style="float: center;">
                                      <div class="row">
                                          <div class="col-xs-12">
                                             <div class="card-content table-responsive">
                                  <table id="example1" class="table" style="text-align: center;">
                                      <thead class="text-primary" >
                                        <th style="text-align: center;">Foto</th>
                                        <th style="text-align: center;">Profesor</th>
                                        <th style="text-align: center;">Correo</th>
                                        <th style="text-align: center;">Rut</th>
                                        <th style="text-align: center;">Ver Asignaturas</th>
                                        <th style="text-align: center;">Crear Tutoria </th>
                                        <th style="text-align: center;">Detalle Notas</th>
                                        <th style="text-align: center;">Editar</th>
                                        <th style="text-align: center;">Eliminar</th>
                                      </thead>  
                                      <tbody>
                                        <?php if (is_null($profesores)) {?>
                                      <h3 style="text-align: center;">No hay registros de Profesores</h3>
                                      <?php }else{ ?>
                                      <?php foreach ($profesores as $profe) :?>
                                          <tr>
                                                 <?php if($profe->get('usu_foto') == null || $profe->get('usu_foto') == ''){?>
                                                 <td><a href="#pablo">
                                              <img class="img" src="../../resources/images/marc.jpg" style="width: 42px; height: 42px; border-radius: 50%;" /></a></td>
                                              <?php }else{?>
                                              <td><a href="#pablo">
                                              <img class="img" src="../../resources/images/Tutor/<?=$profe->get('usu_foto')?>" style="width: 42px; height: 42px; border-radius: 50%;" /></a></td>
                                              <?php } ?>
                                                <td><?=$profe->get('usu_nombre')?></td>
                                                <td><?=$profe->get('usu_correo')?></td>
                                                <td><?=$profe->get('usu_rut')?>-<?=$profe->get('usu_dv')?></td>
                                                <center>

                                                 <td><a type='button' fakeid="<?=$profe->get('usu_id')?>" fakenombre="<?=$profe->get('usu_nombre')?>" class='btn btn-default editasig'><i class="fa fa-book"></i></a></td>

                                                <td><a type='button' target="_blank" href="<?=site_url('Asistente_Controller/createTutoria/'.$profe->get('usu_id'))?>" class='btn btn-default crearTutoria' ><i class="fa fa-file"></i></a></td>

                                                <td><a type='button' fakeid="<?=$profe->get('usu_id')?>" fakenombre="<?=$profe->get('usu_nombre')?>" class='btn btn-default editdetalle'><i class="fa fa-eye"></i></a></td>

                                                <td><a type='button' fakeid="<?=$profe->get('usu_id')?>" fakenombre="<?=$profe->get('usu_nombre')?>" class='btn btn-default edittutor'><i class="fa fa-pencil"></i></a></td>
                                                
                                                 <td style="width: 4px;"><a type='button' fakeid="<?=$profe->get('usu_id')?>" class='btn btn-danger deleteUsr pull-right deleteUsr' data-toggle='modal' data-target='#delete_modal'> <i class="fa fa-user-times" ></i></a></td>
                                                </center>
                                          </tr>
                                          <?php endforeach; ?>
                                      </tbody>
                                  </table>
                                  <?php } ?>
                              </div>
                                          </div>
                                      </div>
                              </div>
                          </div>
                      </div>
                      
                  <!--===== MODAL Asignatura ==========-->
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
                              <div class="col-md-12">
                                <!-- Widget: user widget style 1 -->
                                <div class="box box-widget widget-user-2">
                                  <!-- Add the bg color to the header using any of the bg-* classes -->
                                  <div class="widget-user-header bg-red">
                                    <div class="widget-user-image">
                                      <img class="img-circle" src="../../resources/images/marc.jpg" alt="User Avatar">
                                    </div>
                                    <!-- /.widget-user-image -->
                                    <h3 class="widget-user-username"><div id="nombreprofe"></div></h3>
                                    <h5 class="widget-user-desc">Profesor</h5>
                                  </div>
                                  <div class="box-footer no-padding">
                                    <ul class="nav nav-stacked">
                                <div class="box">
                                    <div class="box-header">
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body no-padding">
                                      <table class="table table-striped" style="text-align: center;">
                                        <tr>
                                           <th style="text-align: center;"><i class="fa fa-book margin-r-5"></i>Asignaturas</th>
                                        </tr>
                                       <tr>
                                        <td id="asignaprof"></td>
                                      </tr>
                                      </table>
                                    </div>
                                    <!-- /.box-body -->
                                  </div>
                                  <!-- /.box -->
                                    </ul>
                                  </div>
                                </div>
                                <!-- /.widget-user -->
                              </div>
                              </div>
                      </center> 
                    </div>               
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <!--===== Fin MODAL Asignatura ==========-->

 <!--===== Modal Detalle ==========-->
            <div id="detalle_modal" class="modal fade" role="dialog" aria-hidden="true">
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
                              <div class="col-md-12">
                                <!-- Widget: user widget style 1 -->
                                <div class="box box-widget widget-user-2">
                                  <!-- Add the bg color to the header using any of the bg-* classes -->
                                  <div class="widget-user-header bg-red">
                                    <div class="widget-user-image">
                                      <img class="img-circle" src="../../resources/images/marc.jpg" alt="User Avatar">
                                    </div>
                                    <!-- /.widget-user-image -->
                                    <h3 class="widget-user-username"><div id="nombretutor"></div></h3>
                                    <h5 class="widget-user-desc">Profesor</h5>
                                  </div>
                                  <div class="box-footer no-padding">
                                    <ul class="nav nav-stacked">
                                      
                                <div class="box">
                                    <div class="box-header">
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body no-padding">
                                      <table class="table table-striped" id="example1">
                                        <tr>
                                          <th style="text-align: center;">Fecha </th>
                                          <th style="text-align: center;">Asignatura </th>
                                          <th style="text-align: center;">Nota </th>
                                          <th style="text-align: center;">Comentario </th>
                                        </tr>
                                       <tr>
                                        <td id="fechatu" style="text-align: center;"></td>
                                        <td id="asigtu" style="text-align: center;"></td>
                                        <td id="notatu" style="text-align: center;"></td>
                                        <td id="comentu" style="text-align: center;"></td>
                                      </tr>
                                      </table>
                                    </div>
                                    <!-- /.box-body -->
                                  </div>
                                  <!-- /.box -->
                                </ul>
                                </div>
                                </div>
                                <!-- /.widget-user -->
                                </div>
                                </div>
                        </center> 
                                            </div>               
                                        <div class="modal-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>
            <!--===== Fin modal Detalle ==========-->



    <!--==== Modal Añadir Tutor ====-->
<!-- modal agregar -->
<div id="new_modal" class="modal fade " role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">Nuevo Tutor</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal form-label-left" enctype="multipart/form-data" action="<?=site_url('Asistente_Controller/agregarTutor')?>" method="POST">
                   
                <div class="col-md-12">
                    <div class="col-lg-12">
                          <div class="col-lg-6">
                            <label >Nombre Completo<span class="required">*</span>
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
                          <div class="col-lg-4">
                            <label >Rut<span class="required">*</span>
                            </label>
                            <input type="text" id="rut" name="rut"  maxlength="9" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        <div class="col-lg-2">
                            <label >Digito V.<span class="required">*</span>
                            </label>
                            <input type="text" id="dv" name="dv" maxlength="1" required="required" class="form-control col-md-7 col-xs-12">
                        </div>

                        <div class="col-lg-6">
                            <label >Asignaturas
                            </label>
                            <select name="asignaturas[]" class="js-example-tokenizer form-control select2" multiple="multiple" style="width: 100%">
                            <?php foreach ($asignaturas as $asig) { ?>
                             <option value="<?=$asig->get('asig_id')?>"><?=$asig->get('asig_nombre')?></option>
                          <?php  } ?>    
                            </select>
                        </div>
                        <div class="col-lg-12">
                            <label >Foto Perfil
                            </label>
                            <input type="file" accept="image/*" id="photo" name="photo" class="form-control col-md-7 col-xs-12">
                        </div>
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
    <!--==== fin modal añadir Tutor =====-->


    <!--==== Modal Editar Tutor ====-->
<!-- modal agregar -->
<div id="editutor_modal" class="modal fade " role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">Editar Tutor</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal form-label-left" enctype="multipart/form-data" action="<?=site_url('Asistente_Controller/editarTutor')?>" method="POST">
                   
                <div class="col-md-12">
                    <div class="col-lg-12">
                          <div class="col-lg-6">
                            <label >Nombre Completo<span class="required">*</span>
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
                          <div class="col-lg-4">
                            <label >Rut<span class="required">*</span>
                            </label>
                            <input type="text" id="editrut" name="editrut" maxlength="9" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        <div class="col-lg-2">
                            <label >Digito V.<span class="required">*</span>
                            </label>
                            <input type="text" id="editdv" name="editdv" maxlength="1" required="required" class="form-control col-md-7 col-xs-12">
                        </div>

                       
                        <div class="col-lg-6">
                            <label >Foto Perfil
                            </label>
                            <input type="file" accept="image/*" id="photo" name="photo" class="form-control col-md-7 col-xs-12">
                            <input type="text" hidden="hidden" id="oldphoto" name="oldphoto">
                            <input type="text" hidden="hidden" id="editid" name="editid">
                        </div>
                         <div class="col-lg-12">
                            <label >Asignaturas
                            </label>
                            <select name="editasignaturas[]" id="editasignaturas" class="js-example-tokenizer form-control select2" multiple="multiple" style="width: 100%">
                            <?php foreach ($asignaturas as $asig) { ?>
                             <option value="<?=$asig->get('asig_id')?>"><?=$asig->get('asig_nombre')?></option>
                          <?php  } ?>    
                            </select>
                        </div>
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
    <!--==== fin modal Editar Tutor =====-->



    <!-- modal eliminar Tutor-->
<div id="delete_modal" class="modal fade " role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">Eliminar al Tutor</h4>
            </div>
            <div class="modal-body">
                <h4 style="text-align: center;">¿Seguro/a que desea eliminar al tutor?</h4><h3 id="modal_name"></h3>
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
<!-- /modal eliminar Tutor -->
<div id="dispodel" class="modal fade " role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">Desactivar disponibilidad</h4>
            </div>
            <div class="modal-body">
                <h4 style="text-align: center;">¿Seguro/a que desea desactivar la opcion de ingregar disponibilidad en los profesores?</h4><h3 id="modal_name"></h3>
                <div class="modal-footer">
                    <div class="col-md-4">

                         <a href="<?=site_url('Asistente_Controller/desactivarDispo')?>"><button id="btnDel" type="button" class="btn btn-danger">Desactivar</button></a>
                    </div>
                    <div class="col-md-8">
                        <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="dispoactiv" class="modal fade " role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">Activar disponibilidad</h4>
            </div>
            <div class="modal-body">
                <h4 style="text-align: center;">¿Seguro/a que desea activar la opcion de ingregar disponibilidad en los profesores?</h4><h3 id="modal_name"></h3>
                <div class="modal-footer">
                    <div class="col-md-4">

                        <a href="<?=site_url('Asistente_Controller/activarDispo')?>"><button id="btnDel" type="button" class="btn btn-success">Activar</button></a>
                    </div>
                    <div class="col-md-8">
                        <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


                  </div>
                </div>
  <script>

 // <==== botón mostrar asignaturas ====>
 $(".editasig").click(function () {
            var id = $(this).attr('fakeid');
            var nombre = $(this).attr('fakenombre');
            console.log(id);
            $.ajax({
                type: "POST",
                url: "<?=site_url('Asistente_Controller/detalleAsignaturaProfe')?>",
                dataType: "json",
                data:{"idasig" : id},
                 beforeSend:function () {
                    $("#asignaprof").empty();
                    $('#carga_modal').modal('show');
                },
                success: function(data) {
                    $("#nombreprofe").html(nombre);
                  $.each(data.asignatura, function(key, value) {
                    var JSONVAL =  JSON.parse(value);
                    $("#asignaprof").append(JSONVAL.asig_nombre+'<br>');
                    console.log(JSONVAL.asig_nombre);
                 });

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

    // <==== Fin botón mostrar asignaturas ====>


    // <==== botón mostrar detalle ====>
 $(".editdetalle").click(function () {
            var id = $(this).attr('fakeid');
            var nombre = $(this).attr('fakenombre');
            console.log(id);
            $.ajax({
                type: "POST",
                url: "<?=site_url('Asistente_Controller/detalleProfeNota')?>",
                dataType: "json",
                data:{"idusu" : id},
                 beforeSend:function () {
                    $("#fechatu").empty();
                    $("#asigtu").empty();
                    $("#notatu").empty();
                    $("#comentu").empty();
                    $('#carga_modal').modal('show');
                },
                success: function(data) {
                    $("#nombretutor").html(nombre);
                  $.each(data.notasDet, function(key, value) {
                    var JSONVAL =  JSON.parse(value);
                    $("#fechatu").append(JSONVAL.hor_fechasis+' '+'<br> ');
                    $("#asigtu").append(JSONVAL.asig_nombre+' '+'<br> ');
                    $("#notatu").append(JSONVAL.cal_nota+' '+'<br> ');
                    $("#comentu").append(JSONVAL.cal_comentario+' '+' <br> ');
                    console.log(JSONVAL.hor_fechasis);
                 });
                    $('#carga_modal').modal('hide');
                    $('#detalle_modal').modal('show').fadeIn(800);
                    
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

    // <==== Fin botón mostrar Detalle ====>

     // <==== botón editar tutor ====>

$(".edittutor").click(function () {
            var id = $(this).attr('fakeid');
            var nombre = $(this).attr('fakenombre');
            var myarr = new Array();
            var select1 = document.getElementById("editasignaturas");

            $.ajax({
                type: "POST",
                url: "<?=site_url('Asistente_Controller/detalleTutor')?>",
                dataType: "json",
                data:{"idusu" : id},
                 beforeSend:function () {
                   $("#editname").val("");
                    $("#editemail").val("");
                    $("#editrut").val("");
                    $("#editdv").val("");
                    $("#editasignaturas").val("");
                    $("#oldphoto").val("");
                    $("#editid").val("");
                    $('#carga_modal').modal('show');
                },
                success: function(data) {
                  console.log(data);
                    $("#editname").val(nombre);
                    $("#editemail").val(data.email);
                    $("#editrut").val(data.rut);
                    $("#editdv").val(data.dv);
                    data.asignaturas.forEach(function(entry) {
                        myarr.push(entry);
                    });

                     $.each($("#editasignaturas"), function(){
                          $(this).select2('val', myarr);
                    });
                    $("#editasignaturas").val(myarr).trigger("change");
                    $("#oldphoto").val(data.foto);
                    $("#editid").val(id);
                  
                    $('#carga_modal').modal('hide');
                    $('#editutor_modal').modal('show').fadeIn(800);
                    
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
     // <==== botón editar tutor ====>



        // <==== Eliminar Botón ===>
        var iddelete = 0;
        $(".deleteUsr").click(function () {
            iddelete = $(this).attr('fakeid');
            console.log(iddelete);
        });

        $('#btnDel').click(function () {
            if (iddelete != 0) {
                $('#delete_modal').modal('hide');
                console.log(iddelete);
                $.ajax({
                    type: "POST",
                    url: "<?=site_url('Asistente_Controller/eliminarTutor')?>",
                    dataType: "json",
                    data: {"idusu": iddelete},
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



       // <==== botón mostrar calendario ====>
 $(".editcalendario").click(function () {
            var id = $(this).attr('fakeid');
            console.log(id);
           open('<?=site_url('Asesor_Controller/createdispo/')?>'+id,'','top=300,left=300,width=550,height=600');
        });

    // <==== Fin botón mostrar calendario ====>

                     function abrir(idProd) { 

                

                }


 $(function () {
        setTimeout(function() {
            $(".messages").fadeOut(3000);
        },3000);

    });


    $(function () {    
            $(".js-example-tokenizer").select2({
                multiple: true,
                tokenSeparators: [',',';'],
                cache:false
            });

        });

</script>