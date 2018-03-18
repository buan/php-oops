<?php

class Car
{
	private $modelname;
	protected $modelname2;
	public function setmodel($model)
	{
		$this->modelname=$model;
	}
	
	public function getmodel()
	{
		return $this->modelname;
	}
	//public final function test()
	public function test()
	{
		echo "Hello";
	}
}

Class Car2 extends Car
{
	public function test()
	{
		echo "Hi";
	}
    
    public function test1($model2)
    {
        return $this->modelname=$model2;
        //return $this->modelname2=$model2;
    }
}


$m1=new Car2();
$m1->setmodel("Alto");
echo $m1->getmodel();
$m1->test();
echo $m1->test1("Maruti");
/*
The inheritance property is used to reuse the property(variables, methods) of the parent class in the child class.In this eg we are using the setmodel and getmodel property of Car class in Car2 class.
For public modifier we can easily inherit a class.For private methods we need to sue setters and getters

If you call private variables directly in child classes, you cannot acces them.
 public function test1()
    {
        //return $this->modelname;
    }
    
So we need a third access modifier.For protected variables we can access both from parent and child class

OVERRIDE parent class method.

Write a method name same as parent method name..and assign some value..The child class value will be printed.
Here Hello turns to Hi

STOP overriding

Make parent class method as final
*/
?>