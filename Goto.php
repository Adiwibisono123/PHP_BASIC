<?php

// goto a;
// echo "Hello World" . PHP_EOL;

// a: 
// echo "Hello A" . PHP_EOL;



//Goto berfungsi untuk berpindah pindah program code
$counter = 1;

while (true) { 
    echo "Ini adalah for while ke-$counter" . PHP_EOL;
    $counter++;

    if ($counter > 20) {
        goto end;
    }
}

end:
echo "End loop";