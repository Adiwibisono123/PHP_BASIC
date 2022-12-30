<?php

$firstName = "Adi";
$lastName = "Wibi";

$AnonymousFunction = function () use ($firstName, $lastName) : string {
    return "Hello $firstName $lastName" . PHP_EOL;
};


//arrow function hanya menggunakan fn()
$arrowFunction = fn () => "Hello $firstName $lastName" . PHP_EOL;

echo $AnonymousFunction();
echo $arrowFunction();