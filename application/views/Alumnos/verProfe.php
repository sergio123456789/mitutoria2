<link rel="stylesheet" href="<?=base_url('resources/bootstrap/css/style.css')?>">
<div class="container-fluid">
<?php if($usuario->get('usu_foto') == null || $usuario->get('usu_foto') == ''){?>
<a href="#_" class="lightbox" id="pablo">
<img src="../../resources/images/marc.jpg">
</a>  	
<?php }else{?>
<a href="#_" class="lightbox" id="pablo">
<img src="../../resources/images/Profesor/<?=$usuario->get('usu_foto')?>">
</a>  
<?php } ?>
	                <div class="row">
	                    <div class="col-md-8">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Perfil del profesor</h4>
	                            </div>
	                            <div class="card-content">
	                              	<form>
	                                    <div class="row">
	                                        
	                                        <div class="col-md-7">
												<div class="form-group label-floating">
													<label class="control-label">Inacap Mail</label>
													<input type="email" value="<?=$usuario->get('usu_correo')?>" class="form-control" disabled>
												</div>
	                                        </div>
	                                          <div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">Rut </label>
													<input type="text" value="<?=$usuario->get('usu_rut')?>-<?=$usuario->get('usu_dv')?>" class="form-control" disabled>
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Nombre Completo</label>
													<input type="text" value="<?=$usuario->get('usu_nombre')?>" class="form-control" disabled>
												</div>
	                                        </div>
	                                    </div>
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
									<img src="<?=base_url().RUTA_FOTO_PROFE.$usuario->get('usu_foto')?>">
									</a>  
									<?php } ?>	
    							</div>

    							<div class="content">
    								
    								<h4 class="card-title"><?=$usuario->get('usu_nombre')?></h4>
    								<p class="card-content">
    									 <div class="card-content table-responsive">
	                                <table class="table table-hover">
	                                    <thead>
	                                        <th>Asignaturas</th>
	                                        <th>Calificación de los alumnos</th>	
	                                    </thead>
	                                    <tbody>
	                                    <?php foreach ($asig as $key => $value): ?>
	                                        <tr>
	                                        	<td><?= $value->get('asig_cod') ?> <br><?= $value->get('asig_nombre') ?> </td>
	                                        	<?php foreach ($notas as $clave => $not) { ?>
	                                        		<?php if ($clave == $value->get('asig_id')): ?>
	                                        			<td><?=round($not)?></td>
	                                        		<?php endif ?>
	                                        	<?php } ?>
	                                        </tr>
	                                    <?php endforeach ?>
	                                        
	                                    </tbody>
	                                </table>
	                            </div>
    							
    							</div>
    						</div>
		    			</div>

	                </div>
	                 <?php if (!empty($tutoria)): ?>
	                <div class="row">
	                	<div class="col-md-12">
	                		<div class="card" style="margin-top:5%;">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Historial de Tutorías</h4>
	                                <p class="category">Acá puedes ver tu historial de tutorías</p>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table" style="text-align: center;">
	                                    <thead class="text-primary" >
	                                    	<th style="text-align: center;">Tutoría</th>
	                                    	<th style="text-align: center;">Profesor</th>
	                                    	<th style="text-align: center;">Fecha</th>
	                                    	<th style="text-align: center;">Estado</th>
	                                    	<th style="text-align: center;">Puntuar</th>
											
	                                    </thead>
	                                  <tbody>
	                                   
	                                      
	                                        <tr>
	                                        	<td><?=$tutoria->get('asig_nombre')?></td>
												<td ><a href="#pablo"><img class="img" src="../../resources/images/marc.jpg" style="width: 42px; height: 42px;border-radius: 50%;"/></a> <?=$tutoria->get('usu_nombre')?> </td>
	                                        	<td><?=$tutoria->get('lis_fecha')?></td>


	                                        	<td><?php if ($tutoria->get('hor_estado')==3): ?>
													Realisada
												<?php else: ?>
													Pendinte
												<?php endif ?></td>


	                                        	<td><button
	                                        	<?php if ($calificacion ): ?>
	                                        		 disabled
	                                        	<?php endif ?>
	                                        	 type="button" rel="tooltip"  id="<?=$tutoria->get('lis_id')?>" title="Puntua"  href="#puntuarModal" data-toggle="modal" class="btn btn-danger btn-simple btn-xs lis_id">
                    							<i class="glyphicon glyphicon-star"></i>
                    							</button>
                    							</td>
	         
	                                        </tr>
										
	                                    </tbody>
	                                </table>
	                                

	                            </div>
	                        </div>
	                	</div>
	                </div>
										<?php endif ?>

	            </div>

	            	<!-- Modal de puntuar la tutoría-->
	                    		<div class="modal fade" id="puntuarModal">
								<div class="modal-dialog">
								      <div class="modal-content">
								        <div class="modal-header">
								          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								          <h3 class="modal-title" style="text-align:center;" >!Evalúame¡</h3>
								        </div>
								        <div class="modal-body">
								         <form method="post" action="<?=site_url('Alumno_Controller/Puntuar')?>">
											 <p class="clasificacion text-center">
											    <input id="radio1" type="radio" name="estrellas" value="5"><!--
											    --><label for="radio1">★</label><!--
											    --><input id="radio2" type="radio" name="estrellas" value="4"><!--
											    --><label for="radio2">★</label><!--
											    --><input id="radio3" type="radio" name="estrellas" value="3"><!--
											    --><label for="radio3">★</label><!--
											    --><input id="radio4" type="radio" name="estrellas" value="2"><!--
											    --><label for="radio4">★</label><!--
											    --><input id="radio5" type="radio" name="estrellas" value="1"><!--
											    --><label for="radio5">★</label>
											  </p>
										  <input type="text" hidden="visible" name="id" id="lis_id">
										  <h5 class="text-center"><b>Ingresa la Opinión</b></h5>
										  <div class="form-group is-empty"><textarea name="opinion" class="form-control" rows="5"></textarea><span class="material-input"></span></div>
										</div>
								        <div class="modal-footer" id="cansel">
								        <button type="submit" class="btn btn-primary">Enviar</button>
								        <button type="button" class="btn btn-default " data-dismiss="modal">Cancelar</button>
								         </form>  
								        </div>
								      </div><!-- /.modal-content -->
								    </div><!-- /.modal-dialog -->
								  </div><!-- /.modal -->
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
#form {
  width: 250px;
  margin: 0 auto;
  height: 50px;
}

#form p {
  text-align: center;
}

#form label {
  font-size: 20px;
}

input[type="radio"] {
  display: none;
}

label {
  color: grey;
}

.clasificacion {
  direction: rtl;
  unicode-bidi: bidi-override;
}

label:hover,
label:hover ~ label {
  color: orange;
}

input[type="radio"]:checked ~ label {
  color: orange;
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

	$(".lis_id").click(function(){
					var id = $(this).attr('id');
					$("#lis_id").val(id);
				});
</script>