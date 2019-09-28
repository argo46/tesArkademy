<?php
    
    function sortNumber($parameterString){
        $newNumber = preg_replace("/[^\d]*/",'',$parameterString);
        
        // for($i=0; $i<strlen($newNumber); $i++){

        // }
        if (strlen($newNumber)==0){
            return "No number found in parameter!";
        } else {
            $array = str_split($newNumber);
            sort($array);
            return implode($array);
        }
    }

    echo sortNumber("48172a94");
    echo "</br>";
    echo sortNumber("abc");
    echo "</br>";
    echo sortNumber("94a");
?>