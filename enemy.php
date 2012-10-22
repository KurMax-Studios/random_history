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

	$n = $name[rand(0, count($name) - 1)];
	
	$e = $element[rand(0, count($element) - 1)];

	$t = $title[rand(0, count($title) - 1)];
$monsterName = array($t, $e, $n);
//$i=0;
//foreach ($title as $a )
{
	
//	foreach ($element as $b )
	{

//		foreach ($name as $c )
		{
//			$i++;
//			echo "$i $a"." "."$b"." "."$c</br>";
		}

	}
}

?>