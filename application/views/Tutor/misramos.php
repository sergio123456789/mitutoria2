<link rel="stylesheet" href="<?=base_url('resources/bootstrap/css/style.css')?>">
<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
                        
	                        <div class="card" style="margin-top:5%;">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Mis Ramos</h4>
	                                <p class="category">Acá puedes ver todos tus ramos </p>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table" id="example1" style="text-align: center;">
	                                    <thead class="text-primary" >
	                                    	<th style="text-align: center;">Cod Asignatura</th>
	                                    	<th style="text-align: center;">Tutoría</th>
	                                    	<th style="text-align: center;">Area</th>
	                                    	
	                                    	
	                                    </thead>
	                                    <tbody>
	                                    <?php if (!empty($profesor)): ?>
	                                       <?php foreach ($profesor as $value) { ?>
	                                        <tr>
	                                        	<td><?=$value->get('asig_cod')  ?></td>
	                                        	<td><?=$value->get('asig_nombre')  ?></td>
    							                <td><?=$value->get('ar_nombre')?></td>
												

	                                        </tr>
	                                        <?php } ?>
										<?php endif ?>

	                                    </tbody>
	                                </table>

	                            </div>
	                        </div>
	                    </div>
    </div></div>