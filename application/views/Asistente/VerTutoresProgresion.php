<link rel="stylesheet" href="<?=base_url('resources/bootstrap/css/style.css')?>">
              
        <div class="container-fluid">
          <div class="row">

               <div class="col-md-12">
                          <div class="card">
                              <div class="card-header" data-background-color="purple">
                                  <h4 class="title">Buscar Tutores Progresión</h4>
                                  <p class="category">Acá puedes buscar los tutores progresión por su rut</p>
                              </div>
                              <br>
                              <center>
                                <button class="btn btn-success" data-toggle="modal" data-target="#new_modal"><i class="fa fa-plus"></i> Añadir Tutor Progresión </button>
                              </center>
                              
                              <div class="card-content table-responsive" style="float: center;">
                                      <div class="row">
                                          <div class="col-xs-12">
                                             <div class="card-content table-responsive">
                                  <table id="example1" class="table" style="text-align: center;">
                                      <thead class="text-primary" >
                                        <th style="text-align: center;">Foto</th>
                                        <th style="text-align: center;">Tutor</th>
                                        <th style="text-align: center;">Correo</th>
                                        <th style="text-align: center;">Rut</th>
                                        <th style="text-align: center;">Área</th>
                                        <th style="text-align: center;">Editar</th>
                                        <th style="text-align: center;">Eliminar</th>

                                      </thead>  
                                      <tbody>

                                      <?php foreach ($profesores as $profe) :?>
                                          <tr>
                                                 <?php if($profe->get('usu_foto') == null || $profe->get('usu_foto') == ''){?>
                                                 <td><a href="#pablo">
                                              <img class="img" src="../../resources/images/marc.jpg" style="width: 42px; height: 42px; border-radius: 50%;" /></a></td>
                                              <?php }else{?>
                                              <td><a href="#pablo">
                                              <img class="img" src="../../resources/images/TutorProgresion/<?=$profe->get('usu_foto')?>" style="width: 42px; height: 42px; border-radius: 50%;" /></a></td>
                                              <?php } ?>
                                                <td><?=$profe->get('usu_nombre')?></td>
                                                <td><?=$profe->get('usu_correo')?></td>
                                                <td><?=$profe->get('usu_rut')?>-<?=$profe->get('usu_dv')?></td>
                                                <?php foreach ($area as $ar){?>
                                                  <?php if ($profe->get('usu_are_id') == $ar->get('ar_id')){?>
                                                  <td><?=$ar->get('ar_nombre')?></td>
                                                <?php }} ?> 
                                                <center>
                                                <td><a type='button' fakeid="<?=$profe->get('usu_id')?>" fakenombre="<?=$profe->get('usu_nombre')?>" class='btn btn-default edittutor'><i class="fa fa-pencil"></i></a></td>
                                                 <td style="width: 4px;"><a type='button' fakeid="<?=$profe->get('usu_id')?>" class='btn btn-danger deleteUsr pull-right deleteUsr' data-toggle='modal' data-target='#delete_modal'> <i class="fa fa-user-times" ></i></a></td>
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


<!--==== Modal Añadir tutor progresión ====-->
<!-- modal agregar -->
<div id="new_modal" class="modal fade " role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" >Nuevo Tutor Progresión</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal form-label-left" enctype="multipart/form-data" action="<?=site_url('Asistente_Controller/agregarTutorProgresion')?>" method="POST">
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
                            <input type="text" id="dv" name="dv" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        <div class="col-lg-6">
                            <label >Foto Perfil
                            </label>
                            <input type="file" accept="image/*" id="photo" name="photo" class="form-control col-md-7 col-xs-12">
                        </div>
                       <div class="col-lg-6">
                            <label>Área</label>
                            <select name="area" id="area"  class="js-example-tokenizer form-control select2"  style="width: 100%">
                                        <?php foreach ($area as $ar){?>
                                        <option value="<?=$ar->get('ar_id')?>"><?=$ar->get('ar_nombre')?></option>
                                                <?php } ?> 

                            </select>
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
    <!--==== fin modal añadir tutor progresión =====-->                      


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


    <!--==== modal editar tutor progresión ====-->
<!-- modal agregar -->
<div id="edit_modal" class="modal fade " role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" >Editar Tutor Progresión</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal form-label-left" enctype="multipart/form-data" action="<?=site_url('Asistente_Controller/editarTutorProgresion')?>" method="POST">
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
                            <input type="text" id="editdv" name="editdv" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        <div class="col-lg-6">
                            <label >Foto Perfil
                            </label>
                            <input type="file" accept="image/*" id="photo" name="photo" class="form-control col-md-7 col-xs-12">
                            <input type="text" hidden="hidden" id="oldphoto" name="oldphoto">
                            <input type="text" hidden="hidden" name="editid" id="editid">
                        </div>
                       <div class="col-lg-6">
                            <label>Área</label>
                            <select name="editarea" id="editarea"  class="js-example-tokenizer form-control select2"  style="width: 100%">
                                        <?php foreach ($area as $ar){?>
                                        <option value="<?=$ar->get('ar_id')?>"><?=$ar->get('ar_nombre')?></option>
                                                <?php } ?> 
                            </select>
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
    <!--==== fin modal editar tutor progresión =====-->                      
                      
                      
 
                  </div>
                </div>



  <script>
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
                    url: "<?=site_url('Asistente_Controller/eliminarTutorProgresion')?>",
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

$(".edittutor").click(function () {
            var id = $(this).attr('fakeid');
            var nombre = $(this).attr('fakenombre');
            var myarr = new Array();
            var select1 = document.getElementById("editasignaturas");

            $.ajax({
                type: "POST",
                url: "<?=site_url('Asistente_Controller/detalleTutorProgresion')?>",
                dataType: "json",
                data:{"idusu" : id},
                 beforeSend:function () {
                   $("#editname").val("");
                    $("#editemail").val("");
                    $("#editrut").val("");
                    $("#editdv").val("");
                    $("#editarea").val("");
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
                    $("#editarea").val(data.area).trigger("change");
                    $("#oldphoto").val(data.foto);
                    $("#editid").val(id);
                  
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
     // <==== botón editar tutor ====>

 $(function () {
        setTimeout(function() {
            $(".messages").fadeOut(3000);
        },3000);

    });

   $(function () {    
      $("#area").select2({
     theme: "classic"
});
$("#editarea").select2(); 

        });

</script>