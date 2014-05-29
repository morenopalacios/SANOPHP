<!DOCTYPE html>
<html lang="es">

  <head>
     <meta charset="utf-8">
     <title> interfaz inicio </title>
	 <script type="text/javascript" src="js/inicio.js"></script>
     <link href="css/estilo.css" type="text/css" rel="stylesheet" />
  </head>





	<body>

    

	  <div class="introduccion">
        Nuestro objetivo es brindar facilidad y ordenemiento <br>
        en el manejo de novedades en  el área de salud ocupacional.
        
      </div>
     
     <div class="logeo">
         <form action="Tutorial.php" onsubmit="return inicio()">
           <div class="labelLogin">
                Usuario<br><br><br>
                Contraseña
           </div>
	          
            <div class="textLogin">
                  <input type="text" id="usuario"><br><br>
                  <input type="password" id="contrasena">
            </div>

            <div class="submitLogin">
              <input type="submit"  value="Ingresar" /><br> 
              <span class="subrayado">¿Olvido su contraseña?</span> 
            </div>

          </form>
     </div>

	



		    
	 </body>
		  


  </html>