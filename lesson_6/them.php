<?php 
session_start();
$them = $_SESSION['them'];

if($them == 'light'){
    $_SESSION['them'] = 'dark';
}else{
    $_SESSION['them'] = 'light';
}

header('Location: profile.php');
exit();
?>