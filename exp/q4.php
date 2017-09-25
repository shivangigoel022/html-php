<?php 
class employee{
	var $id;
	var $name;
	var $gender;
	var $age;
	var $designation;
	var $salary;
	
	function __construct($a,$b,$c,$d,$e,$f){
		$this->id= $a;
		$this->name = $b;
		$this->gender = $c;
		$this->age = $d;
		$this->designation = $e;
		$this->salary =$f;
		
	}
	function getvalues( employee $employee){
		
			$design_proper="the designation is not proper";
	if($this->designation=="programmer"|| $this->designation=="project leader"|| $this->designation=="team member"){
			
	
	
		echo "id is:".$this->id."<br>";
		echo "name is:".$this->name."<br>";
		echo "gender is:".$this->gender."<br>";
		echo "age is:".$this->age."<br>";
		echo "designation is:".$this->designation."<br>";
		echo "salary is:".$this->salary."<br>";
		}
		else{
			throw new Exception($design_proper);
		}
		}
	
		
		
}



$employee =new employee(2,"ram","male",30,"progr",100000);
try{
	
$employee->getvalues($employee);
}
	catch(Exception $g){
		echo "caught exception:".$g->getMessage();
	}


?>