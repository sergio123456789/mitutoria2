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
	                                    <center>
                                <button class="btn btn-danger" data-toggle="modal" data-target="#new_modal"><i class="fa fa-remove"></i> Deshabilitar Todos los Ayudantes</button>
                              </center>
                              <br>
	                                <table class="table" id="example1" style="text-align: center;">
	                                    <thead class="text-primary">
	                                    	<th style="text-align: center;">Foto</th>
	                                    	<th style="text-align: center;">Nombre</th>
	                                    	<th style="text-align: center;">Rut</th>
	                                    	<th style="text-align: center;">Correo</th>
	                                    	<th style="text-align: center;">Área</th>
	                                    	<th style="text-align: center;">Materia</th>
	                                    	<th style="text-align: center;">Editar</th>
	                                    	<th style="text-align: center;">Deshabilitar</th>
	                                    </thead>
	                                    <tbody>
	                                    <?php foreach ($ayudantes as $ayu) { ?>	
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
    							                <td><a type='button' fakeid="<?=$ayu->get('usu_id')?>" fakenombre="<?=$ayu->get('usu_nombre')?>" class='btn btn-default editayu'><i class="fa fa-pencil"></i></a></td>
    							                <td style="width: 4px;"><a type='button' fakeid="<?=$ayu->get('usu_id')?>" class='btn btn-danger deleteUsr pull-right deleteUsr' data-toggle='modal' data-target='#delete_modal'> <i class="fa fa-user-times" ></i></a></td>
	                                        </tr>
	                                   <?php } ?>
	                                    </tbody>
	                                </table>
	                                <?php } ?>

	                            </div>
	                        </div>
	                    </div>

<!--==== Modal Añadir Profe ====-->
<!-- modal agregar -->
<div id="new_modal" class="modal fade " role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" >Nuevo Profesor</h4>
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
    <!--==== fin modal añadir profe =====-->







    </div>
    </div>