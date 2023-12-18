<?php


if (!empty($_FILES['attachment'])) {
    $file = $_FILES['attachment'];

    
    $srcFileName = $file['name'];
    $newFilePath = __DIR__ . '/Uploads/' . $srcFileName;
    $allowedExtensions = ['jpg', 'png', 'gif', 'exe'];
    $extension = pathinfo($srcFileName, PATHINFO_EXTENSION);
    //$newFilePath =  '/tmp/' . $srcFileName;
    $error = null;
    $result = null;
    

    if (!in_array($extension, $allowedExtensions)) {
        $error = 'Загрузка файлов с таким расширением запрещена!';
    } elseif ($file['error'] !== UPLOAD_ERR_OK) {
        $error = 'Ошибка при загрузке файла';
    } elseif ($file['error'] === UPLOAD_ERR_INI_SIZE) {
        $error = 'Превышен размер файла';
    } elseif (file_exists($newFilePath)) {
        $error = 'Файл с таким именем уже существует';
    } elseif (!move_uploaded_file($file['tmp_name'], $newFilePath)) {
        $error = 'Ошибка при загрузке файла';
    } else {
        $result = 'http://myproject.com/src/PhotoAlbum/Uploads/' . $srcFileName;
    }
}
?>
<html>
<head>
    <title>Загрузка файла</title>
</head>
<body>
<?php if ($error): ?>
    <?= $error ?>
<?php elseif ($result): ?>
    <?= $result ?>
<?php endif; ?>
<br>
<form action="/src/PhotoAlbum/Upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="attachment">
    <input type="submit">
</form>
</body>
</html>