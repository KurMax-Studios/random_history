<?php

include 'enemy.php';

	$pHealth=100;
	$pAttack=10;
	$pBonusMax=10;
	
switch($n)
{
	case 0:
		//Orc stats
		$health=100;
		$attack=9;
		$bonusMax=10;
		break;
	case 1:
		//Blob stats
		$health=20;
		$attack=3;
		$bonusMax=2;
		break;
	case 2:
		//Dragon stats
		$health=140;
		$attack=25;
		$bonusMax=10;
		break;
	case 3:
		//Spider stats
		$health=60;
		$attack=13;
		$bonusMax=6;
		break;
	case 4:
		//Centaur stats
		$health=90;
		$attack=16;
		$bonusMax=4;
		break;
	case 5:
		//Scorpion stats
		$health=80;
		$attack=14;
		$bonusMax=7;
		break;
	case 6:
		//Dinosaur stats
		$health=110;
		$attack=27;
		$bonusMax=5;
		break;
	case 7:
		//Skeleton stats
		$health=70;
		$attack=12;
		$bonusMax=3;
		break;
	case 8:
		//Baselisk stats
		$health=75;
		$attack=30;
		$bonusMax=5;
		break;
	case 9:
		//Mosquito stats
		$health=5;
		$attack=1;
		$bonusMax=2;
		break;
	default:
		echo "broken game SYNTAX ERROR NO ENEMY STATS FOUND!!";
		break;
}

?>