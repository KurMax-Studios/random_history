<?php


function calculateDmg($x, $y, $z)
{
	$x=$x-($y+rand(0, $z));
	return $x;
}

?>