<head>
<link rel="stylesheet" href="<?=base_url('resources/bootstrap/css/style.css')?>">
<link rel="stylesheet" href="<?=base_url('resources/bootstrap/css/style.css')?>"><div class="container-fluid">
 <script src="<?= base_url()?>resources/js/jquery-1.11.3.min.js"></script>
<script src="<?= base_url()?>resources/js/jquery-ui/jquery-ui.min.js"></script>
<link href='<?= base_url()?>resources/fullcalendar/fullcalendar.min.css' rel='stylesheet' />
<link href='<?= base_url()?>resources/fullcalendar/fullcalendar.print.min.css' rel='stylesheet' media='print' />
<script src='<?= base_url()?>resources/fullcalendar/lib/moment.min.js'></script>
<script src='<?= base_url()?>resources/fullcalendar/lib/jquery.min.js'></script>
<script src='<?= base_url()?>resources/fullcalendar/locale/es.js'></script>
<script src='<?= base_url()?>resources/fullcalendar/fullcalendar.min.js'></script>
<link rel="stylesheet" type="text/css" href="<?= base_url()?>resources/fullcalendar/fullcalendar.css">
<script src="<?= base_url()?>resources/fullcalendar/lang/es.js"></script>
<meta charset='utf-8' />
  <link rel="stylesheet" href="<?=base_url('resources/bootstrap/css/bootstrap.min.css')?>">
<script src="<?=base_url('resources/bootstrap/js/bootstrap.min.js')?>"></script>
<script src="<?=base_url('resources/plugins/datatables/dataTables.bootstrap.min.js')?>"></script>
</head> 
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
               <div class="col-md-6">
                    <div class="card">
                    <div class="card-header" data-background-color="purple">
                                  <h4 class="title">Crear Nueva Tutoría</h4>
                                  <p class="category">Complete todos los datos para crear una nueva tutoría</p>
                              </div>
                            <br>
            <form action="<?=site_url('Asistente_Controller/agregarTutoria')?>" method="POST">
                    <div class="col-lg-12">
                          <div class="col-lg-12">
                            <label >Día<span class="required">*</span>
                            </label>
                            <select class="form-control col-md-7 col-xs-12" name="dia">
                                <option value="LUNES">LUNES</option>
                                <option value="MARTES">MARTES</option>
                                <option value="MIERCOLES">MIERCOLES</option>
                                <option value="JUEVES">JUEVES</option>
                                <option value="VIERNES">VIERNES</option>
                            </select>
                        </div>
                        <div class="col-lg-12">
                            <label >Hora inicio<span class="required">(Se recomienda revisar la disponibilidad del profesor antes de completar estos campos)</span>
                            </label>
                            <input type="time" name="inicio" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <input type="text" name="id" value="<?=$id?>" hidden="hidden">
                      <div class="col-lg-12">
                          <div class="col-lg-4">
                            <label >Hora termino<span class="required">*</span>
                            </label>
                            <input type="time" name="termino"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        <div class="col-lg-12">
                            <label >Sala/Lugar<span class="required">*</span>
                            </label>
                            <input type="text" name="sala" required="required" class="form-control col-md-7 col-xs-12">
                        </div>

                       <div class="col-lg-12">
                            <label >Asignatura<span class="required">*</span>
                            </label>
                            <select class="form-control col-md-7 col-xs-12" name="asig">
                            <?php foreach ($asigxprofe as $value) { ?>
                                <option value="<?=$value->get('asig_id')?>"><?=$value->get('asig_nombre')?></option>
                            <?php } ?>
                            </select> 
                        </div>
                    </div>
                    
                <div class="col-md-6">
                <br>
                    <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Cancelar</button>
                </div>
                <div class="col-md-6">
                <br>
                    <button id="btnAdd" type="submit" class="btn btn-success">Guardar</button>
                </div>
                <br>
</form>
</div>
</div>
<div class="col-md-6">
<div class="card">
                    <div class="card-header" data-background-color="purple">
                                  <h4 class="title">Disponibilidad del profesor</h4>
                                  <p class="category"><?=$usu->get('usu_nombre')?></p>
                              </div>
<script>
$(function(){
$("#flip-1").on("change", function(){
if ($(this).val() == "off")
{
$('#dispodel').modal('show');
}
else
{
$('#dispoactiv').modal('show');
}
});
});
</script>
                               <center>
<label for="flip-1">Disponibilidad:
<select class="form-control" name="flip-1" id="flip-1" data-role="slider">
<option>-----</option>
<?php if ($usu->get('usu_dispo_estado') == 1): ?>
  <option value="on">Activar</option>
<?php endif ?>
<?php if ($usu->get('usu_dispo_estado') == 0): ?>
<option value="off">Desactivar</option>  
<?php endif ?>
</select></label>
</center>
<style>

  #calendar {
    max-width: 900px;
    margin: 0 auto;
  }

</style>
<script>
  $(document).ready(function() {
    $.post('<?=site_url("Asesor_Controller/test/".$id)?>',
      function(data){
        console.log(data);
    $('#calendar').fullCalendar({
      locale:'es',
      header: {
        right: '',
          left:"",
        center: ''
      },
      titleFormat: 'YYYY',
       minTime : '09:00:00',
      maxTime : '23:00:00',
      businessHours: {
        start: '09:00:00', // hora final
        end: '23:00:00', // hora inicial
      },
      contenHeight : 'auto',
      columnFormat: 'dddd',
      defaultDate: '2018-01-01',
      defaultView:"agendaWeek",
      weekends: false,
      dayNamesShort: ['domingo','Lunes','Martes' ,'Miercoles','Jueves','Viernes','sabado'],
      eventLimit: true, // allow "more" link when too many events
      events: $.parseJSON(data), 
      });
    }); 

    $(document).on('click','#delete',function(){
      var id = $(this).prop('name');
      $('#confirm').modal({
                  show: 'true'
        });
      var link2 = "<?=site_url('Alumno_Controller/borrarEvento')?>"+"/"+id;
      $('#deleteRoute').attr("href",link2);
    });  
  });

</script>

  <div class="col-xs-6 col-md-12">
            <div id="calendar"></div>
        <div class="form-footer">
          <div class="form-group">

          </div>
        </div>
      </form>
 
</div>
</div>
</div>
</div>

</div>
</div>
</div>
<div id="dispodel" class="modal fade " role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">Desactivar disponibilidad</h4>
            </div>
            <div class="modal-body">
                <h4 style="text-align: center;">¿Seguro/a que desea desactivar la opcion de ingregar disponibilidad en los profesores?</h4><h3 id="modal_name"></h3>
                <div class="modal-footer">
                    <div class="col-md-4">

                         <a href="<?=site_url('Asistente_Controller/desactivarDispoUsu/'.$usu->get('usu_id'))?>"><button id="btnDel" type="button" class="btn btn-danger">Desactivar</button></a>
                    </div>
                    <div class="col-md-8">
                        <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="dispoactiv" class="modal fade " role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">Activar disponibilidad</h4>
            </div>
            <div class="modal-body">
                <h4 style="text-align: center;">¿Seguro/a que desea activar la opcion de ingregar disponibilidad en los profesores?</h4><h3 id="modal_name"></h3>
                <div class="modal-footer">
                    <div class="col-md-4">

                        <a href="<?=site_url('Asistente_Controller/activarDispoUsu/'.$usu->get('usu_id'))?>"><button id="btnDel" type="button" class="btn btn-success">Activar</button></a>
                    </div>
                    <div class="col-md-8">
                        <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>