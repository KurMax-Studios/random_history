<?php

//create an array of names
$name[] = "Orc";
$name[] = "Blob";
$name[] = "Dragon";
$name[] = "Spider";
$name[] = "Centour";
$name[] = "Scorpion";
$name[] = "Dinosaur";
$name[] = "Skeleton";
$name[] = "Baselisk";
$name[] = "Mosquito";

//create an array of element
$element[] = "Lava";
$element[] = "Water";
$element[] = "Ice";
$element[] = "Thunder";
$element[] = "Stone";
$element[] = "Ghost";
$element[] = "Nature";
$element[] = "Poisinus";

//create an array of titles
$title[] = "The Giant";
$title[] = "The God";
$title[] = "The King";
$title[] = "The Small";
$title[] = "The Enslaved";
$title[] = "The Brutal";
$title[] = "The Slimy";
$title[] = "The ";


	//select a random name
	$n = $name[rand(0, count($name) - 1)];
	
	//select a random element
	$e = $element[rand(0, count($element) - 1)];
	
	//select a random title
	$t = $title[rand(0, count($title) - 1)];


?>