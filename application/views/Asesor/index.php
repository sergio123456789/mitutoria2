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
      		$areasiete != null && !empty($areasiete) && isset($areasiete) &&
      		$areaocho != null && !empty($areaocho) && isset($areaocho) 

      	 ){ ?>
        var data = google.visualization.arrayToDataTable([
          ['Alumnos', 'Cantidad de alumnos por área'],
          ['<?=$areauno->get('ar_nombre')?>', <?=$areauno->get('total')?>],
          ['<?=$areados->get('ar_nombre')?>', <?=$areados->get('total')?>],
          ['<?=$areatres->get('ar_nombre')?>',<?=$areatres->get('total')?>],
          ['<?=$areacuatro->get('ar_nombre')?>',<?=$areacuatro->get('total')?>],
          ['<?=$areacinco->get('ar_nombre')?>',<?=$areacinco->get('total')?>],
          ['<?=$areaseis->get('ar_nombre')?>',<?=$areaseis->get('total')?>],
          ['<?=$areasiete->get('ar_nombre')?>',<?=$areasiete->get('total')?>],
          ['<?=$areaocho->get('ar_nombre')?>',<?=$areaocho->get('total')?>]
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
			google.charts.load('current', {packages: ['corechart', 'bar']});
			google.charts.setOnLoadCallback(drawRightY);
			function drawRightY() {
			      var data = google.visualization.arrayToDataTable([
			        ['Área', 'Con Ayudantía', 'Sin Ayudantía'],
			        ['Informática y Telecomunicaciones', 6754000, 6008000],
			        ['Construcción', 3792000, 3694000],
			        ['Mecánica', 2695000, 2896000],
			        ['Minería y Metalurgia', 2099000, 1953000],
			        ['Procesos Industriales', 1526000, 1517000]
			      ]);

			      var materialOptions = {
			        chart: {
			          title: '',
			          subtitle: ''
			        },

			        chartArea:{left:30,top:20,bottom:20,width:"100%",height:"100%"},

			        hAxis: {
			          title: 'Total Population',
			          minValue: 0,
			        },
			        vAxis: {
			          title: 'City'
			        },
			        bars: 'vertical',
			        axes: {
			          y: {
			            0: {side: 'left'}
			          }
			        }
			      };
			      var materialChart = new google.charts.Bar(document.getElementById('chart_div'));
			      materialChart.draw(data, materialOptions);
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

     <div class="col-md-6">
						<div class="card">
							<div class="card-header" data-background-color="purple">
	                                <h4 class="title">Alumnos</h4>
	                                <p class="category">Cantidad de alumnos por área </p>
	                            </div>
	                       <p> <div id="donutchart" style="width: 400px; height: 300px;"></div></p>
	                      
	                    </div>
	                    </div>


    <div class="container-fluid">
					<div class="row">
					 <div class="col-md-12">
						<div class="card">
							<div class="card-header" data-background-color="purple">
	                                <h4 class="title">Rendimiento ayudantías</h4>
	                                <p class="category">Acá puedes visualizar el rendimiento por área </p>
	                            </div>	
									<p> <div id="chart_div" style="width: 90%; height: 400px;"></div> </p>
	                    </div>
	                    </div>

	                    	<div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title"> Profesores con más tutorías </h4>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table table-hover" style="text-align: center;">
	                                    <thead class="text-warning">
	                                        <th style="text-align: center;">Profesor</th>
	                                    	<th style="text-align: center;">Rut</th>
	                                    	<th style="text-align: center;">Tutorías</th>
	                                    	<th style="text-align: center;">Meta</th>
	                                    </thead>
	                                    <tbody>
	                                        <tr>
	                                        	<td>Pedro Fuenzalida</td>
	                                        	<td>19546366-2</td>
	                                        	<td>120</td>
	                                        	<td> <div class="progress">
                    <div class="progress-bar" style="width: 80%"></div>
                  </div>80%

	                                        	</td>
	                                        	</tr>
	                                   <tr>
	                                        	<td>Javier Miles</td>
	                                        	<td>19229705-2</td>
	                                        	<td>60</td>
	                                        	<td><div class="progress">
                    <div class="progress-bar" style="width: 51%"></div>
                  </div>51%</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>Américo Pérez</td>
	                                        	<td>10324967-K</td>
	                                        	<td>20</td>
	                                        	<td><div class="progress">
                    <div class="progress-bar" style="width: 13%"></div>
                  </div>13%</td>
	                                        </tr>
	                               
	                                    </tbody>
	                                </table>
	                            </div>
	                        </div>

	                    	<!-- Modal de eliminar la tutoría-->

	                    		<div class="modal fade" id="deleteModal">
								<div class="modal-dialog">
								      <div class="modal-content">
								        <div class="modal-header">
								          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								          <h3 class="modal-title">¿Estas seguro que quieres cancelar tu tutoría?</h3>
								        </div>
								        <div class="modal-body">
										  <h5 class="text-center">Ingresa el motivo</h5>
										  <textarea class="form-control" rows="5"></textarea>
										</div>
								        <div class="modal-footer">
								        <button type="button" class="btn btn-primary">Enviar</button>
								        <button type="button" class="btn btn-default " data-dismiss="modal">Cancelar</button>  
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
								          <h3 class="modal-title text-center"> Horarios de Matemática</h3>
								        </div>
								        <div class="modal-body">
										  <div class="navbar-form navbar-right">
													<i class="material-icons btn btn-white btn-round btn-just-icon">search</i>
													<input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Buscar">
													<span class="material-input"></span>
													
													<div class="ripple-container"></div>
													
												</div>
								          <table class="table table-striped" id="tblGrid">
								            <thead id="tblHead">
								              <tr>
								                <th>Profesor</th>
								                <th>Sala</th>
								                <th>Fecha</th>
								                <th>Inicio</th>
								                <th>Término</th>
								              </tr>
								            </thead>
								            <tbody>

								              <tr>
								              <td>
								              <img class="img" src="../../assets/img/faces/marc.jpg" style="width: 42px; height: 42px; border-radius: 50%;" /> Raúl Silva </td> 
								              <td>A213</td> 
								              <td>29/05/17</td> 
								              <td>10:15</td> <td>12:30</td>
								              <td><input type="button" class="btn btn-warning btn-sm pull-right" value="Solicitar"></td>
								              </tr>

								              <tr>
								              <td><img class="img" src="../../assets/img/faces/marc.jpg" style="width: 42px; height: 42px; border-radius: 50%;" /> Javier Miles</td>
								              <td>A315</td>
								              <td>29/05/17</td>
								              <td>15:15</td> <td>16:30</td> 
								              <td><input type="button" class="btn btn-warning btn-sm pull-right" value="Solicitar"></td>
								              </tr>
                                                <tr>
								               <td><img class="img" src="../../assets/img/faces/marc.jpg" style="width: 42px; height: 42px; border-radius: 50%;" /> Américo Peréz</td>
								              <td>B303</td>
								              <td>03/06/17</td>
								              <td>10:15</td> <td>12:30</td> 
								              <td><input type="button" class="btn btn-warning btn-sm pull-right" value="Solicitar"></td>
								              </tr>
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
						

