<?php
//$interval = DateInterval::createFromDateString('+1day');
// var_dump($date);

$test = [];

// function to get every monday of the month -> given the parameters year and month
function getAllMondaysOfMonth(int $year, int $month) : array {
    $allMondays = [];
    // -> new DateTime -> "first monday of" is a relative time format -> Look at php manual || Y -> full numeric rep. of the year || n -> numeric rep. of the month
    //$secDate = new DateTime('first monday'.(DateTime::createFromFormat('Yn', $year.$month))->format('M Y'));
    $myDate = DateTime::createFromFormat('Yn', $year.$month);
    $myDate = new DateTime('first monday of '.$myDate->format('F Y'));

    // -> same for "next monday" this is also a relative time format
    $interval = DateInterval::createFromDateString('next monday of');
    while ($myDate -> format("m") === $month ) {
        // l in the format stands for the textual representation of the day
        $allMondays = $myDate->format('l j, M Y');
        //three manipulate methods for dates -> add, sub & diff
        $myDate->add($interval);
        //var_dump($allMondays);
    }
    //var_dump($secDate);
    return $allMondays;
}

