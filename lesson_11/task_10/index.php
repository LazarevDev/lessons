<?php 
$db = mysqli_connect('localhost', 'root', 'root', 'lb11-task10');

$msg = null;

$price = 0;
$count = 0;

if(isset($_POST['submit'])){

    $product = $_POST['product'];
    $price = $_POST['price'];
    $count = $_POST['count'];

    $queryCheck = mysqli_query($db, "SELECT * FROM `products` WHERE `id` = '$product'");
    $resultCheck = mysqli_fetch_array($queryCheck);

    if(!empty($resultCheck['id'])){
        $queryUpdate = mysqli_query($db, "UPDATE `products` SET `price` = '$price', `count` = '$count' WHERE `id` = '$product'");
    }else{
        $msg = "error";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        *{
            padding: 0;
            margin: 0;
        }

        table{
            width: 100%;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        section{ 
            display: flex;
            justify-content: center;
            padding: 60px 0 0 0;
        }

        .container{
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            width: 650px;
        }

        form{
            width: 100%;
            margin-top: 40px;
        }

        form label{
            display: block;
            margin-top: 5px;
        }

        .submit{
            margin-top: 10px;
        }

    </style>
</head>
<body>
    <section>
        <div class="container">
            <table>
                <tr>
                    <th>Наименование товара</th>
                    <th>Цена за единицу</th>
                    <th>Кол-во</th>
                    <th>Стоимость</th>
                </tr>
                
                <?php $query = mysqli_query($db, "SELECT * FROM `products` ORDER BY `id` DESC");
                while($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <td><?=$row['name']?></td>
                        <td><?=$row['price']?></td>
                        <td><?=$row['count']?></td>
                        <td><?php echo $row['count'] * $row['price']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </table>


            <form action="" method="post">
                <label for="">
                    <p>Товар</p>
                    <select name="product">
                    <?php $query = mysqli_query($db, "SELECT * FROM `products` ORDER BY `id` DESC");
                    while($row = mysqli_fetch_array($query)): ?>
                        <option value="<?=$row['id']?>"><?=$row['name']?></option>
                    <?php endwhile; ?>
                        
                    </select>

                </label>

                <label for="">
                    <p>Цена</p>
                    <input type="number" name="price" placeholder="Цена за шт" required>
                </label>

                <label for="">
                    <p>Кол-во</p>
                    <input type="number" name="count" placeholder="Кол-во" required>
                </label>

                <input type="submit" class="submit" name="submit" value="Ввод">
            </form>
        </div>
    </section>
    

</body>
</html>