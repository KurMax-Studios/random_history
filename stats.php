<?php
function stats($monsterName)
{
	$pHealth=1000;
	$pAttack=100;
	$pBonusMax=100;
	$pStats=array($pHealth, $pAttack, $pBonusMax);
	
	$health=0;
	$attack=0;
	$bonusMax=0;
	$p="";
	switch($monsterName['name'])
	{
		case "Orc":
			//Orc stats
			$health=1000;
			$attack=45;
			$bonusMax=50;
			$p="<img src='pics/totally not orc.png' height=64px width=64px>";
			break;
		case "Blob":
			//Blob stats
			$health=200;
			$attack=15;
			$bonusMax=10;
			$p="<img src='pics/totally not blob.png' height=64px width=64px>";
			break;
		case "Dragon":
			//Dragon stats
			$health=1400;
			$attack=125;
			$bonusMax=50;
			$p="<img src='pics/totally not dragon.png' height=64px width=64px>";
			break;
		case "Spider":
			//Spider stats
			$health=600;
			$attack=65;
			$bonusMax=30;
			$p="<img src='pics/totally not spider.png' height=64px width=64px>";
			break;
		case "Centaur":
			//Centour stats
			$health=900;
			$attack=80;
			$bonusMax=20;
			$p="<img src='pics/totally not centaur.png' height=64px width=64px>";
			break;
		case "Scorpion":
			//Scorpion stats
			$health=800;
			$attack=70;
			$bonusMax=35;
			$p="<img src='pics/totally not scorpion.png' height=64px width=64px>";
			break;
		case "Dinosaur":
			//Dinosaur stats
			$health=1100;
			$attack=135;
			$bonusMax=25;
			$p="<img src='pics/totally not dinosaur.png' height=64px width=64px>";
			break;
		case "Skeleton":
			//Skeleton stats
			$health=700;
			$attack=60;
			$bonusMax=15;
			$p="<img src='pics/totally not skeleton.png' height=64px width=64px>";
			break;
		case "Baselisk":
			//Baselisk stats
			$health=750;
			$attack=150;
			$bonusMax=25;
			$p="<img src='pics/totally not baselisk.png' height=64px width=64px>";
			break;
		case "Mosquito":
			//Mosquito stats
			$health=50;
			$attack=5;
			$bonusMax=10;
			$p="<img src='pics/totally not mosquito.png' height=64px width=64px>";
			break;
		case "Pickel":
			//Pickel stats
			$health=42;
			$attack=997;
			$bonusMax=3;
			$p="<img src='pics/totally not pickel.png' height=64px width=64px>";
			break;
		default:
			echo "broken game SYNTAX ERROR NO ENEMY STATS FOUND!!";
			break;
	}
	$eStats=array($health, $attack, $bonusMax, $p);
	$stats=array("player" => $pStats, "enemy" => $eStats);
	return $stats;
}
?>