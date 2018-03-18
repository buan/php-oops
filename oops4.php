<?php 

class Allow
{
	//public $team="India";
	private $team="India";
	
	public function teamname()
	{
		return $this->team="Australia";
	}
}
$A=new Allow();
//public members can be accessed outside the class
echo $A->teamname();
/* If methods and variables are defined public,then outside the class we can access it via object*/ 
?>
