<?php


//factorial loop
function factorialFunction(int $value) : int
{
    $total = 1;

    for ($i=1; $i <= $value; $i++) { 
        $total *= $i;
    }
 
    return $total;
}

var_dump(factorialFunction(5));

//factorial recursive
function factorialRecursive(int $value) : int 
{
    if ($value == 1) {
        return 1;
    } else {
        return $value * factorialRecursive($value - 1);
    }
}

var_dump(factorialRecursive(5));
var_dump(5 * 4 * 3 * 2 *1);

//error recursive, karena terlalu banyak   recursive
function loop(int $value)
{
    if ($value == 0) {
        echo "End loop" . PHP_EOL;
    } else {
        echo "loop-$value" . PHP_EOL;
        loop($value-1);
    }
}

loop(10);