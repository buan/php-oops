<?php

//Inheritance works vertically. One class extends another class but not more than 1. So for this reason we have introduced traits which works horizontally
//For eg there may be a situation where you want test1 function in class one and two but not in three. This cannot be done by inheritance. By default all the functions are available

//So you can declare object of test1 in one and two and for three you declare object of test2. So these functions will be loaded extra where they are not to be used. For this we use traits

/*class abc{
public function test1(){
    echo "in test1";
}

public function test2(){
    echo "in test2";
}
}

class one extends abc{

}

class two extends abc{

}

class three extends abc{

}*/

/*Lets define traits*/

trait test{
    public function test1(){
        echo "In trait test1";
    }
}

trait test1{
    public function test2(){
        echo "In trait test2";
    }
}
class one{
 use test;//single trait

}

class two {
use test,test1;//multitple trait
}

class three {

}

$obj=new one();
$obj->test1();

$obj=new two();//both the functions are available from traits
$obj->test1();
$obj->test2();

//So horizontal inheritance can be done with traits. like siblings. use traits1,traits2..Traits are introduced in php 5.4
?>