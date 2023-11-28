<?php 
session_start();
require_once('require/db.php');
require_once('require/cookie-check-auth.php');

$msg = "";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $password = md5($password);


    if(!empty($name) AND !empty($login) AND !empty($password)){
        $userQuery = mysqli_query($db, "SELECT * FROM `users` WHERE `login` = '$login'"); 
        $resultUserQuery = mysqli_fetch_array($userQuery);

        if(!$resultUserQuery){
            $query = "INSERT INTO `users` (login, name, password) VALUES ('$login', '$name','$password')";
            $result = mysqli_query($db, $query) or die(mysqli_error($db));

            setcookie('login', $login);
            setcookie('password', $password);
            $_SESSION['them'] = 'light';
            
            header('Location: index.php');
        }else{
            $msg = "Пользователь с таким логином уже существует";
        }
    }else{
        $msg = "Вы не ввели данные";
    }
}

echo $msg;

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
    <input type="text" name="name" placeholder="Имя"><br>
    <input type="text" name="login" placeholder="Логин"><br>
    <input type="password" name="password" placeholder="Пароль"><br>
    <input type="submit" name="submit" value="зарегистрироваться">
    <a href="index.php">Авторизация</a>

</form>

</body>
</html>