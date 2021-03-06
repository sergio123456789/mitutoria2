
<html>  
<head>
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
  <body>

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
         minTime : '08:00:00',
        maxTime : '23:00:00',
        businessHours: {
          start: '08:00:00', // hora final
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
  <div class="col-md-12 col-xs-12">
  <div class="card">
  <div class="card-body">
          <div class="section">
            <div class="section-body">
            <form class="form form-horizontal">
           <div class="section">

            <div class="section-title" style="text-align: center;">Horario Disponibilidad</div>
            <div class="section-body">
              </div>



  <div class="container-fluid">
    <div class="row">
       <div class="col-xs-12 col-md-3">
         <div class="col-md-3 col-xs-12" >
          <?php if (isset($error) ){ ?>
             <h4 style="color: red;"> <?=$error?></h4>
            <?php }?>
     <div class="row">
  </div>
  </div>
       </div>
    <div class="col-xs-12 col-md-9">
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
</body>
</html>