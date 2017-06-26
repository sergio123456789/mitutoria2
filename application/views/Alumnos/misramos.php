<link rel="stylesheet" href="<?=base_url('resources/bootstrap/css/style.css')?>">
				<div class="container-fluid">
					<div class="row">
	                    	<!--tutorías comunes -->
	                     <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Tutorías disponibles según mi malla</h4>
	                                <p class="category">Acá puedes solicitar tus tutorías </p>
	                            </div>
	                            <div class="card-content table-responsive">
	                              <div id="links" class="section scrollspy">
           						 <div class="collection">
           						  <?php foreach ($asignaturas as $key => $value) { ?>
           						   <a href="#myModal" id="<?=$value->get('asig_id') ?>" data-toggle="modal" class="Mostrar collection-item"><?=$value->get('asig_nombre') ?></a>
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
                            $.each( data.equipo, function( key, value ) {
                                 var JSONVAL =  JSON.parse(value);
                                $("#nommodal").append('<h3 id="nombre" class="modal-title text-center"> Horarios de '+JSONVAL.asig_nombre+'</h3>');
                                 $("#tblGrid").append('<tr><td><img src='+JSONVAL.usu_foto+' style="border-radius: 50%;" alt="" width="42px" height="42"> '+JSONVAL.usu_nombre+'</td><td>'+JSONVAL.hor_sala+'</td><td>'+JSONVAL.hor_dia+'</td>      <td>'+JSONVAL.hor_inicio+'</td> <td>'+JSONVAL.hor_termino+'</td>	<td><a href="<?=site_url('Alumno_Controller/solicitar/')?>'+JSONVAL.hor_id+'"><button type="button"  class="btn btn-warning btn-sm pull-right" >Solicitar</button></a> </td> </tr>');
                             });
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
			</script>