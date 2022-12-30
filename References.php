<?php

//assign by reference
// $otherName akan short cut ke $name dengan menambahkan & 
$name = "Adi";

$otherName = &$name;

$otherName = "Wibi";

echo $name . PHP_EOL;

//pass by reference, mengirimkan reference ke dalam variable asli
function increment(int &$value)
{
    $value++;
}

$counter = 1;
increment($counter);

echo $counter . PHP_EOL;

//Returning References
function &getValue()
{
    static $value = 100;
    return $value;
}

$a = &getValue();
$a = 200;

$b = &getValue();
echo $b;


