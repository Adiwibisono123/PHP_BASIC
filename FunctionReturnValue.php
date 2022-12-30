<?php

  //function return value 1
  function sum(int $first, int $last) : int
  {
        $total = $first + $last;
        return $total;
  }

  //jika ingin menambahkan 2 nilai didalam function harus, dimasukan dulu ke dalam variable
  $result = sum(10, 10);
  var_dump($result);

  //Function return value 2
  function getFinalValue(int $value) : string
  {
    if ($value >= 80) {
        return "A";
    } else if ($value >= 70) {
        return "B";
    } else if ($value >= 60) {
        return "C";
    } else if ($value >= 50) {
        return "D";
    } else {
        return 9;
    }

    echo "Upss" . PHP_EOL;
  }

$score = getFinalValue(0);
var_dump($score);

//return type declaration
// mendeklarasikan type data yang akan dikembalikan di function
