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
                                          <div class="col-xs-12">
                                             <div class="card-content table-responsive">
                                  <table id="example1" class="table" style="text-align: center;">
                                      <thead class="text-primary" >
                                        <th style="text-align: center;">Foto</th>
                                        <th style="text-align: center;">Tutor</th>
                                        <th style="text-align: center;">Correo</th>
                                        <th style="text-align: center;">Rut</th>
                                        <th style="text-align: center;">Ver Asignaturas</th>
                                        <th style="text-align: center;">Ver Horario</th>
                                        <th style="text-align: center;">Detalle N. Acumulada</th>

                                      </thead>  
                                      <tbody>
                                        <?php if (is_null($profesores)) {?>
                                      <h3 style="text-align: center;">No hay registros de Profesores</h3>
                                      <?php }else{ ?>
                                      <?php foreach ($profesores as $profe) :?>
                                          <tr>
                                             <?php if($profe->get('usu_foto') == null || $profe->get('usu_foto') == ''){?>
                                                 <td><a href="#pablo">
                                              <img class="img" src="../../resources/images/marc.jpg" style="width: 42px; height: 42px; border-radius: 50%;" /></a></td>
                                              <?php }else{?>
                                              <td><a href="#pablo">
                                              <img class="img" src="../../resources/images/Tutor/<?=$profe->get('usu_foto')?>" style="width: 42px; height: 42px; border-radius: 50%;" /></a></td>
                                              <?php } ?>
                                                <td><?=$profe->get('usu_nombre')?></td>
                                                <td><?=$profe->get('usu_correo')?></td>
                                                <td><?=$profe->get('usu_rut')?>-<?=$profe->get('usu_dv')?></td>
                                                <center>
                                                <td><a type='button' fakeid="<?=$profe->get('usu_id')?>" fakenombre="<?=$profe->get('usu_nombre')?>" class='btn btn-default editasig'><i class="fa fa-book"></i></a></td>
                                                <td><a type='button' fakeid="<?=$profe->get('usu_id')?>" fakenombre="<?=$profe->get('usu_nombre')?>" class='btn btn-default editcalendario' ><i class="fa fa-calendar"></i></a></td>
                                                <td><a type='button' fakeid="<?=$profe->get('usu_id')?>" fakenombre="<?=$profe->get('usu_nombre')?>" class='btn btn-default editdetalle'><i class="fa fa-eye"></i></a></td>
                                                </center>
                                          </tr>
                                          <?php endforeach; ?>
                                      </tbody>
                                  </table>
                                  <?php } ?>
                              </div>
                                          </div>
                                      </div>
                              </div>
                          </div>
                      </div>
                      
                  <!--===== MODAL Asignatura ==========-->
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
                              <div class="col-md-12">
                                <!-- Widget: user widget style 1 -->
                                <div class="box box-widget widget-user-2">
                                  <!-- Add the bg color to the header using any of the bg-* classes -->
                                  <div class="widget-user-header bg-red">
                                    <div class="widget-user-image">
                                      <img class="img-circle" src="../../resources/images/marc.jpg" alt="User Avatar">
                                    </div>
                                    <!-- /.widget-user-image -->
                                    <h3 class="widget-user-username"><div id="nombreprofe"></div></h3>
                                    <h5 class="widget-user-desc">Profesor</h5>
                                  </div>
                                  <div class="box-footer no-padding">
                                    <ul class="nav nav-stacked">
                                <div class="box">
                                    <div class="box-header">
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body no-padding">
                                      <table class="table table-striped" style="text-align: center;">
                                        <tr>
                                           <th style="text-align: center;"><i class="fa fa-book margin-r-5"></i>Código-Asignatura</th>
                                        </tr>
                                       <tr>
                                        <td id="asignaprof"></td>
                                      </tr>
                                      </table>
                                    </div>
                                    <!-- /.box-body -->
                                  </div>
                                  <!-- /.box -->
                                    </ul>
                                  </div>
                                </div>
                                <!-- /.widget-user -->
                              </div>
                              </div>
                      </center> 
                    </div>               
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <!--===== Fin MODAL Asignatura ==========-->

 <!--===== Modal Detalle ==========-->
            <div id="detalle_modal" class="modal fade" role="dialog" aria-hidden="true">
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
                              <div class="col-md-12">
                                <!-- Widget: user widget style 1 -->
                                <div class="box box-widget widget-user-2">
                                  <!-- Add the bg color to the header using any of the bg-* classes -->
                                  <div class="widget-user-header bg-red">
                                    <div class="widget-user-image">
                                      <img class="img-circle" src="../../resources/images/marc.jpg" alt="User Avatar">
                                    </div>
                                    <!-- /.widget-user-image -->
                                    <h3 class="widget-user-username"><div id="nombretutor"></div></h3>
                                    <h5 class="widget-user-desc">Profesor</h5>
                                  </div>
                                  <div class="box-footer no-padding">
                                    <ul class="nav nav-stacked">
                                      
                                <div class="box">
                                    <div class="box-header">
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body no-padding">
                                      <table class="table table-striped" id="example1">
                                        <tr>
                                          <th style="text-align: center;">Fecha </th>
                                          <th style="text-align: center;">Asignatura </th>
                                          <th style="text-align: center;">Nota </th>
                                          <th style="text-align: center;">Comentario </th>
                                        </tr>
                                       <tr>
                                        <td id="fechatu" style="text-align: center;"></td>
                                        <td id="asigtu" style="text-align: center;"></td>
                                        <td id="notatu" style="text-align: center;"></td>
                                        <td id="comentu" style="text-align: center;"></td>
                                      </tr>
                                      </table>
                                    </div>
                                    <!-- /.box-body -->
                                  </div>
                                  <!-- /.box -->
                                </ul>
                                </div>
                                </div>
                                <!-- /.widget-user -->
                                </div>
                                </div>
                        </center> 
                                            </div>               
                                        <div class="modal-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>
            <!--===== Fin modal Detalle ==========-->
                  </div>
                </div>
  <script>

 // <==== botón mostrar asignaturas ====>
 $(".editasig").click(function () {
            var id = $(this).attr('fakeid');
            var nombre = $(this).attr('fakenombre');
            console.log(id);
            $.ajax({
                type: "POST",
                url: "<?=site_url('Asesor_Controller/detalleAsignaturaProfe')?>",
                dataType: "json",
                data:{"idasig" : id},
                 beforeSend:function () {
                    $("#asignaprof").empty();
                    $('#carga_modal').modal('show');
                },
                success: function(data) {
                    $("#nombreprofe").html(nombre);
                  $.each(data.asignatura, function(key, value) {
                    var JSONVAL =  JSON.parse(value);
                    $("#asignaprof").append(JSONVAL.asig_cod+' - '+JSONVAL.asig_nombre+'<br>');
                    console.log(JSONVAL.asig_nombre);
                 });

                    $('#carga_modal').modal('hide');
                    $('#edit_modal').modal('show').fadeIn(800);
                    
                 },
                   error:function (data) {
                    $('#carga_modal').modal('hide');
                    alert("lo sentimos no pudimos cargar los datos solicitados, favor intente mas tarde");
                },
                
                complete : function(xhr, status) {
                    $('#carga_modal').modal('hide');
                }
            });
        });

    // <==== Fin botón mostrar asignaturas ====>


    // <==== botón mostrar detalle ====>
 $(".editdetalle").click(function () {
            var id = $(this).attr('fakeid');
            var nombre = $(this).attr('fakenombre');
            console.log(id);
            $.ajax({
                type: "POST",
                url: "<?=site_url('Asesor_Controller/detalleProfeNota')?>",
                dataType: "json",
                data:{"idusu" : id},
                 beforeSend:function () {
                    $("#fechatu").empty();
                    $("#asigtu").empty();
                    $("#notatu").empty();
                    $("#comentu").empty();
                    $('#carga_modal').modal('show');
                },
                success: function(data) {
                    $("#nombretutor").html(nombre);
                  $.each(data.notasDet, function(key, value) {
                    var JSONVAL =  JSON.parse(value);
                    $("#fechatu").append(JSONVAL.hor_fechasis+' '+'<br> ');
                    $("#asigtu").append(JSONVAL.asig_nombre+' '+'<br> ');
                    $("#notatu").append(JSONVAL.cal_nota+' '+'<br> ');
                    $("#comentu").append(JSONVAL.cal_comentario+' '+' <br> ');
                    console.log(JSONVAL.hor_fechasis);
                 });
                    $('#carga_modal').modal('hide');
                    $('#detalle_modal').modal('show').fadeIn(800);
                    
                 },
                   error:function (data) {
                    $('#carga_modal').modal('hide');
                    alert("lo sentimos no pudimos cargar los datos solicitados, favor intente mas tarde");
                },
                
                complete : function(xhr, status) {
                    $('#carga_modal').modal('hide');
                }
            });
        });

    // <==== Fin botón mostrar Detalle ====>


       // <==== botón mostrar calendario ====>
 $(".editcalendario").click(function () {
            var id = $(this).attr('fakeid');
            console.log(id);
           open('<?=site_url('Asesor_Controller/createdispo/')?>'+id,'','top=300,left=300,width=550,height=600');
        });

    // <==== Fin botón mostrar calendario ====>

                     function abrir(idProd) { 

                

                }


 $(function () {
        setTimeout(function() {
            $(".messages").fadeOut(3000);
        },3000);

    });

</script>