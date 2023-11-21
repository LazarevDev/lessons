<?php

$product1 = "Чайник";
$product2 = "Кофейник";
$product3 = "Кипятильник";

$price1 = 300;
$price2 = 150;
$price3 = 270;

$averagePrice = ($price1 + $price2 + $price3)/3;

// echo $product1." => ".$price1." руб<br>";
// echo $product2." => ".$price2." руб<br>";
// echo $product3." => ".$price3." руб<br>";
// echo "---------------------------";
// echo "<br>Средняя цена: ".$averagePrice;

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
</body>
</html>