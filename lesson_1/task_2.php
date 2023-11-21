<?php

$product1 = "Чайник";
$product2 = "Кофейник";
$product3 = "Кипятильник";

$price1 = 100;
$price2 = 550;
$price3 = 127;

$averagePrice = ($price1 + $price2 + $price3)/3;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid #ddd;
            color: #333;
        }
    </style>
</head>
<body>
    <table>
        <tr><th>Товар</th><th>Цена</th></tr>
        <tr><td><?=$product1?></td><td><?=$price1?></td></tr>
        <tr><td><?=$product2?></td><td><?=$price2?></td></tr>
        <tr><td><?=$product3?></td><td><?=$price3?></td></tr>
    </table>

    <p>Средняя цена: <?=$averagePrice?></p>

    <?php 
    if ($price1 > $price2) {
        $maxPrice = $price1;
        $maxProduct = $product1;
    }else{
        $maxPrice = $price2;
        $maxProduct = $product2;
    }
        
    if ($maxPrice < $price3){
        $maxPrice = $price3;
        $maxProduct = $product3;
    }
    
    echo "Самый дорогой товар: {$maxProduct} <br> Цена: {$maxPrice} <br><br>";

    if($price1 < $price2) {
        $minPrice = $price1;
        $minProduct = $product1;
    }else{
        $minPrice = $price2; 
        $minProduct = $product2;
    }

    if($minPrice > $price3){
        $min_price = $price2;
        $minProd = $product2;
    }
        
    echo "Самый дешевый товар: {$minProduct} <br> Цена: {$minPrice} <br><br>";
    ?>
</body>
</html>