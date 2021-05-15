<?php
// llamo mi conexionus.php
    include("conexionusu.php");
    $conexion=conectar();
    
    
    
    $id_cliente=$_GET['id'];
    $sql="SELECT * FROM cliente WHERE id_cliente=$id_cliente";
    $query=mysqli_query($conexion,$sql);

    $filas=mysqli_fetch_array($query);
    //  echo"<br><br><br><br><br><br>"; estos echos los coloque para poder detecra errores
    //  echo $filas['nombre_clie'];
    //  echo $filas[1];
    // print_r($filas);      
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/bf200bc975.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="../css/styleindex.css" >
    <style type="../css/styleindex.css"></style>
</head>
<body>
   
     <header> <!--aqui creare mi encabezado-->
      <div class="logo-place"><img src="../img/logo.png"></div>
        <nav class="menu-clientes">
            <ul>                
                <li><a href="../index.html">Salir </a></li>
            </ul>
        </nav>
    </header><br><br><br><br><br>
    <!-- colocare una caja en general -->
    <div class="container-caja">
    <!--  -->
        <div class="filas-caja">
<!-- seccionare en dos partes la primera parte la divire en tres columnas -->
            <div class="columna-caja">
                <h2>Ingrese los datos</h2>
                <!-- ingreso mi formulario par ingresar los datos -->
                <form action="update.php" method="POST">
                    <input type="hidden" class="form-control" name="id_cliente" value="<?php echo $filas['id_cliente'] ?>"   >
                    <label for="">Nombre Cliente</label>
                    <input type="text" class="form-control" name="nombre_clie" placeholder="Nombre" value="<?php echo $filas['nombre_clie'] ?>"  ><br><br>
                    <label for="">Apelido Paterno</label>
                    <input type="text" class="form-control" name="apellidoPat_clie" placeholder="Apellido Paterno" value="<?php echo $filas['apellidoPat_clie'] ?>"  ><br><br>
                    <label for="">Apelido Materno</label>
                    <input type="text" class="form-control" name="apellidoMat_clie" placeholder="Apellido Materno" value="<?php echo $filas['apellidoPat_clie'] ?>"  ><br><br>
                    <label for="">Dirección</label>
                    <input type="text" class="form-control" name="direccion_clie" placeholder="Dirección" value="<?php echo $filas['direccion_clie'] ?>"  ><br><br>
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Correo Electrónico" value="<?php echo $filas['email'] ?>"  ><br><br>
                    <label for="">Contraseña</label>
                    <input type="password" class="form-control" name="contrasena" placeholder="Contraseña" value="<?php echo $filas['contrasena'] ?>"  ><br><br>
                    <input type="submit" class="btn-enviar" value="Actualizar">   
                </form><br>       
                   
                </div>
            </div>
        <div>        
    </div> 
</body>
</html>