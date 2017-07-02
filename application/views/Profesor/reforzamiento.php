<link rel="stylesheet" href="<?=base_url('resources/bootstrap/css/style.css')?>">
<div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-8">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Solicitar Reforzamiento</h4>
									<p class="category"></p>
	                            </div>
	                            <div class="card-content">
	                       
	                            	 <form action="<?=site_url('Profesor_Controller/')?>" method="POST">
	                                    <div class="row">
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Día</label>
													
    								    
    								        	<input type="text" class="form-control" id="dia" name="dia" ></div> </div>
    								        
												
	                                       
	                                        <div class="col-md-3 ">
												<div class="form-group label-floating">
													<label class="control-label">Hora Inicaio</label>
													<input type="time" name="ini" name="ini" class="form-control" >
												</div>
	                                        </div>
	                                          <div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">Hora Termino</label>
													<input type="time" name="ter" id="ter" class="form-control" >
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="clearfix"></div>
	                              
	                            </div>

	                              <div class="card-content">
	                               <div class="form-group label-floating">
													<label class="control-label">Asignatura</label>
													<select>
														<?php foreach ($asignatura as $asi ): ?>
														<option value="<?=$asi->get("asig_id")?>"><?=$asi->get("asig_nombre")?></option>	
														<?php endforeach ?>
													</select>
												</div>
	                                   <button type="submit" class="btn btn-primary pull-right">Enviar Solicitud</button>
	                                    <div class="clearfix"></div>
	                                
	                              
	                            </div>
	                        </div></form>
	                    </div>
					</div>
    							
    						
	  