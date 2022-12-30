<?php

// $nilai = "C";

//versi if else
// if ($nilai == "A") {
//     echo "Anda lulus dengan nilai yang sangat baik" . PHP_EOL;
// } else if ($nilai == "B" || $nilai == "C") {
//     echo "Anda lulus" . PHP_EOL;
// } else if ($nilai == "D") {
//     echo "Anda tidak lulus" . PHP_EOL;
// } else {
//     echo "Sepertinya anda salah jurusan" . PHP_EOL;
//}

//cara penggunaan switch
$nilai = "B";

switch ($nilai) {
    case "A":
        echo "Anda lulus dengan nilai sempurna" . PHP_EOL;
        break;
    case "B" :
    case "C" :
        echo "Anda lulus" . PHP_EOL;
        break;
    default:
        echo "Mungkin anda salah jurusan" . PHP_EOL;
        break;
}

//syntax alternative, tidak menggunakan kurung kurawal tetapi diganti dengan : dan diakhiri dengan endswitch;
// switch ($nilai) :
//     case "A":
//         echo "Anda lulus dengan nilai sempurna" . PHP_EOL;
//         break;
//     case "B" :
//     case "C" :
//         echo "Anda lulus" . PHP_EOL;
//     default:
//         echo "Mungkin anda salah jurusan" . PHP_EOL;
//         break;
// endswitch;