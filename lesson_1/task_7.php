<?php
$products = array("Товар 8", "Товар 2", "Товар 3", "Товар 4", "Товар 5");

$products[] = "Товар 6";
$products[] = "Товар 7";

$count = count($products);

for ($i = 0; $i < $count; $i++) {
    echo $products[$i] . "<br>";
}


echo "<br>Исходный массив:<br>";
foreach ($products as $product) {
    echo $product . "<br>";
}

sort($products);

echo "<br>Отсортированный массив:<br>";
foreach ($products as $product) {
    echo $product . "<br>";
}
?>