<?php

//true jika $a dan $b keduanya true
var_dump(true && true);
var_dump(true && false);

//true jika $a dan $b salah satu atau keduanya true
var_dump(true || true);
var_dump(true || false);

//true jika $a bernilai false
var_dump(!true);
var_dump(!false);

//true jika $a dan $b salah satu true, tapi tidak keduanya
var_dump(true xor false);