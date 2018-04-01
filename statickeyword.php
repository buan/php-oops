<?php

class xyz{
    public static $name;
    public static function myfunc($name){
        self::$name=$name;
        echo self::$name;
    }
}

class abc extends xyz{
public static function myfunc($name){
    parent::myfunc("Soumya");
    self::$name=$name;
    return self::$name;
    }
}
echo abc::myfunc("Banerjee");


//SoumyaBanerjee

/**
 * In case of non static method we sue this function
 * eg
 * public function display(){
 * 
 * return $this->data
 * 
 * }
 * 
 * In case of static we use self
 * public static function display(){
 * 
 * return self::$data
 * 
 * }
 * eg.
 * 
 * class xyz{
    //create a static variable
    public static $data="testdata";

    //Create a static method
    public static function test(){
        return self::$data;
    }
}

//call a static object
echo xyz::$data."<br>";

//call static method
echo xyz::test();

 * 
 * use of static keyword
 * 1)to count the number of objects
 * 
 * 
 * class xyz{
    public static $count=0;
    public static function showcount(){
        return self::$count;
    }
    public function __construct(){
        self::$count++;
    }
  
}
$a=new xyz();
$b=new xyz();
$c=new xyz();
echo xyz::showcount();
 */