<!DOCTYPE html>
<html>
    
<head>
<meta charset="utf-8">	
<title>Universidad Técnica de Concepción</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" media="screen" href="RegistroAcademico.css">
 
<script>
function cambiaf_a_normal($fecha){ 
   	ereg( "([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})", $fecha, $mifecha); 
   	$lafecha=$mifecha[3]."/".$mifecha[2]."/".$mifecha[1]; 
   	return $lafecha; 
}     
</script>
</head>

    
<body>
    <?php include "php/conexion.php"; ?>    
        
    <div class="menu">
      <div class="col-1 nav">
            <ul>
                                  
                <li class="col-9 mn1" ><a href="http://www.google.cl">Contacto</a></li>  
                
                <li class="col-9 mn2"><a href="http://www.aiep.cl/">La Universidad</a></li>
                
                <li class="col-9 mn3"><a href="https://www.google.com/maps">Ubicación</a></li>
                
                <li class="col-9 mn4"><a href="http://www.google.cl/">Noticias</a></li>
                
                     
            </ul>
        </div>
    </div>
    
      
    <div class="principal">
        <div class="col-5 header">
            <div class="col-6 titulo">
                <img class="logoaiep" src="img/logo-aiep.png">
                 Universidad Técnica de Concepción
            </div>
            
 
           
        </div>
    </div>


<div class="inicioSesion">

    <div class="descripcion">
        <div class="col-5">
            <div class="tituloini">Sistema de registro Académico</div><br>
            
            <div class="parrafo1"> Bienvenido al sitio en donde podrá ingresar al registro académico de la Universidad Técnica de concepción.<br><br>
            Para utilizar el sistema es necesario que usted realice el inicio de sesión<br><br>
            </div>
            
          
            <button id="btninicio" class="btninicio">Iniciar Sesión</button>

          
                <div id="ventanaInicio" class="ventana">

                
                  <div class="contenidoVentana">
                    <span class="cerrar">&times;</span>
                    <h3>Ingrese su usuario y contraseña</h3>
                      <form  role="form" name="regAcadForm" action="php/regAcadValForm.php" method="post">
                        
                          <div class="formInicio">
                        <div class="usuario">Usuario<br><INPUT TYPE="text" NAME="usuario" Pattern="^([A-Za-z0-9]*{20})$" required></div>
                        <br>    
                        <div class="contrasena">Contraseña<br><INPUT TYPE="password" NAME="clave" Pattern="^([A-Za-z0-9]*{20})$"  required></div>
                         <br>  
                            
                        <div class="btningresar">   
                        <INPUT  TYPE="submit" NAME="btningresar"  id="btningresar"  VALUE="ingresar">
                                                      
                         </div>
                            <div class="registrarse" > 
                                <a class= "registrarsefrase" href="registroacademicoadministrador.php">¿No tiene una cuenta?<br>Regístrese</a>
                             </div>
                          </div>
                                       
                      </form>
                    
                  </div>

                </div>
       
        </div>
        
    </div>
    
</div>
    
<script>
    var modal = document.getElementById("ventanaInicio");
    var btn = document.getElementById("btninicio");
    var span = document.getElementsByClassName("cerrar")[0];
    btn.onclick = function() {
      modal.style.display = "block";
    }
    span.onclick = function() {
      modal.style.display = "none";
    }
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
</script>

    
<div class="col-8 footer">
  <p>Sitio web realizado por Pablo Álvarez Ballesteros.<br> Evaluacion 2 <br> Taller de aplicaciones para internet en PHP.</p>
</div>

</body>
</html>

