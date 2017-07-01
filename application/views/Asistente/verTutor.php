<link rel="stylesheet" href="<?=base_url('resources/bootstrap/css/style.css')?>">
              
        <div class="container-fluid">
          <div class="row">
               <div class="col-md-12">
                          <div class="card">
                              <div class="card-header" data-background-color="purple">
                                  <h4 class="title">Profesores</h4>
                                  <p class="category">Acá puedes buscar, editar y añadir Profesores</p>
                              </div>
                              <br>
                              <button class="btn btn-success" style="margin-left:1%;" data-toggle="modal" data-target="#new_modal"><i class="fa fa-plus"></i> Añadir Profesor </button>

                              <div class="card-content table-responsive" style="float: center;">
                                      <div class="row">
                                          <div class="col-xs-12">
                                             <div class="card-content table-responsive">
                                  <table id="example1" class="table" style="text-align: center;">
                                      <thead class="text-primary" >
                                        <th style="text-align: center;">Profesor</th>
                                        <th style="text-align: center;">Correo</th>
                                        <th style="text-align: center;">Rut</th>
                                        <th style="text-align: center;">Ver Asignaturas</th>
                                        <th style="text-align: center;">Ver Horario</th>
                                        <th style="text-align: center;">Nota Acumulada</th>
                                        <th style="text-align: center;">Detalle N. Acumulada</th>
                                        <th style="text-align: center;">Editar</th>
                                      </thead>  
                                      <tbody>

                                      <?php foreach ($profesores as $profe) :?>
                                          <tr>
                                            <td rowspan="1"><a href="#pablo">
                                              <img class="img" src="../../resources/images/marc.jpg" style="width: 42px; height: 42px; border-radius: 50%;" />
                                               <?=$profe->get('usu_nombre')?></a></td>
                                                <td><?=$profe->get('usu_correo')?></td>
                                                <td><?=$profe->get('usu_rut')?>-<?=$profe->get('usu_dv')?></td>
                                                <center>
                                                <td><a type='button' fakeid="<?=$profe->get('usu_id')?>" fakenombre="<?=$profe->get('usu_nombre')?>" class='btn btn-default editasig'><i class="fa fa-book"></i></a></td>
                                                <td><a type='button' fakeid="<?=$profe->get('usu_id')?>" fakenombre="<?=$profe->get('usu_nombre')?>" class='btn btn-default editcalendario' ><i class="fa fa-calendar"></i></a></td>
                                                <td>70</td>
                                                <td><a type='button' fakeid="<?=$profe->get('usu_id')?>" fakenombre="<?=$profe->get('usu_nombre')?>" class='btn btn-default editdetalle'><i class="fa fa-eye"></i></a></td>
                                                <td><a type='button' fakeid="<?=$profe->get('usu_id')?>" fakenombre="<?=$profe->get('usu_nombre')?>" class='btn btn-default edittutor'><i class="fa fa-pencil"></i></a></td>
                                                </center>
                                          </tr>
                                          <?php endforeach; ?>
                                      </tbody>
                                  </table>
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
                                           <th style="text-align: center;"><i class="fa fa-book margin-r-5"></i>Código-Asignatura</th>
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
                            <input type="text" id="rut" name="rut"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        <div class="col-lg-2">
                            <label >Digito V.<span class="required">*</span>
                            </label>
                            <input type="text" id="dv" name="dv"  required="required" class="form-control col-md-7 col-xs-12">
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
                <h4 class="modal-title">Nuevo Tutor</h4>
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
                            <input type="text" id="editrut" name="editrut"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        <div class="col-lg-2">
                            <label >Digito V.<span class="required">*</span>
                            </label>
                            <input type="text" id="editdv" name="editdv"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>

                       
                        <div class="col-lg-6">
                            <label >Foto Perfil
                            </label>
                            <input type="file" accept="image/*" id="photo" name="photo" class="form-control col-md-7 col-xs-12">
                            <input type="text" hidden="hidden" id="oldphoto" name="oldphoto">
                            <input type="text" hidden="hidden" id="editid" name="oldphoto">
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
                    $("#asignaprof").append(JSONVAL.asig_cod+' - '+JSONVAL.asig_nombre+'<br>');
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

                    $("#editname").val(nombre);
                    $("#editemail").val(data.email);
                    $("#editrut").val(data.rut);
                    $("#editdv").val(data.dv);

                    /*for(var i in data.asignaturas.items) {
                      myarr.push(data.asignaturas.items[i]);  // (o el campo que necesites)
                      console.log(myarr);
                   }*/
                  //  $("#editasignaturas").multipleSelect("uncheckAll");
                    data.asignaturas.forEach(function(entry) {
                        myarr.push(entry);
                        //$("#editasignaturas").select2('val',entry);
                    });

                     $.each($("#editasignaturas"), function(){
                          $(this).select2('val', myarr);
                    });

                    console.log(myarr);
                    $("#editasignaturas").val(myarr);

                    
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