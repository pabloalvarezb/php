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
   <title>Ingreso de Administrador</title> 
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
            width:40%;
            height: 30%;
            margin-left:30%;
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
            width:120px;
            
            white-space: normal;
            margin-top:15px;
        }
        .boton2{
            height:40px;
            width:120px;
            float:right;
            white-space: normal;
            margin-top:15px;
            
        }
        select{
            width:174px;
            margin-top:10px;
        }
        .textbox{
            margin-top:10px;
            width:100%;
        }
        .textboxfecha{
            margin-top:3px;
        }
        .labelfechanac{
            text-align: bottom;
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

    </style>

    
</head> 

<body> 
<?php include "php/conexion.php"; ?>  
    
      
        <div class="header">
            <div class="titulo">
                <img class="logoaiep" src="img/logo-aiep.png">
                 Universidad Técnica de Concepción
            </div>
            <img class="imgcerrarsesion" src="img/cerrarsesion.png">
            <a href="registroacademico.php">Cerrar sesión</a>
        </div>
    
    
<H1>Ingresar Datos del Administrador</H1> 
<FORM role="form" name="regAcadFormAdm" action="php/regAcadValFormAdmin.php" method="post"> 
<table>
    
    <tr><th><INPUT TYPE="text" NAME="rut" placeholder="Ingrese Rut sin puntos ni guión"  class="textbox"></th>
    </tr>
    <tr>
       <th><INPUT TYPE="text" NAME="nombres" placeholder="Ingrese Nombres" class="textbox"> </th> 
    </tr>
     <tr>
    <th><INPUT TYPE="text" NAME="apellidos" placeholder="Ingrese Apellidos" class="textbox"> </th>  
    </th>
    <tr>
       <th><INPUT TYPE="text" NAME="usuario" placeholder="Nombre de usuario"  class="textbox"></th> 
    </th>
    <tr>
        <th><INPUT TYPE="password" NAME="clave" placeholder="Ingrese su clave"  class="textbox"></th> 
    </tr>
    <tr>

        <th><INPUT TYPE="submit" NAME="guardar" VALUE="Guardar datos" CLASS="boton1">
        <INPUT TYPE="button" NAME="salir" VALUE="Salir" CLASS="boton2" onclick="window.location.href='registroacademico.php'" ></th>
    </tr>
</table>
   
</FORM>


       
</body> 
</html>