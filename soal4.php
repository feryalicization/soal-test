<?php

    function nilai_terbsesar($arr){
        rsort($arr);
        
        $nilai_terbesar_kedua = $arr[1];

        
        return $nilai_terbesar_kedua;
    }
    
    $array = [29, 12, 23, 42, 80];

    $nilai_kedua = nilai_terbsesar($array);
    
    echo $nilai_kedua;

?>