<?php


$nilai = [
    "action" => "buat"    
];
//tanpa menggunakan Null coalescing
if (isset($nilai["action"])) {
    $action = $data["action"];
} else {
    $action = "nothing";
}

$data = [   
];
$action = $data["action"] ?? "nothing";

echo $action . PHP_EOL;