<?php
/*
Namespace is related to the scope of a function if the function has the same name

function test(){

}

function test(){
    
}
If we declare same function two times,it gives us fatal error
 Cannot redeclare test() 
 We resolve this error through namespaces

 namespace abc{
    class test{

    }
}

namespace abc1{
    class test{
        
    }
}
Class names are same but are under different namespaces
This will not produce any errors

Lets take another example
class test{

    }


namespace abc1{
    class test{
        
    }
}

Namespace declaration statement has to be the very first statement or after any declare call in the script 
    which means that when you declare namespace it has to be the first statement of the file.Lets move the namespace to the top

namespace abc1{
    class test{
        
    }
}

    class test{

    }

This also produces an error
 No code may exist outside of namespace {} .So all code has to be written inside namespace

    Global namespace.The namespace which doesnt have a name is called as global namespace

    namespace {
    class test{
        
    }
}

namespace abc1{
    class test{
        function abc(){
                echo "inside abc1 namespace";
        }
    }
}

namespace {
    class test{
        function abc(){
            echo "inside global namespace";
        }
    }
    //To access methods withing that namespace
    $obj=new test();

    //To access methods within other namespace(in this case abc1 namespace)
    $obj=new abc1\test();
    
    //Another way is to use "use" keyword.Here since name of the class is same,we use alias and call test class as test2. and make object of test2
      use abc1\test as test2;
    $obj=new test2();
    $obj->abc();
    $obj->abc();
}

*/
namespace abc1{
    class test{
        function abc(){
                echo "inside abc1 namespace";
        }
    }
}

namespace {
    class test{
        function abc(){
            echo "inside global namespace";
        }
    }
    use abc1\test as test2;
    $obj=new test2();
    $obj->abc();
}
?>