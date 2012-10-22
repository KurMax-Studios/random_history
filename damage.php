<?php

include 'stats.php';

$playerDamage=calculateDmg($health, $pAttack, $pBonusMax);
$enemyDamage=calculateDmg($pHealth, $attack,$bonusMax);

function calculateDmg($x, $y, $z)
	{
		return $x-($y+rand(0, $z));
	}
?>