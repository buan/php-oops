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

*/

namespace abc1{
    class test{
        
    }
}

namespace {
    class test{
        
    }
}