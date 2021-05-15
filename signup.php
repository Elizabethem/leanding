
<!-- aqui ingreso mi codigo para darle la estructura a mi modeulo de login y crear cuenta  -->
<!DOCTYPE html>
<html>
<head>
  <title>Registarse</title>
  <!-- aqui mando a llamar nuevamente mi archivo css.html para activar las librerias que utilzare  -->
  <?php include 'css/css.html'; ?>
</head>

<!-- la etiqueta body es la segunda parte del cuerpo de mi pagina en html y es donde ingresare la estructura de mi modulo login/ -->
<body>
<!-- ingreso mis etiquetas div que me sirven para crear secciones asi mismo otorgarles una clase para facilitar el estilo que quiera darle  -->
  <main>
    <div class="container">  <!-- este sera mi contenedor general  --> 
          
      <div class="caja_trasera"> <!-- esta caja la utilizare para colocar dos opciones    -->
      
          <div class="caja_trasera-login">  <!-- aqui colocare mis datos de login   -->
              <h3>¿Ya tienes una cuenta?</h3> <!--agrego mi titulo con la etiqueta h3  -->
              <br><p>Inicia sesión para entrar a la plataforma</p><br>  <!--aqui agrego un texto -->
              <a href="index.php"><input type="button" id="btn-login" value="Iniciar Sesion"></a> <!--aqui agrego mi boton -->
              <br><br>
              <a href="index.html">INICIO</a>
          </div> 
          
      </div>
      <div class="contenedor-registro"> <!--aqui agrego un contenedor general para tanto el login como el registro   -->
            <form action="php/registro_bd_clie.php" method="POST" class="formulario-registro">
                <h2>Registrarse</h2>
                <input type="text" placeholder="Nombre" name="nombre"  required>
                <input type="text"placeholder="Apellido Paterno" name="apell_pat" required>
                <input type="text"placeholder="Apellido Materno" name="apell_mat" required>            
                <input type="text"placeholder="Direccion" name="direccion" required>                                
                <input type="email" placeholder="Correo Electronico" name="email" required>               
                <input type="password" placeholder="Contraseña" name="contrasena" required>
                <div class="centrar">
                <button>Registrar</button>
                </div>
            </form>          
       </div>
  </main> 

  
</body>
</html>
