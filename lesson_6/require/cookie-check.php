<?php
$loginCookieCheck = $_COOKIE['login'];
$passwordCookieCheck = $_COOKIE['password'];

$queryCookieCheck = mysqli_query($db, "SELECT * FROM `users` WHERE `login` = '$loginCookieCheck' AND `password` = '$passwordCookieCheck'"); 
$resultQueryCookieCheck = mysqli_fetch_array($queryCookieCheck);

if(!empty($loginCookieCheck) and !empty($passwordCookieCheck)){
    if($resultQueryCookieCheck['login'] == $loginCookieCheck and $resultQueryCookieCheck['password'] == $passwordCookieCheck){

    }else{
        header('Location: login.php');
        exit;
    }
}else{
    header('Location: login.php');
    exit;
}

?>