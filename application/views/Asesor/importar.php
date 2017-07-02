<link rel="stylesheet" href="<?=base_url('resources/bootstrap/css/style.css')?>">
                    
                    <div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
<div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Importación de datos</h4>
	                                <p class="category"><i class="fa fa-file-excel-o"></i> Puedes importar los datos de:</p>
	                            </div>
	                            <div class="card-content table-responsive">
	                              <div id="links" class="section scrollspy">
           						 <div class="collection">
           						   <a href="#myModal" data-toggle="modal" class="collection-item"><i class="fa fa-user"> </i>  Alumnos </a>
           						   <a href="#myModal2" data-toggle="modal" class="collection-item"><i class="fa fa-user"> </i> Alumnos Ayudantes</a>
           						   <a href="#myModal4" data-toggle="modal" class="collection-item "><i class="fa fa-user-secret"> </i> Tutores</a>
           						   <a href="#myModal5" data-toggle="modal" class="collection-item "><i class="fa fa-user-secret"> </i> Tutores Progresión</a>
           						 </div>
	                            </div>
	                        </div>
	                    </div>
	                   	   
	                    	
						 <!-- MODAL IMPORTACIÓN COMÚN -->
						<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="modal fade" id="myModal">
								<div class="modal-dialog">
								      <div class="modal-content">
								        <div class="modal-header">
								          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								      
								        </div>
								        <div class="modal-body" style="text-align: center;">
										  <form action="<?=site_url('Excel_Controller/UsuarioUploader')?>" method="post" enctype="multipart/form-data">
										        <input type="file" accept=".csv" name="file" required="required" style="margin-left: 25%"> 
										        <button type="submit" class="btn btn-success"  style="margin-top: 5%;"><i class="fa fa-upload"> </i> Importar</button>
										    </form>
										  
										</div>
								        <div class="modal-footer">
								          <button type="button" class="btn btn-danger " data-dismiss="modal"><i class="fa fa-remove"> </i> Cancelar</button>
								        </div>
								      </div><!-- /.modal-content -->
								    </div><!-- /.modal-dialog -->
								  </div><!-- /.modal -->
						</div>
						</div>
						<!-- FIN MODAL IMPORTACIÓN COMÚN -->


						 <!-- MODAL IMPORTACIÓN COMÚN -->
						<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="modal fade" id="myModal2">
								<div class="modal-dialog">
								      <div class="modal-content">
								        <div class="modal-header">
								          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								      
								        </div>
								        <div class="modal-body" style="text-align: center;">
										  <form action="<?=site_url('Excel_Controller/UsuarioUploader')?>" method="post" enctype="multipart/form-data">
										        <input type="file" accept=".csv" name="file" required="required" style="margin-left: 25%"> 
										        <button type="submit" class="btn btn-success"  style="margin-top: 5%;"><i class="fa fa-upload"> </i> Importar</button>
										    </form>
										  
										</div>
								        <div class="modal-footer">
								          <button type="button" class="btn btn-danger " data-dismiss="modal"><i class="fa fa-remove"> </i> Cancelar</button>
								        </div>
								      </div><!-- /.modal-content -->
								    </div><!-- /.modal-dialog -->
								  </div><!-- /.modal -->
						</div>
						</div>
						<!-- FIN MODAL IMPORTACIÓN COMÚN -->

 					<!-- MODAL IMPORTACIÓN COMÚN -->
						<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="modal fade" id="myModal3">
								<div class="modal-dialog">
								      <div class="modal-content">
								        <div class="modal-header">
								          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								      
								        </div>
								        <div class="modal-body" style="text-align: center;">
										  <form action="<?=site_url('Excel_Controller/UsuarioUploader')?>" method="post" enctype="multipart/form-data">
										        <input type="file" accept=".csv" name="file" required="required" style="margin-left: 25%"> 
										        <button type="submit" class="btn btn-success"  style="margin-top: 5%;"><i class="fa fa-upload"> </i> Importar</button>
										    </form>
										  
										</div>
								        <div class="modal-footer">
								          <button type="button" class="btn btn-danger " data-dismiss="modal"><i class="fa fa-remove"> </i> Cancelar</button>
								        </div>
								      </div><!-- /.modal-content -->
								    </div><!-- /.modal-dialog -->
								  </div><!-- /.modal -->
						</div>
						</div>
						<!-- FIN MODAL IMPORTACIÓN COMÚN -->

 <!-- MODAL IMPORTACIÓN COMÚN -->
						<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="modal fade" id="myModal4">
								<div class="modal-dialog">
								      <div class="modal-content">
								        <div class="modal-header">
								          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								      
								        </div>
								        <div class="modal-body" style="text-align: center;">
										  <form action="<?=site_url('Excel_Controller/UsuarioTutoria')?>" method="post" enctype="multipart/form-data">
										        <input type="file" accept=".csv" name="file" required="required" style="margin-left: 25%"> 
										        <button type="submit" class="btn btn-success"  style="margin-top: 5%;"><i class="fa fa-upload"> </i> Importar</button>
										    </form>
										  
										</div>
								        <div class="modal-footer">
								          <button type="button" class="btn btn-danger " data-dismiss="modal"><i class="fa fa-remove"> </i> Cancelar</button>
								        </div>
								      </div><!-- /.modal-content -->
								    </div><!-- /.modal-dialog -->
								  </div><!-- /.modal -->
						</div>
						</div>
						<!-- FIN MODAL IMPORTACIÓN COMÚN -->

 					<!-- MODAL IMPORTACIÓN COMÚN -->
						<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="modal fade" id="myModal5">
								<div class="modal-dialog">
								      <div class="modal-content">
								        <div class="modal-header">
								          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								      
								        </div>
								        <div class="modal-body" style="text-align: center;">
										  <form action="<?=site_url('Excel_Controller/UsuarioTutoriaPermanente')?>" method="post" enctype="multipart/form-data">
										        <input type="file" accept=".csv" name="file" required="required" style="margin-left: 25%"> 
										        <button type="submit" class="btn btn-success"  style="margin-top: 5%;"><i class="fa fa-upload"> </i> Importar</button>
										    </form>
										  
										</div>
								        <div class="modal-footer">
								          <button type="button" class="btn btn-danger " data-dismiss="modal"><i class="fa fa-remove"> </i> Cancelar</button>
								        </div>
								      </div><!-- /.modal-content -->
								    </div><!-- /.modal-dialog -->
								  </div><!-- /.modal -->
						</div>
						</div>
						<!-- FIN MODAL IMPORTACIÓN COMÚN -->



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