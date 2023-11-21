<?php 

$price = 100;
$year = date('Y');
$percent = 0.1;
$percentNext = $percent * 0.035;
$priceNext = $price + $price * $percent;

while(true){
    if($priceNext >= 150){
        break;
    }else{
        echo "год: ".$year."<br>Цена: ".$priceNext."<br>Процент:".$percentNext."<br><br><br>";
    }

    $year++;
    $percentNext += 3.5 / 100; 
    $priceNext = $priceNext + $priceNext * $percentNext;
}