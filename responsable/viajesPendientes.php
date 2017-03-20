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
            <li><a href="indexResponsable.php">Inicio</a></li>
            <li><a href="viajesConfirmados.php">Viajes Confirmados</a></li>
            <li class="active"><a href="viajesPendientes.php">Viajes Pendientes De Confirmación</a></li>
            <li><a href="../index.php">Log Out</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="viajesPendientes">
      <div class="container">
        <table class="tablaViajes">
          <h1 class="cabeceraTablaViajes">Viajes Pendientes De Confirmación</h1>
          <tr>
            <th>Identificador</th>
            <th>Nombre</th>
            <th>Motivo</th>
            <th>Lugar </th>
            <th>Estado</th>
            <th colspan="2">Aprobación</th>
          </tr>
          <tr>
            <td>CHI8273661</td>
            <td>Mi Proyecto</td>
            <td>Presentación proyecto</td>
            <td>Chicago</td> 
            <td>Pendiente de aprobación</td>
            <td><button class="aceptarViaje">Aceptar</button></td>
            <td><button>Denegar</button></td>

          </tr>
          <tr>
            <td>PAR7362920</td>
            <td>Mi Cliente</td>
            <td>Reunión con cliente</td>
            <td>Paris</td> 
            <td>Pendiente de aprobación</td>
            <td><button class="aceptarViaje">Aceptar</button></td>
            <td><button>Denegar</button></td>
          </tr>
          <tr>
            <td>ROM2863923</td>
            <td>Mi Curso</td>
            <td>Curso de formación</td>
            <td>Roma</td> 
            <td>Pendiente de aprobación</td>
            <td><button class="aceptarViaje">Aceptar</button></td>
            <td><button>Denegar</button></td>
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
