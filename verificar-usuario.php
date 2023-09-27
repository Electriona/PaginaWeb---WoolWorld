<?php

// $usuario = $_POST["usuario"];
// $contrasena = $_POST["contrasena"];
//Luego se conectara a la base de datos
$usuario = "chell";
$contrasena = "666";

if ($_POST["username"] == $usuario and $_POST["pass"] == $contrasena){
    echo "Accediste correctamente";
}
else{
    echo "Error en el usuario o en la contraseña";
}

?>