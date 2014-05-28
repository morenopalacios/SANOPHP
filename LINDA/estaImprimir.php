<html lang="es">

  <head>
     <meta charset="utf-8">
     <title> cronograma</title>
     <link href="css/novedades.css" type="text/css" rel="stylesheet" />
  </head>

	<body>

    <!--esta es la perte del menu desplegable-->
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
    <ul id="menu2">
	
       <ul> 
          <li><a href="estaConsultar.php">Consultar grafica</a></li>
          <li><a href="estaimprimir.php">Imprimir grafica</a></li>
          
          
          </ul>
      </ul>
      <!--imagen de estadistica-->
      <img src="imagenes/estadistica.png">
      <br>
<!--formato de impresion de estadistica-->

      <form id="formu">

         <h3> Formato de impresion</h3>
          <p>estilo<br><input type="text" id="prod"><br>
          color<br><input type="text" ><br>
          Tamaño<br><input type="text" ><br>
          cuantas hojas
         <select id="pregunta3">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="1">4</option>
        <option value="2">5</option>
        <option value="3">6</option>
        <option value="1">7</option>
        <option value="2">8</option>
        <option value="3">9</option>
        <option value="1">10</option>
        <option value="2">11</option>
        <option value="3">12</option>
          <br>
         </select>
   </div> 
    <br>
	  
   

	 </body>
		  


  </html>