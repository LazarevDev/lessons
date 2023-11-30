<?php 
session_start();
require_once('require/db.php');
require_once('require/cookie-check-auth.php');

$msg = "";

if(isset($_POST['submit'])){
    $login = $_POST['login'];
    $password = $_POST['password'];
    $password = md5($password);

    if(!empty($login) and !empty($password)){
        $query = mysqli_query($db, "SELECT * FROM `users` WHERE `login` = '$login' and `password` = '$password'");
        $result = mysqli_fetch_array($query);

        if(is_array($result) && $result['login'] == $login && $result['password'] == $password){
            setcookie('login', $login);
            setcookie('password', $password);
            $_SESSION['them'] = 'light';
            header('Location: index.php');
        }else{
            $msg = "Вы ввели некорректные данные";
        }
    }else{
        $msg = "Вы заполнили не все данные";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo $msg; ?>
    
    <form action="" method="post">
        <input type="text" name="login" placeholder="Логин"><br>
        <input type="password" name="password" placeholder="Пароль"><br>
        <input type="submit" name="submit" value="Войти">
        <a href="register.php">Регистрация</a>
    </form>
</body>
</html>