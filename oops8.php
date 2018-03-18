<?php
/*Abstract classes
We use abstract classes when we want to do a certain operation but we are not sure what should be its methods and variables considered.Say we assimilate the common properties and declare ina parent class and make them abstract.

whenever needed we will inherit the methods and properties.

An abstract class should contain atleast 1 abstract method or variable and an innumerable number of non abstract functions and vars.

The child class wil inherit the properties and functions of abstract class and give them proper definiton.

*/
abstract Class Car
{
	public $number=3;
	public $comp="";
	abstract public function test($company);
}

Class Toyota extends Car
{
	public function test($company)
	{
		$this->comp=$company;
		
		return "The Car with company ".$this->comp." has the number ".$this->number;
	}
}

Class Maruti extends Car
{
	public function test($company)
	{
		$this->comp=$company;
		return "The Car with company ".$this->comp." has the number ".$this->number*2;
	}
}

$Car1=new Toyota();
echo $Car1->test("Toyota");
$Car2=new Maruti();
echo $Car2->test("Maruti");


?>