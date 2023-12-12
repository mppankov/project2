<?php

if (!empty($_FILES['attachment'])) {
    $file = $_FILES['attachment'];

    // собираем путь до нового файла - папка uploads в текущей директории
    // в качестве имени оставляем исходное файла имя во время загрузки в браузере
    $srcFileName = $file['name'];
    $newFilePath = __DIR__ . 'Uploads/' . $srcFileName;

    if (!move_uploaded_file($file['tmp_name'], $newFilePath)) {
        $error = 'Ошибка при загрузке файла';
    } else {
        $result = 'http://myproject.loc/Lesson2/Uploads/' . $srcFileName;
    }
}
?>
<html>
<head>
    <title>Загрузка файла</title>
</head>
<body>
<form action="/Lesson2/upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="attachment">
    <input type="submit">
</form>
</body>
</html>