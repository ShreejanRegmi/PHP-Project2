<?php
class check_login //class to test login form submissions
{
    function check_the_login($val)//function to check login event
    {
        $returned_result = false;//set the flag
        if ($val['username'] == "") {//if username is empty
            $returned_result = true;//set flag
        }
        if ($val['password'] == "") {//if the array is empty
            $returned_result = true;//return flag
        }
        return $returned_result;//return flag
    }
}
?>