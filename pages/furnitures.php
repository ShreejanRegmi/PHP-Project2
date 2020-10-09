<?php
	require_once '../pages/category_data.php';//importing category data page
	require_once '../pages/join_furniture_and_category.php';///importing page containing join query
	require_once '../pages/furniture_data.php';//importing page containing furniture data
	$title="Fran's Furniture - Furnitures";//title is set

	if(isAdmin()){//if admin
		$contentForAdminFurniture=loadFromTemplate('../templates/admin_furniture_template.php', ['furnitures'=>$furnitures]);//content for another page is saved
		$content=loadFromTemplate('../templates/admin_template.php', ['content'=>$contentForAdminFurniture]);//content for main page is loaded
	}
	else
		$content=loadFromTemplate('../templates/furniture_template.php', ['furnitureQuery'=>$furnitureQuery, 'categories'=>$categories]);//content for main page is loaded
?>