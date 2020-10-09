<?php
	require 'test_functions/Users_Test_Functions.php';//importing the class containing the data for validation
	class Users_Test extends \PHPUnit_Framework_TestCase{

		function testNullFname(){
			$usersData= new Users_Test_Functions();//designated classes' object is made
			$array=[
				'fname'=>'',
				'lname'=>'Valid',
				'email'=>'Valid@email.com',
				'username'=>'Valid',
				'password'=>'Valid'
			];
			$bool= $usersData->check_test_update($array);//boolean value is set with object's function
			$this->assertTrue($bool);//asserting the boolean
		}

		function testNullLname(){
			$usersData= new Users_Test_Functions();//designated classes' object is made
			$array=[
				'fname'=>'Valid',
				'lname'=>'',
				'email'=>'Valid@email.com',
				'username'=>'Valid',
				'password'=>'Valid'
			];
			$bool= $usersData->check_test_update($array);//boolean value is set with object's function
			$this->assertTrue($bool);//asserting the boolean
		}

		function testNullEmail(){
			$usersData= new Users_Test_Functions();//designated classes' object is made
			$array=[
				'fname'=>'Valid',
				'lname'=>'Valid',
				'email'=>'',
				'username'=>'Valid',
				'password'=>'Valid'
			];
			$bool= $usersData->check_test_update($array);//boolean value is set with object's function
			$this->assertTrue($bool);//asserting the boolean
		}

		function testNullUsername(){
			$usersData= new Users_Test_Functions();//designated classes' object is made
			$array=[
				'fname'=>'',
				'lname'=>'Valid',
				'email'=>'Valid@email.com',
				'username'=>'',
				'password'=>'Valid'
			];
			$bool= $usersData->check_test_update($array);//boolean value is set with object's function
			$this->assertTrue($bool);//asserting the boolean
		}

		function testNullPassword(){
			$usersData= new Users_Test_Functions();//designated classes' object is made
			$array=[
				'fname'=>'Valid',
				'lname'=>'Valid',
				'email'=>'Valid@email.com',
				'username'=>'Valid',
				'password'=>''
			];
			$bool= $usersData->check_test_update($array);//boolean value is set with object's function
			$this->assertTrue($bool);//asserting the boolean
		}

		function testValid(){
			$usersData= new Users_Test_Functions();//designated classes' object is made
			$array=[
				'fname'=>'Valid',
				'lname'=>'Valid',
				'email'=>'Valid@email.com',
				'username'=>'Valid',
				'password'=>'Valid'
			];
			$bool= $usersData->check_test_update($array);//boolean value is set with object's function
			$this->assertFalse($bool);//asserting the boolean
		}		
	}
?>