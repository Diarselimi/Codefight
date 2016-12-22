<?php
echo '<pre>';
function isPower($n) {
    if($n == 0)
        return true;

    for($i=2;$i < $n;$i++){
        if(fmod($extra, 1) == 0){
            return true;
        }
    }
    return false;
}


var_dump(isPower(125));
var_dump(isPower(75));
var_dump(isPower(1));
var_dump(isPower(325));