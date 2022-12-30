<?php

//jika file nya salah atau tidak ketemu, maka akan ada warning tetapi program masih tetap jalan
// include("Lib/MyFunction.php");

//jika ingin meng include berkali kali, jika menggunakan include biasa maka akan error redeclare function
include_once("Lib/MyFunction.php");
include_once("Lib/MyFunction.php");

//jika file nya salah atau tidak ketemu, maka program akan error dan berhenti
// require("Lib/MyFunctdsion.php");

echo sayHello("Adi", "Wibisono");

//posisi include yang salah
// include("Lib/MyFunction.php");