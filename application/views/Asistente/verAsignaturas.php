<link rel="stylesheet" href="<?=base_url('resources/bootstrap/css/style.css')?>">
              
        <div class="container-fluid">
          <div class="row">
               <div class="col-md-12">
                          <div class="card">
                              <div class="card-header" data-background-color="purple">
                                  <h4 class="title">Asignaturas</h4>
                                  <p class="category">Acá puedes buscar, editar y añadir Asignaturas</p>
                              </div>
                              <br>
                              <button class="btn btn-success" style="margin-left:1%;" data-toggle="modal" data-target="#new_modal"><i class="fa fa-plus"></i> Añadir Asignatura </button>

                              <div class="card-content table-responsive" style="float: center;">
                                      <div class="row">
                                          <div class="col-xs-12">
                                             <div class="card-content table-responsive">
                                  <table id="example1" class="table" style="text-align: center;">
                                      <thead class="text-primary" >
                                        <th style="text-align: center;">Nombre</th>
                                        <th style="text-align: center;">Código</th>
                                        <th style="text-align: center;">Carrera</th>
                                        <th style="text-align: center;">Estado</th>
                                        <th style="text-align: center;">Editar</th>
                                        <th style="text-align: center;">Eliminar</th>
                                      </thead>  
                                      <tbody>

                                      <?php foreach ($asignaturas as $asig) :?>
                                          <tr>
                                            <td>
                                               <?=$asig->get('asig_nombre')?></a></td>
                                                <td><?=$asig->get('asig_cod')?></td>
                                                <td> 
                                                <?php foreach($carrera as $car){?>
                                                  
                                                  <?php if ($car->get('car_id')==$asig->get('asig_car_id')){ ?>
                                                  <?=$car->get('car_nombre')?>                                                  
                                                  <?php } ?>
                                                <?php } ?>
                                                </td>
                                                <td>
                                                <?php if ($asig->get('asig_estado')==0){ ?>
                                                   Deshabilitada
                                                <?php } else{?>
                                                   Habilitada
                                                <?php }?></td>

                                                <center>
                                                <td><a type='button' fakeid="<?=$asig->get('asig_id')?>" fakenombre="<?=$asig->get('asig_nombre')?>" class='btn btn-default editAsig'><i class="fa fa-pencil"></i></a></td>

                                                 <td style="width: 4px;"><a type='button' fakeid="<?=$asig->get('asig_id')?>" class='btn btn-danger deleteUsr pull-right deleteUsr' data-toggle='modal' data-target='#delete_modal'> <i class="fa fa-user-times" ></i></a></td>
                                                 
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
            


<!--==== Modal Añadir Asignatura ====-->
  <div id="new_modal" class="modal fade" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" >Agregar Asignatura</h4>
                </div>
                <div class="modal-body text-center">
                    <form class="form-horizontal form-label-left" action="<?=site_url('Asistente_Controller/agregarAsig')?>" method="POST">

                          <div class="form-group">
                            <label class="control-label col-md-3" for="last-name">Nombre<span class="required">*</span>
                            </label>
                            <div class="col-md-7">
                                <input type="text" id="nombre" name="nombre"  required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                          <div class="form-group">
                            <label class="control-label col-md-3" for="last-name">Código<span class="required">*</span>
                            </label>
                            <div class="col-md-7">
                                <input type="text" id="codigo" name="codigo"  required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="first-name">Carrera<span class="required">*</span>
                            </label>
                             <div class="col-md-7">
                             <select id="car" name="car" class="form-control">
                              <?php foreach ($carrera as $asig) { ?>
                             <option value="<?=$asig->get('car_id')?>"><?=$asig->get('car_nombre')?></option>
                              <?php  } ?>   
                            </select>
                            </div>
                        </div>
                </div>

                <div class="modal-footer">
                    <div class="col-md-2 pull-left">
                        <button type="button" id="btnRst" class="btn btn-primary" style="display : none">Reset Password</button>
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
    <!--==== fin modal añadir Asignatura =====-->


    <!--==== Modal Editar Asignatura ====-->
<!-- modal agregar -->
  <div id="edit_modal" class="modal fade" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" >Editar Asignatura</h4>
                </div>
                <div class="modal-body text-center">
                    <form class="form-horizontal form-label-left" action="<?=site_url('Asistente_Controller/editAsig')?>" method="POST">

                          <div class="form-group">
                            <label class="control-label col-md-3" for="last-name">Nombre<span class="required">*</span>
                            </label>
                            <div class="col-md-7">
                                <input type="text" id="editnombre" name="editnombre"  required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                          <div class="form-group">
                            <label class="control-label col-md-3" for="last-name">Código<span class="required">*</span>
                            </label>
                            <div class="col-md-7">
                                <input type="text" id="editcodigo" name="editcodigo"  required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="first-name">Carrera<span class="required">*</span>
                            </label>
                             <div class="col-md-7">
                             <select id="editcar" name="editcar" class="form-control">
                              <?php foreach ($carrera as $asig) { ?>
                             <option value="<?=$asig->get('car_id')?>"><?=$asig->get('car_nombre')?></option>
                              <?php  } ?>   
                            </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="first-name">Estado<span class="required">*</span>
                            </label>
                             <div class="col-md-7">
                             <select id="editest" name="editest" class="form-control">
                              
                             <option value="0">Deshabilitada</option>
                             <option value="1">Habilitada</option>

                            </select>
                            </div>
                        </div> 
                </div>

                <div class="modal-footer">
                    <div class="col-md-2 pull-left">
                        <button type="button" id="btnRst" class="btn btn-primary" style="display : none">Reset Password</button>
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
    <!--==== fin modal Editar asignatura =====-->



    <!-- modal eliminar Tutor-->
<div id="delete_modal" class="modal fade " role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">Deshabilitar Asignatura</h4>
            </div>
            <div class="modal-body">
                <h4 style="text-align: center;">¿Seguro/a que desea deshabilitar la asignatura?</h4><h3 id="modal_name"></h3>
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



                  </div>
                </div>
  <script>

// <==== botón editar Asignatura ====>
$(".editAsig").click(function () {
            var id = $(this).attr('fakeid');
            var nombre = $(this).attr('fakenombre');

            $.ajax({
                type: "POST",
                url: "<?=site_url('Asistente_Controller/detalleAsig')?>",
                dataType: "json",
                data:{"idusu" : id},
                 beforeSend:function () {
                   $("#editnombre").val("");
                    $("#editcodigo").val("");
                    $("#editcar").val("");
                    $('#carga_modal').modal('show');
                },
                success: function(data) {
                  console.log(data);
                    $("#editnombre").val(nombre);
                    $("#editcodigo").val(data.cod);    
                    $("#editcar").val(data.car).trigger("change");
                    $("#editest").val(data.est).trigger("change");
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
     // <==== botón editar asignatura ====>

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
                    url: "<?=site_url('Asistente_Controller/eliminarAsig')?>",
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