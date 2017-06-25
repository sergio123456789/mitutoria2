					
						<style>
                                .collection{margin:.5rem 0 1rem 0;border:1px solid #e0e0e0;border-radius:2px;overflow:hidden;position:relative}
.collection .collection-item{background-color:#fff;line-height:1.5rem;padding:10px 20px;margin:0;border-bottom:1px solid #e0e0e0}
.collection .collection-item.avatar{min-height:84px;padding-left:72px;position:relative}
.collection .collection-item.avatar .circle{position:absolute;width:42px;height:42px;overflow:hidden;left:15px;display:inline-block;vertical-align:middle}
.collection .collection-item.avatar i.circle{font-size:18px;line-height:42px;color:#fff;background-color:#999;text-align:center}
.collection .collection-item.avatar .title{font-size:16px}
.collection .collection-item.avatar p{margin:0}
.collection .collection-item.avatar .secondary-content{position:absolute;top:16px;right:16px}
.collection .collection-item:last-child{border-bottom:none}
.collection .collection-item.active{background-color:#000000;color:#eafaf9}
.collection .collection-item.active .secondary-content{color:#fff}
.collection a.collection-item{display:block;transition:.25s;color:#000000}
.collection a.collection-item:not(.active):hover{background-color:#CC0000; color: white;}
.collection.with-header .collection-header{background-color:#fff;border-bottom:1px solid #e0e0e0;padding:10px 20px}
.collection.with-header .collection-item{padding-left:30px}
.collection.with-header .collection-item.avatar{padding-left:72px}
                                .card {
  display: inline-block;
  position: relative;
  width: 100%;
  margin: 25px 0;
  box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.14);
  border-radius: 3px;
  color: rgba(0,0,0, 0.87);
  background: #fff;
}
.card .card-height-indicator {
  margin-top: 100%;
}
.card .title {
  margin-top: 0;
  margin-bottom: 5px;
}
.card .card-image {
  height: 60%;
  position: relative;
  overflow: hidden;
  margin-left: 15px;
  margin-right: 15px;
  margin-top: -30px;
  border-radius: 6px;
}
.card .card-image img {
  width: 100%;
  height: 100%;
  border-radius: 6px;
  pointer-events: none;
}
.card .card-image .card-title {
  position: absolute;
  bottom: 15px;
  left: 15px;
  color: #fff;
  font-size: 1.3em;
  text-shadow: 0 2px 5px rgba(33, 33, 33, 0.5);
}
.card .category:not([class*="text-"]) {
  color: #999999;
}
.card .card-content {
  padding: 15px 20px;
}
.card .card-content .category {
  margin-bottom: 0;
}
.card .card-header {
  box-shadow: 0 10px 30px -12px rgba(0, 0, 0, 0.42), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
  margin: -20px 15px 0;
  border-radius: 3px;
  padding: 15px;
  background-color: #999999;
}
.card .card-header .title {
  color: #FFFFFF;
}
.card .card-header .category {
  margin-bottom: 0;
  color: rgba(255, 255, 255, 0.62);
}
.card .card-header.card-chart {
  padding: 0;
  min-height: 160px;
}
.card .card-header.card-chart + .content h4 {
  margin-top: 0;
}
.card .card-header .ct-label {
  color: rgba(255, 255, 255, 0.7);
}
.card .card-header .ct-grid {
  stroke: rgba(255, 255, 255, 0.2);
}
.card .card-header .ct-series-a .ct-point,
.card .card-header .ct-series-a .ct-line,
.card .card-header .ct-series-a .ct-bar,
.card .card-header .ct-series-a .ct-slice-donut {
  stroke: rgba(255, 255, 255, 0.8);
}
.card .card-header .ct-series-a .ct-slice-pie,
.card .card-header .ct-series-a .ct-area {
  fill: rgba(255, 255, 255, 0.4);
}
.card .chart-title {
  position: absolute;
  top: 25px;
  width: 100%;
  text-align: center;
}
.card .chart-title h3 {
  margin: 0;
  color: #FFFFFF;
}
.card .chart-title h6 {
  margin: 0;
  color: rgba(255, 255, 255, 0.4);
}
.card .card-footer {
  margin: 0 20px 10px;
  padding-top: 10px;
  border-top: 1px solid #eeeeee;
}
.card .card-footer .content {
  display: block;
}
.card .card-footer div {
  display: inline-block;
}
.card .card-footer .author {
  color: #999999;
}
.card .card-footer .stats {
  line-height: 22px;
  color: #999999;
  font-size: 12px;
}
.card .card-footer .stats .material-icons {
  position: relative;
  top: 4px;
  font-size: 16px;
}
.card .card-footer h6 {
  color: #999999;
}
.card img {
  width: 100%;
  height: auto;
}
.card .category .material-icons {
  position: relative;
  top: 6px;
  line-height: 0;
}
.card .category-social .fa {
  font-size: 24px;
  position: relative;
  margin-top: -4px;
  top: 2px;
  margin-right: 5px;
}
.card .author .avatar {
  width: 30px;
  height: 30px;
  overflow: hidden;
  border-radius: 50%;
  margin-right: 5px;
}
.card .author a {
  color: #3C4858;
  text-decoration: none;
}
.card .author a .ripple-container {
  display: none;
}
.card .table {
  margin-bottom: 0;
}
.card .table tr:first-child td {
  border-top: none;
}
.card [data-background-color="purple"] {
  background: linear-gradient(60deg, #CC0000, #CC0000);
  box-shadow: 0 12px 20px -10px rgba(156, 39, 176, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(156, 39, 176, 0.2);
}
.card [data-background-color="blue"] {
  background: linear-gradient(60deg, #26c6da, #00acc1);
  box-shadow: 0 12px 20px -10px rgba(0, 188, 212, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(0, 188, 212, 0.2);
}
.card [data-background-color="green"] {
  background: linear-gradient(60deg, #66bb6a, #43a047);
  box-shadow: 0 12px 20px -10px rgba(76, 175, 80, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(76, 175, 80, 0.2);
}
.card [data-background-color="orange"] {
  background: linear-gradient(60deg, #ffa726, #fb8c00);
  box-shadow: 0 12px 20px -10px rgba(255, 152, 0, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(255, 152, 0, 0.2);
}
.card [data-background-color="red"] {
  background: linear-gradient(60deg, #ef5350, #e53935);
  box-shadow: 0 12px 20px -10px rgba(244, 67, 54, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(244, 67, 54, 0.2);
}
.card [data-background-color] {
  color: #FFFFFF;
}
.card [data-background-color] a {
  color: #FFFFFF;
}

.card-stats .title {
  margin: 0;
}
.card-stats .card-header {
  float: left;
  text-align: center;
}
.card-stats .card-header i {
  font-size: 36px;
  line-height: 56px;
  width: 56px;
  height: 56px;
}
.card-stats .card-content {
  text-align: right;
  padding-top: 10px;
}

.card-nav-tabs .header-raised {
  margin-top: -30px;
}
.card-nav-tabs .nav-tabs {
  background: transparent;
  padding: 0;
}
.card-nav-tabs .nav-tabs-title {
  float: left;
  padding: 10px 10px 10px 0;
  line-height: 24px;
}

.card-plain {
  background: transparent;
  box-shadow: none;
}
.card-plain .card-header {
  margin-left: 0;
  margin-right: 0;
}
.card-plain .content {
  padding-left: 5px;
  padding-right: 5px;
}
.card-plain .card-image {
  margin: 0;
  border-radius: 3px;
}
.card-plain .card-image img {
  border-radius: 3px;
}

.iframe-container {
  margin: 0 -20px 0;
}
.iframe-container iframe {
  width: 100%;
  height: 500px;
  border: 0;
  box-shadow: 0 10px 30px -12px rgba(0, 0, 0, 0.42), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
}

.card-profile,
.card-testimonial {
  margin-top: 30px;
  text-align: center;
}
.card-profile .btn-just-icon.btn-raised,
.card-testimonial .btn-just-icon.btn-raised {
  margin-left: 6px;
  margin-right: 6px;
}
.card-profile .card-avatar,
.card-testimonial .card-avatar {
  max-width: 130px;
  max-height: 130px;
  margin: -50px auto 0;
  border-radius: 50%;
  overflow: hidden;
  box-shadow: 0 10px 30px -12px rgba(0, 0, 0, 0.42), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
}
.card-profile .card-avatar + .content,
.card-testimonial .card-avatar + .content {
  margin-top: 15px;
}
.card-profile.card-plain .card-avatar,
.card-testimonial.card-plain .card-avatar {
  margin-top: 0;
}</style>
						<div class="row">
							<div class="col-md-12">
                        
	                        <div class="card" style="margin-top:5%;">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Últimas Tutorías</h4>
	                                <p class="category">Acá confirmas tu asistencia a la tutoría pedida</p>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table" style="text-align: center;">
	                                    <thead class="text-primary" >
	                                    	<th style="text-align: center;">Tutoría</th>
	                                    	<th style="text-align: center;">Profesor</th>
	                                    	<th style="text-align: center;">Fecha</th>
	                                    	<th style="text-align: center;">Inicio</th>
	                                    	<th style="text-align: center;">Término</th>
											<th style="text-align: center;">Confirmar</th>
											<th style="text-align: center;">Cancelar</th>
	                                    </thead>
	                                    <tbody>
	                                        <tr>
	                                        	<td>Matemática</td>
	                                        	<td rowspan="2"><a href="#pablo">
    									<img class="img" src="../../resources/images/marc.jpg" style="width: 42px; height: 42px; border-radius: 50%;" />
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
						</div>
							<div class="row">
							<div class="col-md-12" >

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
										  <div class="form-group is-empty"><textarea class="form-control" rows="5"></textarea><span class="material-input"></span></div>
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
													<i class="material-icons btn btn-white btn-round btn-just-icon"></i>
													<div class="form-group is-empty"><input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Buscar"><span class="material-input"></span></div>
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
								              <img src="../../resources/images/marc.jpg" style="border-radius: 50%;" alt="" width="42px" height="42"> Raúl Silva </td> 
								              <td>A213</td> 
								              <td>29/05/17</td> 
								              <td>10:15</td> <td>12:30</td>
								              <td><input type="button" class="btn btn-warning btn-sm pull-right" value="Solicitar"></td>
								              </tr>

								              <tr>
								              <td><img class="img" src="../../resources/images/marc.jpg" style="width: 42px; height: 42px; border-radius: 50%;"> Javier Miles</td>
								              <td>A315</td>
								              <td>29/05/17</td>
								              <td>15:15</td> <td>16:30</td> 
								              <td><input type="button" class="btn btn-warning btn-sm pull-right" value="Solicitar"></td>
								              </tr>

								               <tr><td><img class="img" src="../../resources/images/marc.jpg" style="width: 42px; height: 42px; border-radius: 50%;"> Américo Peréz</td>
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

		</div></div>