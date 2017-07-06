<link rel="stylesheet" href="<?=base_url('resources/bootstrap/css/style.css')?>">
<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
                        
	                        <div class="card" style="margin-top:5%;">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Reforzamientos</h4>
	                                <p class="category">Acá puedes ver todos los reforzamientos </p>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table" id="example1" style="text-align: center;">
	                                    <thead class="text-primary">
	                                    	<th style="text-align: center;">Profesor</th>
	                                    	<th style="text-align: center;">Asignatura</th>
	                                    	<th style="text-align: center;">Fecha</th>
	                                    	<th style="text-align: center;">Tipo</th>
	                                    	<th style="text-align: center;">Estado</th>
	                                    </thead>
	                                    <tbody>
	                                    <?php if (is_null($reforzamientos)){?>
	                                   <h3 style="text-align: center;">No hay registros de reforzamientos</h3>
	                                   <?php }else{ ?>

	                                    <?php foreach ($reforzamientos as $refor) { ?>	
	                                        <tr>

	                                        	<td><?=$refor->get('usu_nombre')?></td>
	                                        	<td><?=$refor->get('asig_nombre')?></td>
    							                <td><?=$refor->get('hor_fechasis')?></td>
    							                <td>Reforzamiento</td>
    							                <?php if($refor->get('hor_estado') == 0){?>
    							                <td><span class="label label-warning">Pendiente</span></td>
    							                <?php } ?>
    							                <?php if($refor->get('hor_estado') == 1){?>
    							                 <td><span class="label label-info">Solicitada</span></td>
    							                <?php } ?>
    							                <?php if($refor->get('hor_estado') == 2){?>
    							                 <td><span class="label label-danger">Cancelada</span></td>
    							                <?php } ?>
    							                <?php if($refor->get('hor_estado') == 3){?>
    							                <td><span class="label label-success">Realizada</span></td>
    							                <?php } ?>
	                                        </tr>
	                                   <?php } ?>
	                                    </tbody>
	                                </table>
	                                   <?php } ?>
	                            </div>
	                        </div>



	                    </div>
    </div></div>