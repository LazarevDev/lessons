<?php 
session_start();
$_SESSION['history'] = null;
header('Location: ../profile.php');
exit;
?>