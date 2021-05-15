<?php /*se agrega la sentencia php para requeriri el archivo conexion.php*/
        include("conexionusu.php");
        $conexion=conectar();

        $sql="SELECT * FROM cliente";
        $query=mysqli_query($conexion,$sql);

        $filas=mysqli_fetch_array($query);      
        
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
                <form action="insertar.php" method="POST">
                    
                    <input type="text" class="form-control" name="nombre_clie" placeholder="Nombre" required>
                    <input type="text" class="form-control" name="apellidoPat_clie" placeholder="Apellido Paterno" required>
                    <input type="text" class="form-control" name="apellidoMat_clie" placeholder="Apellido Materno" required>
                    <input type="text" class="form-control" name="direccion_clie" placeholder="Dirección" required>
                    <input type="email" class="form-control" name="email" placeholder="Correo Electrónico" required>
                    <input type="password" class="form-control" name="contrasena" placeholder="Contraseña" required>
                    <input type="submit" class="btn-enviar" value="Enviar">            
                
                </form><br>

            

            <div class="columna2-caja">
                <h2>Tabla de Información</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Direccion</th>
                            <th>Email</th>
                            <th>Contraseña</th>
                            <th></th> <!-- lo dejo en vacio para que entre mi boton de editar  -->
                            <th></th> <!-- lo dejo en vacio para que entre mi boton de elimnar  -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($filas=mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <td><?php echo $filas['id_cliente'] ?></td>
                            <td><?php echo $filas['nombre_clie'] ?></td>
                            <td><?php echo $filas['apellidoPat_clie'] ?></td>
                            <td><?php echo $filas['apellidoMat_clie'] ?></td>
                            <td><?php echo $filas['direccion_clie'] ?></td>
                            <td><?php echo $filas['email'] ?></td>
                            <td><?php echo $filas['contrasena'] ?></td>
                            <td> <!-- agrego mi seccion de editar y eliminar -->
                            <a href="actualizar.php?id=<?php echo $filas['id_cliente']?>" class="btn-info"><input type="button" class=btn-info id="btn-info" value="Editar"></a>
                            </td> 
                            <td> <a href="delete.php?id=<?php echo $filas['id_cliente'] ?>" class=" btn-eliminar"><input type="button" class=btn-info id="btn-info" value="Eliminar"></a></td>                   
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <div>
        
    </div>

  
</body>
</html>