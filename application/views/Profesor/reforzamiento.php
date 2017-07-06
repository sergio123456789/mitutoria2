<link rel="stylesheet" href="<?=base_url('resources/bootstrap/css/style.css')?>">
<div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-8">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Solicitar Reforzamiento</h4>
									<p class="category"></p>
	                            </div>
	                            
	                       
	                            <form action="<?=site_url('Profesor_Controller/SolicitudReforzamiento')?>" method="post">
	                            	 <div class="card-content">
	                                    <div class="row">
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Día</label>					  								    
    								        	<input type="text"  class="form-control" id="dia" name="dia" >
    								        	</div> </div>
    								        	                                       
	                                        <div class="col-md-3 ">
												<div class="form-group label-floating">
													<label class="control-label">Hora Inicio</label>
										<input type="time" name="inicio" name="inicio" class="form-control" >
												</div>
	                                        </div>
	                                          <div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">Hora Término</label>
										<input type="time" name="termino" id="termino" class="form-control">
												</div>
	                                        </div>
	                                         <div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">Sala</label>
										<input type="text" name="sala" id="sala" class="form-control">
												</div>
	                                    </div>
	                                     <div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">Fecha</label>
										<input type="date" name="fecha" id="fecha" class="form-control">
												</div>
	                                        </div>
	                                        <div class="col-md-6">
                                    <div class="form-group label-floating">
													<label class="control-label">Asignatura</label><br>
									<select style="width:30%;" name="elegirAsig" class=" form-control select2">
														<?php foreach ($asignatura as $asi ): ?>
								<option value="<?=$asi->get("asig_id")?>"><?=$asi->get("asig_nombre")?></option>	
														<?php endforeach ?>
													</select>
												</div>
	                                </div>
                                   
	                              
	                                   <button type="submit" class="btn btn-primary pull-right">Enviar Solicitud</button>
	                                    <div class="clearfix"></div>	                              
	                            </div>	                         	                       
	                        </form>
	                    </div>
					</div>
				</div>
    							
    	<script >
    	$(function () {    
            $(".js-example-tokenizer").select2({
                multiple: true,
                tokenSeparators: [',',';'],
                cache:false
            });

      $("#elegirAsig").select2({
     theme: "classic"
       });

        });
     </script>
	  