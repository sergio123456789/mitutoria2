<link rel="stylesheet" href="<?=base_url('resources/bootstrap/css/style.css')?>">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>	

    <script type="text/javascript">

    	google.charts.load('current', {packages: ['corechart', 'bar']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
      	<?php if(
      		$areauno != null && !empty($areauno) && isset($areauno) &&
      		$areados != null && !empty($areados) && isset($areados) &&
      		$areatres != null && !empty($areatres) && isset($areatres) &&
      		$areacuatro != null && !empty($areacuatro) && isset($areacuatro) &&
      		$areacinco != null && !empty($areacinco) && isset($areacinco) &&
      		$areaseis != null && !empty($areaseis) && isset($areaseis) &&
      		$areasiete != null && !empty($areasiete) && isset($areasiete)

      	 ){ ?>
        var data = google.visualization.arrayToDataTable([
          ['Alumnos', 'Cantidad de alumnos por área'],
          ['<?=$areauno->get('ar_nombre')?>', <?=$areauno->get('total')?>],
          ['<?=$areados->get('ar_nombre')?>', <?=$areados->get('total')?>],
          ['<?=$areatres->get('ar_nombre')?>',<?=$areatres->get('total')?>],
          ['<?=$areacuatro->get('ar_nombre')?>',<?=$areacuatro->get('total')?>],
          ['<?=$areacinco->get('ar_nombre')?>',<?=$areacinco->get('total')?>],
          ['<?=$areaseis->get('ar_nombre')?>',<?=$areaseis->get('total')?>],
          ['<?=$areasiete->get('ar_nombre')?>',<?=$areasiete->get('total')?>]
        ]);

        <?php }else{?>
        	 var data = google.visualization.arrayToDataTable([
          ['Alumnos', 'Cantidad de alumnos por área'],
          ['no hay datos existentes', 1]
        ]);
        	<?php } ?>

        var options = {
        	chartArea:{left:30,top:20,bottom:20,width:"100%",height:"100%"},
         
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>		
<br>
<!-- Small boxes (Stat box) -->
      <div class="row" style="margin-left:1%; margin-right:1%">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
            <?php if ($tutoriarealizada == null || empty($tutoriarealizada) || $tutoriarealizada == 0){?>
            	<h3>0</h3>
            	<p>Tutorías Realizadas</p>
            <?php } else{ ?>
              <h3><?=$tutoriarealizada?></h3>
              <p>Tutorías Realizadas</p>
              <?php }?>
            </div>
            <div class="icon">
              <i class="ion ion-checkmark-circled"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
               <?php if ($counttutores == null || empty($counttutores) || $counttutores == 0){?>
            	<h3>0</h3>
            	<p>Total de tutores</p>
            <?php } else{ ?>
              <h3><?=$counttutores?></h3>
              <p>Total de tutores</p>
            <?php }?>
            </div>
            <div class="icon">
              <i class="ion ion-ios-people"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <?php if ($countalumnos == null || empty($countalumnos) || $countalumnos == 0){?>
            	<h3>0</h3>
            	<p>Total de Ayudantes</p>
            <?php } else{ ?>
              <h3><?=$countalumnos?></h3>
              <p>Total de Ayudantes</p>
           <?php } ?>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
            <?php if ($tutoriacancelada == null || empty($tutoriacancelada) || $tutoriacancelada == 0){?>
            	<h3>0</h3>
            	<p>Tutorías Canceladas</p>
            <?php } else{ ?>
              <h3><?=$tutoriacancelada?></h3>
              <p>Tutorías Canceladas</p>
           	<?php } ?>
            </div>
            <div class="icon">
              <i class="ion ion-close-circled"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
<center>
	  <div style=" display: flex; justify-content: center; align-items: center;">
						<div class="card">
							<div class="card-header" data-background-color="purple">
	                                <h4 class="title">Alumnos</h4>
	                                <p class="category">Cantidad de alumnos por área </p>
	                            </div>
	                       <p> <div id="donutchart" style="width: 400px; height: 300px;"></div></p>
	                      
	                    </div>
	                    </div>
</center>
   


   
