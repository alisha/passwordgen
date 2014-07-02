<?php

$wordList = array('correct', 'horse', 'battery', 'staple');
$symbolsList = array('@', '$', '%', '#');
$password = '';

$numWords = 4;
$addNumber = True;
$addSymbol = True;

for ($counter = 0; $counter < $numWords; $counter++) {
	$index = rand(0, count($wordList) - 1);
	$password = $password.$wordList[$index];
	if ($counter != $numWords - 1) {
		$password = $password."-";
	}

	unset($wordList[$index]);
	$wordList = array_values($wordList);
}

if ($addNumber) {
	$number = rand(0, 20);
	$password = $password.$number;
}

if ($addSymbol) {
	$index = rand(0, count($symbolsList) - 1);
	$password = $password.$symbolsList[$index];
}

echo $password;