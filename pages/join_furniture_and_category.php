<?php
	//join queries
	 $furniture= new Table('furniture');
	 $furnitureQuery=(isset($_GET['c_id']))? $furniture->findFromJoinTables(['category'], ['category_id'],'LEFT JOIN',['furniture.category_id'=>$_GET['c_id'], 'furniture.furniture_status'=> 'show']) : $furniture->findFromJoinTables(['category'], ['category_id'], 'LEFT JOIN' ,['furniture.furniture_status'=>'show']);
	
	if(isset($_POST['new'])){
		$furnitureQuery=(isset($_GET['c_id']))? $furniture->findFromJoinTables(['category'], ['category_id'],'LEFT JOIN',['furniture.category_id'=>$_GET['c_id'], 'furniture.furniture_status'=> 'show', 'furniture.furniture_condition'=>'new']) : $furniture->findFromJoinTables(['category'], ['category_id'], 'LEFT JOIN' ,['furniture.furniture_status'=>'show', 'furniture.furniture_condition'=>'new']);
	}
	if(isset($_POST['second_hand'])){
	$furnitureQuery=(isset($_GET['c_id']))? $furniture->findFromJoinTables(['category'], ['category_id'],'LEFT JOIN',['furniture.category_id'=>$_GET['c_id'], 'furniture.furniture_status'=> 'show', 'furniture.furniture_condition'=>'second hand']) : $furniture->findFromJoinTables(['category'], ['category_id'], 'LEFT JOIN' ,['furniture.furniture_status'=>'show', 'furniture.furniture_condition'=>'second hand']);
	}
?>