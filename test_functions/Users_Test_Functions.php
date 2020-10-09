<?php
class Users_Test_Functions{
	function check_test_update($array){
		$returned_bool= false;//sets the flag
		if($array['fname']==''){//if the array's designated flag is empty
			$returned_bool=true;//sets the flag
		}
		if($array['lname']==''){//if the array's designated flag is empty
			$returned_bool=true;//sets the flag
		}
		if($array['email']==''){//if the array's designated flag is empty
			$returned_bool=true;//sets the flag
		}
		if($array['username']==''){//if the array's designated flag is empty
			$returned_bool=true;//sets the flag
		}
		if($array['password']==''){//if the array's designated flag is empty
			$returned_bool=true;//sets the flag
		}
		return $returned_bool;//returns the flag
	}
}

?>