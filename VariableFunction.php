<?php

function foo()
{
    echo "Foo" .    PHP_EOL;
}

function bar()
{
    echo "Bar" . PHP_EOL;
}

$FunctionYangAkanDipanggil = "foo";
$FunctionYangAkanDipanggil();

$FunctionYangAkanDipanggil = "bar";
$FunctionYangAkanDipanggil();

//penggunaan variable function
function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function sampleFunction(string $name): string{
    return "sample $name";
}

sayHello("Adi", "sampleFunction");
//function bawaan dari php gunanya untuk mengubah huruf jadi kecil semua
sayHello("Adi", "strtolower");
//mengubah huruf jadi kapital semua
sayHello("Adi", "strtoupper");


