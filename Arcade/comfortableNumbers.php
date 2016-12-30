<?php

function comfortableNumbers($L, $R) {
   if($L == $R)
   		return 0;

   	$a= $L;$b= $a+1; $sumA = 0; $pairs = 0;
   	while ($a < $R) {
   		
   		$sumA = s($a);
   		while ($b <= $R) {
   			$sumB = s($b);
   			if(($b >= $a - $sumA) && ($b <= $a + $sumA)&&
              ($a >= $b - $sumB) && ($a <= $b + $sumB)) {
                $pairs = $pairs + 1;
            }
 
            $b = $b + 1;	
   		}
   		$a = $a + 1;
        $b = $a + 1;
        $sumA = 0;
   	}
   	return $pairs;
}

function s($nr){
	$string = str_split($nr);
	$total = 0;
	foreach ($string as $val) {
		$total += $val;
	}

	return $total;
}

var_dump(comfortableNumbers(10,12));
echo '<br>';
var_dump(comfortableNumbers(1,9));