<?php

require_once __DIR__ . '/class.php';

$categories = [
	new Attualita(),
	new Sport(),
	new Gossip(),
	new Storia(),
];

foreach ($categories as $category) {
	$category->getMyCategory();
	echo '<br>';
}

