<?php
	shouldBeAdmin();//if not admin, the user is redirected
	require '../pages/category_data.php';///importing the page
	$title="Fran's Furniture - Categories";//setting the title of page
	$contentForTemplate = loadFromTemplate('../templates/category_template.php', ['categories'=>$categories]);//temporary variable for sending to other page
	$content=loadFromTemplate('../templates/admin_template.php' ,['content'=>$contentForTemplate]);//content of the page to be displayed
?>