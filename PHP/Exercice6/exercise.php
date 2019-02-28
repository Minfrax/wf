<?php

/*
$path = "file.txt";
$handle = fopen($path, 'r');

function easterReverse($handle) {
    $path = __DIR__ . "file.txt";
    $fileContent = file_get_contents($path);
    print_r($fileContent);
    floor(strlen($fileContent) / 2);
}
*/
/*
$handler = __DIR__.'/file.txt';

easterReverse($handler);
$filenameOriginal = "file.txt";
$filenameToWrite = "fileTemp.txt";
copy($filenameOriginal, $filenameToWrite);
*/


function easterReverse(string $FilenameToEdit) {
    $fileContent = file_get_contents($FilenameToEdit);


    // $mid = floor(strlen($fileContent) / 2);


    $secondPart = substr ($fileContent, floor(strlen($fileContent) / 2 ));
    $firstPart = substr($fileContent, 0, strlen($secondPart) -1);

    // $reversedPart = strrev($secondPart);

    // echo "$reversedPart";

    $file = fopen($FilenameToEdit, 'r+');
    fseek($file, strlen($firstPart),SEEK_SET);
    fwrite($file, strrev($secondPart), strlen($secondPart));
    fclose($file);

    // return $reversedPart;
}

// easterReverse("file.txt");


