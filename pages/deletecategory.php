<?php
	shouldBeAdmin();//if not admin, the page is redirected 
	$categoryTable= new Table('category');//table is created
	if(isset($_POST['id'])){
		$categoryTable->deleteFromDatabase('category_id', $_POST['id']);//code to delete data
	}
?>