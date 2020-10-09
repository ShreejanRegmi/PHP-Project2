<?php
class Enquiries_Test_Functions{

	function check_test_enquiry($array){//function to check the form submission of enquiry
		$returned_bool=false;//sets the flag
		if($array['name']==''){//if array's designated index is empty
			$returned_bool=true;//sets the flag
		}
		if($array['address']==''){//if array's designated index is empty
			$returned_bool=true;//sets the flag
		}
		if($array['telephone']==''){//if array's designated index is empty
			$returned_bool=true;//sets the flag
		}
		if($array['telephone']<0){//if array's designated index is empty
			$returned_bool=true;//sets the flag
		}
		if(strlen($array['telephone']) < 9){//if array's designated index is empty
			$returned_bool=true;//sets the flag
		}
		if($array['description']==''){//if array's designated index is empty
			$returned_bool=true;//sets the flag
		}
		return $returned_bool;//returns the flag
	}
}


?>