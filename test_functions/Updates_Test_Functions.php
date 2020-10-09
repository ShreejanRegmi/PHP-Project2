<?php
	class Updates_Test_Functions{

		function check_test_update($array){
			$returned_bool=false;//sets the flag
			if($array['title']==''){//if the array's designated flag is empty
				$returned_bool=true;//sets the flag
			}
			if($array['description']==''){//if the array's designated flag is empty
				$returned_bool=true;//sets the flag
			}	
			if($array['image']==''){//if the array's designated flag is empty
				$returned_bool=true;//sets the flag
			}
			return $returned_bool;//returns the boolean
		}
	}
?>