<?php

class team
{
	private $teamname;
    private $playername;
	
	public function setteamname($teamname)
	{
		 $this->teamname=$teamname;
	}

	public function getteamname()
	{
		if($this->teamname=="India")
		return $this->teamname;
	else
		return "Team is not enlisted";
	}
    public function setplayername($name)
    {
        return $this->playername=$name;
    }
    public function getplayername($name)
    {
        return $this->setplayername($name);
    }
}

$T=new team();
echo $T->setteamname("Indias");
echo $T->getteamname();
echo $T->getplayername("Sachin");

/* If methods and variables are defined private,then outside the class we cant access it via object.So we need to access it via getters and setters method,which has to be there as public using $this object

We need access modifiers so that no one can modify our variables and functions directly
*/ 
?>