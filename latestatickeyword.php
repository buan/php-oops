<?php
/**
 * In normal circumstances when a program runs, we need to compile the program and then if it is free form syntax errors we run the program and the output comes out.
 * like in java=>javac then java program
 * 
 * Here also same thing happens
 * 
 * For static classes if we declare a variable as static,we have to access it by self. The keyword self  is used during compile time(self is used to refer to the variable which is in that class)
 * 
 * In case of static keyword,the variable is resolved during run time
 * 
 *   return "Select * from ".self::$table;//compile time
 *   return "Select * from ".static::$table;//run time
 */
class DB{
    
    public static $table="mytable";
    public function select(){
        return "Select * from ".static::$table;
    }
}

class abc extends DB{
    public static $table="abc";
}

$obj=new abc();
echo $obj->select();