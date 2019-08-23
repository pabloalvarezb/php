<html lang=es> 
<head>
   <meta charset="UTF-8">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
     <!--<link href="/php/fuente.css" rel="stylesheet">-->
     <!--
    <script src="jquery-3.4.1.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="chile.js"></script>
    -->
   <title>Menú principal</title> 
    <style>
        html {
            font-family: "Lucida Sans", sans-serif;
            
        }
        body{
            background-color: #cecece;
        }
        table{
            background-color: #9a9a9a;
            border-radius: 5px;
            border-color: black;
            border-width: 2px;
            width:25%;
            height: 30%;
            margin-left:38%;
            padding:1%;
            font-size:12px;
            text-align: left;
        }
        h1{
            text-align: center;
        }
        .header {
            float:left;
            background-color: #313131;
            color: #ffffff;
            padding-left: 5%;
            padding-right: 15%;
            margin-top: 30px;
            margin-bottom: 30px;
            width:100%;
        }
        a {
           color: #ffffff;
            margin-top:1%;
            margin-right:5%;
        }

        a:link {
            text-decoration: none;
        }

        a:visited {
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        a:active {
            text-decoration: underline;
        }
         .imgcerrarsesion {
            width: 1.5%;
            height: 3%;
            float:left;
            padding-right:15px;
        }

        .logoaiep {
            width: 5%;
            height: 8%;
            float:left;
            padding-right:15px;
        }
        .titulo {
            font-size: 30px;
            width: 84%;
            float: left;
            padding: 2%;
        }
        .boton1{
            height:40px;
            margin-left:30px;
            
        }
        .boton2{
            height:60px;
            width:120px;
            margin-left:10px;
            white-space: normal;
            
        }
        select{
            width:174px;
            margin-top:10px;
        }
        .textbox, .textbox2, .textbox3{
            margin-top:10px;
        }
        .textbox3{
            width:100px;
        }
        .textboxfecha{
            margin-top:3px;
        }
        .labelfechanac{
            text-align: bottom;
        }

    </style>

</head> 

<body> 

    
      
        <div class="header">
            <div class="titulo">
                <img class="logoaiep" src="img/logo-aiep.png">
                 Universidad Técnica de Concepción
            </div>
            <img class="imgcerrarsesion" src="img/cerrarsesion.png">
            <a href="registroacademico.php">Cerrar sesión</a>
        </div>
    
    
<H1>Menú principal </H1> 

<table>
    <tr>
    <th><INPUT TYPE="button" NAME="notas" VALUE="Ingresar / Modificar Notas" CLASS="boton2" onclick="window.location.href='registroacademiconotas.php'"></th>
      <th><INPUT TYPE="button" NAME="alumnos" VALUE="Ingresar / Modificar Alumnos" CLASS="boton2" onclick="window.location.href='registroacademicoalumnos.php'"></th>
    </tr>
    
</table>
   



<?php
    
if(isset($_POST['submit'])){
       
// Matriz asociativa
$alumno['Nombre'] = $_POST['nombres'];
$alumno['Apellidos'] = $_POST['apellidos'];
$alumno['Cedula'] = $_POST['cedula'];
$alumno['Edad'] = $_POST['edad'];
$alumno['Fecha_Nac'] = $_POST['fech_nac'];
$alumno['Pais'] = $_POST['pais'];
$alumno['Direccion'] = $_POST['direccion'];
$alumno['Telefono'] = $_POST['telefono'];
$alumno['Sexo'] = $_POST['sexo'];
$alumno['Region'] = $_POST['region'];
$alumno['Comuna'] = $_POST['comuna'];

echo "<br>";
echo "<br>";


    
}
?>


       
</body> 
</html>