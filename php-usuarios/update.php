<?php
// se debe agregar o incluir la conexion siempre
include("conexionusu.php");
$conexion=conectar();

// se deben agregar las variables de mi tabla 
$id_cliente=$_POST['id_cliente'];
$nombre_clie=$_POST['nombre_clie'];
$apellidoPat_clie=$_POST['apellidoPat_clie'];
$apellidoMat_clie=$_POST['apellidoMat_clie'];
$direccion_clie=$_POST['direccion_clie'];
$email=$_POST['email'];
$contrasena=$_POST['contrasena'];

// ingreso mis variables establecidas para igresar los valores de clientes
$sql="UPDATE cliente SET nombre='$nombre_clie', apellidoPat_clie='$apellidoPat_clie', apellidoMat_clie='$apellidoMat_clie', direccion='$direccion_clie', email='$email', contrasena='$contrasena' WHERE id_cliente=$id_cliente";
echo $sql;
$ejecutar= mysqli_query($conexion,$sql);
// colocar la condicion que si aplica la conexion y el igreso de datos despues me llebara al archivo usuarios.php 
// aqui despuess de que se registre voy agregar una alerta que me indique si el usuario fue registrado y el window location me funciona para regresar al formulario de registro
var_dump($ejecutar);
if($ejecutar){
    echo '
        <script>
            alert("Usuario registrado correctamente");
            window.location = "usuarios.php";
        </script>
    ';
}
mysqli_close($conexion);

?>
