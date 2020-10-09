<?php
//importing the test data
require_once 'test_functions/Category_Test_Functions.php';
class Category_Test extends \PHPUnit_Framework_TestCase{

	function testEmptyCategory(){//test if the category submitted is empty
		$categoryData= new Category_Test_Functions();//designated classes' object is made
		$array=[
			'name'=>''
		];
		$bool= $categoryData->check_category($array);//boolean value is set
		$this->assertTrue($bool);//asserting the value
	}

	function testValidCategory(){//test if the category is valid
		$categoryData= new Category_Test_Functions();//designated classes' object is made
		$array=[
			'name'=>'Valid'
		];
		$bool= $categoryData->check_category($array);//boolean value is set
		$this->assertFalse($bool);//asserting the value
	}
}
?>