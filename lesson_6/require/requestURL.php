<?php
session_start();
$_SESSION['history'][] = $_SERVER['REQUEST_URI'];


?>