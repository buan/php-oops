<?php
class xyz{
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
 * 
 */