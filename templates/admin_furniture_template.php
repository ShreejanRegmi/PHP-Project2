<h2>Furniture</h2>
<a class="new" href="savefurniture">Add new furniture</a>
<?php
	echo loadFromTemplate('../templates/furniture_table_template.php', ['furnitures'=>$furnitures]);//shows the content of the page
?>
<?php 
	if(!isSuperAdmin()){
		$sessionid= $_SESSION['session_id'];
?>
		<script>
			var allRows =document.getElementsByTagName('tr');//all table rows are returned
			for (var i = 1; i < allRows.length; i++) {//for loop  for iteration
				var userOfThisFurniture = allRows[i].id;//gets the id for each row
				if(userOfThisFurniture==<?php echo $sessionid ?>){//if same
					continue;
				}
				var tds= allRows[i].getElementsByTagName('td');
				var button = tds[3].firstChild;
				button.disabled=true;//disables the button
			}
		</script>
<?php
	}
?>	