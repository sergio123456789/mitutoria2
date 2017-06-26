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
	                                <form action="<?=site_url('Alumno_Controller/cambiarContra')?>" method="post">
	                                    <div class="row">
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Nueva Contraseña</label>
													<input type="text" name="pass" value="" class="form-control" >
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
    								<a href="#pablo">
    									<img class="img" src="../../resources/images/marc.jpg" />
    								</a>
    							</div>

    							<div class="content">
    								<h6 class="category text-gray">Semestre 4</h6>
    								<h4 class="card-title">Gabriel Vega</h4>
    								<p class="card-content">
									 <div class="card-content table-responsive">
    								<div class="panel panel-default">
							          <div class="panel-heading">
							            <h4 class="panel-title">
							              <a data-toggle="collapse" data-parent="#accordion"  data-target="#notas">Indicadores de alumno</a>
							            </h4>
							          </div>
							          <div id="notas" data-parent="#accordion" class="panel-collapse collapse" 		>
							          	
	                                <table class="table table-hover">
	                                    <thead>
	                                        <th>Asignatura</th>
	                                    	<th>Nota Acumulado</th>
	                                    	<th>Situación</th>
	                                    </thead>
	                                    <tbody>
	                                    <?php foreach ($asignaturas as $value): ?>
	                                        <tr>
	                                        	<td><?=$value->get('asig_cod') ?> <br> <?=$value->get('asig_nombre') ?></td>
	                                        	<td>6.6</td>
	                                        	<td><?=$value->get('asig_estado') ?></td>
	                                        </tr>
	                                         <?php endforeach ?>
	                                       
	                                    </tbody>
	                                </table>
							          </div>
	                            </div>
    							</div>

    								<?php if ($this->session->userdata('permisos') == 6): ?>
    								<a href="<?=site_url('Alumno_Controller/ayudante') ?>" class="btn btn-primary btn-round">Ayudantía</a>
    								<?php endif ?>

    							</div>

    							</div>





    						</div>
		    			</div>
	                </div>
	            </div>


<script type="text/javascript">
	
 $(function () {
        setTimeout(function() {
            $(".messages").fadeOut(3000);
        },3000);

    });

</script>