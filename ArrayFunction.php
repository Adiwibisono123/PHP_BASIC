<?php


/*array_map, berfungsi untuk mengubah data array sebelumnya menjadi 
data array yang baru sesuai dengan function yang kita inginkan
*/
$data = [1,2,3,4,5,6,7,8,9,10];

$mapFunction = fn(int $value)  => $value * 10;
$dataResult = array_map($mapFunction, $data);
var_dump($dataResult);

//rsort, membalikan data array 
rsort($data);
var_dump($data);

$person = [
    "first_name" => "Adi",
    "last_name" => "wibi"
];

// hanya  mengambil keys nya saja
var_dump(array_keys($person));

// mengambil value yang ada didalam array
var_dump(array_values($person));