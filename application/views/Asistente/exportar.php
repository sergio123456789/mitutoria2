<link rel="stylesheet" href="<?=base_url('resources/bootstrap/css/style.css')?>">
                    
                    <div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
<div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Exportación de datos</h4>
	                                <p class="category"><i class="fa fa-file-excel-o"></i> Puedes exportar tus datos de:</p>
	                            </div>
	                            <div class="card-content table-responsive">
	                              <div id="links" class="section scrollspy">
           						 <div class="collection">
           						   <a href="<?=site_url('Excel_Controller/downloadAlum')?>" class="collection-item"><i class="fa fa-user"> </i> Alumnos</a>
           						   <a href="<?=site_url('Excel_Controller/downloadTutores')?>" class="collection-item "><i class="fa fa-user-secret"> </i> Tutores</a>
           						   <a href="<?=site_url('Excel_Controller/downloadTutorias')?>"  class="collection-item"><i class="fa fa-check-circle"> </i> Tutorías Realizadas</a>
           						   <a href="<?=site_url('Excel_Controller/downloadRefor')?>"  class="collection-item"><i class="fa fa-book"> </i> Reforzamiento</a>
           						 </div>
	                            </div>
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

						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								
								</div>
							</div>
							</div>
							</div>
							</div>

        <!-- /.modal -->