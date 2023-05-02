<?php
session_start();
session_regenerate_id(true);

if(!isset($_SESSION["usuario"])) exit(); #Salir si sesión no está iniciada

#Recuperar los mensajes de un archivo
$mensajes = [];
if(file_exists("mensajes.txt")){
	$mensajes = explode("\n", file_get_contents("mensajes.txt"));
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Tablero</title>
</head>
<body>
	<h1>Hola <?php echo $_SESSION["usuario"]; ?></h1>
	<a href="logout.php">Salir</a>
	<a href="nuevo.html">Agregar mensaje</a>
	<h3>Aquí están todos los mensajes del día:</h3>
	<?php foreach ($mensajes as $mensaje) {
		echo strip_tags($mensaje) . "<br>";
	} ?>
</body>
</html>