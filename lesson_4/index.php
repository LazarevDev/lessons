<?php 
require_once('require/db.php');

if(isset($_POST['submit'])){
    $name = $_POST['name'];

    if(!empty($_POST['author'])){
        $author = $_POST['author'];
        $listAuthors = explode(PHP_EOL, $author);
    }

    $insertBook = mysqli_query($db, "INSERT INTO `books` (`name`) VALUES ('$name')");

    $queryBook = mysqli_query($db, "SELECT * FROM `books` ORDER BY `id` DESC");
    $resultBook = mysqli_fetch_array($queryBook);

    $id_book = $resultBook['id'];

    foreach($listAuthors as $author){
        if(!empty($author)){
            $insertBook = mysqli_query($db, "INSERT INTO `authors` (`name`, `id_book`) VALUES ('$author', '$id_book')");
        }
    }

    header('Location: index.php');
    exit;
}

if(isset($_GET['delete'])){
    $deleteId = $_GET['delete'];

    $queryDelete = mysqli_query($db, "DELETE FROM `authors` WHERE `id_book` = '$deleteId'");
    $queryDelete = mysqli_query($db, "DELETE FROM `books` WHERE `id` = '$deleteId'");
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
    <h1>Добавление книг</h1>

    <form action="" method="post">
        <input type="text" name="name" placeholder="Название книги"><br>
        <textarea name="author" cols="30" rows="10" placeholder="Каждый новый автор с новой строчки*"></textarea><br>
    
        <input type="submit" name="submit">
    </form>

    <hr>

    <h2>Все книги</h2>

    <?php 
        $queryBookDisplay = mysqli_query($db, "SELECT *, (SELECT COUNT(*) FROM `authors` 
                            WHERE `id_book` = books.id) as count FROM `books` ORDER BY `count` DESC");
        
        while($row = mysqli_fetch_array($queryBookDisplay)){
            echo "Название книги: ".$row['name']."<br> 
                Кол-во авторов: ".$row['count']."<br> 
                <a href='index.php?delete=".$row['id']."'>Удалить</a> <br>
                <hr>";
        }    
    ?>
</body>
</html>


