
<?php include "php/conexion.php"; 
if(!empty($_POST)){
	if(isset($_POST["rut"])){
		if($_POST["rut"]!=""){
            $rut= substr($_POST['rut'], 0, strlen($_POST['rut'])-1);
            $DV= trim(substr($_POST['rut'], -1));
			$sql1= "select * from alumnos where (RUT_ALUMNO=\"$rut\") ";
			$query = $con->query($sql1);
            $r=$query->fetch_array();	
			}
		}
	}     
    
?> 
<html lang=es> 
<head>
   <meta charset="UTF-8">

   <title>Ingreso / modificación de Alumnos</title> 
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
            width:50%;
            height: 30%;
            margin-left:25%;
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
            margin-left:30px;
            
        }
        .boton2{
            height:40px;
            width:120px;
            margin-left:10px;
            white-space: normal;
            
            
        }
        select{
            width:174px;
            margin-top:10px;
        }
        .textbox, .textbox2{
            
        }
        .textboxfecha{
            margin-top:3px;
            width:174px;
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
        @media print {
            #botonimprimir, #header, #esconder {
                display: none;
            }
        }
    
    </style>

    
</head> 

<body> 
        <div class="header" id="header">
            <div class="titulo">
                <img class="logoaiep" src="img/logo-aiep.png">
                 Universidad Técnica de Concepción
            </div>
            <img class="imgcerrarsesion" src="img/cerrarsesion.png">
            <a href="registroacademico.php">Cerrar sesión</a>
        </div>
    
    
<H1>Datos del Alumno</H1> 
<FORM role="form" name="regAcadForm" action="informe.php" method="post"> 
<table>
    <tr>
    <th><INPUT TYPE="submit" NAME="ingresar" VALUE="Ingresar Alumno" CLASS="boton2" DISABLED id="esconder"></th>
    <th><INPUT TYPE="submit" NAME="editar" VALUE="Editar Alumno" CLASS="boton2" DISABLED id="esconder"></th>
    </tr>
    
    <tr><th>Rut:<br><INPUT TYPE="text" NAME="rut"  class="textbox" value="<?php echo $r['RUT_ALUMNO'] .$r['DV'];?>" disabled></th></tr>
    <tr>
       <th>Nombres:<br><INPUT TYPE="text" NAME="nombres" value="<?php echo $r['NOMBRES'];?>" disabled class="textbox"> </th>
       <th>Apellidos:<br><INPUT TYPE="text" NAME="apellidos" Value="<?php echo $r['APELLIDOS'];?>" disabled class="textbox"> </th>              
    </tr>
    <tr>
       <th>Edad:<br><INPUT TYPE="text" NAME="edad" Value="<?php echo $r['EDAD'];?>" disabled class="textbox"></th> 
       <th>Sexo:<br><INPUT TYPE="text" NAME="SEXO" Value="<?php echo $r['SEXO'];?>" disabled class="textbox"></th>
    </tr>
    <tr>
        
    </tr>
    <tr>
        <th>Fecha Nacimiento:<br><INPUT TYPE="TEXT" NAME="fechanac"  Value="<?php echo $r['FECHA_NACIMIENTO'];?>" disabled class="textboxfecha"></th>
        <th></th>
        <th><INPUT TYPE="button" NAME="imprimir" VALUE="Imprimir" CLASS="boton2" id= "botonimprimir" onclick="window.print();"</th>
    </tr>
    <tr>       
        <th>Pais:<br><INPUT TYPE="text" NAME="pais" Value="<?php echo $r['PAIS'];?>" disabled  class="textbox"></th>
        <th>Ciudad / Provincia:<br><INPUT TYPE="text" NAME="ciudad" Value="<?php echo $r['CIUDAD'];?>" disabled  class="textbox2"><INPUT TYPE="text" NAME="provincia" Value="<?php echo $r['PROVINCIA'];?>" disabled  class="textbox2"></th>
        
        <th><INPUT TYPE="submit" NAME="guardar" VALUE="Guardar datos" CLASS="boton2" DISABLED id="esconder"></th>
    </tr>
    <tr>
        <th>Telefono:<br><INPUT TYPE="text" NAME="telefono" Value="<?php echo $r['TELEFONO'];?>" disabled  class="textbox"></th>
        <th>Direccion:<br><INPUT TYPE="text" NAME="direccion" Value="<?php echo $r['DIRECCION'];?>" disabled class="textbox"></th>
        <th><INPUT TYPE="button" NAME="regresar" VALUE="Regresar" CLASS="boton2" onclick="window.location.href='registroacademicoalumnosbuscar.php'" id="esconder"></th>
    </tr>
</table>
   
</FORM>


       
</body> 
</html>