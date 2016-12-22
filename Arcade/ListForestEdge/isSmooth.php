<?php

function replaceMiddle($arr) {

    $len = count($arr)-1;

    if(count($arr) % 2 == 0){
         $arr[$len/2] = ($arr[(count($arr)/2)-1] + $arr[(count($arr)/2)]);
        unset($arr[($len+1) / 2]);
    }
    
    return array_values($arr);
}



print_r(replaceMiddle([7, 2, 2, 5, 10, 7]));
print_r(replaceMiddle([-5, -5, 10]));

