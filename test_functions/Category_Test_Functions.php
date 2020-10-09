<?php 
class Category_Test_Functions{//class for test function
	
	function check_category($array){//check the category form submission
		$returned_result=false;//flag is set
		
		if($array['name']==""){//if empty
			$returned_result=true;//flag is set
		}
		return $returned_result;//return boolean
	}
}
?>