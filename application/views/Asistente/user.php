<link rel="stylesheet" href="<?=base_url('resources/bootstrap/css/style.css')?>">
<div class="container-fluid">
<?php if($usuario->get('usu_foto') == null || $usuario->get('usu_foto') == ''){?>
<a href="#_" class="lightbox" id="pablo">
<img src="../../resources/images/marc.jpg">
</a>  	
<?php }else{?>
<a href="#_" class="lightbox" id="pablo">
<img src="<?=$usuario->get('usu_foto')?>">
</a>  
<?php } ?>	
    <?php $user=$this->session->userdata('logged_in'); ?>
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
													<label class="control-label">Carrera</label>
													<input type="text" value="<?=$alumno->get('alu_programa_estudio') ?> " class="form-control" disabled>
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Inacap Mail</label>
													<input type="email" value="<?=$usuario->get('usu_correo') ?> "  class="form-control" disabled>
												</div>
	                                        </div>
	                                          <div class="col-md-3">
												
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Nombre completo</label>
													<input type="text" value="<?=$usuario->get('usu_nombre') ?> " class="form-control" disabled>
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">rut</label>
													<input type="text" value="<?=$usuario->get('usu_rut') ?>-<?=$usuario->get('usu_dv') ?>  " class="form-control" disabled>
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Dirección</label>
													<input type="text" value="<?=$alumno->get('alu_direccion') ?> " class="form-control" disabled>
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Ciudad</label>
													<input type="text" value="<?=$alumno->get('alu_ciudad') ?> " class="form-control" disabled>
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Comuna</label>
													<input type="text" value="<?=$alumno->get('alu_comuna') ?> " class="form-control" disabled>
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Número</label>
													<input type="text" value="<?=$alumno->get('alu_celular') ?> " class="form-control" disabled>
												</div>
	                                        </div>
	                                    </div>
	                                    <div class="clearfix"></div>
	                                </form>
	                            </div>

	                              <div class="card-content">
	                                <form action="<?=site_url('Asistente_Controller/cambiarContra')?>" method="post">
	                                    <div class="row">
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Nueva Contraseña</label>
													<input type="password" name="pass" value="" class="form-control" >
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Confirmar Contraseña</label>
													<input type="password" name="cpass" class="form-control" >
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
    								<?php if($usuario->get('usu_foto') == null || $usuario->get('usu_foto') == ''){?>
									<a href="#">
									<img src="../../resources/images/marc.jpg">
									</a>  	
									<?php }else{?>
									<a href="#">
									<img src="../../resources/images/<?=$usuario->get('usu_foto')?>">
									</a>  
									<?php } ?>	
    							</div>

    							<div class="content">
    								<h6 class="category text-gray">Semestre <?=$alumno->get('alu_semestre') ?></h6>
    								<h4 class="card-title"><?=$usuario->get('usu_nombre') ?></h4>
    								<p class="card-content">
    							</div>
    							</div>
							</div>
		    			</div>
	                </div>
	            </div>
<style type="text/css">
.thumbnail {
  max-width: 40%;
}
  .lightbox {
  / Default lightbox to hidden */
  display: none;

  / Position and style */
  position: fixed;
  z-index: 999;
  width: 100%;
  height: 100%;
  text-align: center;
  top: 0;
  left: 0;
  background: rgba(0,0,0,0.8);
}

.lightbox img {
  / Pad the lightbox image */
  max-width: 45%;
  max-height: 45%;
  margin-top: 8%;

}

.lightbox:target {
  / Remove default browser outline */
  outline: none;

  / Unhide lightbox /
  display: block;
}
</style>
<script type="text/javascript">
	
 $(function () {
        setTimeout(function() {
            $(".messages").fadeOut(3000);
        },3000);

    });

</script>