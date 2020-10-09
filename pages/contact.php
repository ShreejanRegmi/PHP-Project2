<?php
require '../pages/enquiry_data.php';//importing the page
$title= "Fran's Furniture - Contact";//setting the title of the page


if(isset($_POST['send'])){// if button is pressed
	if(strlen($_POST['telephone'])<9){
		echo '<script>alert("Enter valid telephone number")</script>';//validation of phone number
	}
	else{
		//making the array
		$credentials=[
		'enquiry_name'=>$_POST['fullname'],//for fullname
		'enquiry_address'=>$_POST['address'],//for address
		'enquiry_telephone'=>$_POST['telephone'],//for telephone 
		'enquiry_description'=>$_POST['description']//for description
		];
		$enquiryTable->saveInDatabase($credentials, 'enquiry_id');//saving the data
		header('Location:index.php?pagemsg=Enquiry sent successfully');	//redirect to page
	}
}


if(isUser() || isNotLoggedIn()){//not logged in or simple user
	$contentForPage=loadFromTemplate('../templates/contact_user_template.php', []);//setting content variable for another page
	$content=loadFromTemplate('../templates/user_template.php', ['content'=>$contentForPage]);//setting content variable for index page
}
else{
	require_once '../pages/enquiry_data.php';//importing the enquiry_data page
	$contentForPage=loadFromTemplate('../templates/contact_admin_template.php', ['enquiries'=>$enquiries]);//setting content variable for another page
	$content=loadFromTemplate('../templates/admin_template.php', ['content'=>$contentForPage]);//content variable for index page
}
?>