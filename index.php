<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Загрузка файла</title>
</head>
<body>
    <form enctype="multipart/form-data" action="uploader.php" method="post">
        <input type="file" name="file[]"><br><br>
        <input type="file" name="file[]"><br><br>
        <input type="file" name="file[]"><br><br>
        <input type="file" name="file[]"><br><br>
        <input type="file" name="file[]"><br><br>
        <input type="submit" value="загрузить">
    </form>
</body>
</html>