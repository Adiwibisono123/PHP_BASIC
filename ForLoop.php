<?php

//for (init statement; kondisi; post statement){
    //block kode
// }

for ($counter=1; $counter <=10 ; $counter++) { 
    echo "Selamat datang ke-$counter" . PHP_EOL;
}

//contoh decrement dari terbesar sampai yang terkecil
for ($counter=10; $counter >=1 ; $counter--) { 
    echo "Selamat datang ke-$counter" . PHP_EOL;
}

//syntax alternative
for ($counter=1; $counter <=10 ; $counter++) :
    echo "Selamat datang ke-$counter" . PHP_EOL;
endfor;