<?php
	if(isset($_SESSION['session_id'])){//if logged in
		header('Location:index.php');//redirect ot homepage
	}
	login();//login function is called
	$title="Fran's Furniture - Login";//title is set 
	$content=loadFromTemplate("../templates/login_template.php", []);// content for page is set
?>