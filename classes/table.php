<?php
class Table{//class table created
	public $currentTable;//current table global variable

	function __construct($currentTable){
		$this->currentTable=$currentTable;//setting the value of current table
	}
	
	//function to save or update
	function saveInDatabase($credentials, $primary=''){
		try{
			$this->insertInDatabase($credentials);//inserts in database
		}
		catch(Exception $err){//catching exception
			$this->updateInDatabase($credentials, $primary);//updates the content in database
		}
	}

	//function to insert in table
	function insertInDatabase($credentials){
		global $pdo;//making pdo global
		$pieces= array_keys($credentials);//extracting portions from array
		$rowValues=implode(',', $pieces);//making the array a string 
		$rowValuesWithColon= implode(', :', $pieces);//again imploding the array
		$databaseQuery= 'INSERT INTO '.$this->currentTable.'('.$rowValues.') VALUES(:'.$rowValuesWithColon.')';//database query
		$selectprpstmt= $pdo->prepare($databaseQuery);//prepare statement for query
		$selectprpstmt->execute($credentials);//executing the query
	}

	//function to update content in database
	function updateInDatabase($credentials, $primary){
		global $pdo;//making pdo available
		$pieces=[];//empty array
		foreach ($credentials as $key => $value) {//foreach loop
			$pieces[]=$key.'= :'.$key;//concatenating the variable 
		}
		$piecesWithComma= implode(', ', $pieces);//creating string from array
		$databaseQuery="UPDATE $this->currentTable SET $piecesWithComma WHERE $primary=:primary";//database query made
		$credentials['primary']=$credentials[$primary];//array value set
		$selectprpstmt=$pdo->prepare($databaseQuery);//database query made
		$selectprpstmt->execute($credentials);//the query is executed 
	}

	//function to find data in table
	function findInDatabase($column, $value){
		global $pdo;//making pdo available
		$selectprpstmt=$pdo->prepare('SELECT * FROM '.$this->currentTable.' WHERE '.$column.'=:value');//prepare for database query
		//array is created for value
		$credentials=[
			'value'=>$value
		];
		$selectprpstmt->execute($credentials);//database query is executed 
		return $selectprpstmt;//the result is returned
	}

	//function to return all data from table where table name is given
	function findAllInDatabase(){
		global $pdo;//making pdo available
		$selectprpstmt=$pdo->prepare("SELECT * FROM ".$this->currentTable);//preparing query for returning all data from table
		$selectprpstmt->execute();//executing the query
		return $selectprpstmt;//return the results
	}

	//function to delete data from table
	function deleteFromDatabase($column, $value){
		global $pdo;//making pdo available
		$selectprpstmt=$pdo->prepare("DELETE FROM $this->currentTable WHERE $column = :value");//query to delete from table
		//creating array for passing value
		$credentials=[
			'value'=>$value
		];
		$selectprpstmt->execute($credentials);//executing the query
		return $selectprpstmt;//returning the results
	}
	
	//function to join the table
	function findFromJoinTables($tables, $pks, $typeOfJoin,$whereCriteria=''){
		global $pdo;
		array_unshift($tables, $this->currentTable);
		$num=2;
		$query='SELECT ';
		$query.=implode('.* ,' , $tables);
		$query.='.* FROM ';

		$query.=implode(' '.$typeOfJoin.' ', array_slice($tables, 0,2));
		for ($i=0; $i < count($tables); $i++) { 
			if(array_key_exists($i, $tables) && array_key_exists($i, $pks)){				
				$query.=' ON '.$tables[$i].'.'.$pks[$i].' = '.$tables[$i+1].'.'.$pks[$i];
				if(count($tables)>2){
					if(array_key_exists($num,$tables)){
						$query.=' JOIN '.$tables[$num];
						$num++;
					}
				}
			}
		}
		if($whereCriteria!=''){
			$query.=' WHERE ';
			$pieces=[];
			foreach ($whereCriteria as $key => $value) {
				$valueAfterDot= explode('.', $key);
				$pieces[]=$key.'= :'.$valueAfterDot[1];
			}
			$piecesWithComma=implode(' AND ', $pieces);
			$query.=$piecesWithComma;
			$newCriteria=[];
			foreach ($whereCriteria as $key => $value) {
				$newValueAfterDot= explode('.', $key);
				$newCriteria[$newValueAfterDot[1]]=$whereCriteria[$key];
			}
			$selectprpstmt=$pdo->prepare($query);
			$selectprpstmt->execute($newCriteria);
		}
		else{
			$selectprpstmt=$pdo->prepare($query);
			$selectprpstmt->execute();	
		}
		return $selectprpstmt;
	}
}
?>