<link rel="stylesheet" href="<?=base_url('resources/bootstrap/css/style.css')?>">
<div class="container-fluid">
	
	                <div class="row">
	                 <!-- MENSAJES DE OPERACIONES -->
                              <div class="messages">
                 <?php $notice = $this->session->flashdata('notice');
                       $alert = $this->session->flashdata('alert'); 
                       $info = $this->session->flashdata('info'); 
                  ?>
                    <?php if($notice){?>
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Éxito!</h4>
                  <?=$notice?>
                </div>
                     <?php } ?>
                      <?php if($alert){ ?>
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4><i class="icon fa fa-ban"></i> Error!</h4>
                            <?=$alert?>
                        </div> 
                     <?php } ?>
                      <?php if($info){ ?>
                        <div class="alert alert-info alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4><i class="icon fa fa-info"></i> Información!</h4>
                            <?=$info?>
                        </div>
                     <?php } ?>

                </div>
            <!-- FIN MENSAJES DE OPERACIONES -->
	                    <div class="col-md-8">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Mi perfil</h4>
									<p class="category">Recuerda sólo puedes cambiar tu clave</p>
	                            </div>
	                            <div class="card-content">
	                                <form>
	                                    <div class="row">
	                                        <div class="col-md-5">
												<div class="form-group label-floating">
													<label class="control-label">Área </label>
				<input type="text" value="<?=$tutores->get('ar_nombre')?>" class="form-control" disabled>
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Inacap Mail</label>
				<input type="email" value="<?=$tutores->get('usu_correo') ?>" class="form-control" disabled>
												</div>
	                                        </div>
	                                          <div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">Clave </label>
				<input type="text" value="<?=$tutores->get('usu_pass')?>" class="form-control" disabled>
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Nombre Completo</label>
				<input type="text" style="width:130% " value="<?=$tutores->get('usu_nombre') ?>" class="form-control" disabled>
												</div>
	                                        </div>	                                     
	                                    </div>	                                                               
	                                    <div class="clearfix"></div>
	                                </form>
	                            </div>
	                              <div class="card-content">
	                                <form action="<?=site_url('Tutor_Controller/cambiarContra')?>" method="post">
	                                    <div class="row">
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Nueva Contraseña</label>
													<input type="text" name="pass" class="form-control" >
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Confirmar Contraseña</label>
													<input type="text" name="cpass" class="form-control" >
												</div>
	                                        </div>
	                                    </div>

	                                    <button type="submit" class="btn btn-primary pull-right">Cambiar contraseña</button>
	                                    <div class="clearfix"></div>
	                                </form>
	                            </div>
	                        </div>
	                    </div>
						<div class="col-md-4" style="margin-top:5%;">
    						<div class="card card-profile">
    							<div class="card-avatar">
    							<?php if($tutores->get('usu_foto') == null || $tutores->get('usu_foto') == ''){?>
                                <a href="#">
								<img class="img" src="../../resources/images/marc.jpg">
								</a>  	
								<?php }else{?>
								<a href="#" >
								<img class="img" src="<?=site_url().RUTA_FOTO_TUTOR.$tutores->get('usu_foto')?>">
								</a>  
								<?php } ?>
    								
    							</div>

    							<div class="content">
    								
    								<h4 class="card-title"><?=$tutores->get('usu_nombre') ?></h4>
    								<p class="card-content">
    									 <div class="card-content table-responsive">
	                                <table class="table table-hover">
	                                    <thead>
	                                        <th>TUTORIAS</th>
	                                    	
	                                    </thead>
	                                    <tbody>
	                                        <tr>
	                                        	<td></td>
	                                        </tr>
	                                        
	                                    </tbody>
	                                </table>
	                            </div>
    							
    							</div>
    						</div>
		    			</div>
	                </div>
	            </div>
