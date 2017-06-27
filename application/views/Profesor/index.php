<link rel="stylesheet" href="<?=base_url('resources/bootstrap/css/style.css')?>">
<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
                        
	                        <div class="card" style="margin-top:5%;">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Tutorias para hoy</h4>
	                                <p class="category">Acá confirmas tu asistencia a la clase</p>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table" style="text-align: center;">
	                                    <thead class="text-primary" >
	                                    	<th style="text-align: center;">Fecha</th>
	                                    	<th style="text-align: center;">Inicio</th>
	                                    	<th style="text-align: center;">Término</th>
	                                    	<th style="text-align: center;">Sala</th>
	                                    	<th style="text-align: center;">Asignatura</th>
	                                    	<th style="text-align: center;">Estado</th>
											<th style="text-align: center;">Confirmar</th>
											<th style="text-align: center;">Cancelar</th>
	                                    </thead>
	                                    <tbody>
	                                     
	                                    <?php foreach ($horario as $hor){ ?><tr>
	                                        <?php if ($hor->get('hor_usu_id')==$user['id']){ ?>
	                                        <?php if ($hor->get('hor_estado')<3){ ?>
                                                    
                                               
	                                        
	                                    	<td><?=$hor->get('hor_dia')?></td>
    								        <td><?=$hor->get('hor_inicio')?></td>
    								        <td><?=$hor->get('hor_termino')?></td>
    								        <td><?=$hor->get('hor_sala')?></td>
    								        <?php foreach ($asignatura as $asi){ ?>
    								        <?php if ($asi->get("asig_id")==$hor->get('hor_asig_id')){ ?>
    								        <td><?=$asi->get('asig_nombre')?></td>		
    								        	<?php } ?>	
    								        <?php } ?>
    								        <?php if ($hor->get('hor_estado')==0){ ?>
    								        <td>pendiente</td>
    								        <td>
												<button type="button" id="btnAce" fakeid="<?=$hor->get('hor_id')?>" class="btn btn-success btn-simple btn-xs aceptarhor">
                    							<i class="fa fa-check"></i>
                    							</button>
												</td>
												
												<td>
												<button type="button" rel="tooltip" title="Cancelar" id="openBtn" href="#delete_modal" fakeid="<?=$hor->get('hor_id')?>" data-toggle="modal" class="btn btn-danger btn-simple btn-xs deleteUsr">
                    							<i class="fa fa-times"></i>
                    							</button>
												</td>
												 <?php }else{?>
												 <?php if ($hor->get('hor_estado')==1){ ?>
												 <td>Tomada</td>
												 <td></td>
												 <td></td>

												 	<?php }else{?>
												 	<?php if ($hor->get('hor_estado')==2){ ?>
												 		
												 	
												 	<td>Cancelada</td>
												 	<td></td>
												 	<td></td>
												 	<?php }else{?>
												 	
												 <?php }?>
												 <?php }?>
    								        <?php } ?>
												
</tr>
	     <?php } ?> 
          <?php } ?>                                     
 <?php } ?> 
	                                    </tbody>
	                                </table>

   												<!-- Modal de cancelar la tutoría-->

	                    		<div class="modal fade" id="delete_modal">
								<div class="modal-dialog">
								      <div class="modal-content">
								        <div class="modal-header">
								          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								          <h3 class="modal-title" style="text-align:center;" >¿Estas seguro que quieres cancelar tu clase?</h3>
								        </div>
								        
								        <div class="modal-footer">
								        <button id="btnDel" type="button" class="btn btn-danger">Si</button>
								        <button type="button" class="btn btn-default " data-dismiss="modal">Cancelar</button>  
								        </div>
												

								      </div><!-- /.modal-content -->
								    </div><!-- /.modal-dialog -->
								  </div><!-- /.modal -->	

								  <!-- fin Modal de cancelar la clase-->
	                            </div>
	                        </div>
	                    </div>
    </div></div>
    <script src="<?=base_url('resources/select2-4.0.3/vendor/jquery-3.2.1.min.js')?>"></script>
    <script type="text/javascript">
    	 var iddelete = 0;
        $(".deleteUsr").click(function () {
            iddelete = $(this).attr('fakeid');
        });

        $('#btnDel').click(function () {
            if (iddelete != 0) {
                $('#delete_modal').modal('hide');
                $.ajax({
                    type: "POST",
                    url: "<?=site_url('Profesor_Controller/hcancelar')?>",
                    dataType: "json",
                    data: {"idhor": iddelete},
                    beforeSend: function () {
                        $('#carga_modal').modal('show');
                    },
                    success: function (data) {
                        $('#carga_modal').modal('hide');
                    },
                    complete: function (xhr, status) {
                        $('#carga_modal').modal('hide');
                        location.reload();
                    }
                });
            }else{
                alert("No se ha seleccionado ningun usuario a eliminar");
            }
        });
    </script>
     <script type="text/javascript">
    	 var idaceptar = 0;
        $(".aceptarhor").click(function () {
            idaceptar = $(this).attr('fakeid');
        });

        $('#btnAce').click(function () {
            if (idaceptar != 0) {
                $('').modal('hide');
                $.ajax({
                    type: "POST",
                    url: "<?=site_url('Profesor_Controller/haceptar')?>",
                    dataType: "json",
                    data: {"idhor": idaceptar},
                    beforeSend: function () {
                        $('#carga_modal').modal('show');
                    },
                    success: function (data) {
                        $('#carga_modal').modal('hide');
                    },
                    complete: function (xhr, status) {
                        $('#carga_modal').modal('hide');
                        location.reload();
                    }
                });
            }else{
                alert("No se ha seleccionado ningun usuario a eliminar");
            }
        });
    </script>