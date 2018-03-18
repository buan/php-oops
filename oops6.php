<?php
class Car
{
	private $model;
	public function __construct($model)
	{
		$this->model=$model;
	}
	
	public function getmodel()
	{
		return __CLASS__." name is ".$this->model;
	}
}

$modelname=new Car("Benz");
echo  $modelname->getmodel();
/*
Magic methods and functions helps us to reduce code and perform some functions easily.Such as constructor and other methods.For constructors it easy to easy to initlaize it while declaring an object. we use double underscores(__) to start a magic function

public function __construct($abc){

}Other magic methods are __FILE__,__CLASS__ etc
*/
?>

