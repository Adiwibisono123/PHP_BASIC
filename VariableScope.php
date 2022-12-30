<?php


//global scope
$name = "Adi";

function sayHello()
{
    global $name; // global keyword berfungsi untuk mengakses variable global yang ada didalam function
    echo $name . PHP_EOL;
    echo $GLOBALS["name"] . PHP_EOL; // global variable, juga bisa mengakses dari luar function, dan super global
}

sayHello();


//local scope, tidak bisa diakses dari luar function atau dari function yang lain
function createName()
{
    $name = "Adi";
}

createName();
echo $name . PHP_EOL;

/*static scope
    jika local scope siklus hidupnya hanya didalam function, 
    maka kalau static scope akan melanjutkan siklus variable nya
*/
function Increment()
{
    static $counter = 1;
    echo "Counter = $counter" . PHP_EOL;
    $counter++;
}

Increment();
Increment();
Increment();
Increment();
Increment();