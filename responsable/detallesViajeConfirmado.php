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
            <li><a href="viajesConfirmados.php">Atras</a></li>
            <li><a href="../index.php">Log Out</a></li>
          </ul>
        </div>
      </div>
    </div>
    
    <div class="detallesViaje">
      <div class="container">
        <table class="tablaViajes">
          <h1 class="cabeceraTablaViajes">Viaje Chicago - Mi Proyecto</h1>
          <tr>
            <th>Identificador</th>
            <th>Descripción del Gasto</th>
            <th>Cantidad</th>
            <th>Fecha</th>
            <th>Imagen</th>
            <th colspan="2">Aprobación</th>
          </tr>
          <tr>
            <td>1</td>
            <td>Vuelo</td>
            <td>500€</td>
            <td>25/05/2017</td> 
            <td><a href="">Imagen</a></td>
            <td><button class="aceptarViaje">Aceptar</button></td>
            <td><button>Denegar</button></td>
          </tr>
          <tr>
            <td>2</td>
            <td>Comida</td>
            <td>15€</td>
            <td>26/05/2017</td> 
            <td><a href="">Imagen</a></td>
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