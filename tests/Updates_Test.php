<?php
	require_once 'test_functions/Updates_Test_Functions.php';//importing the class containing the data for validation
	class Updates_Test extends \PHPUnit_Framework_TestCase{

		function testNullTitle(){
			$updateData= new Updates_Test_Functions();//designated classes' object is made
			$_FILES['image']['name']='Valid';//mock image object is created
			$array=[ 'title'=>'', 'description'=>'Valid', 'image'=>$_FILES['image']['name'] ];
			$bool= $updateData->check_test_update($array);//boolean value is set with object's function
			$this->assertTrue($bool);//asserting the boolean
		}

		function testNullDesc(){
			$updateData= new Updates_Test_Functions();//designated classes' object is made
			$_FILES['image']['name']='Valid';//mock image object is created
			$array=[ 'title'=>'Valid', 'description'=>'', 'image'=>$_FILES['image']['name'] ];
			$bool= $updateData->check_test_update($array);//boolean value is set with object's function
			$this->assertTrue($bool);//asserting the boolean
		}

		function testNullImage(){
			$updateData= new Updates_Test_Functions();//designated classes' object is made
			$_FILES['image']['name']='';//mock image object is created
			$array=[ 'title'=>'', 'description'=>'', 'image'=>$_FILES['image']['name'] ];
			$bool= $updateData->check_test_update($array);//boolean value is set with object's function
			$this->assertTrue($bool);//asserting the boolean
		}

		function testValidData(){
			$updateData= new Updates_Test_Functions();//designated classes' object is made
			$_FILES['image']['name']='Valid';//mock image object is created
			$array=[ 'title'=>'Valid', 'description'=>'Valid', 'image'=>$_FILES['image']['name'] ];
			$bool= $updateData->check_test_update($array);//boolean value is set with object's function
			$this->assertFalse($bool);//asserting the boolean
		}

		
	}
?>