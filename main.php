<?php

include 'enemy.php';
include 'damage.php';
include 'stats.php';

$enemy="$t $e $n";
$player=$_POST["player"];
echo "<h1>". $player ."'s big adventure</h1>";
echo "$player vs $enemy";
echo"</br> $playerDamage $enemyDamage";
echo"</br> player $pAttack $pHealth";
echo"</br> enemy $attack $health";



?>