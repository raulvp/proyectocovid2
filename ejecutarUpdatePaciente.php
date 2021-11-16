<?php

include "conexionbd.php";
conectarbd();
//echo "ingreso";
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
    cedula = '$carnet3',fechaNac='$fechaNac3',servicioSalud='$servicioSalud3', municipio='$municipio3',
    establecimiento='$estsalud3',fechaVac='$fechavacunacion3',dosis = '$dosis3',
    proveedor='$proveedor3',proxVac='$proxvacuna3' WHERE idPaciente = '$idPaciente3'";

    $ejecutarupdate = mysqli_query($conex,$sqlupdate);

    //mostrar tabla actualizada

    
    $sql = "select idPaciente,nombres,apellidos,serviciosSalud,proveedor,dosis from paciente";
    $consulta3 = mysqli_query($conex,$sql);



?>

<table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Nombres</th>
                      <th>Apellidos</th>
                      <th>Servicio Salud</th>
                      <th>Proveedor</th>
                      <th>Dosis</th>
                      <th></th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($fila = mysqli_fetch_assoc($consulta3)){
                                echo "<tr>";
                                $idPaciente3 = $fila['idPaciente'];
                                echo "<td>".$fila['nombres']."</td>";
                                echo "<td>".$fila['apellidos']."</td>";
                                echo "<td>".$fila['serviciosSalud']."</td>";
                                echo "<td>".$fila['proveedor']."</td>";
                                echo "<td>".$fila['dosis']."</td>";
                            ?>
                            <td class="align-middle">
                                <div class="btn-group btn-group-sm">
                                    <a href="#" class="btn btn-info" data-toggle="modal" data-target="#actualizar" onclick="actualizarReg(<?php echo $idPaciente3;?>)"><i class="fas fa-user-edit"></i></a>
                                    <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                </div>
                            </td>
                        <?php
                            }
                        ?>
                  </tbody>
                    <tfoot>
                    <tr>
                    <th>Nombres</th>
                      <th>Apellidos</th>
                      <th>Servicio Salud</th>
                      <th>Proveedor</th>
                      <th>Dosis</th>
                      <th></th>
                    </tr>
                    </tfoot>
                  </table>