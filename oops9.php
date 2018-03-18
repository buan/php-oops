<?php
/* 
Interface are similar to abstract classes in a way they allow only abstract methods and variables.We need to implement an interface in our child classes.
We can implement more than 1 interface in the class.

Difference
abstract method                     interfaces
1)abstract+non abs methods,vars      1)Only abs method+vars   
2)access modifier public,private,protected      2)Only public
3)implements 1 abstract class               3)implements more than 1 interface
*/
interface india
{
	public function comment1();
}

interface pakistan
{
	public function comment2();
}

class A implements india,pakistan
{
	public function comment1()
	{
		return "in india";
	}
	
	public function comment2()
	{
		return "in pakistan";
	}
}


$comment=new A();
echo $comment->comment1();
echo $comment->comment2();
?>