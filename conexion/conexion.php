<?php

	$con = 'mysql:dbname=complementarias;host=localhost';
	$user = 'Urieta';
	$password = 'enano12345';

	try {
		$pdo = new PDO($con,$user,$password);
	} catch (Exception $e) {
		echo 'Error al conectarnos' .$e->getMessage();
	}

 ?>
