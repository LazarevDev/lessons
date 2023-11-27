<?php 
$questions  = [
    'Какой способ объявления переменной является верным?' => [
        '$var;' => 1,
        'int var;' => 0,
        'let var;'=> 0,
    ],

    'Для чего используется continue?' => [
        'Используется внутри функций, для выхода из неё' => 0,
        'Используется внутри циклов для пропуска оставшейся части текущей итерации, и переходу к следующей' => 1,
        'Используется внутри циклов для их прерывания'=> 0,
    ],

    'Что означает инструкция  include_once?' => [
        'Включает и выполняет файл.' => 0,
        'Включает и выполняет файл один раз, при попытки повторного включения не выдаёт ошибку.' => 1,
        'Включает и выполняет файл один раз, при попытки повторного включения выдаёт ошибку.'=> 0,
    ],

    'Поддерживается ли множественное наследование классов?' => [
        'Нет' => 1,
        'Да, если наследуемые классы являются абстрактными' => 0,
        'Да, без ограничений'=> 0,
    ],
];


if(isset($_POST['submit'])){

    $score = 0;
    $i = 0;

    foreach ($questions as $question => $value) {
        $i++;
        $userAnswer = null;

        if(!empty($_POST[$i])){
            $userAnswer = $_POST[$i];

            if (isset($value[$userAnswer])) {
                $score += $value[$userAnswer];
            }
        }
    }
    
    echo "Вы набрали " . $score . " баллов.";
    die;
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
    <h1>Тест по php</h1>

    <form action="" method="post">
        <?php $i = 0; foreach ($questions as $question => $values): $i++;?>
            <h2><?=$question?></h2>
            <?php foreach ($values as $value => $points): ?>
                <input type="radio" name="<?=$i?>" value="<?=$value?>">
                <label><?=$value?></label><br>
            <?php endforeach; ?>
        <?php endforeach; ?>

        <input type="submit" name="submit" value="Отправить">
    </form>
</body>
</html>