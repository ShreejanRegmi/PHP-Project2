<?php
	$title="Fran's Furniture - Home";//title is set
	if(isAdmin()){
		$contentForAdminHomepage=loadFromTemplate('../templates/admin_home_template.php', []);//content for another page is loaded
		$content=loadFromTemplate('../templates/admin_template.php', ['content'=>$contentForAdminHomepage]);//content for main page is loaded
	}
	else{
		require '../pages/update_data.php';//importing update data
		$contentForPage=loadFromTemplate('../templates/home_template.php', ['updates'=>$updates]);//content for other page is loaded
		$content=loadFromTemplate('../templates/user_template.php', ['content'=>$contentForPage]);//content for main page is loaded
	}
?>