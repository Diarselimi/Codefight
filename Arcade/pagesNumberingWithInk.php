<?php

function pagesNumberingWithInk($current, $numberOfDigits) {
    $numberOfDigits -= strlen($current);

    while($numberOfDigits >= strlen($current)){
        $current ++;   
        $numberOfDigits -= strlen($current);     
    }
    return $current;
}


var_dump(pagesNumberingWithInk(1,5));
echo '<br>';
var_dump(pagesNumberingWithInk(21,5));
echo '<br>';
var_dump(pagesNumberingWithInk(76, 250));

