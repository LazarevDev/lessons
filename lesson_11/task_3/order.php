<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST['product']) && isset($_POST['material']) && isset($_POST['quantity'])){
        $product = $_POST['product'];
        $material = $_POST['material'];
        $quantity = $_POST['quantity'];
        
        echo "<h1>Ваш заказ принят</h1>";
        echo "<p>Заказано изделие: $product</p>";
        echo "<p>Материал: $material</p>";
        echo "<p>Количество: $quantity</p>";
    } else {
        echo "<h1>Ошибка!</h1>";
        echo "<p>Пожалуйста, заполните все поля формы.</p>";
    }
    ?>
</body>
</html>