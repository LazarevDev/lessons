<?php 
$arrayProducts = [  'Чайник' => 123,
                    'Кофейник' => 123,
                    'Кипятильник' => 234,
                ];

// asort($arrayProducts);
ksort($arrayProducts);

// var_dump($arrayProducts);
$priceSum = null;
foreach ($arrayProducts as $product => $price){
    echo $product."=>".$price."<br>";
    
    $priceSum += $price;
}

echo "Товаров всего: ".count($arrayProducts)."<br>";
echo "Суммарная стоимость: ".$priceSum."<br>";

