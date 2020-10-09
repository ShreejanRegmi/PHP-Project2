<?php
	shouldBeAdmin();
	$updatesTable= new Table('updates');//new table object is created
	if(isset($_POST['submit'])){//is form submitted
		$credentials=[
			'update_title'=>$_POST['title'],
			'update_description'=>$_POST['description'],
			'update_image'=>$_FILES['image']['name']
		];
		//move the uploaded files 
		move_uploaded_file($_FILES['image']['tmp_name'], '../images/updates/'.basename($_FILES['image']['name']));
		$updatesTable->saveInDatabase($credentials, 'update_id');//insert into table
		header('Location:index.php?pagemsg=Update Added');//redirect to another page
	}
	$title="Fran's Furniture - Updates";//title is set
	$contentForPage=loadFromTemplate('../templates/add_update_template.php', []);//content for other page is set
	$content=loadFromTemplate('../templates/admin_template.php', ['content'=>$contentForPage]);//content for main page is set
?>