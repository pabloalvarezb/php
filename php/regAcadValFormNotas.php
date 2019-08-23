<?php
include "conexion.php";

if(isset($_POST['ingresar'])||isset($_POST['guardar'])){
       
    $rut= substr($_POST['rut'], 0, strlen($_POST['rut'])-1);
    //$DV= trim(substr($_POST['rut'], -1));
    //$nombremodulo = $_POST['modulos']
        
    $sql3 = "select RUT_ALUMNO from alumnos where RUT_ALUMNO = \"$rut\"";
    
    $encuentrarut=false;

    $query3 = $con->query($sql3);
    while ($r=$query3->fetch_array()) {
    $encuentrarut=true;
    break;
    }

    if($encuentrarut=false){
    print "<script>alert(\"El rut no encuentra registrado en el sistema.\");
    window.location='../registroAcademiconotas.php';</script>";
    }

    //$codmodulo = "select COD_MODULO from modulos where NOMBRE_MODULO = \"$_POST[modulos]\""
    
        
    $sql = "INSERT INTO ALUMNO_MODULO VALUES(
    \"$rut\",'123',\"$_POST[eval1]\",\"$_POST[eval2]\",\"$_POST[eval3]\",\"$_POST[examen1]\",\"$_POST[examen2]\",\"$_POST[notaexamen]\",\"$_POST[notafinal]\")";


    if ($con->query($sql) === TRUE) {
        print "<script>alert(\"Nuevo registro ingresado satisfactoriamente\");window.location='../registroacademiconotas.php';</script>";
    } else {
        print "<script>alert(\"Error al ingresar el registro, rut ya tiene notas en sistema, para modificar presione Editar notas\");window.location='../registroacademiconotas.php';</script>";
    }
    
}else if (isset($_POST['editar'])){
    $rut= substr($_POST['rut'], 0, strlen($_POST['rut'])-1);
    

    $sql1 = "UPDATE ALUMNO_MODULO SET NOTA_EVAL1 =\"$_POST[eval1]\",NOTA_EVAL2 = \"$_POST[eval2]\",NOTA_EVAL3 = \"$_POST[eval3]\",NOTA_EX1=\"$_POST[examen1]\",NOTA_EX2 =\"$_POST[examen2]\",EXAMEN = \"$_POST[notaexamen]\", NOTA_FINAL =\"$_POST[notafinal]\"
    WHERE RUT_ALUMNO =\"$rut\" AND COD_MODULO = 123";



    if ($con->query($sql1) === TRUE) {
        print "<script>alert(\"Registro modificado satisfactoriamente\");window.location='../registroacademiconotas.php';</script>";
    } else {
        print "<script>alert(\"Error al modificar el registro \");window.location='../registroacademiconotas.php';</script>";
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