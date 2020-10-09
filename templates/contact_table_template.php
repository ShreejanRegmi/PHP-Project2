<?php		
	echo '<table id="contact-table">';//table's designated element or data is created
	echo '<thead>';//table's designated element or data is created
	echo '<tr>';//table's designated element or data is created
	echo '<th>Name</th>';//table's designated element or data is created
	echo '<th>Address</th>';//table's designated element or data is created
	echo '<th>Telephone</th>';//table's designated element or data is created
	echo '<th>Description</th>';//table's designated element or data is created
	echo '<th>Status</th>';//table's designated element or data is created
	echo '<th>Reviewed By</th>';//table's designated element or data is created
	echo '<th style="width: 5%">&nbsp;</th>';//table's designated element or data is created
	echo '</tr>';//table's designated element or data is created
	foreach ($enquiries as $enquiry) {
		echo '<tr>';//table's designated element or data is created
		echo '<td>' . $enquiry['enquiry_name'] . '</td>';//table's designated element or data is created
		echo '<td>' . $enquiry['enquiry_address'] . '</td>';//table's designated element or data is created
		echo '<td>' . $enquiry['enquiry_telephone'] . '</td>';//table's designated element or data is created
		echo '<td>' . $enquiry['enquiry_description'] . '</td>';//table's designated element or data is created
		echo '<td>' . $enquiry['enquiry_status'] . '</td>';//table's designated element or data is created
		echo '<td>' . $enquiry['user_firstname'].' '.$enquiry['user_lastname'].'</td>';//table's designated element or data is created
		if($enquiry['enquiry_status']!="Completed"){
			echo '<td><button class="review-f" id="'.$enquiry['enquiry_id'].'">Mark Reviewed</button></td>';//table's designated element or data is created
		}
		echo '</tr>';//table's designated element or data is created
	}
	echo '</thead>';//table's designated element or data is created
	echo '</table>';//table's designated element or data is created
?>