<?php

//memberi value pada argumen
function sayHello($name) 
{
    echo "Hello $name" .    PHP_EOL;
}

sayHello("Adi");
sayHello("Wibi");

//default argumen value
function Hello($name = "Anonymous")
{
    echo "hello $name" . PHP_EOL;
}

Hello();
Hello("Adi Wibisono");

//jika ingin menggunakan 2 argumen maka harus menggunakan argumen yeng ke 2, jikalau yang pertama maka tidak berguna
function Halo($firstName, $lastname = "")
{
    echo "halo $firstName $lastname" . PHP_EOL;
} 

Halo("Adi");
Halo("Wibi", "Sono");

//type declaration
function sum(int $first , int $last)
{
    $total = $first + $last;
    echo "total $first + $last = $total" . PHP_EOL;
}

sum(100, 100); 
sum("100", "100");
sum(true, false);


//variable-length argumen list

function sumAll(... $values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total "  . implode(",", $values) . " = $total" . PHP_EOL;
}

//jika sudah terlanjur membuat array
$values = [1, 2, 3, 4, 5];
sumAll(...$values);


sumAll(1,2,3,4,5);