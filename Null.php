<?php

$name = "Adi";
$name = NULL;
$age = NULL;

echo "Name : ";
echo $name;
echo "\n";
echo "Age : ";
echo $age;

// is_null gunanya untuk mengecek apakah datanya null atau tidak
echo "Is Name Null? : ";
var_dump(is_null($name));
echo "\n";

// untuk menghapus variable dengan Permanen
// bedanya dengan null adalah null akan menghapus nilai tetapi datanya masih ada,
// sedangkan unset benar benar menghapus nilai didalam variable tersebut

$contoh = "Adi";
unset($contoh);

$contoh = "wibisono";
$contoh = null;

//walaupun variable nya belum diset, dia tidak akan error
var_dump(isset($contoh));

