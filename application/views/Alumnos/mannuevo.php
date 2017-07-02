 <div class="row">
 <div class="col-md-12">
<div class="card">
<div class="card-body">
<?php if (!is_null($usuario)): ?>
 <form class="form form-horizontal" action="" method="post" id="remind">
      <div class="panel-group" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a   data-toggle="collapse" data-parent="#accordion" data-target="#AntecedentesEmpresario">Datos del Alumno</a>
            </h4>
          </div>
          <div  id="AntecedentesEmpresario" class="panel-collapse collapse">
            <div class="panel-body">
              <div class="form-group">
                <label class="col-md-3 control-label">Nombre Alumno </label>
                <div class="col-md-9">
                  <input  required="required" type="text" class="form-control"  name="nombre" value="">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Rut</label>
                <div class="col-md-9">
                  <input  type="text" required="required" name="rut" id="emp_rut"  style="height: 40px;width: 140px" maxlength="8"  onkeypress="return justNumbers(event);" value=""> -
                  <input  type="text" required="required" style="height: 40px;width: 40px" name="dv" maxlength="1"   value="">
                </div>
              </div>
              
              <div class="form-group">
                <label class="col-md-3 control-label">Edad </label>
                <div class="col-md-9">
                  <input  type="text" class="form-control"  name="edad" required="required" value="">
                </div>
              </div>
              <div class="form-group">
               <label class="col-md-3 control-label">Género  </label>
               <div class="col-md-9">             
                     <label><input  type="radio" value="M" name="genero">M</label>
                       <label><input  type="radio" value="F" name="genero">F</label> 
               </div>
             </div>
   
              <div  class="form-group">
                <label class="col-md-3 control-label">Fecha nacimiento</label>
                <div class="col-md-9">
                  <input  type="date"  class="form-control" name="fechanacimiento" required="required" value="">
                </div>
              </div>
               
              <div  class="form-group">
                <label class="col-md-3 control-label">pais</label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="pais" required="required" value="">
                </div>
              </div>
               
              <div  class="form-group">
                <label class="col-md-3 control-label">Comuna</label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="comuna" required="required" value="">
                </div>
              </div>
           
              <div  class="form-group">
                <label class="col-md-3 control-label">direccion</label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="direcion" required="required" value="">
                </div>
              </div>
               
              <div  class="form-group">
                <label class="col-md-3 control-label">Ciudad</label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="ciudad" required="required" value="">
                </div>
              </div>
                
              <div  class="form-group">
                <label class="col-md-3 control-label">region</label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="region" required="required" value="">
                </div>
              </div>
               
              <div  class="form-group">
                <label class="col-md-3 control-label">plan</label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="plan" required="required" value="">
                </div>
              </div>
                
              <div  class="form-group">
                <label class="col-md-3 control-label">Fecha matricula</label>
                <div class="col-md-9">
                  <input  type="date"  class="form-control" name="fechamatricula" required="required" value="">
                </div>
              </div>
                              
               <label class="col-md-3 control-label">Alumno nuevo  </label>
               <div class="col-md-9">
                     <label><input  id="alumnonuevo" type="radio" value="1" name="alumnonuevo">SI</label>
                       <label><input  type="radio" value="0" name="alumnonuevo">NO</label>
                   
               </div>
             </div>

              
          </div>
        </div>


        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion"  data-target="#contactosalumno">Contactos del alumno</a>
            </h4>
          </div>
          <div id="contactosalumno" data-parent="#accordion"  class="panel-collapse collapse">
            <div class="panel-body">
              <div class="form-group">
                <label class="col-md-3 control-label">Télefono </label>
                <div class="col-md-9">
                  <input  type="text" required="required" class="form-control"  name="telefono" value="">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">celular </label>
                <div class="col-md-9">
                  <input  type="text" required="required" class="form-control"  name="celular" value="">
                </div>
              </div>
        
              <div  class="form-group">
                <label class="col-md-3 control-label">Correo </label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="correo" required="required" value="">
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-3 control-label">Correo personal</label>
                <div class="col-md-9">
                  <input  type="text" class="form-control"  name="correo_personal" value="">
                </div>
              </div>    
              


            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion"  data-target="#datosfamiliares">Datos familiares</a>
            </h4>
          </div>
          <div id="datosfamiliares" data-parent="#accordion"  class="panel-collapse collapse">
            <div class="panel-body">
             
              
              <div  class="form-group">
                <label class="col-md-3 control-label">Ciudad familia</label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="ciudadfamilia" required="required" value="">
                </div>
              </div>
               
              <div  class="form-group">
                <label class="col-md-3 control-label">Region familia</label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="regionfamilia" required="required" value="">
                </div>
              </div>
               
              <div  class="form-group">
                <label class="col-md-3 control-label">Ingresos familiar</label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="ingresofamiliar" required="required" value="">
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- diego -->
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion"  data-target="#antecedentesdelalumno">Antecedentes del alumno</a>
            </h4>
          </div>
          <div id="antecedentesdelalumno" data-parent="#accordion"  class="panel-collapse collapse">
            <div class="panel-body">
             <div  class="form-group">
                <label class="col-md-3 control-label">Comuna colegio</label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="comunacolegio " required="required" value="">
                </div>
              </div>
                
              <div  class="form-group">
                <label class="col-md-3 control-label">Rolrbd</label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="rolrbd " required="required" value="">
                </div>
              </div>  
                
              <div  class="form-group">
                <label class="col-md-3 control-label">Colegio</label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="colegio " required="required" value="">
                </div>
              </div>
                <div  class="form-group">
                <label class="col-md-3 control-label">instituto </label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="inst" required="required" value="">
                </div>
              </div>
              <div  class="form-group">
                <label class="col-md-3 control-label">Tipo colegio</label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="tipocolegio " required="required" value="">
                </div>
              </div>
                
              <div  class="form-group">
                <label class="col-md-3 control-label">Otro Colegio</label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="otrocolegio " required="required" value="">
                </div>
              </div>
               
              <div  class="form-group">
                <label class="col-md-3 control-label">Egreso media</label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="egresomedia " required="required" value="">
                </div>
              </div>
               
              <div  class="form-group">
                <label class="col-md-3 control-label">puntaje psu</label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="puntajepsu " required="required" value="">
                </div>
              </div>
             
              <div  class="form-group">
                <label class="col-md-3 control-label">Instituto anterior</label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="insanterior " required="required" value="">
                </div>
              </div>
              <div  class="form-group">
                <label class="col-md-3 control-label">Area</label>
                <div class="col-md-9">
                   <select name="area"  class="form-control" >
                     <?php foreach ($area as $key => $value): ?>
                       <option value="<?=$value->get('ar_id')  ?>" ><?=$value->get('ar_nombre')  ?></option>
                     <?php endforeach ?>                  
                      </select>
                </div>
              </div>
               
              <div  class="form-group">
                <label class="col-md-3 control-label">Carrera anterior</label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="carreraanterior " required="required" value="">
                </div>
              </div>

              <div  class="form-group">
                <label class="col-md-3 control-label">Semestre ingreso</label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="semestreingreso " required="required" value="">
                </div>
              </div>
                
              <div  class="form-group">
                <label class="col-md-3 control-label">Reincorporado</label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="reincorporado " required="required" value="">
                </div>
              </div>
                 
              <div  class="form-group">
                <label class="col-md-3 control-label">Numero de asignaturas</label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="numasignatura " required="required" value="">
                </div>
              </div>
                   
              <div  class="form-group">
                <label class="col-md-3 control-label">Semestre</label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="semestre " required="required" value="">
                </div>
              </div>
                
              <div  class="form-group">
                <label class="col-md-3 control-label">pagare</label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="pagare " required="required" value="">
                </div>
              </div>
           
              <div  class="form-group">
                <label class="col-md-3 control-label">Cupones</label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="cupones " required="required" value="">
                </div>
              </div>
           <div  class="form-group">
                <label class="col-md-3 control-label">Codigo pe </label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="codpe" required="required" value="">
                </div>
              </div>
                
              <div  class="form-group">
                <label class="col-md-3 control-label">Programa de estudio </label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="progamadeestudio" required="required" value="">
                </div>
              </div>
                
              <div  class="form-group">
                <label class="col-md-3 control-label">Codigo mencion </label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="codigomencion" required="required" value="">
                </div>
              </div>
               
              <div  class="form-group">
                <label class="col-md-3 control-label"> mencion </label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="mencion" required="required" value="">
                </div>
              </div>
               
              <div  class="form-group">
                <label class="col-md-3 control-label">jornada  </label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="jornada" required="required" value="">
                </div>
              </div>
               
              <div  class="form-group">
                <label class="col-md-3 control-label">Peec </label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="Peec" required="required" value="">
                </div>
              </div>
               
              <div  class="form-group">
                <label class="col-md-3 control-label">Cantidad excompetencias </label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="cantidadexcompetencias" required="required" value="">
                </div>
              </div>
              <div  class="form-group">
                <label class="col-md-3 control-label">Cantidad homolaciones </label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="cantidadhomologaciones" required="required" value="">
                </div>
              </div>
            </div>
          </div>
        </div>
        </form>
   <?php endif ?>
        </div>
  </div>
  </div>
</div>

<script type="text/javascript">
  $(function(){
    $("#AntecedentesEmpresario").collapse('show');
  });
</script>


