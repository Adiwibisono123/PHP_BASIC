<?php

$name = "Fashasiha Pramudyaning Cahya";

echo "nama : " . $name . PHP_EOL;
echo "Value : " . 100 . PHP_EOL;

//Konversi ke number atau sebaliknya
$valueString = (string)100;
var_dump($valueString);

$ValueInt = (int)"100";
var_dump($ValueInt);    

$ValueFloat = (float)"1.2";
var_dump($ValueFloat);

//mengakses karakter
$nama = "ADI";

echo $nama[0] . PHP_EOL;
echo $nama[1] . PHP_EOL;
echo $nama[2] . PHP_EOL;

//variable parsing, jika ingin mengambil nilai didalam variable dan digabung ke dalam type data
echo "Hallo $nama, Selamat belajar Php" . PHP_EOL;

//Curly brace, menggabungkan variable dengan string tanpa spasi, contoh menambahkann huruf s, jika menggunakan variable parsing maka akan kesulitan
$women  = "women";
echo "This is {$women}s " . PHP_EOL;

