<?php
    /*datos para enlazar con mysql bd*/
    $servidor = "localhost";
    $usuariobd = "root";
    $password = "";
    $db = "covidbd";

    $conex = mysqli_connect($servidor,$usuariobd,$password,$db);
//////////////////////////////////////

    //obteniendo valores
    $usu = $_POST['usu'];
    $passw = $_POST['passw'];

    //consulta
    $consultasql = "select usuario,passw from usuario 
    where usuario='$usu' and passw='$passw'"; 

    $ejecutarconsulta = mysqli_query($conex,$consultasql);

    if(mysqli_num_rows($ejecutarconsulta)>0){
        echo "Logro ingresar";
        ?>
        
            <script>
                window.location.href = "http://localhost:9095/proyectocovid/index2.html";
            </script>
        <?php
    }
    else{
        echo "<p id='sinresultado'>El usuario no fue encontrado, por favor vuelva a ingresar sus datos</p>";
    }

    //mysqli_close($conex);

?>