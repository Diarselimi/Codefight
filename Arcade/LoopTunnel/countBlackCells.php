<?php
function countBlackCells($n, $m) {	

	$blackPixels = ($m + $n) - gcd($n,$m);

	for($i=1;$i<$m;$i++){
		if(fmod(($n / $m) * $i, 1) == 0){
			$blackPixels+=2;
		}
	}
	
	return $blackPixels;
}


function gcd($x, $y)
{
	$x = abs($x);
	$y = abs($y);
	
	if($x + $y == 0)
	{
		return "0";
	}else{
		while($x > 0)
		{
			$z = $x;
			$x = $y % $x;
			$y = $z;
		}
		return $z;
	}
}



echo countBlackCells(66666,88888);
echo ' it should be 177774 <br>';

echo countBlackCells(5,9);
echo ' it should be 13 <br>';

echo countBlackCells(1,1);
echo ' it should be 1 <br>';

echo countBlackCells(3,3);
echo ' it should be 7 <br>';

echo countBlackCells(2,5);
echo ' it should be 6 <br>';

echo countBlackCells(1,1);
echo ' it should be 1 <br>';

echo countBlackCells(1,2);
echo ' it should be 2 <br>';

echo countBlackCells(1,3);
echo ' it should be 3 <br>';

echo countBlackCells(1,239);
echo ' it should be 239 <br>';

echo countBlackCells(33,44);
echo ' it should be 86 <br>';

echo countBlackCells(16,8);
echo ' it should be 30 <br>';

echo countBlackCells(3,4);
echo ' it should be 6 <br>';


echo countBlackCells(0,100);
echo ' it should be 0 <br>';