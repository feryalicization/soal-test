<?php

    function karakter_terbanyak($kata){
        $counter = array();

        for($i = 0; $i < strlen($kata); $i++){
            $char = $kata[$i];
            
        }

        if (isset($counter[$char])){
            $counter[$char]++;

        } else{
            $counter[$char] = 1;

        }

    $max_char = '';
    $max_count = 0;

    foreach($counter as $char => $count) {
        if ($counter > $max_count) {
            $max_char = $char;
            $max_count = $count;

        }
    }


    return "$max_char $max_count"."x";

    }




    echo karakter_terbanyak("testtt")."\n";


?>