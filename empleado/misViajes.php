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
            <li><a href="solicitarViaje.php">Solicitar Viaje</a></li>
            <li class="active"><a href="misViajes.php">Mis Viajes</a></li>
            <li><a href="../index.php">Log Out</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="misViajes">
      <div class="container">
        <table class="tablaViajes">
          <h1 class="cabeceraTablaViajes">Mis Viajes</h1>
          <tr>
            <th>Identificador</th>
            <th>Nombre</th>
            <th>Motivo</th>
            <th>Lugar </th>
            <th>Estado</th>
          </tr>
          <tr>
            <td>CHI8273661</td>
            <td>Mi Proyecto</td>
            <td>Presentación proyecto</td>
            <td>Chicago</td> 
            <td><a href="detallesViaje.php">En curso</a></td>
          </tr>
          <tr>
            <td>PAR7362920</td>
            <td>Mi Cliente</td>
            <td>Reunión con cliente</td>
            <td>Paris</td> 
            <td>Finalizado</td>
          </tr>
          <tr>
            <td>ROM2863923</td>
            <td>Mi Curso</td>
            <td>Curso de formación</td>
            <td>Roma</td> 
            <td>Finalizado</td>
          </tr>
        </table>
      </div>
    </div>
    
    <div class="footer">
      <div class="container"> 
        <p> Grupo 7 </p>
        <p class="a-center"><a href="https://www.upm.es">Universidad Politécnica De Madrid</a></p>
        <p class="p-right" id="fecha">ISST 2017</p>
      </div>
    </div>    
  </body>
</html>
