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
    							                <td><a type='button' fakeid="<?=$ayu->get('usu_id')?>" fakenombre="<?=$ayu->get('usu_nombre')?>" class='btn btn-default edittutor'><i class="fa fa-pencil"></i></a></td>
    							                <td><button class="btn btn-danger" data-toggle="modal" data-target="#new_modal"><i class="fa fa-remove"></i></button></center></td>
	                                        </tr>
	                                   <?php } ?>
	                                    </tbody>
	                                </table>
	                                <?php } ?>

	                            </div>
	                        </div>
	                    </div>
    </div></div>