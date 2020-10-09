<?php
	shouldBeAdmin();//if not admin, redirected 
	$categoryTable=new Table('category');// table object is created

	if(isset($_GET['cid'])){
		$categoryprpstmt= $categoryTable->findInDatabase('category_id', $_GET['cid']);//find data from table
		$category=$categoryprpstmt->fetch();//fetch the data
	}
	else 
		$category=[];//empty array
	if(isset($_POST['submit'])){
		//array to set values
		$credentials = [
			'category_id'=>$_POST['id'],
			'category_name' => $_POST['name']
		];
		$categoryTable->saveInDatabase($credentials, 'category_id');//query to insert or update in table is executed
		header('Location:categories&pagemsg=Category saved');///redirected to another page
	}
	$title="Fran's Furniture - Category";//title is set
	$contentForPage=loadFromTemplate('../templates/category_form_template.php', ['category'=>$category]);//content for another page is set
	$content=loadFromTemplate('../templates/admin_template.php', ['content'=>$contentForPage]);//content for main page is set
?>