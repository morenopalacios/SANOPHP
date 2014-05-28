<html lang="es">

  <head>
     <meta charset="utf-8">
     <title> cronograma</title>
	   <script type="text/javascript" src="js/"></script>
     <link href="css/novedades.css" type="text/css" rel="stylesheet" />
  </head>

	<body>

    <!--esta es la perte del menu desplegable-->
    <ul id="menu1">
      <li><a href="Tutorial.php">Inicio</a></li>

     <li><a href="#">Archivo</a>
       <ul> 
          <li><a href="#">Nuevo </a></li>
          <li><a href="#">Abrir </a></li>
          <li><a href="#">Guardar</a></li> 
          <li><a href="#">Imprimir</a></li> 
          <li><a href="#">Enviar</a></li>  
          <li><a href="#">Salir</a></li> 
       </ul> 
     </li>

      <li><a href="#">Buscador</a>
      <li><a href="#">Configuración de cuenta</a></li><br><br><br><br>

     </ul>

    <!--esta es la perte de los modulos-->
   
     <ul id="menu2">
       <ul> 
          <li><a href="Menunovedad.php">Novedad</a></li>
          <li><a href="Funcionario.php">Funcionario</a></li>
          <li><a href="cronograma.php">Cronograma</a></li>
          <li><a href="estadistica.php">Estadistica</a></li>
          <li><a href="segModificarRol.php">Seguridad</a></li>
          <li><a href="#">Ayuda</a></li>
       </ul>
      </ul>
	  
	  
	  

   <div id="border">

    <!---este es el menu de cronograma-->
    <ul id="menu2">

	
       <ul> 
          <li><a href="cronograma-registrar.php">Registrar salida</a></li>
          <li><a href="cronogramaColsultar.php">Consultar salida</a></li>
          <li><a href="crono-modificar.php">Modificar salida</a></li>
          <li><a href="crono-cancelar.php">Cancelar salida</a></li>
          
          </ul>
      </ul>
	  
	  <br>
    <br>
    
	 <!--este es el formulario de cronograma-->

	 <div class="fomu">
	    <form>

	       <h3> Formulario de registro de salida</h3>
          <p>Fecha y hora<br><input type="text" id="prod"><br>
					Lugar de salida<br><input type="text" ><br>
					Funcionario a cargo<br><input type="text" ><br>
					Ficha de grupo<br><input type="text" ><br>
          Tipo de salida
          <br>
          <input type="radio" name="prue" >Pedagógico<br>
          <input type="radio" name="prue" >Recreativo<br>
           <input type="radio" name="prue" >Otro<br>
           Diga cual<br><input type="text" id="prod"><br></p>

          <button type="button" class="button">Salir</button>


      </form>
                              

    </div>
   </div> 
    <br>
	  
   

	 </body>
		  


  </html>