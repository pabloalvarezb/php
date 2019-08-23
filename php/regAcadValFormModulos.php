<?php
include "conexion.php";


if(isset($_POST['ingresar'])||isset($_POST['guardar'])){
    
    $fechainicio = $_POST['fechainicio'];
    $fechatermino= $_POST['fechatermino'];
    
    $sqlfechainicio = date("Y-m-d", strtotime($fechainicio));
    $sqlfechatermino = date("Y-m-d", strtotime($fechatermino));
    $carrera= $_POST['carrera'];
    $consultacod = "SELECT COD_CARRERA FROM carreras WHERE NOMBRE_CARRERA = 'Tecnico en programacion'"


/*$sql = "INSERT INTO MODULOS VALUES(
    \"$_POST[codigo]\",\"$_POST[nombremodulo]\",'asdf',\"$_POST[semestre]\",\"$_POST[sede]\",'2001-01-01','2001-01-01',\"$_POST[sala]\",\"$_POST[bloque]\")";
*/
    
    $sql = "INSERT INTO modulos (`COD_MODULO`, `NOMBRE_MODULO`, `COD_CARRERA`, `SEMESTRE`, `SEDE`, `FECHA_INICIO`, `FECHA_TERMINO`, `SALA`, `BLOQUE`) VALUES('asdf','asdf','asdf','asdf','asdf','2019-01-01','2019-01-01','asd','asd')";

    
    if ($con->query($sql) === TRUE) {
        print "<script>alert(\"Nuevo registro ingresado satisfactoriamente\");window.location='../registroacademicomodulos.php';</script>";
    } else {
        echo "Error al ingresar el registro: " . $con->error;  
    }
    
}
/*
else if (isset($_POST['editar'])){
    $fechainicio = $_POST['fechainicio'];
    $fechatermino= $_POST['fechatermino'];
    
    $sqlfechainicio = date("Y-m-d", strtotime($fechainicio));
    $sqlfechatermino = date("Y-m-d", strtotime($fechatermino));

    $sql1 = "UPDATE ALUMNOS SET NOMBRES =\"$_POST[nombres]\",APELLIDOS = \"$_POST[apellidos]\",EDAD = \"$_POST[edad]\",FECHA_NACIMIENTO=\"$mysqlfecha\",CIUDAD =\"$_POST[ciudad]\",PROVINCIA = \"$_POST[provincia]\", TELEFONO =\"$_POST[telefono]\",DIRECCION =\"$_POST[direccion]\",SEXO = \"$_POST[sexo]\",PAIS =\"$_POST[pais]\"
    WHERE RUT_ALUMNO =\"$rut\" ";



    if ($con->query($sql1) === TRUE) {
        print "<script>alert(\"Registro modificado satisfactoriamente\");window.location='../registroacademicomodulos.php';</script>";
    } else {
        echo "Error al modificar el registro: " . $con->error;  
    }

}
*/



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