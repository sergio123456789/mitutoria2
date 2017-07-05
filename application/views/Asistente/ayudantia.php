<link rel="stylesheet" href="<?=base_url('resources/bootstrap/css/style.css')?>">
<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
                        
	                        <div class="card" style="margin-top:5%;">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Ayudantías</h4>
	                                <p class="category">Acá puedes ver todos los Alumnos ayudantes </p>
	                            </div>
	                             <br>
	                            <div class="card-content table-responsive">
	                             <?php if ($ayudantes == null || empty($ayudantes)){?>
	                                    	<h3 style="text-align: center;">No hay alumnos ayudantes</h3>
	                                    <?php }else{?>
	                                    <button class="btn btn-success pull-right" data-toggle="modal" data-target="#new_modal"><i class="fa fa-plus"></i> Agregar Ayudante</button>
                              <br>
                              <br>
	                                <table class="table" id="example1" style="text-align: center;">
	                                    <thead class="text-primary">
	                                    	<th style="text-align: center;">Foto</th>
	                                    	<th style="text-align: center;">Nombre</th>
	                                    	<th style="text-align: center;">Rut</th>
	                                    	<th style="text-align: center;">Correo</th>
	                                    	<th style="text-align: center;">Área</th>
	                                    	<th style="text-align: center;">Materia</th>
	                                    	<th style="text-align: center;">Deshabilitar</th>
	                                    </thead>
	                                    <tbody>
	                                    <?php foreach ($ayudantes as $ayu) { ?>	
                                        <?php if ($ayu->get('ayu_estado') == 1){ ?>
	                                        <tr>
	                                        	<?php if($ayu->get('usu_foto') == null || empty($ayu->get('usu_foto'))){?>
	                                        		  <td>
                                              <img class="img" src="../../resources/images/marc.jpg" style="width: 42px; height: 42px; border-radius: 50%;" /></td>
	                                        	<?php }else{?>
	                                        	  <td>
                                              <img class="img" src="../../resources/images/<?=$ayu->get('usu_foto')?>" style="width: 42px; height: 42px; border-radius: 50%;" /></td>
	                                        	<?php } ?>
	                                        	<td><?=$ayu->get('usu_nombre')?></td>
	                                        	<td><?=$ayu->get('usu_rut').'-'.$ayu->get('usu_dv')?></td>
    							                <td><?=$ayu->get('usu_correo')?></td>
    							                <td><?=$ayu->get('ar_nombre')?></td>
    							                <td><?=$ayu->get('asig_nombre')?></td>
    							                <td style="width: 4px;"><a type='button' fakeid="<?=$ayu->get('usu_id')?>" class='btn btn-danger  deleteUsr' data-toggle='modal' data-target='#delete_modal'> <i class="fa fa-user-times" ></i></a></td>
	                                        </tr>
	                                   <?php }} ?>
	                                    </tbody>
	                                </table>                                  
                                    <?php } ?>
	                            </div>
	                        </div>
	                    </div>

<!--==== Modal Añadir Ayudante ====-->
<!-- modal agregar -->
<div id="new_modal" class="modal fade " role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" >Nuevo Ayudante</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal form-label-left" enctype="multipart/form-data" action="<?=site_url('Asistente_Controller/agregarAyudante')?>" method="POST">
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
                            <label>Asignatura</label>
                            <select name="asignatura" id="asignatura"  class="js-example-tokenizer form-control select2"  style="width: 100%">
                                        <?php foreach ($asignaturas as $asig){?>
                                        <option value="<?=$asig->get('asig_id')?>"><?=$asig->get('asig_nombre')?></option>
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
    <!--==== fin modal Añadir Ayudante =====-->

<!-- modal eliminar Ayudante-->
<div id="delete_modal" class="modal fade " role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">Eliminar al Ayudante</h4>
            </div>
            <div class="modal-body">
                <h4 style="text-align: center;">¿Seguro/a que desea eliminar al Ayudante?</h4><h3 id="modal_name"></h3>
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
<!-- /modal eliminar Ayudante -->

    </div>
    </div>


    <script type="text/javascript">
            $(function () {    
      $("#asignatura").select2({
     theme: "classic"
});
$("#editasignatura").select2(); 

        });

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
                    url: "<?=site_url('Asistente_Controller/eliminarAyudante')?>",
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

    </script>