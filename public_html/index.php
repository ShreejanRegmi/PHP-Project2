<?php
	session_start();//session is started
	require_once '../db/db_connect.php';//db connection code imported
	require_once '../functions/functions.php';//functions page is imported
	require_once '../classes/table.php';//class table is imported
	if(isset($_GET['pagemsg'])){//if pagemsg variable is set
		echo $_GET['pagemsg'];//show the message
	}

	if(isset($_GET['thispage'])){//
		require_once '../pages/'.$_GET['thispage'].'.php';//the page is imported
	}
	else{
		require_once '../pages/home.php';//home page is opened
	}
	//array for setting values
	$templateVariables=[
		'title'=>$title,
		'content'=>$content
	];
	///the final content of page is shown
	echo loadFromTemplate('../templates/pagelayout.php', $templateVariables);
?>