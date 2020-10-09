<?php
	if(!isSuperAdmin())
		header('Location:users&pagemsg=Only super admin is allowed access to this page');
	//users table object is created
	$usersTable=new Table('users');

	//if set uid
	if(isset($_GET['uid'])){
		if($_GET['uid']==1)
			header('Location:users&pagemsg=Cannot edit super admin account');//redirected to another page
		$userprpstmt=$usersTable->findInDatabase('user_id', $_GET['uid']);//query to find data
		$user=$userprpstmt->fetch();//fetch the data
	}
	else
		$user=[];//empty array
	
	//if data submitted
	if(isset($_POST['submit'])){
		//array to send data
		$credentials=[
			'user_id'=>$_POST['id'],
			'user_username'=>$_POST['username'],
			'user_firstname'=>$_POST['firstname'],
			'user_lastname'=>$_POST['lastname'],
			'user_email'=>$_POST['email'],
			'user_password'=>password_hash($_POST['password'], PASSWORD_DEFAULT),
			'user_type'=>$_POST['type']			
		];
		//query to add or update table data
		$usersTable->saveInDatabase($credentials, 'user_id');
		//page redirected to another page
		header('Location:users&pagemsg=User saved');
	}
	$title="Fran's Furniture - Users";//title is set for the main page
	$contentForPage=loadFromTemplate('../templates/user_form_template.php', ['user'=>$user]);//content for another page is set
	$content=loadFromTemplate('../templates/admin_template.php', ['content'=>$contentForPage]);//content for main page is set
?>