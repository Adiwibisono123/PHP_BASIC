<?php


//Tanpa menggunakan for each
$names = ["Adi", "Wibi", "Sono"];

for ($i=0; $i < count($names); $i++) { 
    echo "Data ke $i = $names[$i]" . PHP_EOL;
}

//menggunakan perulangan foreach
foreach ($names as $index => $name) {
    echo "Data $index : $name" . PHP_EOL;
}

//mengakses data array dengan maping/index
$person = [
    "first_name" => "Adi",
    "middle_name" => "wibi",
    "last_name" => "sono"
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}