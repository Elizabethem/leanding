<?php
function conectar(){
  $host="localhost";
  $user="root";
  $pass="";
 //agrego una variable para mi base de datos
  $bd="euroalemana";
//realizo mi conexion a la base de datos
    $conexion=mysqli_connect($host, $user, $pass);
 ///para saber si mi conexion se realizo satisfactoriamente colocare una condiconal 
    //if($conexion){  //si la variable logra conextase
    //echo 'Conectado exitosamente a la Base de Datos';
    //}else{ //si no se conecta el echo debe indicarlo
    //echo ' No se ha podido conectar a la Base de Datos';
    //}
    
   
   

    //realizo la conexion expecificamente a mi base de datos del proyecto
    mysqli_select_db($conexion,$bd);
    return $conexion;
    }   
?>