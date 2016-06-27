<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Загрузка файла</title>
</head>
<body>
<style>
    .error {
        color: red;
    }

    .succ {
        color: green;
    }
</style>
<?php
require_once 'funct_uploader.php';

$arr = filesArray($_FILES['file']);

foreach ($arr as $key => $file) {
    if ($file['error'] == UPLOAD_ERR_OK) {
        try {
            checkSize($file['size'], 1000000000);
            $ext = checkMimeType($file['type']);
            $name = generataName($file['name'], $ext);
            if (move_uploaded_file($file['tmp_name'], 'images/' . $name))
                echo "<span class='succ'>Файл " . $file['name'] . ' успешно загружен</span><br>';
        } catch (Exception $e) {
            echo "<span class='error'>Ошибка загрузки файла: " . $file['name'] . " " . $e->getMessage() . " " . "</span><br>";
        }
    }
}
?>
</body>
</html>
