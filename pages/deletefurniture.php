<?php
	shouldBeAdmin();//if not admin, redirected
	$furnitureTable=new Table('furniture');//table is created
	if(isset($_POST['id'])){
		$furnitureTable->deleteFromDatabase('furniture_id', $_POST['id']);//code to delete
	}
?>