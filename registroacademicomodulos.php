<html lang=es> 
<head>
   <meta charset="UTF-8">
    
   <title>Ingreso / modificación de Módulo</title> 
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
    
    
<H1>Ingresar y Modificar Datos del Módulo</H1> 
<FORM role="form" name="regAcadForm" action="php/regAcadValFormModulos.php" method="post"> 
<table>
    <tr>
    <th><INPUT TYPE="submit" NAME="ingresar" VALUE="Ingresar Módulo" CLASS="boton2"></th>
    <th><INPUT TYPE="submit" NAME="editar" VALUE="Editar Módulo" CLASS="boton2"></th>
    </tr>

    <tr>
       <th><INPUT TYPE="text" NAME="nombremodulo" placeholder="Nombre Módulo"  class="textbox"> </th>
       <th><INPUT TYPE="text" NAME="codigo" placeholder="Código Módulo" class="textbox"> </th>              
    </tr>
    <tr>
       <th><select name = "carrera">
        <option value="" disabled selected>Seleccione carrera</option>
          <?php
           $get="SELECT NOMBRE_CARRERA FROM CARRERAS";
            $query3 = $con->query($get);
            while ($row=$query3->fetch_array())
            {
            ?>
            <option value = "<?php echo($row['NOMBRE_CARRERA'])?>" >
                <?php echo($row['NOMBRE_CARRERA']) ?>
            </option>
            <?php
            }               
            ?> 
        </select></th> 

    </tr>
    <tr>
        <th><INPUT TYPE="text" NAME="semestre" placeholder="Semestre"  class="textbox"> </th>
        <th><INPUT TYPE="text" NAME="sede" placeholder="Sede"  class="textbox"> </th> 
        <th><INPUT TYPE="button" NAME="imprimir" VALUE="Imprimir datos del módulo" CLASS="boton2"></th>
    </tr>
    
    
    
    <tr>
        <th>Fecha Inicio:<br><INPUT TYPE="date" NAME="fechainicio" placeholder="dd/mm/aaaa" class="textboxfecha"></th>
        <th>Fecha Término:<br><INPUT TYPE="date" NAME="fechatermino" placeholder="dd/mm/aaaa" class="textboxfecha"></th>
        <th><INPUT TYPE="submit" NAME="guardar" VALUE="Guardar datos" CLASS="boton2"></th>
      
    </tr>
    <tr>
         <th><INPUT TYPE="text" NAME="sala" placeholder="Sala"  class="textbox"> </th> 
        <th><select name = "bloque" placeholder="bloque">
        <option value="" disabled selected>Seleccione bloque</option>
           <option value = "Diurno">Diurno</option>
           <option value = "Vespertino">Vespertino</option>
        </select></th>
        <th><INPUT TYPE="button" NAME="salir" VALUE="Salir" CLASS="boton2" class="textbox" onclick="window.location.href='registroacademicomenu.php'"></th>
    </tr>

</table>
   
</FORM>




       
</body> 
</html>