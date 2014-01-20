<?php

echo"<title>Big Adventure</title>";

include 'enemy.php';
randomEnemy();
$combatLog="";
include 'combat.php';
include 'stats.php';

$enemy="". $monsterName['title'] ." ". $monsterName['element'] ." ". $monsterName['name'] ."";
$player=$_POST["player"];

echo "<h1>". $player ."'s big adventure</h1>";
echo "$player vs $enemy</br>";

$combatLog = combat(stats($monsterName), $combatLog, $enemy, $player);
echo "$combatLog"

?>