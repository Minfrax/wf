<?php

// throw new RuntimeException('Text');

function divide($numb, $divisor) {

    if($divisor == 0) {
        throw new RuntimeException("Division by 0 is not allowed");
    } else {
        $res = $numb / $divisor;
    }
    return $res;
}

function arrayDivide(array $firstVal, int $divisor ) : array {
    $res = [];

    foreach ($firstVal as $val) {
        try {
            $res[] = divide($firstVal, $divisor);

        } catch (RuntimeException $e) {
            echo $e->getMessage();
            $res[] = $val;
        }
    }
    return $res;
}

/*
    if($divisor == 0) {


    } else {
        return ($firstVal / $divisor);
    }
*/