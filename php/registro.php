<?php

include('c.php');

$pnombre = $_POST['PNom'];
$snombre = $_POST['SNom'];
$app = $_POST['App'];
$apm = $_POST['Apm'];
$correo = $_POST['Corr'];
$fetcha = $_POST['Fecha'];
$usuario = $_POST['Usname'];
$contrasena = $_POST['Password'];


$verificacion = mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario = '$usuario'");

$r = mysqli_num_rows($verificacion);

if ($r > 0){
    echo '
       <script>
         alert("El nombre de usuario ya esta siendo utilizado!");
       </script>
    ';
    exit;
}

$insertar = mysqli_query($conexion, "INSERT INTO usuarios VALUES (null,'$pnombre','$snombre','$app','$apm','$fetcha','$correo','$usuario','$contrasena')");

if ($insertar){
    echo '
       <script>
          alert("REGISTRO EXITOSO");
          location.href = "index.html";
       </script>
    ';
}

mysqli_close($conexion);

?>