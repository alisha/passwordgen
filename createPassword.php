<?php

$wordList = array('correct', 'horse', 'battery', 'staple');
$symbolsList = array('@', '$', '%', '#');
$password = '';
$numWords = 4;

for ($counter = 0; $counter < $numWords; $counter++) {
	$index = rand(0, count($wordList)-1);
	$password = $password.$wordList[$index];
	if ($counter != $numWords - 1) {
		$password = $password."-";
	}

	unset($wordList[$index]);
	$wordList = array_values($wordList);
}

echo $password;