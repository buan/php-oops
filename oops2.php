<?php
class Car
{
	public $color;
	public $make;
	
	public function hello()
	{
		return "The color of the car is ".$this->color." and make is ".$this->make;
	}
}

$Bmw=new Car();
$Mercedez=new Car();

$Bmw->color="red";
$Bmw->make="BMW";

$Mercedez->color="yellow";
$Mercedez->make="Mercedez";

echo $Bmw->hello();
echo "<br>";
echo $Mercedez->hello();
?>


/*
Usually we make classes, and their objects to access class vars and methods.But all these happen outside the class scope.To access vars and methods within class scope, we need to use this keyword

So $this->color refers to the color variable inside a class.

*/