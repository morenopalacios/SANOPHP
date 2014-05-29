<html lang="es">

  <head>
     <meta charset="utf-8">
     <title> cronograma-modificar</title>
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

	 <!--modificar cronograma   -->

	 <div class="modi">

	    Seleccione la fecha que desea <br> modificar<br>
       <select id="pregunta3">
        <option value="1">11/03/2014</option>
        <option value="2">10/03/2014</option>
        <option value="3">09/03/2014</option>
        <option value="1">08/03/2014</option>
        <option value="2">07/03/2014</option>
        <option value="3">06/03/2014</option>
        <option value="1">05/03/2014</option>
        <option value="2">04/03/2014</option>
        <option value="3">03/03/2014</option>
        <option value="1">02/03/2014</option>
        <option value="2">01/03/2014</option>
        <option value="3">28/02/2014</option>
        </select><br>

        Ingrese nombre del registro<br><input type="text" ><br>
  
                              

    </div>
   </div> 
    <br>
	  
   

	 </body>
		  


  </html>