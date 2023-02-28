<?php

$título=$_POST['título'];
$email=$_POST['email'];
$contenido=$_POST['contenido'];
$fecha=$_POST['fecha']
$imagen=$_POST['imagen']
$consulta="INSERT INTO `formulario` (`ID`, `título`, `email`, `contenido`, `fecha`, `imagen`) VALUES (NULL, ?, ?, ?, NOW(), ?);"


$conn= new PDO('mysql:dbname=test;host=localhost','root','');

$insertar=$conn->prepare($consulta);
$resultado=$insertar->execute([$título, $email, $contenido, $fecha, $imagen ]);

echo("<p> Se ha realizado correctamente el blog");


?>

