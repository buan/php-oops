<?php

/*Collision in traits*/

/* trait test1{
    public function abc(){
        echo "Inside abc method of test1";
    }
}

trait test2{
    public function abc(){
        echo "Inside abc method of test2";
    }
}


class ABC{
    use test1,test2;
}
$a=new ABC(); */
/*Here if we try to use 2 traits we will have a collision as both has same method names
So for that we will mention which trait we want to use
a)If you want to use test1, write like this

use test1,test2{
    test1::abc insteadof  test2
}

b)If you want to use test2, write like this

use test1,test2{
    test2::abc insteadof  test1
}

c) If you want to use both the traits,write like this
use test1,test2{
    test1::abc insteadof  test2
    test2 :: abc as abc1
}

and then call the new function as ->abc1() so that it doesnt collide

*/
trait test1{
    public function abc(){
        echo "Inside abc method of test1";
    }
}

trait test2{
    public function abc(){
        echo "Inside abc method of test2";
    }
}


class ABC{
    use test1,test2{
        test1::abc insteadof  test2;
        test2::abc as abc1;
    }
}
$a=new ABC(); 
$a->abc1();