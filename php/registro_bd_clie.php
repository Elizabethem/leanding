¿<?php
//se manda a llamar el archvo conexion para que funcione adecuadamente
    include 'conexion.php';

//primero voy a crear mis variables  y $nombre y sera igual a el nombre del campo de bd agregando el post

    $nombre= $_POST['nombre'];
    $apell_pat= $_POST['apell_pat'];
    $apell_mat= $_POST['apell_mat'];
    $direccion= $_POST['direccion'];
    $email= $_POST['email'];
    $contrasena= $_POST['contrasena'];

//creare una variable query que me va a permitir guardar en la tabla cliente  //estos datos son igual que en la tabla de bd
//en el values van el nombre de las variables antes escritas
    $query = "INSERT INTO cliente(nombre_clie, apellidoPat_clie, apellidoMat_clie, direccion_clie, email, contrasena) 
             VALUES('$nombre', '$apell_pat', '$apell_mat', '$direccion', '$email', '$contrasena')";

 //para poder ejecutar mi query debo integrar lo siguiente 
    $ejecutar = mysqli_query($conexion, $query);

// aqui despuess de que se registre voy agregar una alerta que me indique si el usuario fue registrado y el window location me funciona para regresar al formulario de registro
    if($ejecutar){
        echo '
            <script>
                alert("Usuario registrado correctamente");
                window.location = "../signup.php";
            </script>
        ';
    }


    mysqli_close($conexion); /**/



?>