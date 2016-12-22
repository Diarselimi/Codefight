<?php

function isSumOfConsecutive2($n) {
    
    $total = 0;
    $sum = 0;
    $consecutiveCount = 0;
    for($i=1; $i<$n;$i++){
        for($j=$i; $j<$n;$j++){
            $consecutiveCount ++;
            $sum += $j;            
            if($consecutiveCount >= 2){
                if($sum == $n){
                    $total ++;
                }
            }
        }
        $sum = 0;
        $consecutiveCount = 0;
    }
    return $total;
}


var_dump(isSumOfConsecutive2(9));