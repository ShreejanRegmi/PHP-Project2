<?php
	shouldBeAdmin();//redirected to another page if not admin
	require '../pages/user_data.php';//import user data page
	$title="Fran's Furniture - Users";//title is set
	$contentForPage=loadFromTemplate('../templates/user_page_template.php', ['users'=>$users]);//content for another page is set
	$content=loadFromTemplate('../templates/admin_template.php', ['content'=>$contentForPage]);//content for main page is set
?>