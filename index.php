<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>iTravel</title>
    <!-- The style.css file allows you to change the look of your web pages.
         If you include the next line in all your web pages, they will all share the same look.
         This makes it easier to make new pages for your site. -->
    <link href="normal.css" rel="stylesheet" type="text/css" media="all">
    <script type="text/javascript" src="jquery-2.2.0.min.js" ></script>
    
    <script type = "text/javascript">
      
      $(function(){
        $("#botonLogin").click(function(){
          switch($("#userName").val()){
            case "empleado":
              $("#userName").addClass("green-border");
              if($("#password").val() == "empleado"){
                location.href = "empleado/indexEmpleado.php";
              }
              else{
                $("#password").addClass("red-border");
               // $("#password").focus(); Descomentar si quiero que se ponga el cursor automaticamente en el input de la contraseña
              }
            break;
            case "responsable":
            $("#userName").addClass("green-border");
              if($("#password").val() == "responsable"){
                location.href = "responsable/indexResponsable.php";
              }
              else{
                $("#password").addClass("red-border");
               // $("#password").focus(); Descomentar si quiero que se ponga el cursor automaticamente en el input de la contraseña
              }
            break;
            case "gastos":
              $("#userName").addClass("green-border");
              if($("#password").val() == "gastos"){
                location.href = "gestionGastos/indexGestionGastos.php";
              }
              else{
                $("#password").addClass("red-border");
               // $("#password").focus(); Descomentar si quiero que se ponga el cursor automaticamente en el input de la contraseña
              }
            break;
            default:
              $("#userName").removeClass();
              $("#userName").addClass("red-border");
              $("#password").addClass("red-border");
            break;
          }; 
        });

        $("#password").click(function(){
          $("#password").val("");
        });
      });

    </script>
  </head>
  <body>

    <div class="index">
      <div class="container">
        <div class="login">
          <h1>Login</h1>
          <input id="userName" class="userName" placeholder="User Name"/>
          <br>
          <input id="password" class="password" type="password" placeholder="Password"/>
          <br>
          <button id="botonLogin" class="botonLogin"> Enter </button>
        </div>
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
