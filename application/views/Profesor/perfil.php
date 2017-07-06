<link rel="stylesheet" href="<?=base_url('resources/bootstrap/css/style.css')?>"><div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-8">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Mi perfil</h4>
									<p class="category">Recuerda sólo puedes cambiar tu clave</p>
	                            </div>
	                            <div class="card-content">
	                            <?php foreach ($usuario as $usu){ ?>
	                            	<?php if ($usu->get('usu_id')==$user['id']){ ?>
	                            		
	                            	<form>
	                                    <div class="row">
	                                        <div class="col-md-5">
												<div class="form-group label-floating">
													<label class="control-label">area</label>
													<?php foreach ($area as $are){ ?>
    								        <?php if ($are->get("ar_id")==$usu->get('usu_are_id')){ ?>
    								        	<input type="text" value="<?=$are->get('ar_nombre')?>" class="form-control" disabled></div> </div>
    								        	<?php } ?>	
    								        <?php } ?>
													
												
	                                       
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Inacap Mail</label>
													<input type="email" value="<?=$usu->get('usu_correo')?>" class="form-control" disabled>
												</div>
	                                        </div>
	                                          <div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">Rut </label>
													<input type="text" value="<?=$usu->get('usu_rut')?>-<?=$usu->get('usu_dv')?>" class="form-control" disabled>
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Nombre Completo</label>
													<input type="text" value="<?=$usu->get('usu_nombre')?>" class="form-control" disabled>
												</div>
	                                        </div>
	                                    </div>


	                                    <div class="row">
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Contraseña</label>
													<input type="text" value="<?=$usu->get('usu_pass')?>" class="form-control" disabled>
												</div>
	                                        </div>
	                                        
	                                        
	                                    </div>
	                                    <div class="clearfix"></div>
	                                </form>
	                            </div>

	                              <div class="card-content">
	                                <form action="<?=site_url('Profesor_Controller/cambiarcon')?>" method="POST">
	                                    <div class="row">
	                                    <input type="text" id="conid" name="conid" value="<?=$user['id']?>"  style="visibility:hidden">
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Nueva Contraseña</label>
													<input type="text" id="nuecon" name="nuecon" class="form-control" >
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Confirmar Contraseña</label>
													<input type="text" id="concon" name="concon" class="form-control" >
												</div>
	                                        </div>
	                                    </div>

	                                    <button type="submit" class="btn btn-primary pull-right">Cambiar contraseña</button>
	                                    <div class="clearfix"></div>
	                                </form>
	                                <?php } ?>
	                                <?php } ?>
	                           
	                            </div>
	                        </div>
	                    </div>
						<div class="col-md-4" style="margin-top:5%;">
    						<div class="card card-profile">
    							<div class="card-avatar">
    								<a href="#pablo">
    									<img class="img" src="?=$usu->get('usu_foto') ?>" />
    								</a>
    							</div>

    							<div class="content">
    								
    								<h4 class="card-title"><?=$usu->get('usu_nombre')?></h4>
    								<p class="card-content">
    									 <div class="card-content table-responsive">
	                                <table class="table table-hover">
	                                    <thead>
	                                        <th>Asignaturas</th>
	                                    	
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
		    			</div>
	                </div>
	            </div>
	            <script type="text/javascript">
	            	var password, password2;

password = document.getElementById('nuecon');
password2 = document.getElementById('concon');

password.onchange = password2.onkeyup = passwordMatch;

function passwordMatch() {
    if(password.value !== password2.value)
        password2.setCustomValidity('Las contraseñas no coinciden.');
    else
        password2.setCustomValidity('');
}
	            </script>
