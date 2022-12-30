<?php

//operator union, menggabungkan arrat $a dan $b
$first = [
    "first_name" => "adi",
];

$last = [
    "last_name" => "wibi"
];

$full = $first + $last;
var_dump($full);

//Equality, true jika $a dan $b memiliki key-value yang sama
$name = [
    "first_name" => "wibi",
    "last_name" => "sono"
];

$name2 = [
    "last_name" => "sono",
    "first_name" => "wibi"
];

$full = $name == $name2;
var_dump($full);


//identity, true memiliki key-value sama dan posisi yang sama  
$nama = [
    "first_name" => "wibi",
    "last_name" => "sono"
];

$nama2 = [
    "first_name" => "wibi",
    "last_name" => "sono"
];

$full = $nama === $nama2;
var_dump($full);


//Inequality, true jika $a dan $b tidak sama
$nilai = [
    "first_name" => "adi"
];

$nilai2 = [
    "first_name" => "wibisono"
];

$full = $nilai != $nilai2;
var_dump($full);

//nonidentity,true jika $a dan $b tidak identik atau tidak sama
$address = [
    "City" => "Jakarta",
    "Country" => "Indonesia"
];

$address2 = [
    "City" => "Jakarta",
    "Country" => "Indonesia"
];

$full = $address !== $address2;
var_dump($full);

