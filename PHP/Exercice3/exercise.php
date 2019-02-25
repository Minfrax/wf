<?php

$input;
$winner;
//var_dump($input);

$index = 0;
$indexB = 0;


foreach ($input as $row) {

    if($row[0] > $row[1]) {
        $index++;
        echo($index);
    } else if ($row[0] < $row[1]) {
        $indexB++;
        echo($indexB);
    }
}

if ($index > $indexB) {
    $winner = "A";
} else {
    $winner = "B";
}

echo('The winner is '. $winner);


// SECOND WAY -> With functions

/**
 * Get winner
 *
 * Return the winner of a game containing multiple rounds
 *
 * @param array[] $input The input containing rounds
 *
 * @return string
 */
function getWinner(array $input) : string
{
    $brotherA = 0;
    $brotherB = 0;

    foreach ($input as [$cardA, $cardB]) {
        if ($cardA > $cardB) {
            $brotherA++;
        } else if ($cardA < $cardB) {
            $brotherB++;
        }
    }
    if ($brotherA > $brotherB) {
        return 'A';
    }
    return 'B';
}

$winner = getWinner($input);
