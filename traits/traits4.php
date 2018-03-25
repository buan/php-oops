<?php

/*
Access Levels in php traits
*/

trait test{
    private function abc(){
        echo "abc in test";
    }
}
class ABC{
   /*  use test{
    } 
    this will not work as abc() is declared as private
    */
  /*   use test{
    test::abc as public; 
    } 
    making abc from private to public
    */

    use test{
        test::abc as public xyz; 
        }
}

$a=new ABC();
$a->xyz();
/*
If access level is private,we get this error
Uncaught Error: Call to private ABC::abc() from invalid context

In traits you can change the accessibility

You can also change the method name in trait.abc() can be changed to abc123()

 use test{
        test::abc as public abc123; 
        }
*/ 

