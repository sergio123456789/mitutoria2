<link rel="stylesheet" href="<?=base_url('resources/bootstrap/css/style.css')?>"><div class="container-fluid">
<a href="#_" class="lightbox" id="pablo">
<img src="<?=$usuario->get('usu_foto')?> ">
</a> 
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
    								<a href="#pablo">
    									<img class="img" src="<?=$usuario->get('usu_foto') ?>" />
    								</a>
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
	            </div>
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

</script>