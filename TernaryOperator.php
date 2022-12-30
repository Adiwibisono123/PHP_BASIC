<?php



//operasi di bawah bisa diperesingkat dengan menggunakan ternary operator
// if ($gender = "PRIA") {
//         $hi = "Hai Bro.." . PHP_EOL;
// } else {
//     $hi = "Hai nona" . PHP_EOL;
// }

// echo $hi;

//Ternary operator
$gender = "WANITA";
$hi = $gender == "PRIA" ? "Hi bro.." : "Hi nona..";

echo $hi . PHP_EOL;


