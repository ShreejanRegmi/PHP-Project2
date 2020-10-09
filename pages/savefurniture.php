<?php
	shouldBeAdmin();//if not admin, redirect
	require '../pages/category_data.php';//page is imported
	
	$furnitureTable= new Table('furniture');//new table object created
	$furniture_images= new Table('furniture_images');//new table object created

	if(isset($_GET['fid'])){	
		$furnitureprpstmt= $furnitureTable->findInDatabase('furniture_id', $_GET['fid']);//query is run
		$furniture=$furnitureprpstmt->fetch();//data fetched
	}
	else{
		$furniture=[];//empty array
	}
	
	if(isset($_POST['submit'])){//if submit button pressed
		//array is set
		$credentials=[
			'furniture_id'=>$_POST['id'],
			'furniture_name' => $_POST['name'],
			'furniture_description' => $_POST['description'],
			'furniture_price' => $_POST['price'],
			'furniture_status'=>$_POST['status'],
			'furniture_condition'=>$_POST['condition'],
			'category_id' => $_POST['categoryId'],
			'user_id'=>$_SESSION['session_id']
		];
		$furnitureTable->saveInDatabase($credentials, 'furniture_id');//query is run to update or insert

		//if any file is uploaded 
		if($_FILES['image']['name'][0]!=""){
		$furnitureQForImage=$pdo->prepare("SELECT furniture_id FROM furniture WHERE furniture_id=(SELECT max(furniture_id) FROM furniture)");// query to find the furniture added recently
		$furnitureQForImage->execute();//query executed
		$ID=$furnitureQForImage->fetch();//data fetched
		$pid=$_POST['id'];

		$countImages= count($_FILES['image']['name']);//count the number of images uplaoded
		
		for ($i=0; $i < $countImages ; $i++) { 
				//if not empty
				if($pid!=""){
					$credentials2=[
						'furniture_id'=>$pid,
						'image_name'=>$_FILES['image']['name'][$i]
					];
				}
				else{
					$credentials2=[
						'furniture_id'=>$ID['furniture_id'],
						'image_name'=>$_FILES['image']['name'][$i]
					];
				}
				//query to insert or update in database
				$furniture_images->insertInDatabase($credentials2);
				//move the uploaded files
				move_uploaded_file($_FILES['image']['tmp_name'][$i], '../images/furniture/'.basename($_FILES['image']['name'][$i]));
			}	
		}
		//redirect to other page after addition
		header('Location:furnitures&pagemsg=Furniture saved');
	}
	$title="Fran's Furniture - Furnitures";//title is set
	$contentForPage= loadFromTemplate('../templates/furniture_form_template.php', ['furniture'=>$furniture, 'categories'=>$categories]);//content saved for other page
	$content=loadFromTemplate('../templates/admin_template.php', ['content'=> $contentForPage]);//content for main page is set
?>