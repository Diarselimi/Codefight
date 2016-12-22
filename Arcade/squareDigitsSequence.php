<?php
echo '<pre>';
function squareDigitsSequence($a0) {
    $results = [];
    $sum = $a0;
    $last = 0;
    while(!in_array($sum, $results)){
        $last = $sum;
        $results[] = $last;
        $sum = calcSumPower($last);
        echo sprintf('%s <br>',$last);
    }
    
    return count($results)+1;

}

function calcSumPower($nr){
    $temp = str_split($nr);
    $sum = 0;
    foreach($temp as $val){
        $sum += pow($val, 2);
    }

    return $sum;
}


var_dump(squareDigitsSequence(16));