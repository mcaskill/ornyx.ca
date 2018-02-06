<?php

if (strstr($_SERVER['HTTP_HOST'], 'ornyx.ca')) {
	define ('ROOT', 'http://ornyx.ca');
} elseif (strstr($_SERVER['HTTP_HOST'], 'dev.ornyx.ca')) {
	define ('ROOT', 'http://dev.ornyx.ca');
} else {
	define ('ROOT', 'http://ornyx.test');
}

# Split the path by '/'
$params = explode('/', $_SERVER['REQUEST_URI']);
$params = array_reverse($params);

# Keeps users from requesting any file they want
$safe_pages = array('accueil', 'personnages', 'geographie');
$safe_tomes = array('tome-1', 'tome-2', 'tome-3');

$sections = array(
	'accueil' => array(
		'url'   => 'accueil',
		'title' => ""
	),
	'romans' => array(
		'url'   => 'romans',
		'title' => 'Les Romans'
	),
	'personnages' => array(
		'url'   => 'personnages',
		'title' => 'Les Personnages'
	),
	'geographie' => array(
		'url'   => 'geographie',
		'title' => 'La Geographie'
	)
);

$in_first = in_array($params[0], $safe_pages);
$in_second = in_array($params[1], $safe_pages);
if ( $in_first || $in_second ) {
	$mod = ($in_first ? array_search($params[0], $safe_pages) : array_search($params[1], $safe_pages) );
	$section = $safe_pages[$mod];
} else {
	$section = 'accueil';
}

$in_first = in_array($params[0], $safe_tomes);
$in_second = in_array($params[1], $safe_tomes);
if ( $in_first || $in_second ) {
	$mod = ($in_first ? array_search($params[0], $safe_tomes) : array_search($params[1], $safe_tomes) );
	$tome = $safe_tomes[$mod];
} else {
	$tome = '';
}

$page = $sections[$section]['title'];

include 'stubs/header.php';

include 'stubs/'.$section.'.php';

include 'stubs/footer.php';
