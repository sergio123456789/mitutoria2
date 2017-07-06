<link rel="stylesheet" href="<?=base_url('resources/bootstrap/css/style.css')?>">
<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
                        
	                        <div class="card" style="margin-top:5%;">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Tutorías</h4>
	                                <p class="category">Acá puedes ver todas las Tutorías </p>
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
	                                   <?php if (is_null($tutorias)){?>
	                                   <h3 style="text-align: center;">No hay registros de tutorías</h3>
	                                   <?php }else{ ?>

	                                    <?php foreach ($tutorias as $tur) { ?>	
	                                        <tr>

	                                        	<td><?=$tur->get('usu_nombre')?></td>
	                                        	<td><?=$tur->get('asig_nombre')?></td>
    							                <td><?=$tur->get('hor_fechasis')?></td>
    							                <td>Tutoría</td>
    							                <?php if($tur->get('hor_estado') == 0){?>
    							                <td><span class="label label-warning">Pendiente</span></td>
    							                <?php } ?>
    							                <?php if($tur->get('hor_estado') == 1){?>
    							                 <td><span class="label label-info">Solicitada</span></td>
    							                <?php } ?>
    							                <?php if($tur->get('hor_estado') == 2){?>
    							                 <td><span class="label label-danger">Cancelada</span></td>
    							                <?php } ?>
    							                <?php if($tur->get('hor_estado') == 3){?>
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