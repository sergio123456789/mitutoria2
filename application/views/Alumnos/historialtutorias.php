<link rel="stylesheet" href="<?=base_url('resources/bootstrap/css/style.css')?>">
                    <div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
                        
	                        <div class="card" style="margin-top:5%;">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Historial de Tutorías</h4>
	                                <p class="category">Acá puedes ver tu historial completo de tutorías</p>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table" style="text-align: center;">
	                                    <thead class="text-primary" >
	                                    	<th style="text-align: center;">Tutoría</th>
	                                    	<th style="text-align: center;">Profesor</th>
	                                    	<th style="text-align: center;">Fecha</th>
	                                    	<th style="text-align: center;">Inicio</th>
	                                    	<th style="text-align: center;">Término</th>
	                                    </thead>
	                                  <tbody>
	                                    <?php if (!empty($tutoria)): ?>
	                                       <?php foreach ($tutoria as $key => $value) { ?>
	                                        <tr>
	                                        	<td><?=$value->get('asig_nombre')?></td>
												<td ><a href="<?=site_url('/Alumno_Controller/claficarProfe/'.$value->get('usu_id')."/". $value->get('lis_id'))?>"><img class="img" src="<?=$value->get('usu_foto') ?>" style="width: 42px; height: 42px;border-radius: 50%;"/></a> <?=$value->get('usu_nombre')?> </td>
	                                        	<td><?=$value->get('lis_fecha')?></td>
	                                        	<td><?=$value->get('hor_inicio')?></td>
	                                        	<td><?=$value->get('hor_termino')?></td>
	         
	                                        </tr>
											<?php } ?>
										<?php endif ?>
	                                    </tbody>
	                                </table>
	                                

	                            </div>
	                        </div>
	                    </div>
						</div>
