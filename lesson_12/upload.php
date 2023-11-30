<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['file'])) {
        $file = $_FILES['file'];

        echo "Файл успешно загружен.";
    } else {
        echo "Ошибка: Файл не был отправлен.";
    }
}
?>