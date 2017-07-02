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
                  <input   type="text" class="form-control"  name="nombre" value="<?=$usuario->get('usu_nombre')?>">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Rut</label>
                <div class="col-md-9">
                  <input  type="text"  name="rut" id="emp_rut"  style="height: 40px;width: 140px" maxlength="8"  onkeypress="return justNumbers(event);" value="<?=$usuario->get('usu_rut')?>"> -
                  <input  type="text"  style="height: 40px;width: 40px" name="dv" maxlength="1"   value="<?=$usuario->get('usu_dv')?>">
                </div>
              </div>
              
              <div class="form-group">
                <label class="col-md-3 control-label">Edad </label>
                <div class="col-md-9">
                  <input  type="text" class="form-control"  name="edad"  value="<?=$alumno->get('alu_edad')?>">
                </div>
              </div>
              <div class="form-group">
               <label class="col-md-3 control-label">Género  </label>
               <div class="col-md-9">
                <?php if ( $alumno->get('alu_nuevo_antiguo') == 'M'){ ?>
                     <label><input  checked='checked' id="genero" type="radio" value="M" name="genero">M</label>
                       <label><input  type="radio" value="F" name="genero">F</label>
                  <?php }else{ ?>
                  <label><input  type="radio" value="M" name="genero">M</label>
                    <label><input   checked='checked'  id="genero" type="radio" value="F" name="genero">F</label>
                  <?php } ?>
               </div>
             </div>
   
              <div  class="form-group">
                <label class="col-md-3 control-label">Fecha nacimiento</label>
                <div class="col-md-9">
                  <input  type="date"  class="form-control" name="fechanacimiento"  value="<?=$alumno->get('alu_fecha_nacimiento')?>">
                </div>
              </div>
               
              <div  class="form-group">
                <label class="col-md-3 control-label">pais</label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="pais"  value="<?=$alumno->get('alu_pais')?>">
                </div>
              </div>
               
              <div  class="form-group">
                <label class="col-md-3 control-label">Comuna</label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="comuna"  value="<?=$alumno->get('alu_comuna')?>">
                </div>
              </div>
           
              <div  class="form-group">
                <label class="col-md-3 control-label">direccion</label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="direcion"  value="<?=$alumno->get('alu_direccion')?>">
                </div>
              </div>
               
              <div  class="form-group">
                <label class="col-md-3 control-label">Ciudad</label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="ciudad"  value="<?=$alumno->get('alu_ciudad')?>">
                </div>
              </div>
                
              <div  class="form-group">
                <label class="col-md-3 control-label">region</label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="region"  value="<?=$alumno->get('alu_region')?>">
                </div>
              </div>
               
              <div  class="form-group">
                <label class="col-md-3 control-label">plan</label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="plan"  value="<?=$alumno->get('alu_plan')?>">
                </div>
              </div>
                
              <div  class="form-group">
                <label class="col-md-3 control-label">Fecha matricula</label>
                <div class="col-md-9">
                  <input  type="date"  class="form-control" name="fechamatricula"  value="<?=$alumno->get('alu_fechamatricula')?>">
                </div>
              </div>
                              
               <label class="col-md-3 control-label">Alumno nuevo  </label>
               <div class="col-md-9">
                  <?php if ( $alumno->get('alu_nuevo_antiguo') == '1'){ ?>
                     <label><input  checked='checked' id="alumnonuevo" type="radio" value="1" name="alumnonuevo">SI</label>
                       <label><input  type="radio" value="0" name="alumnonuevo">NO</label>
                  <?php }else{ ?>
                  <label><input  type="radio" value="1" name="alumnonuevo">SI</label>
                    <label><input   checked='checked'  id="alumnonuevo" type="radio" value="0" name="alumnonuevo">NO</label>
                  <?php } ?>
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
                  <input  type="text"  class="form-control"  name="telefono" value="<?=$alumno->get('alu_telefono')?>">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">celular </label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control"  name="celular" value="<?=$alumno->get('alu_celular')?>">
                </div>
              </div>
        
              <div  class="form-group">
                <label class="col-md-3 control-label">Correo </label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="correo"  value="<?=$usuario->get('usu_correo')?>">
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-3 control-label">Correo personal</label>
                <div class="col-md-9">
                  <input  type="text" class="form-control"  name="correo_personal" value="<?=$alumno->get('alu_correo_personal')?>">
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
                  <input  type="text"  class="form-control" name="ciudadfamilia"  value="<?=$alumno->get('alu_ciudad_familia')?>">
                </div>
              </div>
               
              <div  class="form-group">
                <label class="col-md-3 control-label">Region familia</label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="regionfamilia"  value="<?=$alumno->get('alu_region_familia')?>">
                </div>
              </div>
               
              <div  class="form-group">
                <label class="col-md-3 control-label">Ingresos familiar</label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="ingresofamiliar"  value="<?=$alumno->get('alu_ingreso_familiar')?>">
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
                  <input  type="text"  class="form-control" name="comunacolegio "  value="<?=$alumno->get('alu_region')?>">
                </div>
              </div>
                
              <div  class="form-group">
                <label class="col-md-3 control-label">Rolrbd</label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="rolrbd "  value="<?=$alumno->get('alu_rolrbd')?>">
                </div>
              </div>  
                
              <div  class="form-group">
                <label class="col-md-3 control-label">Colegio</label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="colegio "  value="<?=$alumno->get('alu_colegio')?>">
                </div>
              </div>
                <div  class="form-group">
                <label class="col-md-3 control-label">instituto </label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="inst"  value="<?=$alumno->get('alu_inst')?>">
                </div>
              </div>
              <div  class="form-group">
                <label class="col-md-3 control-label">Tipo colegio</label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="tipocolegio "  value="<?=$alumno->get('alu_tipo_colegio')?>">
                </div>
              </div>
                
              <div  class="form-group">
                <label class="col-md-3 control-label">Otro Colegio</label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="otrocolegio "  value="<?=$alumno->get('alu_otro_colegio')?>">
                </div>
              </div>
               
              <div  class="form-group">
                <label class="col-md-3 control-label">Egreso media</label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="egresomedia "  value="<?=$alumno->get('alu_egreso_media')?>">
                </div>
              </div>
               
              <div  class="form-group">
                <label class="col-md-3 control-label">puntaje psu</label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="puntajepsu "  value="<?=$alumno->get('alu_puntaje_psu')?>">
                </div>
              </div>
             
              <div  class="form-group">
                <label class="col-md-3 control-label">Instituto anterior</label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="insanterior "  value="<?=$alumno->get('alu_ins_anterior')?>">
                </div>
              </div>
              <div  class="form-group">
                <label class="col-md-3 control-label">Area</label>
                <div class="col-md-9">
                   <select name="area"  class="form-control" >
                     <?php foreach ($area as $key => $value): ?>
                       <option value="<?=$value->get('ar_id')  ?>" <?php if ($value->get('ar_id')==$usuario->get('usu_are_id')): ?> selected="selected"<?php endif ?> ><?=$value->get('ar_nombre')  ?></option>
                     <?php endforeach ?>                  
                      </select>
                </div>
              </div>
               
              <div  class="form-group">
                <label class="col-md-3 control-label">Carrera anterior</label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="carreraanterior "  value="<?=$alumno->get('alu_carrera_anterior')?>">
                </div>
              </div>

              <div  class="form-group">
                <label class="col-md-3 control-label">Semestre ingreso</label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="semestreingreso "  value="<?=$alumno->get('alu_semestre_ingreso')?>">
                </div>
              </div>
                
              <div  class="form-group">
                <label class="col-md-3 control-label">Reincorporado</label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="reincorporado "  value="<?=$alumno->get('alu_reincorporado')?>">
                </div>
              </div>
                 
              <div  class="form-group">
                <label class="col-md-3 control-label">Numero de asignaturas</label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="numasignatura "  value="<?=$alumno->get('alu_num_asignatura')?>">
                </div>
              </div>
                   
              <div  class="form-group">
                <label class="col-md-3 control-label">Semestre</label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="semestre "  value="<?=$alumno->get('alu_semestre')?>">
                </div>
              </div>
                
              <div  class="form-group">
                <label class="col-md-3 control-label">pagare</label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="pagare "  value="<?=$alumno->get('alu_semestre')?>">
                </div>
              </div>
           
              <div  class="form-group">
                <label class="col-md-3 control-label">Cupones</label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="cupones "  value="<?=$alumno->get('alu_cupones')?>">
                </div>
              </div>
           <div  class="form-group">
                <label class="col-md-3 control-label">Codigo pe </label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="codpe"  value="<?=$alumno->get('alu_cod_pe')?>">
                </div>
              </div>
                
              <div  class="form-group">
                <label class="col-md-3 control-label">Programa de estudio </label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="progamadeestudio"  value="<?=$alumno->get('alu_programa_estudio')?>">
                </div>
              </div>
                
              <div  class="form-group">
                <label class="col-md-3 control-label">Codigo mencion </label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="codigomencion"  value="<?=$alumno->get('alu_cod_mencion')?>">
                </div>
              </div>
               
              <div  class="form-group">
                <label class="col-md-3 control-label"> mencion </label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="mencion"  value="<?=$alumno->get('alu_mencion')?>">
                </div>
              </div>
               
              <div  class="form-group">
                <label class="col-md-3 control-label">jornada  </label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="jornada"  value="<?=$alumno->get('alu_jornada')?>">
                </div>
              </div>
               
              <div  class="form-group">
                <label class="col-md-3 control-label">Peec </label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="Peec"  value="<?=$alumno->get('alu_peec')?>">
                </div>
              </div>
               
              <div  class="form-group">
                <label class="col-md-3 control-label">Cantidad excompetencias </label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="cantidadexcompetencias"  value="<?=$alumno->get('alu_cant_ex_competencias')?>">
                </div>
              </div>
              <div  class="form-group">
                <label class="col-md-3 control-label">Cantidad homolaciones </label>
                <div class="col-md-9">
                  <input  type="text"  class="form-control" name="cantidadhomologaciones"  value="<?=$alumno->get('alu_cant_homologaciones')?>">
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


