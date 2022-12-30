<?php

echo 'Name : ';
echo 'Adi Wibisono';
echo "\n";
// didalam string double quote bisa ditambahkan \n sebagai enter, dan \t sebagai tab
echo "Name : ";
echo "Adi\t Wibisono";
echo "\n";

// heredoc sama dengan double quote
echo <<<ADI
    ini adalah contoh string
    adalah cara ke 3
    bernama heredoc\n
ADI;

// nowdoc sama seperti dengan single quote
echo <<<'ADI'
    ini adalah contoh string
    adalah cara ke 4
    bernama nowdoc
ADI;
