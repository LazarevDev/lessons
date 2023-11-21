<?php

$n = 130;
$min = 0;
$max = 190;

while(true){
    $rand = rand($min, $max);
    echo $rand."<br>";
    if($rand == $n){
        break;
    }
}

?>