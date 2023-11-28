<?php
if(!empty($_COOKIE['login']) and !empty($_COOKIE['password'])){
    
    $loginCookieCheck = $_COOKIE['login'];
    $passwordCookieCheck = $_COOKIE['password'];


    $cookieCheckQuery = mysqli_query($db, "SELECT * FROM `users` WHERE `login` = '$loginCookieCheck' AND `password` = '$passwordCookieCheck'"); 
    $resultCookieCheckQuery= mysqli_fetch_array($cookieCheckQuery);

    if($resultCookieCheckQuery['login'] == $loginCookieCheck and $resultCookieCheckQuery['password'] == $passwordCookieCheck){
        header('Location: profile.php');
    }else{
        setcookie('login', '');
        setcookie('password', '');
    }
}
?>