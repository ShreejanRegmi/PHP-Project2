<?php
	$enquiryTable= new Table('enquiries');//new table object created
	$enquiries=$enquiryTable->findFromJoinTables(['users'], ['user_id'], 'LEFT JOIN' ,''); //joining tables and finding data
?>