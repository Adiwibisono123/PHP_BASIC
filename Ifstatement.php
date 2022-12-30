<?php

$nilai = 70;
$absen = 90;


//If Statement & else statement
if ($nilai >= 75 && $absen >= 80) {
    echo "Selamat, Anda Lulus..";
} else {
    echo "Maaf, Anda Tidak Lulus" . PHP_EOL;
}

//else if statement
$point = 70;
$absensi = 60;


//else if statement
if ($point >= 80 && $absensi >= 80) {
    echo "Selamat, Nilai Anda A";
} else if ($point >= 75 && $absensi >= 75) {
    echo "Selamat, Nilai Anda B";
} else if ($point >= 70 && $absensi >= 70) {
    echo "Selamat, Nilai Anda C";
} else if ($point >= 60 && $absensi >= 60) {
    echo "Selamat, Nilai Anda D";
} else {
    echo "Maaf, Nilai Terlalu Rendah";
}