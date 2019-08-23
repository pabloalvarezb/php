<html lang=es> 
<head>
   <meta charset="UTF-8">
   
   <title>Ingreso / modificación de Docentes</title> 
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
            margin-top:10px;
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
    
    
<H1>Ingresar Datos del Docente</H1> 
<FORM role="form" name="regAcadForm" action="php/regAcadValFormDocentes.php" method="post"> 
<table>
    <tr>
    <th><INPUT TYPE="submit" NAME="ingresar" VALUE="Ingresar Docente" CLASS="boton2"></th>
    <th><INPUT TYPE="submit" NAME="editar" VALUE="Editar Docente" CLASS="boton2"></th>
    </tr>
    
    <tr><th><INPUT TYPE="text" NAME="rut" placeholder="Ingrese Rut" onfocus="this.value=''" class="textbox"></th></tr>
    <tr>
       <th><INPUT TYPE="text" NAME="nombres" placeholder="Ingrese Nombres"  class="textbox"> </th>
       <th><INPUT TYPE="text" NAME="apellidos" placeholder="Ingrese Apellidos"  class="textbox"> </th>              
    </tr>
    <tr>
       <th><INPUT TYPE="text" NAME="edad" placeholder="Ingrese Edad" onfocus="this.value=''" class="textbox"></th> 
       <th><select name = "sexo">
           <option value="" disabled selected>Seleccione sexo</option>   
           <option value = "Femenino">Femenino</option>
           <option value = "Masculino">Masculino</option>
    </select></th>
    </tr>
    <tr>
        
    </tr>
    <tr>
        <th>Fecha Nacimiento:<br><INPUT TYPE="date" NAME="fechanac" placeholder="dd/mm/aaaa" class="textboxfecha"></th>
        <th></th>
      
    </tr>
    <tr>       
        <th><INPUT TYPE="text" NAME="pais" placeholder="País"  class="textbox"></th>
        <th><INPUT TYPE="text" NAME="ciudad" placeholder="Ciudad"  class="textbox2"><INPUT TYPE="text" NAME="provincia" placeholder="Provincia"  class="textbox2"></th>
        
        
    </tr>
    <tr>
        <th><INPUT TYPE="text" NAME="telefono" placeholder="Teléfono"  class="textbox"></th>
        <th><INPUT TYPE="text" NAME="direccion" placeholder="Dirección"  class="textbox"></th>
        <th><INPUT TYPE="submit" NAME="guardar" VALUE="Guardar datos" CLASS="boton2"></th>
    </tr>
    <tr>
        <th><INPUT TYPE="text" NAME="profesion" placeholder="Ingrese Profesión"  class="textbox"></th>
        <th><INPUT TYPE="text" NAME="posgrados" placeholder="Ingrese Posgrados"  class="textbox"></th>
        <th><INPUT TYPE="button" NAME="salir" VALUE="Salir" CLASS="boton2" onclick="window.location.href='registroacademicomenu.php'"></th>
    </tr>
</table>
   
</FORM>

       
</body> 
</html>