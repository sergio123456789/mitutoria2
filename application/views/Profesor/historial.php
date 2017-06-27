<link rel="stylesheet" href="<?=base_url('resources/bootstrap/css/style.css')?>">
<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
                        
	                        <div class="card" style="margin-top:5%;">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Tutorias realizadas</h4>
	                                
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table" style="text-align: center;">
	                                    <thead class="text-primary" >
	                                    	<th style="text-align: center;">Fecha</th>
	                                    	<th style="text-align: center;">Inicio</th>
	                                    	<th style="text-align: center;">Término</th>
	                                    	<th style="text-align: center;">Sala</th>
	                                    	<th style="text-align: center;">Asignatura</th>
	                                    	
											
	                                    </thead>
	                                    <tbody>
	                                     
	                                    <?php foreach ($horario as $hor){ ?><tr>
	                                        <?php if ($hor->get('hor_usu_id')==$user['id']){ ?>
                                            <?php if ($hor->get('hor_estado')==3){ ?>
                                            	
                                           
	                                        <td><?=$hor->get('hor_dia')?></td>
    								        <td><?=$hor->get('hor_inicio')?></td>
    								        <td><?=$hor->get('hor_termino')?></td>
    								        <td><?=$hor->get('hor_sala')?></td>
    								        <?php foreach ($asignatura as $asi){ ?>
    								        <?php if ($asi->get("asig_id")==$hor->get('hor_asig_id')){ ?>
    								        <td><?=$asi->get('asig_nombre')?></td>		
    								        	<?php } ?>	
    								        <?php } ?>
    								        
												 
    								        <?php } ?>
												
</tr>
 <?php } ?><?php } ?>

	                                     
  
	                                    </tbody>
	                                </table>

   												<!-- Modal de cancelar la tutoría-->

	                    

								  <!-- fin Modal de cancelar la clase-->
	                            </div>
	                        </div>
	                    </div>
    </div></div>