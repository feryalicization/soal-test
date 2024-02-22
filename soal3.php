

<?php

    $rambu_laluLintas = ["merah", "kuning", "hijau"];
    $curentIndex = 0;

    function rambu_laluLintas(){
        global $rambu_laluLintas, $curentIndex ;
        $curentSignal = $rambu_laluLintas[$curentIndex];

        $curentIndex++;
        if($curentIndex >= count($rambu_laluLintas)){
            $curentIndex = 0;
        }
        return $curentSignal;

    }

    echo rambu_laluLintas()."\n";
    echo rambu_laluLintas()."\n";
    echo rambu_laluLintas()."\n";
    echo rambu_laluLintas()."\n";
    echo rambu_laluLintas()."\n";
    echo rambu_laluLintas()."\n";


?>