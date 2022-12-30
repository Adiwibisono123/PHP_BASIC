<?php

//anonymous function
$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Adi");
$sayHello("WIbi");

//anonymous function sebagai argument
function SayGoodBye (string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good Bye $finalName" . PHP_EOL;
}

SayGoodBye("Adi", function (string $name) : string {
    return Strtoupper($name);
});

$filterFunction = function (string $name) : string {
    return Strtoupper($name);
};

SayGoodBye("eko", $filterFunction);

//cara mengakses variable di luar closure
$firstName = "Adi";
$lastName = "Wibi";

$sayHelloAdi = function () use ($firstName, $lastName)
{
    echo "Hello $firstName $lastName" .PHP_EOL;
};

$sayHelloAdi();


