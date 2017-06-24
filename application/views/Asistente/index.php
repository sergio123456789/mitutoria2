<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url()?>resource/assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="<?= base_url()?>resource/assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<script src="<?= base_url()?>resource/assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script src="<?= base_url()?>resource/assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?= base_url()?>resource/assets/js/material.min.js" type="text/javascript"></script>

	
	<title>Tutorías</title>
	
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="<?= base_url()?>resource/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= base_url()?>resource/assets/css/ghpages-materialize.css" type="text/css" rel="stylesheet" media="screen,projection">

    <!--  Material Dashboard CSS    -->
    <link href="<?= base_url()?>resource/assets/css/material-dashboard.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>resource/assets/css/modal.css">
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?= base_url()?>resource/assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>

	<div class="wrapper">

	    <div class="sidebar" data-color="purple" data-image="<?= base_url()?>resource/assets/img/sidebar-1.jpg">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo">
				<a href="#" class="simple-text">
					<img src="https://www.blumenreviews.com/images/universities/logo/logo-inacap.png" style="width: 200px; height: 50px;">
				</a>
			</div>

	    	<div class="sidebar-wrapper">
	            <ul class="nav">
	                <li class="active">
	                    <a href="#">
	                        <i class="material-icons">home</i>
	                        <p>Inicio</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="user.html">
	                        <i class="material-icons">face</i>
	                        <p>Ver Alumnos</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="user.html">
	                    <i class="fa fa-user-secret"></i>
	                        <p>Ver Profesores</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="misramos.html">
	                        <i class="material-icons">library_books</i>
	                        <p>Tutorías</p>
	                    </a>
	                </li>
	                 <li>
	                    <a href="misramos.html">
	                        <i class="material-icons">assignment_turned_in</i>
	                        <p>Reforzamientos</p>
	                    </a>
	                </li>
	               <li>
	                    <a href="misramos.html">
	                        <i class="material-icons">book</i>
	                        <p>Ayudantía</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="notifications.html">
	                        <i class="material-icons text-gray">notifications</i>
	                        <p>Notificaciones</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="misramos.html">
	                        <i class="material-icons">file_upload</i>
	                        <p>Importar</p>
	                    </a>
	                </li>
	            </ul>
	    	</div>
	    </div>

	    <div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">notifications</i>
									<span class="notification">5</span>
									<p class="hidden-lg hidden-md">Notifications</p>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#">Mike John responded to your email</a></li>
									<li><a href="#">You have 5 new tasks</a></li>
									<li><a href="#">You're now friend with Andrew</a></li>
									<li><a href="#">Another Notification</a></li>
									<li><a href="#">Another One</a></li>
								</ul>
							</li>
							<li>
								<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
	 							   <i class="material-icons">person</i>
	 							   <p class="hidden-lg hidden-md">Perfil</p>
		 						</a>
							</li>
						</ul>

						<form class="navbar-form navbar-right" role="search">
							<div class="form-group  is-empty">
								<input type="text" class="form-control" placeholder="Buscar">
								<span class="material-input"></span>
							</div>
							<button type="submit" class="btn btn-white btn-round btn-just-icon">
								<i class="material-icons">search</i><div class="ripple-container"></div>
							</button>
						</form>
					</div>
				</div>
			</nav>
	<div class="content">
				<div class="container-fluid">
					<div class="row">

							 <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Tutorías</h4>
	                                <p class="category">Profesores con más tutorías realizadas</p>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table" style="text-align: center;">
	                                    <thead class="text-primary" >
	                                    	<th style="text-align: center;">Tutoría</th>
	                                    	<th style="text-align: center;">Profesor</th>
	                                    	<th style="text-align: center;">Realizadas</th>
	                                    	<th style="text-align: center;">Canceladas</th>
	                                    	<th style="text-align: center;">Puntuación</th>
											<th style="text-align: center;">Confirmar</th>
											<th style="text-align: center;">Cancelar</th>
	                                    </thead>
	                                    <tbody>
	                                        <tr>
	                                        	<td>Matemática</td>
	                                        	<td rowspan="2"><a href="#pablo">
    									<img class="img" src="<?= base_url()?>resource/assets/img/faces/marc.jpg" style="width: 42px; height: 42px; border-radius: 50%;" />
    								</a>  Américo Pérez  </td>
    								<td>01/06/17</td>
    								<td>10:15</td>
    								<td>12:30</td>
												<td>
												<button type="button" rel="tooltip" title="Confirmar" href="#" data-toggle="modal" class="btn btn-success btn-simple btn-xs">
                    							<i class="fa fa-check"></i>
                    							</button>
												</td>
												
												<td>
												<button type="button" rel="tooltip" title="Cancelar" id="openBtn" href="#deleteModal" data-toggle="modal" class="btn btn-danger btn-simple btn-xs">
                    							<i class="fa fa-times"></i>
                    							</button>
												</td>

	                                        </tr>

	                                    </tbody>
	                                </table>

	                            </div>
	                        </div>
	                    </div>

	                    	<!-- Modal tutorías comunes -->
	                     <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Tutorías Comunes Disponibles</h4>
	                                <p class="category">Acá puedes solicitar tus tutorías </p>
	                            </div>
	                            <div class="card-content table-responsive">
	                              <div id="links" class="section scrollspy">
           						 <div class="collection">
           						   <a href="#myModal" data-toggle="modal" class="collection-item">Matemática</a>
           						   <a href="#myModal" data-toggle="modal" class="collection-item ">Inglés</a>
           						   <a href="#myModal" data-toggle="modal" class="collection-item">Networking I</a>
           						   <a href="#myModal" data-toggle="modal" class="collection-item">Taller de programación III</a>
           						 </div>
	                            </div>
	                        </div>
	                    </div>
	                   	    <!-- Fin Modal tutorías comunes -->

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
								              <img class="img" src="<?= base_url()?>resource/assets/img/faces/marc.jpg" style="width: 42px; height: 42px; border-radius: 50%;" /> Raúl Silva </td> 
								              <td>A213</td> 
								              <td>29/05/17</td> 
								              <td>10:15</td> <td>12:30</td>
								              <td><input type="button" class="btn btn-warning btn-sm pull-right" value="Solicitar"></td>
								              </tr>

								              <tr>
								              <td><img class="img" src="<?= base_url()?>resource/assets/img/faces/marc.jpg" style="width: 42px; height: 42px; border-radius: 50%;" /> Javier Miles</td>
								              <td>A315</td>
								              <td>29/05/17</td>
								              <td>15:15</td> <td>16:30</td> 
								              <td><input type="button" class="btn btn-warning btn-sm pull-right" value="Solicitar"></td>
								              </tr>

								               <td><img class="img" src="<?= base_url()?>resource/assets/img/faces/marc.jpg" style="width: 42px; height: 42px; border-radius: 50%;" /> Américo Peréz</td>
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
						</div>
					</div>

					


					
				</div>
			</div>

			<!-- FOOTER REVISAR 
			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul>
							<li>
								<a href="#">
									Inicio
								</a>
							</li>
							<li>
								<a href="#">
									Horario
								</a>
							</li>
							<li>
								<a href="#">
									Ramos
								</a>
							</li>
						
						</ul>
					</nav>
					
				</div>
			</footer> -->
		</div>
	</div>

									<!-- EJEMPLO DE DROPDOWN
								  	<div class="col-md-3 dropdown">
									<a href="#" class="btn btn-simple dropdown-toggle" data-toggle="dropdown">
    									Regular
    									<b class="caret"></b>
									</a>
									<ul class="dropdown-menu">
										<li><a href="#">Action</a></li>
										<li><a href="#">Another action</a></li>
										<li><a href="#">Something else here</a></li>
										<li class="divider"></li>
										<li><a href="#">Separated link</a></li>
										<li class="divider"></li>
										<li><a href="#">One more separated link</a></li>
									</ul>
								</div> -->
    							<!-- Botón de ejemplo Modal 
						<button href="#myModal" id="openBtn" data-toggle="modal" class="btn btn-default">Modal</button> 
						-->


						<!--  EJEMPLO MODAL
								<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="modal fade" id="myModal">
								<div class="modal-dialog">
								      <div class="modal-content">
								        <div class="modal-header">
								          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								          <h3 class="modal-title">Matemática</h3>
								        </div>
								        <div class="modal-body">
										  <h5 class="text-center">Horarios</h5>
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
								              <tr><td>Raúl Silva</td> <td>A213</td> <td>29/05/17</td><td>10:15</td> <td>12:30</td></tr>
								              <tr><td>Chicago, Illinois, USA</td>
								                <td>5</td>
								                <td class="text-right">76455</td>
								              </tr>
								            </tbody>
								          </table>
								          <div class="form-group">
								            <input type="button" class="btn btn-warning btn-sm pull-right" value="Reset">
								            <div class="clearfix"></div>
								          </div>
										</div>
								        <div class="modal-footer">
								          <button type="button" class="btn btn-default " data-dismiss="modal">Close</button>
								          <button type="button" class="btn btn-primary">Save Changes</button>
								        </div>
												

								      </div>
								    </div>
								  </div>
						</div>
						-->

<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("tblGrid");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</body>

	<!--  Notifications Plugin    -->
	<script src="<?= base_url()?>resource/assets/js/bootstrap-notify.js"></script>

	

	<!-- Material Dashboard javascript methods -->
	<script src="<?= base_url()?>resource/assets/js/material-dashboard.js"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="<?= base_url()?>resource/assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initDashboardPageCharts();

    	});
	</script>

</html>
