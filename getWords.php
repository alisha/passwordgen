<?php
include('simplehtmldom_1_5/simple_html_dom.php');

$masterWordList = [];
for ($i = 1; $i < 2; $i += 2) {
	$url = 'http://www.paulnoll.com/Books/Clear-English/words-0'.$i.'-0'.($i+1).'-hundred.html';
	$html = file_get_html($url);
	foreach ($html->find('li') as $element)
		array_push($masterWordList, $element->plaintext);
}

foreach ($masterWordList as &$word) {
	$word = trim(preg_replace('/\t+/', '', $word));
}