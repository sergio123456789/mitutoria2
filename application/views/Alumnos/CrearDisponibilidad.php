<link href='<?= base_url()?>resources/fullcalendar/fullcalendar.min.css' rel='stylesheet' />
<link href='<?= base_url()?>resources/fullcalendar/fullcalendar.print.min.css' rel='stylesheet' media='print' />
<script src='<?= base_url()?>resources/fullcalendar/lib/moment.min.js'></script>
<script src='<?= base_url()?>resources/fullcalendar/lib/jquery.min.js'></script>
<script src='<?= base_url()?>resources/fullcalendar/fullcalendar.min.js'></script>
<link rel="stylesheet" type="text/css" href="<?= base_url()?>resources/fullcalendar/fullcalendar.css">
<script src="<?= base_url()?>resources/fullcalendar/lang/es.js"></script>
<meta charset='utf-8' />
<style>

  body {
    margin: 40px 10px;
    padding: 0;
    font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
    font-size: 14px;
  }

  #calendar {
    max-width: 900px;
    margin: 0 auto;
  }

</style>
<script>
  $(document).ready(function() {
    $.post('<?php echo site_url('Alumno_model/test');?>',
      function(data){
    $('#calendar').fullCalendar({
      locale:'es',
      header: {
        right: '',
          left:"",
        center: ''
      },
      titleFormat: 'YYYY',
      businessHours: {
        start: '09:00:00', // hora final
        end: '21:00:00', // hora inicial
      },
      columnFormat: 'dddd',
      defaultDate: '2018-01-01',
      defaultView:"agendaWeek",
      weekends: false,
      dayNamesShort: ['domingo','Lunes','Martes' ,'Miercoles','Jueves','Viernes','sabado'],
      eventLimit: true, // allow "more" link when too many events
      events: $.parseJSON(data), 
      eventClick: function(event) {
        var aceptar = confirm("¿ Está seguro de quitar esta Disponibilidad ?");
        if(aceptar){
          location.href="<?=site_url('Alumno_model/deleteevento')?>"+"/"+event.id;
        }
      }

      });
    }); 

    $(document).on('click','#delete',function(){
      var id = $(this).prop('name');
      $('#confirm').modal({
                  show: 'true'
        });
      var link2 = "<?=site_url('Alumno_model/borrarEvento')?>"+"/"+id;
      $('#deleteRoute').attr("href",link2);
    });  
  });

</script>

<div class="col-md-12">
<div class="card">
<div class="card-body">
        <div class="section">
          <div class="section-body">
          <form class="form form-horizontal" action="<?=site_url('Alumno_model/insertDispo')?>" method="post" id="remind">
         <div class="section">
         
          <div class="section-title">Definir Disponibilidad</div>
          <div class="section-body">
            </div>



<div class="container-fluid">
  <div class="row">
     <div class="col-xs-3 col-md-3">
       <div class="col-md-3" style="width: 200px;height: 100px">
        <?php if (isset($error) ){ ?>
           <h4 style="color: red;"> <?=$error?></h4>
          <?php }?>
             <table class=" table table-striped primary" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th><select name="dia" id="ffi_editnombre" class="form-control">
               
                 <option value="1" >Lunes</option>
                 <option value="2" >Martes</option>
                 <option value="3" >Miercoles</option>
                 <option value="4" >Jueves</option>
                 <option value="5" >Viernes</option>
               
            </select>
             </th>

        </tr>
    </thead>
    <tbody>
          <tr>
           <td> 
                Desde <input type="time"  placeholder="09:00" style="width:100px " name="inicio" ><br> 
                Hasta <input type="time" placeholder="10:00" style="width:100px " name="fin" ><br></br>
            </td>         
         </tr>
      </tbody>
   </table>
         <input type="submit" name="submit" id="submit" class="btn btn-sm btn-success" value="Insertar" tabindex="2" />
  <p style="margin-top:0px; color:gray;" >Click sobre tu horario para borrar</p>

</div>

     </div>
  <div class="col-xs-9 col-md-9">
            <div id="calendar"></div>
        <div class="form-footer">
          <div class="form-group">
           
          </div>
        </div>
      </form>
  </div>
  </div>
</div>
  
</div></div></div></div>