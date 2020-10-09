<?php
class Furnitures_Test_Functions{
	function check_test_furnitures($array){
		$returned_bool=false;//sets the flag
		if($array['name']==''){//if array's designated index is empty
			$returned_bool=true;//sets the flag
		}
		if($array['description']==''){//if array's designated index is empty
			$returned_bool=true;//sets the flag
		}
		if($array['price']==''){//if array's designated index is empty
			$returned_bool=true;//sets the flag
		}
		if($array['image']==''){//if array's designated index is empty
			$returned_bool=true;//sets the flag
		}
		if($array['price']<1){//if array's designated index is empty
			$returned_bool=true;//sets the flag
		}
		return $returned_bool;//sets the flag
	}	
}
?>