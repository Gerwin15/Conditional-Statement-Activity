<?php

$a = $_GET["1"];
    if($a >= 1000){
        $b = $a * 0.10;
        echo "Your total is: ".$b;
    }
    elseif($a >=500 && $a = 999){
        $b = $a * 0.5;
        echo "Your total is: ".$b;
    }else{
        echo "Your total is: ".$b = $a;
    }

?>