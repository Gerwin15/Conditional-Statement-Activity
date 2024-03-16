<?php

$a = $_GET["1"];
    if($a >= 90){
        echo "Your grade is A";
    }
    elseif($a >=80 && $a = 89){
        echo "Your grade is B";
    }elseif($a >=70 && $a = 79){
        echo "Your grade is C";
    }elseif($a >=60 && $a = 69){
        echo "Your grade is D";
    }else{
        echo "Your grade is F";
    }

?>