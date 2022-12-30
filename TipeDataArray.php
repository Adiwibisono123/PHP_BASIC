<?php

// contoh array pertama
$values = array(1, 2, 3, 7.5);
var_dump($values);

// contoh array kedua
$values = ["adi", "wibi", "sono"];

// mengecek data per index
$names = ["Adi", "Wibi", "Sono"];
var_dump($names[0]);

// mengubah isi data array
$names[0] = "Fasha";
var_dump($names);

// menghapus data array
unset($names[1]);
var_dump($names);

// menambahkan data
$names[] = "siha";
$names[] = "pramudyaning";
var_dump($names);

// menjumlah data 
var_dump(count($names));

// membuat map
$adi = array(
    "id" => "adi",
    "name" => "adi wibisono",
    "age" => 19
);
unset($adi["id"]);
var_dump($adi);

$wibi = [
    "id" => "fasha",
    "name" => "siha",
    "age" => 19, 
    // contoh penggunaan array didalam array
    "address" => [
        "city" => "Batang",
        "Country" => "Indonesia"
    ]
];

var_dump($wibi["address"]["Country"]);
