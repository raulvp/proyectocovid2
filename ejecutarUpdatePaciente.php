<?php
    include "accionesbd/conexionbd.php";
    conectarbd();

    $idPaciente3 = $_POST['idPaci'];

    $nombres3 = $_POST['nombres'];
    $apellidos3 = $_POST['apellidos'];
    $carnet3 = $_POST['carnet'];
    $fechaNac3 = $_POST['fechaNac'];
    $servicioSalud3 = $_POST['servicioSalud'];
    $municipio3 = $_POST['municipio'];
    $estsalud3 = $_POST['estsalud'];
    $fechavacunacion3 = $_POST['fechavacunacion'];
    $dosis3 = $_POST['dosis'];
    $proveedor3 = $_POST['proveedor'];
    $proxvacuna3 = $_POST['proxvacuna'];

    /*********actualizar**/

    $sqlupdate = "UPDATE paciente SET nombres='$nombres3',apellidos = '$apellidos3', 
    cedula='$carnet3',fechaNac='$fechaNac3',serviciosSalud='$servicioSalud3', municipio='$municipio3',
    establecimiento='$estsalud3',fechaVac='$fechavacunacion3',dosis = '$dosis3',
    proveedor='$proveedor3',proxVac='$proxvacuna3' WHERE idPaciente = '$idPaciente3'";

    $ejecutarupdate = mysqli_query($conex,$sqlupdate);

    /*$sqlupdateex = "UPDATE paciente SET nombres='$nombres3' WHERE idPaciente = '$idPaciente3'";

    $ejecutarupdateex = mysqli_query($conex,$sqlupdateex);
*/
    echo 'realizo cambios';
    /*actualizar tabla*/
    $sqlmostrar3 = "select idPaciente,nombres,apellidos,serviciosSalud,proveedor,dosis from paciente";
    $consulta3 = mysqli_query($conex, $sqlmostrar3);


    
?>

        <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Nombres</th>
                      <th>Apellidos</th>
                      <th>Serv. Salud</th>
                      <th>Proveedor</th>
                      <th>Dosis</th>
                      <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
  
                    //$contador=0;
                    while($fila3 = mysqli_fetch_assoc($consulta3)){
                        //$contador++;
                        echo "<tr>";
                            $idPaciente3 = $fila3['idPaciente'];
                            //echo "<td>".$contador."</td>";
                            echo "<td>".$fila3['nombres']."</td>";
                            echo "<td>".$fila3['apellidos']."</td>";
                            echo "<td>".$fila3['serviciosSalud']."</td>";
                            echo "<td>".$fila3['proveedor']."</td>";
                            echo "<td>".$fila3['dosis']."</td>";  
                        ?>
                            <td>
                                <div class="btn-group">
                                    <a href="#" class="btn btn-warning" data-toggle='modal' data-target='#update' onClick="actualizarPaciente(<?php echo $idPaciente3;?>)"><i class="fas fa-pencil-alt"></i> Editar</a>
                                    <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i> Eliminar</a>
                                </div>
                            </td>    
                        </tr>
                    <?php
                    }
                    ?>
                    
                    
                    </tbody>
                    <tfoot>
                    <tr>
                    <th>Nombres</th>
                      <th>Apellidos</th>
                      <th>Serv. Salud</th>
                      <th>Proveedor</th>
                      <th>Dosis</th>
                      <th></th>
                    </tr>
                    </tfoot>
                  </table>