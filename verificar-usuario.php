<?php
// $usuario = $_POST["usuario"];
// $contrasena = $_POST["contrasena"];
//Luego se conectara a la base de datos
$usuario = "ana";
$contrasena = "123";

if ($_POST["usuario"] == $usuario and $_POST["contraseña"] == $contrasena){
    echo "Accediste correctamente";
}
else{
    echo "Error en el usuario o en la contraseña";
}
?>