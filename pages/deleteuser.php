<?php
	if(!isSuperAdmin())//if not super admin
		header('Location:users&pagemsg=Only super admin has this access');//redirected to other page
	$usersTable=new Table('users');//new table is created
	if(isset($_POST['id'])){
		if(isSuperAdmin()){//if main admin
			$usersTable->deleteFromDatabase('user_id', $_POST['id']);//delete query is run
		}
		else
			alert('Only super admin has this access');//show error message
	}
?>