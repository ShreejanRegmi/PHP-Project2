<?php
require_once 'test_functions/check_login.php';//importing the class containing data for validation
class login_Test extends \PHPUnit_Framework_TestCase{

    public function testWrgUname(){
        $userVal = new check_login();//designated classes' object is made
        $array = [
            'username'=>'',
            'password'=>'adm',
        ];
        $bool = $userVal->check_the_login($array);//boolean value is set with object's function
        $this->assertTrue($bool);//asserting the boolean
    }
    
    public function testWrgPass(){
        $userVal = new check_login();//designated classes' object is made
        $array = [
            'username'=>'admin',
            'password'=>'',
        ];
        $bool = $userVal->check_the_login($array);//boolean value is set with object's function
        $this->assertTrue($bool);//asserting the boolean
    }

    function testRightCase(){
        $valueOfUser= new check_login();//designated classes' object is made
        $array=[
            'username'=>'Valid',
            'password'=>'Valid'
        ];
        $bool=$valueOfUser->check_the_login($array);//boolean value is set with object's function
        $this->assertFalse($bool);//asserting the boolean
    }
}
?>