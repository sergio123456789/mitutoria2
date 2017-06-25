<link rel="stylesheet" href="<?=base_url('resources/bootstrap/css/style.css')?>">
                    
                    <div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
<div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Importación de datos</h4>
	                                <p class="category">Acá puedes importar tus datos </p>
	                            </div>
	                            <div class="card-content table-responsive">
	                              <div id="links" class="section scrollspy">
           						 <div class="collection">
           						   <a href="#myModal" data-toggle="modal" class="collection-item">Alumnos</a>
           						   <a href="#myModal" data-toggle="modal" class="collection-item ">Profesores</a>
           						   <a href="#myModal" data-toggle="modal" class="collection-item">Tutorías</a>
           						   <a href="#myModal" data-toggle="modal" class="collection-item">Reforzamiento</a>
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
        <input type="file"  name="file" style="margin-left: 25%"> 
        <button type="submit" class="btn btn-primary" style="margin-top: 5%;">Importar</button>
    </form>
										  
										</div>
								        <div class="modal-footer">
								          <button type="button" class="btn btn-default " data-dismiss="modal">Cancelar</button>
								        </div>
												

								      </div><!-- /.modal-content -->
								    </div><!-- /.modal-dialog -->
								  </div><!-- /.modal -->
						</div></div>
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
						



							</div></div></div>