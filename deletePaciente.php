<?php
    include "accionesbd/conexionbd.php";
    conectarbd();
    
    $idPaciente3 = $_POST['idPaci'];

    /*********eliminar**/

    $sqldelete = "delete from paciente where idPaciente=".$idPaciente3."";

    $ejecutardelete = mysqli_query($conex,$sqldelete);

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
                                    <a href="#" data-toggle='modal' data-target='#' class="btn btn-danger" onClick="eliminarPaciente(<?php echo $idPaciente3;?>)"><i class="fas fa-trash"></i> Eliminar</a>
                                
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