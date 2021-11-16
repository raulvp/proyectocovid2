<?php

    include "conexionbd.php";
    conectarbd();


    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $carnet = $_POST['carnet'];
    $fechaNac = $_POST['fechaNac'];
    $servicioSalud = $_POST['servicioSalud'];
    $municipio = $_POST['municipio'];
    $estsalud = $_POST['estsalud'];
    $fechavacunacion = $_POST['fechavacunacion'];
    $dosis = $_POST['dosis'];
    $proveedor = $_POST['proveedor'];
    $proxvacuna = $_POST['proxvacuna'];
    

    $sql = "INSERT INTO paciente (idPaciente, nombres, apellidos, cedula, fechaNac, serviciosSalud, municipio, establecimiento, fechaVac, dosis, proveedor, proxVac)
     VALUES (NULL, '$nombres', '$apellidos', '$carnet', '$fechaNac', '$servicioSalud', '$municipio', '$estsalud', '$fechavacunacion', '$dosis', '$proveedor', '$proxvacuna')";

     //ejecutar consulta
    $consulta = mysqli_query($conex,$sql);
     ?>

     <div class="alert alert-success">
        <strong>Registro Exitoso!</strong> Datos guardados en sistema
     </div>
<?php

?>