<?php 
    function countChar($string, $char){
        $length = strlen($string);
        $count = 0;
        for($i=0; $i<=$length; $i++){
            if(substr($string, $i, 1) == $char){
                $count++;
            }
        }
        if ($count < 1){
            return "Not found!";
        } else {
            return $count;
        }
    }

    echo countChar("arkademy", 'a');
    echo '</br>';
    echo countChar("javascript", 'x');
?>