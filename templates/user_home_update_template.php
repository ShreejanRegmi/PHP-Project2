<?php
foreach ($updates as $update) {//for all the updates
	echo '<li>';//list's designated element or data is created
	if($update['update_image']!="")//if the image is set
	echo '<a href="../images/updates/'. $update['update_image'].'"><img src="../images/updates/'.$update['update_image'].'"/></a>';//the image of the update is shown
			echo '<div class="details">';//div class that contains the details
				echo '<h3>' . $update['update_title'] . '</h3>';//the title of the update is shown
				echo '<h5>' . $update['update_date'] . '</h5>';//shown date of update posted
				echo '<p>' . $update['update_description'] . '</p>';//shown description of update
			echo '</div>';//the div is closed
			echo '</li>';//list's designated element or data is created
		}
?>