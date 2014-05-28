<html lang="es">

  <head>
     <meta charset="utf-8">
     <title>Registrar evento </title>
	   <script type="text/javascript" src="js/novedades.js"></script>
     <link href="css/novedades.css" type="text/css" rel="stylesheet" />
  </head>

	<body>

    <!--esta es la perte del menu desplegable principal-->
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

    <!--esta es la perte del menu de los modulos-->
   
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
     <!--ESTA ES LA PARTE DEL MENU DE REGISTRO DE EVENTO-->
     <ul id="menu3">
       <ul> 
         <li><a href="Registrar funcionario.php">Registrar funcionario</a></li>
        <li><a href="Consultar funcionario.php">Consultar funcionario</a></li>
       
        </li>
         <li><a href="Cambiar clave-funcionario.php">Cambiar clave</a>
          
          
       </ul>
     </ul>

   

       <!--ESTA ES LA PARTE DEL FORMULARIO REGISTRO DE FUNCIONARIO -->

        <div id="funciona">
        <form>
        Nombres<input type="text" id=""><br>
        Apellidos<input type="text" id=""><br>
        Tipo de identificación<select><br>
        <option>Cedula de ciudania</option>
        <option>Cedula de extranjeria</option>
        <option>Tarjeta de identidad</option>
        </select><br>
        Identificacion<input type="text" id=""><br>
        Telefono<input type="text" id=""><br>
        E-mail<input type="text" id=""><br>
        Centro<select><br>
        <option>Diseño Confección y Moda</option>
        <option>Diseño y Manufactura del Cuero </option>
        <option>Tecnológico del Mobiliario</option>
        </select><br>
        Codigo<input type="text" id=""><br>
        EPS<input type="text" id=""><br>
        IPS<input type="text" id=""><br>
         <input type="submit"  value="Registrar" />
      </form>
      </div>

       

      
      </div>


      


   


   </div>  

	 </html>