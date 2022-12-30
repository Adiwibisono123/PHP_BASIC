<?php

function sayHello(string $name, callable $filter)
{
    $finalName =  call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Adi", "strtoupper");
sayHello("Adi", "strtolower");
sayHello("Adi", function(string $name) : string {
    return strtoupper($name);
});
sayHello("Adi", fn($name) => strtoupper($name));