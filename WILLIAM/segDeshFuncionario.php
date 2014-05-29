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
          <label for="idUsuario">Nombre de usuario</label> <br>
          <br>
          <br>
          <label for="idUsuario">Seleccione un rol</label>  
         </div>

         <div class="LRol">
          <input type="text"><br>
          <br>
          <br>
          <input type="radio" name="desHabFunc"> <label for="rol">Lider de centro</label> <br>
          <input type="radio" name="desHabFunc"> <label for="rol">Coordinador</label> <br>
          <input type="radio" name="desHabFunc"> <label for="rol">Funcionario/Usuario</label> <br>
        </div>
        <div class="Aceptar">
          <input id="subAceptar" type="submit" value="Aceptar"/>
          <br>
          <br>
          <br>
          <div class="labelAceptar">
          <label for="rol">Habilitar</label>  <br>
          <br>
          <label for="rol">Deshabilitar</label>
          </div>
          <div class="radioAceptar">
          <input type="radio" name="desHabFuncA"><br>
          <br>
          <input type="radio" name="desHabFuncA">  
          </div>
        </div>
        </form>
      </div>
   </div>  

	 </body>
		  

  </html>