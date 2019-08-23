<html lang=es> 
<head>
   <meta charset="UTF-8">

   <title>Ingreso / modificación de notas del alumno</title> 
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
            width:45%;
            height: 30%;
            margin-left:28%;
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
    
    
<H1>Ingresar y Modificar Notas del Alumno </H1> 
<FORM role="form" name="regAcadFormNotas" action="php/regAcadValFormNotas.php" method="post"> 
<table>
    <tr>
    <th><INPUT TYPE="submit" NAME="ingresar" VALUE="Ingresar Notas" CLASS="boton2"></th>
    <th><INPUT TYPE="submit" NAME="editar" VALUE="Editar Notas" CLASS="boton2"></th>
    </tr>
    
    <tr><th><INPUT TYPE="text" NAME="rut" placeholder="Rut Alumno sin puntos ni guion"  class="textbox"></th></tr>
    <tr>
       <th><select name = "modulos">
           <option value="" disabled selected>Seleccione módulo</option>
            <option value = "Taller de programacion" >Taller de programacion</option>
            
            
           </select></th>
        <th><select name = "docentes">
            <option value="" disabled selected>Seleccione docente</option>
                <?php
           $get1="SELECT NOMBRES FROM DOCENTES";
            $query4 = $con->query($get1);
            while ($row1=$query4->fetch_array())
            {
            ?>
            <option value = "<?php echo($row1['NOMBRES'])?>" >
                <?php echo($row1['NOMBRES']) ?>
            </option>
            <?php
            }               
            ?> 
            </select></th>
    </tr>
    <tr>
       <th><INPUT TYPE="text" NAME="eval1" placeholder="Evaluación 1"  class="textbox3">
       <INPUT TYPE="text" NAME="eval2" placeholder="Evaluación 2"  class="textbox3">
       <INPUT TYPE="text" NAME="eval3" placeholder="Evaluación 3"  class="textbox3"></th> 
    </tr>
    <tr>
        <th><INPUT TYPE="text" NAME="examen1" placeholder="Exámen 1" class="textbox3"></th> 
    </tr>
    <tr>
        <th><INPUT TYPE="text" NAME="examen2" placeholder="Exámen 2"  class="textbox3"></th> 
        <th></th>
        <th><INPUT TYPE="submit" NAME="guardar" VALUE="Guardar datos" CLASS="boton2"></th>
    </tr>
    <tr>
        <th><INPUT TYPE="text" NAME="notaexamen" placeholder="Nota Exámen" class="textbox3"></th> 
        <th>Nota Final<br><INPUT TYPE="text" NAME="notafinal" value=""  class="textbox3"></th> 
         <th><INPUT TYPE="button" NAME="salir" VALUE="Salir" CLASS="boton2" class="textbox" onclick="window.location.href='registroacademicomenu.php'"></th>
    </tr>
   
</table>
   
</FORM>


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