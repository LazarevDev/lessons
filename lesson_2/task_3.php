<?php 

if(isset($_POST['submit'])){
    $number_1 = $_POST['number_1'];
    $operation = $_POST['operation'];
    $number_2 = $_POST['number_2'];

    $arrayOperations = [
        'plus' => '+', 
        'minus' => '-', 
        'multiply' => '/', 
        'divide' => '*'
    ];

    if(isset($arrayOperations[$operation])){
        $operator = $arrayOperations[$operation];
        switch($operator){
            case '+':
                $result = $number_1 + $number_2;
                break;
            case '-':
                $result = $number_1 - $number_2;
                break;
            case '*':
                $result = $number_1 * $number_2;
                break;
            case '/':
                $result = $number_1 / $number_2;
                break;
            default:
                $result = "Неверная операция";
        }
        
        echo $result;
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="number_1" placeholder="Первое число">
        <select class="operations" name="operation"> <!-- список с операндами -->
            <option value='plus'>+</option>
            <option value='minus'>-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="number" name="number_2" placeholder="Второе число">
        <input type="submit" name="submit" value="=">
    </form>
</body>
</html>