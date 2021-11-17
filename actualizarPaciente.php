<?php
    include "accionesbd/conexionbd.php";
    conectarbd();
    //echo "ingreso";
    $idP = $_POST['idPaci'];

    $consultaActualizar = "select * from paciente where idPaciente='$idP'";
    $ejecutar = mysqli_query($conex,$consultaActualizar);
    //echo "consulta";
<<<<<<< HEAD
    while($fila = mysqli_fetch_assoc($ejecutar)){
        $idPaciente = $fila['idPaciente'];

    
    
?>

<!--Campos en ventana modal-->
=======
    while($fila1 = mysqli_fetch_assoc($ejecutar)){
        $idPaciente1 = $fila1['idPaciente'];
      
?>

>>>>>>> dev


<div class="modal-body">
    <form action="">
    
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombres</label>
<<<<<<< HEAD
                    <input type="text" class="form-control" value="<?php echo $fila['nombres'];?>" id="nombres1" placeholder="Nombres">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Apellidos</label>
                    <input type="text" class="form-control" value="<?php echo $fila['apellidos'];?>" id="apellidos1" placeholder="Apellidos">
=======
                    <input type="text" class="form-control" value="<?php echo $fila1['nombres'];?>" id="nombres1" placeholder="Nombres">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Apellidos</label>
                    <input type="text" class="form-control" value="<?php echo $fila1['apellidos'];?>" id="apellidos1" placeholder="Apellidos">
>>>>>>> dev
                  </div>
                  <div class="row">
                    <div class="col-4">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Carnet Identidad</label>
<<<<<<< HEAD
                        <input type="text" class="form-control" value="<?php echo $fila['cedula'];?>" id="carnet1" placeholder="Carnet">
=======
                        <input type="text" class="form-control" value="<?php echo $fila1['cedula'];?>" id="carnet1" placeholder="Carnet">
>>>>>>> dev
                      </div>
                      
                    </div>

                    <div class="col-4">
                      <div class="form-group">
                        <label>Fecha Nacimiento:</label>
                          <div class="input-group date" id="reservationdate" data-target-input="nearest">
<<<<<<< HEAD
                              <input type="text" value="<?php echo $fila['fechaNac'];?>" id="fechaNac1" class="form-control datetimepicker-input" data-target="#reservationdate"/>
=======
                              <input type="text" value="<?php echo $fila1['fechaNac'];?>" id="fechaNac1" class="form-control datetimepicker-input" data-target="#reservationdate"/>
>>>>>>> dev
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
<<<<<<< HEAD
                          <option selected="selected"><?php echo $fila['serviciosSalud'];?></option>
=======
                          <option selected="selected"><?php echo $fila1['serviciosSalud'];?></option>
>>>>>>> dev
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
<<<<<<< HEAD
                        <input type="text" value="<?php echo $fila['municipio'];?>" class="form-control" id="municipio1" placeholder="Municipio">
=======
                        <input type="text" value="<?php echo $fila1['municipio'];?>" class="form-control" id="municipio1" placeholder="Municipio">
>>>>>>> dev
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="form-group">
                        <label for="estsalud">Establecimiento Salud</label>
<<<<<<< HEAD
                        <input type="text" value="<?php echo $fila['establecimiento'];?>" class="form-control" id="estsalud1" placeholder="Establecimiento de Salud">
=======
                        <input type="text" value="<?php echo $fila1['establecimiento'];?>" class="form-control" id="estsalud1" placeholder="Establecimiento de Salud">
>>>>>>> dev
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="form-group">
                        <label>Fecha Vacunacion:</label>
                          <div class="input-group date" data-target-input="nearest">
<<<<<<< HEAD
                              <input type="text" value="<?php echo $fila['fechaVac'];?>" id="fechavacunacion1" class="form-control datetimepicker-input" data-target="#fechavacunacion"/>
=======
                              <input type="text" value="<?php echo $fila1['fechaVac'];?>" id="fechavacunacion1" class="form-control datetimepicker-input" data-target="#fechavacunacion"/>
>>>>>>> dev
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
<<<<<<< HEAD
                        <option value="<?php echo $fila['serviciosSalud'];?>"><?php echo $fila['serviciosSalud'];?></option>  
=======
                        <option value="<?php echo $fila1['dosis'];?>"><?php echo $fila1['dosis'];?></option>  
>>>>>>> dev
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
<<<<<<< HEAD
                          <option value="<?php echo $fila['proveedor'];?>"><?php echo $fila['proveedor'];?></option>    
=======
                          <option value="<?php echo $fila1['proveedor'];?>"><?php echo $fila1['proveedor'];?></option>    
>>>>>>> dev
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
<<<<<<< HEAD
                        <input type="text" value="<?php echo $fila['proxVac'];?>" class="form-control" name="proxvacuna" id="proxvacuna1" placeholder="Proxima fecha de vacunacion">
=======
                        <input type="text" value="<?php echo $fila1['proxVac'];?>" class="form-control" name="proxvacuna" id="proxvacuna1" placeholder="Proxima fecha de vacunacion">
>>>>>>> dev
                        
                      </div>
                    </div>

                  </div>
        

    </form>                                  
</div>
<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
<<<<<<< HEAD
        <button type="button" class="btn btn-primary" onClick="ejecutarUpdate(<?php echo '$idPaciente';?>)">Actualizar</button>
=======
        <button type="button" class="btn btn-primary" data-dismiss="modal" onClick="ejecutarUpdate(<?php echo $idPaciente1;?>)">Actualizar</button>
>>>>>>> dev
</div>

<?php
    }
?>
