<?php
$password;
$salt;

$test = strlen($password) / 2;
// echo ($test);

$newPswd = substr($password, 0, $test) .$salt .substr($password, -$test);

// Second way, with ceil

$pos = ceil(strlen($password) / 2);
$secondPswd = substr($password, 0, $pos) . $salt . substr($password, $pos);

// Bonus part with ceil and floor

$firstPart = substr($password, 0, floor(strlen($password) / 2) + (strlen($password) % 2));
$lastPart = substr($password, ceil(strlen($password) / 2));
$finalPass = $firstPart . $salt . $lastPart;

echo ($finalPass);

$saltedPassword = $finalPass;
