//-------------------------------------TAB NAV------------------------------------------------------------------
function carga_formulario(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
//----------------------------FUNCIONES REGISTRO USUARIOS--------------------------------------------------------------

function esconder_formularioRegistro(){
    $("#div_no_empleado").hide();
    $("#div_no_tarjeta").hide();
    $("#div_nombre").hide();
    $("#div_apellidos").hide();
    $("#div_email").hide();
    $("#div_subdireccion").hide();
    $("#div_departamento").hide();
    $("#div_estatus").hide();
    $("#div_genero").hide();
    $("#div_tipo_horario").hide();
    $("#div_horario").hide();

}
function mostrar_formularioHorario(horario_abierto) {
    if (horario_abierto == "v"){
        $("#div_horario").show();
    }
    else{
        $("#div_horario").hide();
    }
}
function mostrar_formularioRegistro(id_puesto) {
    if (id_puesto == 2) {  //Tipo de usuario: Auxiliar Capital Humano
        $("#div_no_empleado").show();
        $("#div_no_tarjeta").show();
        $("#div_nombre").show();
        $("#div_apellidos").show();
        $("#div_email").show();
        $("#div_subdireccion").hide();
        $("#div_departamento").hide();
        $("#div_estatus").show();
        $("#div_genero").show();
        $("#div_tipo_horario").hide();
        $("#div_horario").show();
    }

    if (id_puesto == 4) {  //Tipo de usuario: Subdirector
        $("#div_no_empleado").show();
        $("#div_no_tarjeta").hide();
        $("#div_nombre").show();
        $("#div_apellidos").show();
        $("#div_email").show();
        $("#div_subdireccion").show();
        $("#div_departamento").hide();
        $("#div_estatus").show(); //Un usuario de tipo Subdirector por default estará como activo para poder crearlo, ya que se validará que esa Subdirección no tenga un Subdirector asignado
        $("#div_genero").show();
        $("#div_tipo_horario").hide();
        $("#div_horario").hide();
    }
    if (id_puesto == 5) {  //Tipo de usuario: Jefe de Académia
        $("#div_no_empleado").show();
        $("#div_no_tarjeta").hide();
        $("#div_nombre").show();
        $("#div_apellidos").show();
        $("#div_email").show();
        $("#div_subdireccion").hide();
        $("#div_departamento").show();
        $("#div_estatus").hide(); //Un usuario de tipo Jefe de Académia por default estará como activo para poder crearlo,  ya que se validará que ese departamento no tenga un Jefe asignado
        $("#div_genero").show();
        $("#div_tipo_horario").hide();
        $("#div_horario").hide();
    }
    if (id_puesto == 6) {  //Tipo de usuario: Docente
        $("#div_no_empleado").show();
        $("#div_no_tarjeta").show();
        $("#div_nombre").show();
        $("#div_apellidos").show();
        $("#div_email").show();
        $("#div_subdireccion").hide();
        $("#div_departamento").show();
        $("#div_estatus").show();
        $("#div_genero").show();
        $("#div_tipo_horario").show();
        $("#div_horario").hide();
    }
    if (id_puesto == 7) {  //Tipo de usuario: PAAE
        $("#div_no_empleado").show();
        $("#div_no_tarjeta").show();
        $("#div_nombre").show();
        $("#div_apellidos").show();
        $("#div_email").show();
        $("#div_subdireccion").hide();
        $("#div_departamento").show();
        $("#div_estatus").show();
        $("#div_genero").show();
        $("#div_tipo_horario").hide();
        $("#div_horario").hide();
    }
    
}