<html lang="es">

  <head>
     <meta charset="utf-8">
     <title> novedades </title>
	   <script type="text/javascript" src="js/novedades.js"></script>
     <link href="css/novedades.css" type="text/css" rel="stylesheet" />
  </head>

	<body>

    <!--esta es la parte del menu desplegable-->
    <ul id="menu1">
      <li><a href="Tutorial.php">Inicio</a></li>

     <li><a href="url...">Archivo</a>
       <ul> 
          <li><a href="url...">Nuevo </a></li>
          <li><a href="url...">Abrir </a></li>
          <li><a href="url...">Guardar</a></li> 
          <li><a href="url...">Imprimir</a></li> 
          <li><a href="url...">Enviar</a></li>  
          <li><a href="url...">Salir</a></li> 
       </ul> 
     </li>

      <li><a href="url...">Buscador</a>
      <li><a href="url...">Configuración de cuenta</a></li><br><br><br><br>

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
    <!-- Menu de Seguridad -->
    <ul id="menu2">
       <ul> 
          <li><a href="segModificarRol.php">Modificar rol usuario</a></li>
          <li><a href="segRegUsuario.php">Registrar usuario</a></li>
          <li><a href="segHabFuncionario.php">Habilitar funcionario</a></li>
          <li><a href="segDeshFuncionario.php">Deshabilitar funcionario</a></li>
          <li><a href="segRegClave.php">Registrar clave</a></li> 
       </ul>
      </ul>
      <!--div del fondo de la interfaz de Seguridad-->
      <div class="fondoSeguridad">
        <form>
          <div class="LUsuario">
          <label for="idUsuario">Deshabilitar funcionario</label>  
         </div>

         <div class="LRol">
          <input type="radio" name="desHabFunc"> <label for="rol">Si</label> 
          <input type="radio" name="desHabFunc"> <label for="rol">No</label> <br>
          <br>
          <br>
          <input type="submit" value="Buscar"/>
          <br>
          <br>
          <br>
          <input type="text" />
        </div>
        </form>
      </div>
   </div>  

	 </body>
		  

  </html>