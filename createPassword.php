<?php

$wordList = array('correct', 'horse', 'battery', 'staple', 'running', 'dog', 'headphones', 'award', 'books', 'clothes', 'owl', 'app');
$symbolsList = array('@', '$', '%', '#');
$password = '';

$numWords = $_POST['numberOfWords'];
$capitalize = isset($_POST['capitalize']);
$useNumber = isset($_POST['useNumber']);
$useSymbol = isset($_POST['useSymbol']);

for ($counter = 0; $counter < $numWords; $counter++) {
	$index = rand(0, count($wordList) - 1);
	$word = $wordList[$index];

	if ($capitalize) {
		$word = ucfirst($word);
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
