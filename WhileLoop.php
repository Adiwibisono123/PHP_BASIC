<?php

$counter = 1;

while ($counter <= 10) {
    echo "Hallo Adi$counter" . PHP_EOL;
    $counter++;
}

//versi syntax alternative
$nilai = 10;

while ($nilai >= 1) :
    echo "Hello World$nilai" . PHP_EOL;
    $nilai--;
endwhile;
