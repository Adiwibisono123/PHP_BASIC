<?php

//contoh function
Hello();
function Hello() {
    echo "Hello " . PHP_EOL;
}


//function didalam if 
$buat = true;
if ($buat) {
    function sayHello()
    {
        echo "Hello function" . PHP_EOL;
    } 
}

sayHello();




