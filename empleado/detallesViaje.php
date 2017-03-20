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
            <li><a href="misViajes.php">Atras</a></li>
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
            <th>Estado</th>
          </tr>
          <tr>
            <td>1</td>
            <td>Vuelo</td>
            <td>500€</td>
            <td>25/05/2017</td> 
            <td><a href="">Imagen</a></td>
            <td>Aprobado</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Comida</td>
            <td>15€</td>
            <td>26/05/2017</td> 
            <td><a href="">Imagen</a></td>
            <td>Pendiente</td>
          </tr>
        </table>

        <form>
          <div id="nuevoPago">
            <h2>Introducir un nuevo Gasto</h2>
            <p><span><label for="descripcion">Descripcion del Gasto(*)
                <input type="text" name="descripcion" id="descripcion" minlength="3" maxlength="20" required placeholder="Introduzca su una descripción">
            </label></span>
            <span><label for="cantidad">Cantidad(*)
                <input type="text" name="cantidad" id="cantidad" required placeholder="Introduzca la cantidad">
            </label></span>
            <span><a href="">Subir una Foto</a></span></p>
          </div>
        </form>

        <p><input type="submit" value="Enviar"><input type="reset"></p>
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

