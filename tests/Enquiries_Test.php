<?php
//importing the class for validation data
require 'test_functions/Enquiries_Test_Functions.php';
class Enquiries_Test extends \PHPUnit_Framework_TestCase{
		
	function testNullName(){//function to test the validity
		$enquiryData= new Enquiries_Test_Functions();//designated classes' object is made
		$array=[
			'name'=>'',
			'address'=>'Valid',
			'telephone'=>'9877655443',
			'description'=>'Valid'
		];
		$bool=$enquiryData->check_test_enquiry($array);//boolean value is set with object's function
		$this->assertTrue($bool);//asserting the boolean
	}

	function testNullAddress(){//function to test the validity
		$enquiryData= new Enquiries_Test_Functions();//designated classes' object is made
		$array=[
			'name'=>'Valid',
			'address'=>'',
			'telephone'=>'9877655443',
			'description'=>'Valid'
		];
		$bool=$enquiryData->check_test_enquiry($array);//boolean value is set with object's function
		$this->assertTrue($bool);//asserting the boolean
	}

	function testNullTelephone(){//function to test the validity
		$enquiryData= new Enquiries_Test_Functions();//designated classes' object is made
		$array=[
			'name'=>'Valid',
			'address'=>'Valid',
			'telephone'=>'',
			'description'=>'Valid'
		];
		$bool=$enquiryData->check_test_enquiry($array);//boolean value is set with object's function
		$this->assertTrue($bool);//asserting the boolean
	}

	function testNullDesc(){//function to test the validity
		$enquiryData= new Enquiries_Test_Functions();//designated classes' object is made
		$array=[
			'name'=>'Valid',
			'address'=>'Valid',
			'telephone'=>'9877655443',
			'description'=>''
		];
		$bool=$enquiryData->check_test_enquiry($array);//boolean value is set with object's function
		$this->assertTrue($bool);//asserting the boolean
	}

	function testNegativeTelephone(){//function to test the validity
		$enquiryData= new Enquiries_Test_Functions();//designated classes' object is made
		$array=[
			'name'=>'Valid',
			'address'=>'Valid',
			'telephone'=> -1,
			'description'=>'Valid'
		];
		$bool=$enquiryData->check_test_enquiry($array);//boolean value is set with object's function
		$this->assertTrue($bool);//asserting the boolean
	}

	function testShortPhone(){//function to test the validity
		$enquiryData= new Enquiries_Test_Functions();//designated classes' object is made
		$array=[
			'name'=>'Valid',
			'address'=>'Valid',
			'telephone'=>'1',
			'description'=>'Valid'
		];
		$bool=$enquiryData->check_test_enquiry($array);//boolean value is set with object's function
		$this->assertTrue($bool);//asserting the boolean
	}

	function testValid(){//function to test the validity
		$enquiryData= new Enquiries_Test_Functions();//designated classes' object is made
		$array=[
			'name'=>'Valid',
			'address'=>'Valid',
			'telephone'=>'9877655443',
			'description'=>'Valid'
		];
		$bool=$enquiryData->check_test_enquiry($array);//boolean value is set with object's function
		$this->assertFalse($bool);//asserting the boolean
	}

}	
?>