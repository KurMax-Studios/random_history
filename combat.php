<?php

function combat($x, $y, $enemy, $player)
{
	echo "". $x['enemy'][3] ."</br>";
	include 'damage.php';
	$eHp="". $x['enemy'][0] ."";
	$pHp="". $x['player'][0] ."";
		$y .= "$player has ". $pHp ." hp. </br>";
		$y .= "$enemy has ". $eHp ." hp. </br>";
	while($eHp>0 && $pHp>0)
	{	
		$eHp=calculateDmg($eHp, $x['player'][1], $x['player'][2]);
		$y .= "$player hits $enemy with ". $x['player'][1] ." damage. $enemy now has ". $eHp ." hp left. </br>";
		$pHp=calculateDmg($pHp, $x['enemy'][1], $x['enemy'][2]);
		$y .="$enemy hits $player with ". $x['enemy'][1]." damage. $player now has ". $pHp ." hp left. </br>";
	}
	if($eHp<=0 && $pHp>0)
	{
		$y .="<h3>$player won the battle!</h3>";
	}
	elseif($pHp<=0 && $eHp<=0)
	{
			$y .="<h3>It's a draw!</h3>";
	}
	else
	{
		$y .="<h3>$enemy won the battle!</h3>";
	}
	return $y;
}

?>