<?php 

function n(){
    echo "\n";
}

function my_function($name = "Juan"){ // default value
    echo $name;
    n();
}

echo "From my_function \n";
my_function();
my_function("Jeff");

//functions can only return one value. (it can be a single array of multiple value)

//Variable scope
$person ="Jeff Almanzar";

function f(){
    global $person; //or $GLOBALS['person'] in orther for that variable to be accessed inside here
    echo $person;
    n();
}

echo "from f";
n();
f();

//type checking (parameters and returned value)

function naturalAdd(int $n1, int $n2): int{
    //checks that $n1, $n2 and the returned value are integers
    return $n1 + $n2;
}

echo "From natural add" ;
n();
echo naturalAdd(2,3);
n();
?>