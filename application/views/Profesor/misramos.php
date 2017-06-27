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
	                                <table class="table" style="text-align: center;">
	                                    <thead class="text-primary" >
	                                    	<th style="text-align: center;">Asignatura</th>
	                                    	
	                                    	
	                                    	
	                                    		
	                                    	
	                                    </thead>
	                                    <tbody>
	                                    <?php foreach ($profesor as $pro){ ?>
	                                    <?php if ($pro->get('prof_usu_id')==$user['id']){ ?>
	                                    	
	                                    
	                                        <tr>
	                                        <?php foreach ($asignatura as $asi){?>
	                                         <?php if ($asi->get("asig_id")==$pro->get('prof_asig_id')){ ?>
    								        <td><?=$asi->get('asig_nombre')?></td>	
    								        <?php } ?>
	                                        <?php }?>

												

	                                        </tr>
<?php }?><?php }?>
	                                    </tbody>
	                                </table>

	                            </div>
	                        </div>
	                    </div>
    </div></div>