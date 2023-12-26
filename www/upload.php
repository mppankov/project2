<?php

use Pr2\PhotoAlbum\Auth;
use Pr2\PhotoAlbum\UsersDB;
use Pr2\Utils\FileDownloadsUtils;

require_once __DIR__.'/../vendor/autoload.php';

$auth = new Auth(new UsersDB);
$login = $auth->getUserLogin();
$result = null;
$error = null;

if ($login !== null && !empty($_FILES['attachment'])) {
    
    $file = $_FILES['attachment'];
    $srcFileName = $file['name'];
    $newFilePath = __DIR__ . '/uploads/' . $srcFileName;
    $allowedExtensions = ['jpg', 'png', 'gif'];
    $extension = pathinfo($srcFileName, PATHINFO_EXTENSION);
    $downloadError = FileDownloadsUtils::checkErrors($file['error']);
    
    
    if ($downloadError) {
        $error = $downloadError;
    } elseif (!in_array($extension, $allowedExtensions)) {
        $error = 'Загрузка файлов с таким расширением запрещена!';
    } elseif (file_exists($newFilePath)) {
        $error = 'Файл с таким именем уже существует';
    } elseif (!move_uploaded_file($file['tmp_name'], $newFilePath)) {
        $error = 'Ошибка при перемещении файла';
    } else {
        $result = 'http://myproject.com/uploads/' . $srcFileName;
    }
}
?>
<html>
<head>
    <title>Загрузка файла</title>
</head>
<body>
<?php if ($login === null): ?>
    <a href="/login.php">Авторизуйтесь</a>
<?php else: ?>
    Добро пожаловать, <?= $login ?> |
    <a href="/logout.php">Выйти</a>
    <br>
<?php if ($error): ?>
    <?= $error ?>
<?php elseif ($result): ?>
    <?= $result ?>
<?php endif; ?>
<br>
<form action="/upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="attachment">
    <input type="submit">
</form>
<?php endif; ?>
</body>
</html>