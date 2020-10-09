<?php
session_start();//session is started
require_once '../db/db_connect.php';//importing pdo code
require_once '../classes/table.php';//importing table class
if(isset($_POST['id'])){//is id is set
	$enquiryTable= new Table('enquiries');//new table object is created
	//array to set values 
	$credentials=[
		'enquiry_id'=>$_POST['id'],
		'enquiry_status'=>'Completed',
		'user_id'=>$_SESSION['session_id']
	];
	$enquiryTable->saveInDatabase($credentials, 'enquiry_id');//query to insert or update in database
	if(isset($_SESSION)){//if session is set
		echo $_SESSION['fullname']; //echo the content of fullname 
	}
}
?>