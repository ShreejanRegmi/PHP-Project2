<?php
	$furnitureTable= new Table('furniture');//new table object is created
	if(isset($_GET['id'])){
		$furnitureQuery=$furnitureTable->findInDatabase('furniture_id', $_GET['id']);//find data from database
		$furniture=$furnitureQuery->fetch();//fetch array data from variable
		$photo = new Table('furniture_images');//new table object created
		$photoQuery=$photo->findInDatabase('furniture_id',$_GET['id']);//query for furniture_images data
	}
?>