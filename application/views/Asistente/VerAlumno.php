<link rel="stylesheet" href="<?=base_url('resources/bootstrap/css/style.css')?>">
    
        <div class="container-fluid">
          <div class="row">

               <div class="col-md-12">
                          <div class="card">
                              <div class="card-header" data-background-color="purple">
                                  <h4 class="title">Buscar Alumno</h4>
                                  <p class="category">Acá puedes buscar alumnos por su rut</p>
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
                        <div class="col-md-3">
                            <label>Dv<span class="required">*</span>
                            </label>
                            <input type="text" id="dv" name="dv"  required="required" maxlength="1" class="form-control col-md-3 col-xs-12">
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


                      </div>
                  <!--===== MODAL AYUDANTÍA COMÚN ==========-->
      <div id="edit_modal" class="modal fade" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" >Alumno</h4>
                </div>
                    <div class="modal-body text-center">
                     <center>
                     <div class="col-md-12">
         <div class="box box-primary">
         
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?=base_url('')?>resources/images/marc.jpg" alt="User profile picture">

              <h3 class="profile-username text-center"><div id="name"></div></h3>

              <p class="text-muted text-center">Alumno</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Carrera</b> <div id="carrera"></div>
                </li>
                <li class="list-group-item">
                  <b>Semestre de Ingreso</b> <div id="ingreso"></div>
                </li>
                <li class="list-group-item">
                  <b>InacapMail</b> <div id="correo"></div>
                </li>
                <li class="list-group-item">
                  <b>Celular</b> <div id="celular"></div>
                </li>
              </ul>
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
  <script type="text/javascript">
   
$("#form").submit(function(e){
   e.preventDefault();
      $.ajax({
                type: "POST",
                url: "<?=site_url('Asistente_Controller/detalleAlumno')?>",
                dataType: "json",
                data: $(this).serialize(),
                   beforeSend:function () {
                    $("#name").empty(); //Cambiar al que esta seleccionado
                    $("#correo").empty();
                    $("#carrera").empty();
                    $("#celular").empty();
                    $("#ingreso").empty();
                    $('#carga_modal').modal('show');
                },
                success: function(data) {
                    console.log(data);
                    $("#name").html(data.nombre); //Cambiar al que esta seleccionado
                    $("#correo").html(data.correo);
                    $("#carrera").html(data.carrera);
                    $("#celular").html('(+569)'+data.celular);
                    $("#ingreso").html(data.ingreso);
                    $('#carga_modal').modal('hide');
                    $('#edit_modal').modal('show').fadeIn(800);
                },
                complete : function(xhr, status) {
                    $('#carga_modal').modal('hide');
                }
            });
    
     });
    
  </script>