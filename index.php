<?php
printf("Welcome to the Matrix: %s...", $_SERVER['REMOTE_ADDR']);

printf("Or did you mean: %s...?", $_SERVER['HTTP_X_FORWARDED_FOR']);

printf("Hello, I'm %s...",$_SERVER['UNIQUE_ID']);

$link = mysqli_connect($_ENV['MYSQL_HOST'],$_ENV['MYSQL_USER'],$_ENV['MYSQL_PASSWORD'],$_ENV['MYSQL_DB']);

if (!link){
	echo "No se pudo conectar con la DB: " .PHP_EOL;
} else {
	echo "Conexion con la DB exitosa";
}



?>
