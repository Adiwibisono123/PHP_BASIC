<?php

$counter = 0;
while (true) { 
    echo "Ini adalah for while ke-$counter" . PHP_EOL;
    $counter++;

    if ($counter > 20) {
        break;
    }
}