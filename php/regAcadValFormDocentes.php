<?php
include "conexion.php";

if(isset($_POST['ingresar'])||isset($_POST['guardar'])){
       
    $rut= substr($_POST['rut'], 0, strlen($_POST['rut'])-1);
    $DV= trim(substr($_POST['rut'], -1));
    $fecha = $_POST['fechanac'];
    //$obj_fecha = date_create_from_format('d/m/Y', $fecha);
    //$mysqlfecha = date_format($obj_fecha, "Y-m-d");
    $mysqlfecha = date("Y-m-d", strtotime($fecha));
    $sql3 = "select RUT_ALUMNO from alumnos where RUT_ALUMNO = \"$rut\"";

    $encuentrarut=false;


    $query3 = $con->query($sql3);
    while ($r=$query3->fetch_array()) {
    $encuentrarut=true;
    break;
    }

    if($encuentrarut){
    print "<script>alert(\"El rut ya se encuentra ingresado en el sistema.\");
    window.location='../registroAcademicodocentes.php';</script>";
    }

    $sql = "INSERT INTO DOCENTES VALUES(
    \"$rut\",\"$DV\",\"$_POST[nombres]\",\"$_POST[apellidos]\",\"$_POST[edad]\",\"$mysqlfecha\",\"$_POST[ciudad]\",\"$_POST[provincia]\",\"$_POST[telefono]\",\"$_POST[direccion]\",\"$_POST[sexo]\",\"$_POST[profesion]\",\"$_POST[posgrados]\",\"$_POST[pais]\")";


    if ($con->query($sql) === TRUE) {
        print "<script>alert(\"Nuevo registro ingresado satisfactoriamente\");window.location='../registroacademicoalumnos.php';</script>";
    } else {
        echo "Error al ingresar el registro: " . $con->error;  
    }
    
}else if (isset($_POST['editar'])){
    $rut= substr($_POST['rut'], 0, strlen($_POST['rut'])-1);
    $DV= trim(substr($_POST['rut'], -1));
    $fecha = $_POST['fechanac'];
    $mysqlfecha = date("Y-m-d", strtotime($fecha));

    $sql1 = "UPDATE DOCENTES SET NOMBRES =\"$_POST[nombres]\",APELLIDOS = \"$_POST[apellidos]\",EDAD = \"$_POST[edad]\",FECHA_NACIMIENTO=\"$mysqlfecha\",CIUDAD =\"$_POST[ciudad]\",PROVINCIA = \"$_POST[provincia]\", TELEFONO =\"$_POST[telefono]\",DIRECCION = \"$_POST[direccion]\",SEXO = \"$_POST[sexo]\",PROFESION = \"$_POST[profesion]\",POSGRADOS = \"$_POST[posgrados]\",PAIS = \"$_POST[pais]\"
    WHERE RUT_DOCENTE =\"$rut\" ";



    if ($con->query($sql1) === TRUE) {
        print "<script>alert(\"Registro modificado satisfactoriamente\");window.location='../registroacademicodocentes.php';</script>";
    } else {
        echo "Error al modificar el registro: " . $con->error;  
    }

}




/* pasar fecha de mysql a php 
$newDate = date("d/m/Y", strtotime($originalDate));
*/


/* modulo 11 
function agregar_dv($rut) {

    while($rut[0] == "0") {
        $rut = substr($_rol, 1);
    }
    $factor = 2;
    $suma = 0;
    for($i = strlen($rut) - 1; $i >= 0; $i--) {
        $suma += $factor * $rut[$i];
        $factor = $factor % 7 == 0 ? 2 : $factor + 1;
    }
    $dv = 11 - $suma % 11;

    $dv = $dv == 11 ? 0 : ($dv == 10 ? "K" : $dv);
    return $dv;
}
*/



?>