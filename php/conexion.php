<?php
        // aqui realizo mi conexion a la bd mencionando el servidor, el usuario la contraseña y el nombre de a bd
    $conexion = mysqli_connect("localhost", "root", "", "euroalemana");

    // para saber si mi conexion se realizo satisfactoriamente colocare una condiconal 
       // if($conexion){  //si la variable logra conextase
          //  echo 'Conectado exitosamente a la Base de Datos';
      //  }else{ //si no se conecta el echo debe indicarlo
      //      echo ' No se ha podido conectar a la Base de Datos';
        //}
?>