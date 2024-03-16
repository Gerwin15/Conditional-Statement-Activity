<?php
$a = $_GET["1"];
$b = $_GET["2"];
    if($a == "admin" && $b == "password123"){
        echo "Log in successful!";
    }else{
        echo "Invalid username or password";
    }

?>