<?php

	$pHealth=1000;
	$pAttack=100;
	$pBonusMax=100;

	switch($n)
	{
		case "Orc":
			//Orc stats
			$health=1000;
			$attack=45;
			$bonusMax=50;
			break;
		case "Blob":
			//Blob stats
			$health=200;
			$attack=15;
			$bonusMax=10;
			break;
		case "Dragon":
			//Dragon stats
			$health=1400;
			$attack=125;
			$bonusMax=50;
			break;
		case "Spider":
			//Spider stats
			$health=600;
			$attack=65;
			$bonusMax=30;
			break;
		case "Centour":
			//Centour stats
			$health=900;
			$attack=80;
			$bonusMax=20;
			break;
		case "Scorpion":
			//Scorpion stats
			$health=800;
			$attack=70;
			$bonusMax=35;
			break;
		case "Dinosaur":
			//Dinosaur stats
			$health=1100;
			$attack=135;
			$bonusMax=25;
			break;
		case "Skeleton":
			//Skeleton stats
			$health=700;
			$attack=60;
			$bonusMax=15;
			break;
		case "Baselisk":
			//Baselisk stats
			$health=750;
			$attack=150;
			$bonusMax=25;
			break;
		case "Mosquito":
			//Mosquito stats
			$health=50;
			$attack=5;
			$bonusMax=10;
			break;
		default:
			echo "broken game SYNTAX ERROR NO ENEMY STATS FOUND!!";
			break;
	}
?>