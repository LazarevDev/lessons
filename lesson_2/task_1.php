<?php 
if(isset($_POST['submit'])){
    $fio = $_POST['fio'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);


    echo "ФИО: ".$fio."<br>";
    echo "Адрес: ".$address."<br>";
    echo "Email: ".$email."<br>";
    echo "Пароль: ".$password."<br>";
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
        <input type="text" name="fio" placeholder="ФИО" required><br>
        <input type="text" name="address" placeholder="Адрес" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Пароль" required><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>