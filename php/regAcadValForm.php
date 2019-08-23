<?php
include "conexion.php";

if(empty($_POST['usuario'])){
        print "<script>alert(\"Debe ingresar un usuario.\");
        window.location='../RegistroAcademico.php';
        
        </script>";
}
if(empty($_POST['clave'])){
        print "<script>alert(\"Debe ingresar una contraseña.\");
        window.location='../RegistroAcademico.php';
        
        </script>";
}

	

$sql1 = "select usuario from administradores where usuario = \"$_POST[usuario]\"";
$sql2 = "select clave from administradores where clave = \"$_POST[clave]\"";
$encuentrausuario=false;
$encuentraclave=false;
$query = $con->query($sql1);
$query1 = $con->query($sql2);
while ($r=$query->fetch_array()) {
$encuentrausuario=true;
break;
}
while ($r=$query1->fetch_array()) {
$encuentraclave=true;
break;
}

if($encuentrausuario && $encuentraclave){
print "<script>alert(\"Nombre de usuario y clave correctos. Usted será redirigido al sistema de Registro Académico\");
window.location='../registroAcademicomenu.php';</script>";
}else{
print "<script>alert(\"Usuario o clave incorrecta. Intente ingresar nuevamente\");
window.location='../RegistroAcademico.php';</script>"; 
}


?>