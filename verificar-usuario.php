<?php

// $usuario = $_POST["usuario"];
// $contrasena = $_POST["contrasena"];
//Luego se conectara a la base de datos
$usuario = "chell";
$contrasena = "666";

if ($_POST["usuario"] == $usuario and $_POST["contraseña"] == $contrasena){
    echo "Accediste correctamente";
}
else{
    echo "Error en el usuario o en la contraseña";
}

?>