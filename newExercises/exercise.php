<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 26.02.2019
 * Time: 11:30
 */


function bitInANumber(int $number) : int {
    $counter = 0;
    $compare = 1;

    while ($compare < $number) {
        $counter++;
        $compare = $compare << 1;

    }
    return $counter;
}