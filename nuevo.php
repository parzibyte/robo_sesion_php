<?php

#Crear si no existe
if(!file_exists("mensajes.txt")){
	touch("mensajes.txt");
}
file_put_contents("mensajes.txt", $_POST["mensaje"] . PHP_EOL . PHP_EOL, FILE_APPEND);
header("Location: tablero.php");
?>