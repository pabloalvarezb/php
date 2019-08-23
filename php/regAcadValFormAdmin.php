<?php
include "conexion.php";

if(isset($_POST['guardar'])){
       
    $rut= substr($_POST['rut'], 0, strlen($_POST['rut'])-1);
    $DV= trim(substr($_POST['rut'], -1));

    $sql3 = "select RUT_ADMINISTRADOR from administradores where RUT_ADMINISTRADOR = \"$rut\"";

    $encuentrarut=false;


    $query3 = $con->query($sql3);
    while ($r=$query3->fetch_array()) {
    $encuentrarut=true;
    break;
    }

    if($encuentrarut){
    print "<script>alert(\"El rut ya se encuentra ingresado en el sistema.\");
    window.location='../registroAcademicoAlumnos.php';</script>";
    }

    $sql = "INSERT INTO administradores VALUES(
    \"$rut\",\"$DV\",\"$_POST[nombres]\",\"$_POST[apellidos]\",\"$_POST[usuario]\",\"$_POST[clave]\")";


    if ($con->query($sql) === TRUE) {
        print "<script>alert(\"Nuevo registro ingresado satisfactoriamente, ahora puede iniciar sesión\");window.location='../registroacademico.php';</script>";
    } else {
        echo "Error al ingresar el registro: " . $con->error;  
    }
    
}



?>