<?php
class Car
{
	public $color="blue";
	
	public function beep()
	{
		return "beep";
	}
		
}
	$bmw = new Car();
	echo $bmw->color;
	$bmw->color="red";
	echo "<br>";
	echo $bmw->color;
	echo "<br>";
	echo $bmw->beep();

/* Class is something whuich binds variables,functions,methods together.It is a blue print of a particular thing.Object is the physical existence of the methods/vars of a class.

We declare class like 
class "Classname"
we declare a variable

public $color="blue";

and method like
	public function beep()
	{
		return "beep";
	}
    
    declaring  an object
    
    $car=new Car();
    echo $car->color//blue
    
    edit a property
    $car->color="red"
    echo $car->color//red
    
    call a function
    echo $car->beep();//prints beep

*/