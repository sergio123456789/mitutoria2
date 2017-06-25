<link rel="stylesheet" href="<?=base_url('resources/bootstrap/css/style.css')?>">
              
				<div class="container-fluid">
					<div class="row">

							 <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Buscar Profesor</h4>
	                                <p class="category">Acá puedes buscar profesores por su rut</p>
	                            </div>
	                            <div class="card-content table-responsive" style="float: center;">
	                                    <div class="row">
	                                        <div class="col-md-9">
	       <form class="form-horizontal form-label-left form-in" id="form" method="POST">
                    <div class="col-lg-6">
                        <div class="col-lg-4">
                            <label>Rut<span class="required">*</span>
                            </label>
                            <input type="text" id="rut" name="rut"  required="required" maxlength="8" class="form-control col-md-5 col-xs-12">
                        </div>
                        <div class="col-md-2">
                            <label>Dv<span class="required">*</span>
                            </label>
                            <input type="text" id="dv" name="dv"  required="required" maxlength="1" class="form-control col-md-2 col-xs-12">
                        </div>
                        <br>
                        <div class="col-lg-1">
                  <div class="col-lg-6"><button type="submit" rel="tooltip" title="Buscar" class="btn btn-info  btn-round btn-just-icon" data-toggle="modal" data-target="#edit_modal" ><i class="fa fa-search"></i></button></div>
                </div>
                    </div>
			     </form>
												</div>
	                                    </div>
	                            </div>
	                        </div>
	                    </div>
	                    
								  <!--===== MODAL AYUDANTÍA COMÚN ==========-->
						<div id="edit_modal" class="modal fade" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" >Profesor</h4>
                </div>
                    <div class="modal-body text-center">
                     <center>
                	
                     <div class="col-md-12">
         <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?=base_url('')?>resources/images/marc.jpg" alt="User profile picture">

              <h3 class="profile-username text-center"><div id="name"></div></h3>

              <p class="text-muted text-center">Profesor</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>InacapMail</b> <a class="pull-right"><div id="correo"></div></a>
                </li>
                <li class="list-group-item">
                  <b>Teléfono</b> <a class="pull-right"></a>
                </li>
                <h3>Asignaturas</h3>
                <li>
                <span class="label label-danger">Matemática</span>
                <span class="label label-success">Informática</span>
                <span class="label label-info">Android</span>
                <span class="label label-warning">PHP</span>
                <span class="label label-primary">lala</span>
                </li>
              </ul>

              <a href="#" class="btn btn-primary btn-block"><b>Horario Disponibilidad</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        </center> 

                </div>               
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
					</div>
					
				</div>
	<script>
$("#form").submit(function(e){
   e.preventDefault();
      $.ajax({
                type: "POST",
                url: "<?=site_url('Asesor_Controller/detalleProfesor')?>",
                dataType: "json",
                data: $(this).serialize(),
                success: function(data) {
                    console.log(data);
                    $("#name").html(data.nombre); //Cambiar al que esta seleccionado
                    $("#correo").html(data.correo);
                    $('#carga_modal').modal('hide');
                    $('#edit_modal').modal('show').fadeIn(800);
                },
                complete : function(xhr, status) {
                    $('#carga_modal').modal('hide');
                }
            });
    
     });

 

 $(function () {
        setTimeout(function() {
            $(".messages").fadeOut(3000);
        },3000);

    });

</script>