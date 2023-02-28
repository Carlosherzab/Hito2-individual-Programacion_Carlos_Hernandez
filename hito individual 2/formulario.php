<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title>¡Crea tu Blog!</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form action="db_hitoindividual2.php" method="post">
    	<h1>¡Crea tu Blog!</h1>
		<p>Título del blog: </p>
    	<input type="text" name="name" placeholder="Título del Blog">
		<p>Tu Email: </p>
    	<input type="email" name="email" placeholder="Email">
		<p>Contenido del blog: </p>
    	<input type="text" name="name" placeholder="Contenido del Blog">
		<p>Fecha de publicación: </p>
    	<input type="date" name="name" placeholder="Fecha de publicación">
		<p>Imagen del blog: </p>
    	<input type="text" name="name" placeholder="Imagen del Blog">
    	<br>
		<br><input type="submit" name="register">
    </form>
        <?php 
        include("db_hitoindividual2.php");
        ?>
</body>
</html>