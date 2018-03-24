<?php
/* method overriding in traits*/
/* class Base{
    public function abc(){
        echo "In abc method of class Base";
    }
}

class child extends Base{

}

$b=new Child();
$b->abc(); */

/* Here in the above example,so far the abc method of Base class is inherited inside Child Class
Now we will use trait having same function
*/
class Base{
    public function abc(){
        echo "In abc method of class Base";
    }
}
trait test{
    public function abc(){
        echo "In abc method of trait test";
    } 
}
class child extends Base{
use test;
}

$b=new Child();
$b->abc(); 

/*
When we have same methods in Base class and trait, the trait methods always gets precedence. If the method is present in the child class,then obviously child class gets precedence