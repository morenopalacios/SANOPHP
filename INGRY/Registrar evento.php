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
         <li><a href="#">Registrar evento</a>
            <ul> 
              <li><a href="Registrar evento.php">Accidente</a></li>
              <li><a href="Registrar evento.php">Incidente</a></li>
              <li><a href="Registrar evento.php">Riesgo</a></li> 
              <li><a href="Registrar enfermedad.php">Enfermedad</a></li> 
              <li><a href="Registrar evento-incapacidad.php">Incapacidad</a></li>  
           </ul> 
          </li>

          <li><a href="consultar evento.php">Consultar evento</a></li>
          <li><a href="Registrar observaciones.php">Registrar observaciones</a></li>
          
          
       </ul>
     </ul>


       <!--ESTA ES LA PARTE DEL FORMULARIO DE INCIDENTE,ACCIDENTE, RIESGO ENFERMEDAD-->
       <div id="formulario1">
        <form>
           Seleccione funcionario<br>
        <select><br>
        <option>Paulo Andres Carmona</option>
        <option>William Fernando Betancur</option>
        <option>Carmelo Alzate</option>
        </select><br>
        Tipo de accidente<br>
        <input type="radio" id="" name="uno">Comun<br>
        <input type="radio" id="" name="uno">Laboral<br>
        Descripcion de evento<input type="text" id=""><br>
        Fecha de evento<br>
        <select>
         <option>Dia</option>
         <option>1</option>
         <option>2</option>
         <option>3</option>
         <option>4</option>
         <option>5</option>
         <option>6</option>
         <option>7</option>
         <option>8</option>
         <option>9</option>
         <option>10</option>
         <option>11</option>
         <option>12</option>
         <option>13</option>
         <option>14</option>
         <option>15</option>
         <option>16</option>
         <option>17</option>
         <option>18</option>
         <option>19</option>
         <option>20</option>
         <option>21</option>
         <option>22</option>
         <option>23</option>
         <option>24</option>
         <option>25</option>
         <option>26</option>
         <option>27</option>
         <option>28</option>
         <option>29</option>
         <option>30</option>
         <option>31</option>
         
       </select>

       <select>
         
         <option>Mes</option>
         <option>1</option>
         <option>2</option>
         <option>3</option>
         <option>4</option>
         <option>5</option>
         <option>6</option>
         <option>7</option>
         <option>8</option>
         <option>9</option>
         <option>10</option>
         <option>11</option>
         <option>12</option>
        </select>

        <select>
         <option>Año</option>
         <option>2014</option>
         
       </select><br>
        Lugar<input type="text" id=""><br>
        <select>
        <option>Hora</option>
         <option>1:00am</option>
         <option>2:00am</option>
         <option>3:00am</option>
         <option>4:00am</option>
         <option>5:00am</option>
         <option>6:00am</option>
         <option>7:00am</option>
         <option>8:00am</option>
         <option>9:00am</option>
         <option>10:00am</option>
         <option>11:00am</option>
         <option>12:00am</option>
         <option>1:00pm</option>
         <option>2:00pm</option>
         <option>3:00pm</option>
         <option>4:00pm</option>
         <option>5:00pm</option>
         <option>6:00pm</option>
         <option>7:00pm</option>
         <option>8:00pm</option>
         <option>9:00pm</option>
         <option>10:00pm</option>
         <option>11:00pm</option>
        
        </select><br>
       
       <input type="submit"  value="Registrar" />

      </form>
      </div>


      
   

   </div>  

	 </body>
		  


  </html>