<?php
	//start of pdo code
	$pdo = new PDO('mysql:dbname=furniture;host=localhost', 'root', '', [PDO::ATTR_ERRMODE =>  PDO::ERRMODE_EXCEPTION ]);//pdo connection code
?>