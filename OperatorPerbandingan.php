<?php

// sama dengan, jika $a dan $b nilai nya sama setelah dilakukan konversi type data
var_dump("10" == 10);

// identik, jika $a sama dengan $b dan memiliki type data yang sama 
var_dump("20" === "20");

// tidak sama dengan, jika $a tidak sama dengan $b setelah dilakukan konversi type data
var_dump(10 != 12);

// tidak identik, true jika $a tidak sama dengan $b atau tidak sama tipe data
var_dump(10 !== 10);

//kurang dari, true jika $a kurang dari $b
var_dump(10 < 9);

//kurang dari atau sama dengan, true jika $a kurang dari atau sama dengan $b
var_dump(10 <= 12);

//lebih dari, true jika $a lebih dari $b
var_dump(20 > 10); 

//lebih dari sama dengan, true jika $a lebih dari atau sama dengan $b
var_dump(10 >=10);