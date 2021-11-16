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

function actualizarReg(idPaciente){
    let idPaci = idPaciente;
    $.post("../actualizarPaciente.php",{idPaci:idPaci},function(result){
    $("#contenidopacienteupdate").html(result);
    $("#contenidopacienteupdate").show();
  });


}

function ejecutarUpdate1(valor){
  alert(valor);
}


function ejecutarUpdate(idPaciente5){
  //alert("ingreso");
  /*var idPaciente3 = idPaciente;
//alert("ingreso");
  //obtener valores
  var nombres1 = $('#nombres1').val();
  var apellidos1 = $('#apellidos1').val();
  var carnet1 = $('#carnet1').val();
  var fechaNac1 = $('#fechaNac1').val();
  var servicioSalud1 = $('#servicioSalud1').val();
  var municipio1 = $('#municipio1').val();
  var estsalud1 = $('#estsalud1').val();
  var fechavacunacion1 = $('#fechavacunacion1').val();
  var dosis1 = $('#dosis1').val();
  var proveedor1 = $('#proveedor1').val();
  var proxvacuna1 = $('#proxvacuna1').val();
//alert(""+nombres);
  $.post("accionesbd/ejecutarUpdatePaciente.php",{idPaci:idPaciente3,nombres:nombres1,apellidos:apellidos1,
    carnet:carnet1,fechaNac:fechaNac1,servicioSalud:servicioSalud1,municipio:municipio1,
    estsalud:estsalud1,fechavacunacion:fechavacunacion1,dosis:dosis1,proveedor:proveedor1,
    proxvacuna:proxvacuna1},function(result){
    $("#actualizarTabla").html(result);
    $("#actualizarTabla").show();

  });*/

  $.post("../ejecutarPrueba.php",{idPaci:idPaciente5},function(result){
    $("#actualizarTabla").html(result);
    $("#actualizarTabla").show();

  });
}