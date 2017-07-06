<link rel="stylesheet" href="<?=base_url('resources/bootstrap/css/style.css')?>">
<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
                        
	                        <div class="card" style="margin-top:5%;">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Tutorías Para Hoy</h4>
	                                <p class="category">Acá confirmas tu asistencia a la tutoría</p>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table" id=example1 style="text-align: center;">
	                                    <thead class="text-primary" >
	                                    	<th style="text-align: center;">Tutoría</th>
	                                    	<th style="text-align: center;">Alumno</th>
	                                    	<th style="text-align: center;">Fecha</th>
	                                    	<th style="text-align: center;">Inicio</th>
	                                    	<th style="text-align: center;">Término</th>
	                                    	<th style="text-align: center;">Estado</th>											
											<th style="text-align: center;">Confirmar</th>
											<th style="text-align: center;">Cancelar</th>

	                                    </thead>
	                                    <tbody>
	                                  <?php if (!empty($alumnos)): ?>
	                                       <?php foreach ($alumnos as $value) { ?>
	                                       <?php if ($value->get('hor_estado')<3){ ?>
	                                        <tr>
	                                           <td><?=$value->get('asig_nombre')  ?></td>	                                               	
	                                           <td ><a>
    									
    								         </a><?=$value->get('usu_nombre') ?>    								
    								           </td>   								
    								           <td><?=$value->get('hor_fechasis') ?></td>
    								           <td><?=$value->get('hor_inicio')?></td>
    								           <td><?=$value->get('hor_termino')?></td>
    								           <?php if ($value->get('hor_estado')==0){ ?>
    								           <td>pendiente</td>
    								           <?php }else if($value->get('hor_estado')==1){?>
    								           <td>confirmado</td>
                                               <?php }?>
    								           <td>
		                  <button type="button" rel="tooltip" title="Confirmar" id="<?=$value->get('lis_id')?>" href="#acceptModal" data-toggle="modal" class="btn btn-success btn-simple btn-xs cancelar">
                    							<i class="fa fa-check-circle"></i>
                    							</button>
												</td>

												<td>
		                   <button type="button" rel="tooltip" title="Cancelar" id="<?=$value->get('lis_id')?>" href="#deleteModal" data-toggle="modal" class="btn btn-danger btn-simple btn-xs cancelar">
                    							<i class="fa fa-times"></i>
                    							</button>
												</td>
												

	                                        </tr>
	                                        <?php } ?>
	                                        <?php } ?>
										<?php endif ?>

	                                    </tbody>
	                                </table>
   <!-- Modal de cancelar la tutoría-->
	                    		<div class="modal fade" id="deleteModal">
								<div class="modal-dialog">
								      <div class="modal-content">
								        <div class="modal-header">
								          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								         <h3 class="modal-title" style="text-align:center;" >¿Estas seguro que quieres cancelar tu tutoría?</h3>
								        </div>
								        <div class="modal-body">
								         <form method="post" action="<?=site_url('Tutor_Controller/cancelar')?>">
								 <input type="text" name="id" hidden="visible" id="eliminar_empresa" value="eliminar_empresa">
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

 					<!-- Modal de lista de la tutoría-->
	                    		<div class="modal fade" id="acceptModal">
								<div class="modal-dialog">
								      <div class="modal-content">
								        <div class="modal-header">
								          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								          <h3 class="modal-title" style="text-align:center;" >Ingrese Rut de alumnos asistentes</h3>
								        </div>
								    <form method="post" action="<?=site_url('Tutor_Controller/createlista')?>">
								    <input type="text" name="id" hidden="visible"  id="agregar_empresa" value="agregar_empresa">
								        <div class="modal-body"
								         <label>Rut: 
								         <input type="rutAlum" placeholder="Ingrese rut de alumnos" name="rutAl" class="form-control" id="rut">
								         </label>

								   	<div class="modal-footer" id="cansel">
								        <button type="button" class="btn btn-info" id="validar" > <i class="fa fa-check-square"></i> Validar</button>
								        
								        <button type="submit" class="btn btn-success" id="guardar"><i class="fa fa-save"></i> Guardar</button>
								   </div>
								    <select locked="locked" name="alumnos[]" id="alumnos" class="js-example-tokenizer form-control select2-hidden-accessible"  multiple="" tabindex="-1" aria-hidden="true" style="width: 100%">
								     </select>

								     </form>
								     </div>
										</div>
								         <div>
								         	 
								         </div>  
								        </div>
								      </div><!-- /.modal-content -->
								    </div><!-- /.modal-dialog -->
								  </div><!-- /.modal -->	

								  <!-- fin Modal de eliminar la tutoría-->								  
	                            </div>
	                        </div>
	                    </div>
    </div></div>
    

    <script type="text/javascript">
    	$(".cancelar").click(function(){
					var id = $(this).attr('id');
					$("#eliminar_empresa").val(id);
					$("#agregar_empresa").val(id);
				});
    	



    	var myarr = new Array();
    	var myarrDos = new Array();
  

    	$("#validar").click(function(){
    		
    		var rut = document.getElementById("rut").value;
    		$.ajax({
    			type: "POST",
                url: "<?=site_url('Tutor_Controller/lista')?>",
                dataType: "json",
                data:{"rut" : rut},
                 beforeSend:function () {
                    $("#rut").val("");
                },
                success: function(data) {
                  $.each(data.equipo, function(key, value) {
                    var JSONVAL =  JSON.parse(value);
                    myarr.push(JSONVAL.usu_id);
                    myarrDos.push(JSONVAL.usu_rut+'-'+JSONVAL.usu_dv);
                    //$("#editasignaturas").append($('<option>', {value: 1, text: 'new option'}));
                  $("#alumnos").append($('<option>', {value: JSONVAL.usu_id, text: JSONVAL.usu_rut+'-'+JSONVAL.usu_dv }));
                 });

                 $.each($("#alumnos"), function(){

                          	$(this).select2('val', myarr);		
                    });

                 $("#alumnos").val(myarr).trigger("change");
    		}
			
    	});
    		});

    $(".cancelar").click(function(){
    $("#contenidoLista").empty();
    });

     $(function () {    
           $(".js-example-tokenizer").select2({
			  tags: true,
			  tokenSeparators: [',', ' '],
			  locked:true

			});
        });
    </script>