<?php

function thirdHighest($array){
    if(!is_array($array)){
        return "Parameter should be an array!";
    } elseif (count($array) < 3){
        return "Minimal array length is 3!";
    } elseif (preg_match("/[^\d]+/",implode($array))) {
        return "0";
    } else {
        rsort($array);
        return $array[2];
    }
    
}
echo thirdHighest([1,2,3,4,5,6]);
echo '</br>';
echo thirdHighest("bukan array nih");
echo '</br>';
echo thirdHighest([1,2]);
echo '</br>';
echo thirdHighest([107,1,-4,'a','true',0, -77]);
?>