<?php 

if(isset($_POST['submit'])){
    $to = $_POST['to'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    if(mail($to, $subject, $message)){
        echo "Сообщение успешно отправлено";
    }else{
        echo "Произошла ошибка";
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
        <input type="text" name="to" placeholder="to" required><br>
        <input type="text" name="subject" placeholder="subject" required><br>
        <textarea name="message" id="" cols="30" rows="10" placeholder="message"></textarea><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>