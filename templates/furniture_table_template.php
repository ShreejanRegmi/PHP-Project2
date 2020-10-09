<?php
	echo '<table id="furniture-table">';//table's designated element or data is created
	echo '<thead>';//table's designated element or data is created
	echo '<tr>';//table's designated element or data is created
	echo '<th>Name</th>';//table's designated element or data is created
	echo '<th style="width: 10%">Price</th>';//table's designated element or data is created
	echo '<th style="width: 5%">&nbsp;</th>';//table's designated element or data is created
	echo '<th style="width: 5%">&nbsp;</th>';//table's designated element or data is created
	echo '</tr>';//table's designated element or data is created
	foreach ($furnitures as $furniture) {
		echo '<tr id="'.$furniture['user_id'].'">';//table's designated element or data is created
		echo '<td>' . $furniture['furniture_name'] . '</td>';//table's designated element or data is created
		echo '<td>£' . $furniture['furniture_price'] . '</td>';//table's designated element or data is created
		echo '<td><a style="float: right" href="savefurniture&fid=' . $furniture['furniture_id'] . '">Edit</a></td>';//table's designated element or data is created
		echo '<td><button class="delete-f" id="'.$furniture['furniture_id'].'">Delete</button></td>';//table's designated element or data is created
		echo '</tr>';//table's designated element or data is created
	}
	echo '</thead>';//table's designated element or data is created
	echo '</table>';//table's designated element or data is created