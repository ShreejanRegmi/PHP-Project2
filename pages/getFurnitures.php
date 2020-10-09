<?php
require '../db/db_connect.php';//database connection query import
if(isset($_POST['query'])){
	$query=$_POST['query'];//query variable is set
	$searchQuery=$pdo->prepare('SELECT furniture_id, furniture_name FROM furniture WHERE furniture_name LIKE :query');//database query is prepared
	$searchQuery->execute(['query'=>'%'.$query.'%']);//search query is executed
	if($searchQuery->rowCount()>0){//if values found
		echo '<ul class="search-ul" style="list-style-type: none;">';//html echoed
		//for loop for multiple search results
		foreach ($searchQuery as $furniture) { ?> 
		
			<li><?php echo '<a style="text-decoration: none;" href="productpage&id='.$furniture['furniture_id'].'">'.$furniture['furniture_name'].'</a>' ?></li>  <!-- link for each furniture is shown -->
<?php }
	echo '</ul>';
	}
	else{
		echo '<div>No furniture found</div>';//message shown
	}
}
//    
?>
