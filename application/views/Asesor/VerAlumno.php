    <div class="wrapper">
    <div class="main-panel">
	<div class="content">
				<div class="container-fluid">
					<div class="row">

							 <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Buscar Alumno</h4>
	                                <p class="category">Acá puedes buscar alumnos por su rut</p>
	                            </div>
	                            <div class="card-content table-responsive" style="float: center;">
	                                    <div class="row">
	                                        <div class="col-md-9">
	                                        <form action="<?=site_url('Asesor_Controller/verDetallesAlumno')?>">
												<div class="form-group label-floating col-md-2">
													<label class="control-label">Rut</label>
													<input id="rut" type="text" name="rut" class="form-control" maxlength="8">
												</div>
												<div class="form-group label-floating col-md-1">
													<h4 style="text-align: center;">-</h4>
												</div>
												<div class="form-group label-floating col-md-2">
													<label class="control-label">DV</label>
													<input id="dv" type="text" name="dv" class="form-control" maxlength="1">
												</div>
												<div class="form-group label-floating col-md-4">
													<button type="button" rel="tooltip" title="Buscar" class="btn btn-info  btn-round btn-just-icon ver" data-toggle="modal" class="collection-item" href="#myModal"><i class="fa fa-search"></i></button>
												</div>
												</form>
												</div>
	                                    </div>
	                            </div>
	                        </div>
	                    </div>
	                    
								  <!--===== MODAL AYUDANTÍA COMÚN ==========-->
						<div class="col-lg-3 col-md-12 col-sm-12">
								<div class="modal fade" id="myModal">
								<div class="modal-dialog">
								      <div class="modal-content">
								        <div class="modal-header">
								          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								          <br>
								          <h3 class="modal-title text-center"></h3>
								        </div>
								        <div class="modal-body">
				<div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-6">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Asignaturas</h4>
	                            </div>
	                            <div class="card-content">
	                              
	                              <table class="table table-hover">
	                                    <thead>
	                                        <th></th>
	                                    </thead>
	                                    <tbody>
	                                        <tr>
	                                        	<td>ZC0207-Contabilidad, Costos y Presupuestos(61)</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>ZC0213-Inglés V(61)</td>
	                                        </tr>
	                                    </tbody>
	                                </table>

	                            </div>
	                        </div>
	                    </div>
						<div class="col-md-6">
    						<div class="card card-profile">
    							<div class="content">
    								<h6 class="category text-gray">Alumno</h6>
    								<h4 id="nombre" class="card-title"></h4>
    								<p class="card-content">
    									 <div class="card-content table-responsive">
	                                <table class="table table-hover">
	                                    <thead>
	                                        <th style="text-align: center;">Inacap Mail</th>
	                                    </thead>
	                                    <tbody>
	                                        <tr>
	                                        	<td></td>
	                                        </tr>
	                                    </tbody>
	                                </table>
	                                <table class="table table-hover">
	                                    <thead>
	                                        <th style="text-align: center;">Teléfono</th>
	                                    </thead>
	                                    <tbody>
	                                        <tr>
	                                        	<td id="fono"></td>
	                                        </tr>
	                                    </tbody>
	                                </table>
	                                 <a href="#pablo" class="btn btn-primary btn-round">Horario Disponibilidad</a>
	                            </div>
    								</p>
    							</div>
    						</div>
		    			</div>
	                </div>
	            </div>
	        </div>
												

								      </div><!-- /.modal-content -->
								    </div><!-- /.modal-dialog -->
								  </div><!-- /.modal -->
						</div>
						<!-- FIN MODAL AYUDANTÍA COMÚN-->

						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								
							</div>
						</div>

						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								
								</div>
							</div>
						</div>
					</div>

					


					
				</div>
			</div>
		</div>
		</div>