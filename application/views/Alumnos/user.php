<link rel="stylesheet" href="<?=base_url('resources/bootstrap/css/style.css')?>"><div class="container-fluid">
	                <div class="row">
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
												<div class="form-group label-floating">
													<label class="control-label">Clave </label>
													<input type="text" value="<?=$usuario->get('usu_pass') ?> " class="form-control" disabled>
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Nombre</label>
													<input type="text" value="<?=$usuario->get('usu_nombre') ?> " class="form-control" disabled>
												</div>
	                                        </div>
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Apellido</label>
													<input type="text" value="<?=$usuario->get('usu_nombre') ?> " class="form-control" disabled>
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
	                                <form>
	                                    <div class="row">
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Nueva Contraseña</label>
													<input type="text" value="<?=$usuario->get('usu_pass') ?> " class="form-control" >
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Confirmar Contraseña</label>
													<input type="text"  class="form-control" >
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
	                                <table class="table table-hover">
	                                    <thead>
	                                        <th>Asignatura</th>
	                                    	<th>Nota Acumulado</th>
	                                    	<th>Situación</th>
	                                    </thead>
	                                    <tbody>
	                                        <tr>
	                                        	<td>ZC0207-Contabilidad, Costos y Presupuestos(61)</td>
	                                        	<td>6.6</td>
	                                        	<td>SIN RIESGO</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>ZC0213-Inglés V(61)</td>
	                                        	<td>5.5</td>
	                                        	<td>SIN RIESGO</td>
	                                        </tr>
	                                    </tbody>
	                                </table>
	                            </div>
    								
    								<a href="#pablo" class="btn btn-primary btn-round">Ayudantía</a>
    							</div>
    						</div>
		    			</div>
	                </div>
	            </div>
