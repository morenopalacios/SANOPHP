<html lang="es">

  <head>
     <meta charset="utf-8">
     <title>Consultar funcionarios </title>
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
         <li><a href="Cambiar clave-funcionario.php">Cambiar clave</a>
          
          
       </ul>
     </ul>

     
       <div id="consulfun">
         Lista de nombres de los funcionarios<br>
          <select><br>
            Lista de funcionarios
            <option>Paulo Andres Carmona</option>
            <option>William Fernando Betancur</option>
            <option>Carmelo Alzate</option>
          </select><br>
          <input type="submit"   value="Ver"id="">
          <input type="submit"   value="Modificar"id=""><br>
        </div>


   </div>  

   </body>
      


  </html>