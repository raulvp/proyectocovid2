function registrarVacuna(){

    
        //obtener valores
        var nombres = $('#nombres').val();
        var apellidos = $('#apellidos').val();
        var carnet = $('#carnet').val();
        var fechaNac = $('#fechaNac').val();
        var servicioSalud = $('#servicioSalud').val();
        var municipio = $('#municipio').val();
        var estsalud = $('#estsalud').val();
        var fechavacunacion = $('#fechavacunacion').val();
        var dosis = $('#dosis').val();
        var proveedor = $('#proveedor').val();
        var proxvacuna = $('#proxvacuna').val();
        

        $.post("accionesbd/insertarpaciente.php",{nombres:nombres,apellidos:apellidos,
            carnet:carnet,fechaNac:fechaNac,servicioSalud:servicioSalud,municipio:municipio,
            estsalud:estsalud,fechavacunacion:fechavacunacion,dosis:dosis,proveedor:proveedor,
            proxvacuna:proxvacuna},function(result){
          $("#respuesta").html(result);
          $("#respuesta").show();
        });
      
}

function actualizarRegistro(idreg){
  

}