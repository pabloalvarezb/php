<?php
$host="localhost";
$user="root";
$password="";
$db="bdregistroacademico";
$con = new mysqli($host,$user,$password,$db);
if ($con->connect_error) {
    die("Conexión fallida: " . $con->connect_error);
}
?>