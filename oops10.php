<?php
/*Example of polymorphism
Same method used twice
*/
interface Area
{
	public function calculate_area();
}

Class Circle implements Area
{
	public $radius;
	public function __construct($radius)
	{
		$this->radius=$radius;
	}
	
	public function calculate_area()
	{
		return "Area of a ".get_class($this)." is ".$this->radius*$this->radius*3.14;
	}
}

Class Rect implements Area
{
	public $width,$height;
	public function __construct($width,$height)
	{
		$this->width=$width;
		$this->height=$height;
	}
	
	public function calculate_area()
	{
		return "Area of a ".get_class($this)." is ".$this->width*$this->height;
	}
	
}

$circle=new Circle(3);
echo $circle->calculate_area()."<br>";
$rect=new Rect(4,5);
echo $rect->calculate_area();

?>