<link rel="stylesheet" href="<?=base_url('resources/bootstrap/css/style.css')?>">
                    
                    <div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
                        
	                        <div class="card" style="margin-top:5%;">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Últimas Tutorías</h4>
	                                <p class="category">Acá confirmas tu asistencia a la tutoría pedida</p>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table" style="text-align: center;">
	                                    <thead class="text-primary" >
	                                    	<th style="text-align: center;">Tutoría</th>
	                                    	<th style="text-align: center;">Profesor</th>
	                                    	<th style="text-align: center;">Fecha</th>
	                                    	<th style="text-align: center;">Inicio</th>
	                                    	<th style="text-align: center;">Término</th>
											<th style="text-align: center;">Confirmar</th>
											<th style="text-align: center;">Cancelar</th>
	                                    </thead>
	                                    <tbody>
	                                        <tr>
	                                        	<td>Matemática</td>
	                                        	<td rowspan="2"><a href="#pablo">
    									<img class="img" src="../../resources/images/marc.jpg" style="width: 42px; height: 42px; border-radius: 50%;" />
    								</a>  Américo Pérez  </td>
    								<td>01/06/17</td>
    								<td>10:15</td>
    								<td>12:30</td>
												<td>
												<button type="button" rel="tooltip" title="Confirmar" href="#" data-toggle="modal" class="btn btn-success btn-simple btn-xs">
                    							<i class="fa fa-check"></i>
                    							</button>
												</td>
												
												<td>
												<button type="button" rel="tooltip" title="Cancelar" id="openBtn" href="#deleteModal" data-toggle="modal" class="btn btn-danger btn-simple btn-xs">
                    							<i class="fa fa-times"></i>
                    							</button>
												</td>

	                                        </tr>

	                                    </tbody>
	                                </table>

	                            </div>
	                        </div>
	                    </div>
    </div></div>
							<div class="row">
							<div class="col-md-12" >

					<div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Tutorías Comunes Disponibles</h4>
	                                <p class="category">Acá puedes solicitar tus tutorías </p>
	                            </div>
	                            <div class="card-content table-responsive">
	                              <div id="links" class="section scrollspy">
           						 <div class="collection">
           						   <a href="#myModal" data-toggle="modal" class="collection-item">Matemática</a>
           						   <a href="#myModal" data-toggle="modal" class="collection-item ">Inglés</a>
           						   <a href="#myModal" data-toggle="modal" class="collection-item">Networking I</a>
           						   <a href="#myModal" data-toggle="modal" class="collection-item">Taller de programación III</a>
           						 </div>
	                            </div>
	                        </div>
	                    </div>
	                   	    <!-- Fin Modal tutorías comunes -->

	                    	<!-- Modal de cancelar la tutoría-->

	                    		<div class="modal fade" id="deleteModal">
								<div class="modal-dialog">
								      <div class="modal-content">
								        <div class="modal-header">
								          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								          <h3 class="modal-title" style="text-align:center;" >¿Estas seguro que quieres cancelar tu tutoría?</h3>
								        </div>
								        <div class="modal-body">
										  <h5 class="text-center"><b>Ingresa el motivo</b></h5>
										  <div class="form-group is-empty"><textarea class="form-control" rows="5"></textarea><span class="material-input"></span></div>
										</div>
								        <div class="modal-footer">
								        <button type="button" class="btn btn-primary">Enviar</button>
								        <button type="button" class="btn btn-default " data-dismiss="modal">Cancelar</button>  
								        </div>
												

								      </div><!-- /.modal-content -->
								    </div><!-- /.modal-dialog -->
								  </div><!-- /.modal -->	

								  <!-- fin Modal de eliminar la tutoría-->
								  <!-- MODAL AYUDANTÍA COMÚN -->
						<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="modal fade" id="myModal">
								<div class="modal-dialog">
								      <div class="modal-content">
								        <div class="modal-header">
								          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								          <h3 class="modal-title text-center"> Horarios de Matemática</h3>
								        </div>
								        <div class="modal-body">
										  <div class="navbar-form navbar-right">
													<i class="material-icons btn btn-white btn-round btn-just-icon"></i>
													<div class="form-group is-empty"><input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Buscar"><span class="material-input"></span></div>
													<span class="material-input"></span>
													
													<div class="ripple-container"></div>
													
												</div>
								          <table class="table table-striped" id="tblGrid">
								            <thead id="tblHead">
								              <tr>
								                <th>Profesor</th>
								                <th>Sala</th>
								                <th>Fecha</th>
								                <th>Inicio</th>
								                <th>Término</th>
								              </tr>
								            </thead>
								            <tbody>

								              <tr>
								              <td>
								              <img src="../../resources/images/marc.jpg" style="border-radius: 50%;" alt="" width="42px" height="42"> Raúl Silva </td> 
								              <td>A213</td> 
								              <td>29/05/17</td> 
								              <td>10:15</td> <td>12:30</td>
								              <td><input type="button" class="btn btn-warning btn-sm pull-right" value="Solicitar"></td>
								              </tr>

								              <tr>
								              <td><img class="img" src="../../resources/images/marc.jpg" style="width: 42px; height: 42px; border-radius: 50%;"> Javier Miles</td>
								              <td>A315</td>
								              <td>29/05/17</td>
								              <td>15:15</td> <td>16:30</td> 
								              <td><input type="button" class="btn btn-warning btn-sm pull-right" value="Solicitar"></td>
								              </tr>

								               <tr><td><img class="img" src="../../resources/images/marc.jpg" style="width: 42px; height: 42px; border-radius: 50%;"> Américo Peréz</td>
								              <td>B303</td>
								              <td>03/06/17</td>
								              <td>10:15</td> <td>12:30</td> 
								              <td><input type="button" class="btn btn-warning btn-sm pull-right" value="Solicitar"></td>
								              </tr>
								            </tbody>
								          </table>
								          <div class="form-group">
								            
								          </div>
										</div>
								        <div class="modal-footer">
								          <button type="button" class="btn btn-default " data-dismiss="modal">Cancelar</button>
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

		</div></div>