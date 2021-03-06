<link rel="stylesheet" href="<?=base_url('resources/bootstrap/css/style.css')?>">
<!-- MENSAJES DE OPERACIONES -->
                              <div class="messages">
                 <?php $notice = $this->session->flashdata('notice');
                       $alert = $this->session->flashdata('alert'); 
                       $info = $this->session->flashdata('info'); 
                  ?>
                    <?php if($notice){?>
                        <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Éxito!</h4>
                  <?=$notice?>
              </div>
                     <?php } ?>
                      <?php if($alert){ ?>
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4><i class="icon fa fa-ban"></i> Error!</h4>
                            <?=$alert?>
                                     </div> 
                     <?php } ?>
                      <?php if($info){ ?>
                        <div class="alert alert-info alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4><i class="icon fa fa-info"></i> Información!</h4>
                            <?=$info?>
                </div>
                     <?php } ?>

                </div>
            <!-- FIN MENSAJES DE OPERACIONES -->
                    
                    <div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
                        
	                        <div class="card" style="margin-top:5%;">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Últimas Tutorías</h4>
	                                <p class="category">Acá se muestran tus últimas tutoría pedida</p>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table" id="example1" style="text-align: center;">
	                                    <thead class="text-primary" >
	                                    	<th style="text-align: center;">Tutoría</th>
	                                    	<th style="text-align: center;">Profesor</th>
	                                    	<th style="text-align: center;">Fecha</th>
	                                    	<th style="text-align: center;">Inicio</th>
	                                    	<th style="text-align: center;">Término</th>
	                                        	
											
											<th style="text-align: center;">Cancelar</th>
	                                    </thead>
	                                    <tbody>
	                                    <?php if (!empty($tutoria)): ?>
	                                       <?php foreach ($tutoria as $key => $value) { ?>
	                                        <tr>
	                                        	<td><?=$value->get('asig_nombre')?></td>
	                                        	<?php if ($value->get('usu_foto') == null || $value->get('usu_foto') == '') { ?>
	                                        	 <td><a href="#pablo">
                                              <img class="img" src="../../resources/images/marc.jpg" style="width: 42px; height: 42px; border-radius: 50%;" /></a></td>
	                                        	<?php }else{?>
<td><a target="_blank" href="<?=site_url('/Alumno_Controller/mostrarProfe/'.$value->get('usu_id'))?>"><img class="img" src="../../resources/images/Profesor/<?=$value->get('usu_foto')?>" style="width: 42px; height: 42px;border-radius: 50%;" /> </a> <?=$value->get('usu_nombre')?> </td>
	                                        	<?php } ?>

	                                        	<td><?=$value->get('lis_fecha')?></td>
	                                        	<td><?=$value->get('hor_inicio')?></td>
	                                        	<td><?=$value->get('hor_termino')?></td>
	                                        	<td>
												<button type="button" rel="tooltip" title="Cancelar" id="<?=$value->get('lis_id')?>" href="#deleteModal" data-toggle="modal" class="btn btn-danger btn-simple btn-xs cancelar">
                    							<i class="fa fa-times"></i>
                    							</button>
												</td>
	                                        </tr>
											<?php } ?>
										<?php endif ?>
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
           						   <?php foreach ($asignaturas as $key => $value) { ?>
           						   <a id="<?=$value->get('asig_id') ?>" class="Mostrar collection-item"><?=$value->get('asig_nombre') ?></a>
           						   <?php } ?>
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
								         <form method="post" action="<?=site_url('Alumno_Controller/cancelar')?>">
								         <input type="text" hidden="visible" name="id" id="eliminar_empresa">
										  <h5 class="text-center"><b>Ingresa el motivo</b></h5>
										  <div class="form-group is-empty"><textarea name="motivo" class="form-control" rows="5"></textarea><span class="material-input"></span></div>
										</div>
								        <div class="modal-footer" id="cansel">
								        <button type="submit" class="btn btn-primary">Enviar</button>
								        <button type="button" class="btn btn-default " data-dismiss="modal">Cancelar</button>
								         </form>  
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
								          <div id="nommodal">

								          </div>
								        </div>
								        <div class="modal-body">
										  <div class="navbar-form navbar-right">
													<i class="material-icons btn btn-white btn-round btn-just-icon"></i>
													<div class="form-group is-empty"><input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Buscar"><span class="material-input"></span></div>
													<span class="material-input"></span>
													
													<div class="ripple-container"></div>
													
												</div>
								          <table class="table table-striped">
								            <thead id="tblHead">
								              <tr>
								                <th>Profesor</th>
								                <th>Sala</th>
								                <th>Día</th>
								                <th>Inicio</th>
								                <th>Término</th>
								    
								              </tr>
								            </thead>
								            <tbody id="tblGrid">

								              
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
					</div>
				</div>
				
			<script type="text/javascript">
				$(".Mostrar").click(function(){
					 var id = $(this).attr('id');
                $.ajax({
                    type: 'POST',
                    url: "<?=site_url('/Alumno_Controller/Cargarprofesjson')?>",
                    dataType: 'json',
                    data: {"id" : id},
                    beforeSend: function () {;
                    	 $('#nombre').remove();
                         $("#tblGrid").text("");
                    },
                    success: function(data) {
                        $('#myModal').modal('show').fadeIn(800);
                        if(data.estado) {
                        	var nombre;
                            $.each( data.equipo, function( key, value ) {
                                 var JSONVAL =  JSON.parse(value);
                                
                                 nombre = JSONVAL.asig_nombre;
                                 $("#tblGrid").append('<tr><td><a target="_blank" href="<?=site_url('/Alumno_Controller/mostrarProfe/')?>'+JSONVAL.usu_id+'<img class="img" src="'+JSONVAL.usu_foto+'" style="width: 42px; height: 42px;border-radius: 50%;" /> </a> '+JSONVAL.usu_nombre+'</td><td>'+JSONVAL.hor_sala+'</td><td>'+JSONVAL.hor_dia+'</td>      <td>'+JSONVAL.hor_inicio+'</td> <td>'+JSONVAL.hor_termino+'</td>	<td><a href="<?=site_url('Alumno_Controller/solicitar/')?>'+JSONVAL.hor_id+'"><button type="button"  class="btn btn-warning btn-sm pull-right" >Solicitar</button></a> </td> </tr>');
                             
                             });
                             if (typeof(nombre) == "undefined") {
                             	$("#nommodal").append('<h3 id="nombre" class="modal-title text-center">TUTORIAS NO DISPONIBLES</h3>');
                        	}
                        	else{
                             $("#nommodal").append('<h3 id="nombre" class="modal-title text-center"> Horarios de '+nombre+'</h3>');
                             }
                        }else{
                            alert("Lo sentimos ocurrio un error");
                        }
                    },
                    complete: function(xhr, status) {
                    }
                });
				});

				$(".cancelar").click(function(){
					var id = $(this).attr('id');
					$("#eliminar_empresa").val(id);
				});

				  $(function () {
        setTimeout(function() {
            $(".messages").fadeOut(3000);
        },3000);

    });

			</script>
