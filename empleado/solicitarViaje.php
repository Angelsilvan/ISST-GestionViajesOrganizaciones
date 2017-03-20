<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>iTravel</title>
    <link href="../normal.css" rel="stylesheet" type="text/css" media="all">
    <script type="text/javascript" src="../jquery-2.2.0.min.js" ></script>    

  </head>
  <body>
    <div class="navegador">
      <div class="container">
        <div class="nav nav-pills">
          <ul>
            <li><a href="indexEmpleado.php">Inicio</a></li>
            <li class="active"><a href="solicitarViaje.php">Solicitar Viaje</a></li>
            <li><a href="misViajes.php">Mis Viajes</a></li>
            <li><a href="../index.php">Log Out</a></li>
          </ul>
        </div>
      </div>
    </div>
    
    <div class="solicitudViaje">
        
        <form action="procesa.php" method="GET">
          <fieldset id="formViaje">
              <div id="datosSolicitante">
                  <h2>Datos del Solicitante</h2>
                  <p><span><label for="name">Nombre(*)
                      <input type="text" name="name" id="name" minlength="3" maxlength="20" required placeholder="Introduzca su nombre">
                  </label></span>
                  <span><label for="surname">Apellidos(*)
                      <input type="text" name="surname" id="surname" required placeholder="Introduzca sus apellidos">
                  </label></span>
                  <span><label for="employeeID">Numero de empleado(*)
                      <input type="text" name="employeeID" id="employeeID" required placeholder="ID">
                  </label></span></p>
                  <p><span><label for="street">Calle
                      <input type="text" name="street" id="street" minlength="2" maxlength="10" placeholder="Calle">
                  </label></span>
                  <span><label for="number">Número
                      <input type="number" name="number" id="number" min="0" max="1000" placeholder="Número">
                  </label></span></p>
                  <p><label for="postal">Código Postal
                      <input type="text" name="postal" id="postal" minlength="5" maxlength="5" placeholder="Código Postal">       
                  </label></p>
                  <p><label for="municipio">Municipio
                      <input type="text" name="municipio" id="municipio" placeholder="Municipio">
                  </label></p>
                  <p><label for="provincia">Provincia
                      <select name="provincia" id="provincia">
                          <option value="alava">Álava</option>
                          <option value="albacete">Albacete</option>
                          <option value="alicante">Alicante</option>
                          <option value="almeria">Almería</option>
                          <option value="asturias">Asturias</option>
                          <option value="avila">Ávila</option>
                          <option value="badajoz">Badajoz</option>
                          <option value="barcelona">Barcelona</option>
                          <option value="burgos">Burgos</option>
                          <option value="caceres">Cáceres</option>
                          <option value="cadiz">Cádiz</option>
                          <option value="cantabria">Cantabria</option>
                          <option value="toledo">Toledo</option>
                          <option value="madrid">Madrid</option>
                      </select>
                  </label></p>
                  <p><label for="country">País
                      <input type="text" name="country" id="country" size="30" value="España" readonly>
                  </label></p>
              </div>
              <div style="clear:both"></div>

              <fieldset id="datosViaje">
                  <legend>Datos del viaje</legend>
                  <p><label for="start_date">Periodo del viaje: 
                      <span>De
                          <input type="date" name="start_date" id="start_date" placeholder="dd/mm/aaaa">
                      </span>
                      <span>a
                          <input type="date" name="end_date" id="end_date" placeholder="dd/mm/aaaa">
                      </span>
                  </label></p>
                  <p><label for="Ciudad">Ciudad
                      <input type="text" name="Ciudad" id="Ciudad">
                  </label></p>
                  <p><label for="provincia_">Provincia
                      <input type="text" name="provincia_" id="provincia_">
                  </label></p>
                  <p><label for="country_">País
                      <input type="text" name="country_" id="country_">
                  </label></p>
                  <p><label for="motivo_">Motivo: 
                    <input type="radio" name="motivo_" id="motivo_">
                    <label>Reunión</label>
                    <input type="radio" name="motivo_" id="motivo_">
                    <label>Presentación</label>
                    <input type="radio" name="motivo_" id="motivo_">
                    <label>Formación</label>
                    <input type="radio" name="motivo_" id="motivo_">
                    <label>Vacaciones</label>
                  </label></p>
              </fieldset>

              <fieldset id="datosProyecto">
                  <legend>Datos del proyecto</legend>
                  <p><span><label for="nombreSupervisor">Nombre del Supervisor(*)
                      <input type="text" name="nombreSupervisor" id="nombreSupervisor" minlength="3" maxlength="20" required placeholder="Introduzca el nombre">
                  </label></span>
                  <span><label for="apellidosSupervisor">Apellidos del Supervisor(*)
                      <input type="text" name="apellidosSupervisor" id="apellidosSupervisor" required placeholder="Introduzca los apellidos">
                  </label></span></p>
                  <p><label for="codigoProyecto">Código del proyecto
                      <input type="text" name="codigoProyecto" id="codigoProyecto" placeholder="Codigo del proyecto">
                  </label></p>
                  <p><label for="sucursal">Sucursal
                      <select name="sucursal" id="sucursal">
                          <option value="alava">Álava</option>
                          <option value="albacete">Albacete</option>
                          <option value="alicante">Alicante</option>
                          <option value="almeria">Almería</option>
                          <option value="asturias">Asturias</option>
                          <option value="avila">Ávila</option>
                          <option value="badajoz">Badajoz</option>
                          <option value="barcelona">Barcelona</option>
                          <option value="burgos">Burgos</option>
                          <option value="caceres">Cáceres</option>
                          <option value="cadiz">Cádiz</option>
                          <option value="cantabria">Cantabria</option>
                          <option value="toledo">Toledo</option>
                          <option value="madrid">Madrid</option>
                      </select>
                  </label></p>
                  <p><label for="departamento">Departamento
                      <select name="departamento" id="departamento">
                          <option value="departamento1">Departamento 1</option>
                          <option value="departamento2">Departamento 2</option>
                          <option value="departamento3">Departamento 3</option>
                          <option value="departamento4">Departamento 4</option>
                      </select>
                  </label></p>
              </fieldset>

              <p><input type="submit" value="Enviar"><input type="reset"></p>
          </fieldset>
        </form>

    </div>


    <div class="footer" style="position: relative !important; padding-bottom: 3em !important;">
      <div class="container"> 
        <p> Grupo 7 </p>
        <p class="a-center"><a href="https://www.upm.es">Universidad Politécnica De Madrid</a></p>
        <p class="p-right" id="fecha">ISST 2017</p>
      </div>
    </div>
  </body>
</html>
