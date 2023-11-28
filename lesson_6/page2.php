<?php 
session_start();
require_once('require/requestURL.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/profile.css">
    <?php if($_SESSION['them'] == 'dark'){ ?>
        <link rel="stylesheet" href="css/dark.css">
    <?}?>
    <title>Document</title>
</head>
<body>
    <section class="profile">
        <div class="container">
            <div class="contentProfile">
                <?php require_once('require/menu.php'); ?>
                
                <div class="historyBlock">
                    <h2>Вы посетили</h2>
                    <?php 
                    foreach ($_SESSION['history'] as $key => $value) {
                        echo "<p>".$value."</p>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
</body>
</html>