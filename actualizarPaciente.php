<?php
    include "accionesbd/conexionbd.php";
    conectarbd();
    //echo "ingreso";
    $idP = $_POST['idPaci'];

    $consultaActualizar = "select * from paciente where idPaciente='$idP'";
    $ejecutar = mysqli_query($conex,$consultaActualizar);
    //echo "consulta";
    while($fila1 = mysqli_fetch_assoc($ejecutar)){
        $idPaciente1 = $fila1['idPaciente'];
      
?>



<div class="modal-body">
    <form action="">
    
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombres</label>
                    <input type="text" class="form-control" value="<?php echo $fila1['nombres'];?>" id="nombres1" placeholder="Nombres">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Apellidos</label>
                    <input type="text" class="form-control" value="<?php echo $fila1['apellidos'];?>" id="apellidos1" placeholder="Apellidos">
                  </div>
                  <div class="row">
                    <div class="col-4">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Carnet Identidad</label>
                        <input type="text" class="form-control" value="<?php echo $fila1['cedula'];?>" id="carnet1" placeholder="Carnet">
                      </div>
                      
                    </div>

                    <div class="col-4">
                      <div class="form-group">
                        <label>Fecha Nacimiento:</label>
                          <div class="input-group date" id="reservationdate" data-target-input="nearest">
                              <input type="text" value="<?php echo $fila1['fechaNac'];?>" id="fechaNac1" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                              <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                              </div>
                          </div>
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="form-group">
                        <label>Servicio Departamental Salud</label>
                        <select id="servicioSalud1" class="form-control select2" style="width: 100%;">
                          <option selected="selected"><?php echo $fila1['serviciosSalud'];?></option>
                          <option value="Cochabamba">Cochabamba</option>
                          <option value="La Paz">La Paz</option>
                          <option value="Santa Cruz">Santa Cruz</option>
                          <option value="Tarija">Tarija</option>
                          <option value="Potosi">Potosi</option>
                          <option value="Chuquisaca">Chuquisaca</option>
                          <option value="Oruro">Oruro</option>
                          <option value="Beni">Beni</option>
                          <option value="Pando">Pando</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-4">
                      <div class="form-group">
                        <label for="municipio">Municipio</label>
                        <input type="text" value="<?php echo $fila1['municipio'];?>" class="form-control" id="municipio1" placeholder="Municipio">
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="form-group">
                        <label for="estsalud">Establecimiento Salud</label>
                        <input type="text" value="<?php echo $fila1['establecimiento'];?>" class="form-control" id="estsalud1" placeholder="Establecimiento de Salud">
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="form-group">
                        <label>Fecha Vacunacion:</label>
                          <div class="input-group date" data-target-input="nearest">
                              <input type="text" value="<?php echo $fila1['fechaVac'];?>" id="fechavacunacion1" class="form-control datetimepicker-input" data-target="#fechavacunacion"/>
                              <div class="input-group-append" data-target="#fechavacunacion" data-toggle="datetimepicker">
                                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                              </div>
                          </div>
                      </div>
                    </div>


                  </div>
                  
                  <div class="row">
                    <div class="col-4">
                      <div class="form-group">
                        <label for="dosis">Dosis</label>
                        <select class="form-control" name="dosis" id="dosis1">
                        <option value="<?php echo $fila1['dosis'];?>"><?php echo $fila1['dosis'];?></option>  
                        <option value="1">Primera Dosis</option>
                          <option value="2">Segunda Dosis</option>
                          <option value="3">Tercera Dosis</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-4">
                      
                        <div class="form-group">
                          <label for="proveedor">Proveedor</label>
                          <select class="form-control" name="proveedor" id="proveedor1">
                          <option value="<?php echo $fila1['proveedor'];?>"><?php echo $fila1['proveedor'];?></option>    
                          <option value="SPUTNIK-V">SPUTNIK-V</option>
                            <option value="SHINOPARM">SHINOPARM</option>
                            <option value="JHONSSON">JHONSSON</option>
                            <option value="OTROS">OTROS</option>
                          </select>
                        </div>
                      
                    </div>
                    <div class="col-4">
                      <div class="form-group">
                        <label for="">Proxima Fecha Vacunacion</label>
                        <input type="text" value="<?php echo $fila1['proxVac'];?>" class="form-control" name="proxvacuna" id="proxvacuna1" placeholder="Proxima fecha de vacunacion">
                        
                      </div>
                    </div>

                  </div>
        

    </form>                                  
</div>
<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" onClick="ejecutarUpdate(<?php echo $idPaciente1;?>)">Actualizar</button>
</div>

<?php
    }
?>
