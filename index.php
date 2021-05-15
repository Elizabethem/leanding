
<!-- aqui ingreso mi codigo para darle la estructura a mi modeulo de login y crear cuenta  -->
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <!-- aqui mando a llamar nuevamente mi archivo css.html para activar las librerias que utilzare  -->
  <?php include 'css/css.html'; ?>
</head>
<!-- mando a llamar  -->

<!-- la etiqueta body es la segunda parte del cuerpo de mi pagina en html y es donde ingresare la estructura de mi modulo login/ -->
<body>
<!-- ingreso mis etiquetas div que me sirven para crear secciones asi mismo otorgarles una clase para facilitar el estilo que quiera darle  -->
  <div>
    <div class="container">  <!-- este sera mi contenedor general  --> 
      <div class="caja_trasera"> <!-- esta caja la utilizare para colocar dos opciones    -->
          <div class="caja_trasera-registro">  <!-- aqui colocare mis datos de registro   -->
              <h3>¿Aún no tienes una cuenta?</h3> <!--agrego mi titulo con la etiqueta h3  -->
              <br><p>Registrate para entrar a la plataforma</p> <!--aqui agrego un texto -->
              <br><a href="signup.php"><input type="button" id="btn-registro" value="Registrarse"></a> <!--aqui agrego mi boton -->
              <br><br>
              <a href="index.html">INICIO</a>
          </div>
      </div>
      <div class="contenedor-login"> <!--aqui agrego un contenedor general para tanto el login como el registro   -->
           <form action="php-login/ingreso.php" class="formulario-login">  <!--se crea el formulario -->
              <h2> Iniciar sesión </h2>  <!--se coloca eltitulo -->
              <input type="text" placeholder="Correo Electronico">
              <input type="password" placeholder="Contraseña">
              <div class="btn-centrar">
              <button>Entrar</button> 
              </div>           
            </form>                   
       </div>
    </div> 

  
</body>
</html>
