<?php

$wordList = $masterWordList;
$symbolsList = array('@', '$', '%', '#');
$password = '';

$numWords = $_POST['numberOfWords'];
$capitalize = $_POST['capitalization'];
$useNumber = isset($_POST['useNumber']);
$useSymbol = isset($_POST['useSymbol']);

for ($counter = 0; $counter < $numWords; $counter++) {
	$index = rand(0, count($wordList) - 1);
	$word = $wordList[$index];

	if ($capitalize == 'capFirstLetter') {
		$word = ucfirst($word);
	} else if ($capitalize == 'allCaps') {
		$word = strtoupper($word);
	} else { //all lower case
		$word = strtolower($word);
	}

	$password = $password.$word;
	if ($counter != $numWords - 1) {
		$password = $password."-";
	}

	unset($wordList[$index]);
	$wordList = array_values($wordList);
}

if ($useNumber) {
	$number = rand(0, 20);
	$password = $password.$number;
}

if ($useSymbol) {
	$index = rand(0, count($symbolsList) - 1);
	$password = $password.$symbolsList[$index];
}

$password = str_replace(' ', '', $password);
