<?php
require 'test_functions/Furnitures_Test_Functions.php';//importing the class containing data for validation
class Furniture_Test extends \PHPUnit_Framework_TestCase{
	
	function testNullName(){
		$furnitureData= new Furnitures_Test_Functions();//designated classes' object is made
		$_FILES['image']['name']='Valid';//image mock value is set
		$array=[
			'name'=>'',
			'description'=>'Valid',
			'price'=>'12',
			'image'=>$_FILES['image']['name']
		];
		$bool= $furnitureData->check_test_furnitures($array);//boolean value is set with object's function
		$this->assertTrue($bool);//asserting the boolean
	}

	function testNullDesc(){
		$furnitureData= new Furnitures_Test_Functions();//designated classes' object is made
		$_FILES['image']['name']='Valid';//image mock value is set
		$array=[
			'name'=>'Valid',
			'description'=>'',
			'price'=>'12',
			'image'=>$_FILES['image']['name']
		];
		$bool= $furnitureData->check_test_furnitures($array);//boolean value is set with object's function
		$this->assertTrue($bool);//asserting the boolean
	}

	function testNullPrice(){
		$furnitureData= new Furnitures_Test_Functions();//designated classes' object is made
		$_FILES['image']['name']='Valid';//image mock value is set
		$array=[
			'name'=>'Valid',
			'description'=>'Valid',
			'price'=>'',
			'image'=>$_FILES['image']['name']
		];
		$bool= $furnitureData->check_test_furnitures($array);//boolean value is set with object's function
		$this->assertTrue($bool);//asserting the boolean
	}

	function testNullImage(){
		$furnitureData= new Furnitures_Test_Functions();//designated classes' object is made
		$_FILES['image']['name']='';//image mock value is set
		$array=[
			'name'=>'Valid',
			'description'=>'Valid',
			'price'=>'',
			'image'=>$_FILES['image']['name']
		];
		$bool= $furnitureData->check_test_furnitures($array);//boolean value is set with object's function
		$this->assertTrue($bool);//asserting the boolean
	}

	function testInvalidPrice(){
		$furnitureData= new Furnitures_Test_Functions();//designated classes' object is made
		$_FILES['image']['name']='Valid';//image mock value is set
		$array=[
			'name'=>'Valid',
			'description'=>'Valid',
			'price'=>0,
			'image'=>$_FILES['image']['name']
		];
		$bool= $furnitureData->check_test_furnitures($array);//boolean value is set with object's function
		$this->assertTrue($bool);//asserting the boolean
	}

	function testValidData(){
		$furnitureData= new Furnitures_Test_Functions();//designated classes' object is made
		$_FILES['image']['name']='Valid';//image mock value is set
		$array=[
			'name'=>'Valid',
			'description'=>'Valid',
			'price'=>10,
			'image'=>$_FILES['image']['name']
		];
		$bool= $furnitureData->check_test_furnitures($array);//boolean value is set with object's function
		$this->assertFalse($bool);//asserting the boolean
	}
}
?>