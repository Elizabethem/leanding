<?php

include("conexionusu.php");
$conexion=conectar();

//esta variable me va a permiti eliminar basandome en el id_cliente
$id_cliente=$_GET['id'];
    

$sql="DELETE FROM cliente WHERE id_cliente=$id_cliente";

$query=mysqli_query($conexion,$sql);

   // aqui despuess de que se borre voy agregar una alerta que me indique si el usuario fue eliminado y el window location me funciona para regresar al formulario de registro
 if($query){
      echo '
        <script>

           alert("Usuario eliminado correctamente");
           window.location = "usuarios.php";
         </script>
     ';
 }

?>









