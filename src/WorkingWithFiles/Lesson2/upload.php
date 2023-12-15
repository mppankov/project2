<?php
if (!empty($_FILES['attachment'])) {
    $file = $_FILES['attachment'];

    
    $srcFileName = $file['name'];
    $newFilePath = './Uploads/' . $srcFileName;
    //$newFilePath =  '/tmp/' . $srcFileName;
    $error = null;
    $result = null;

    if (!move_uploaded_file($file['tmp_name'], $newFilePath)) {
        $error = 'Ошибка при загрузке файла';
    } else {
        $result = 'http://myproject.com/Lesson2/Uploads/' . $srcFileName;
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
<form action="/Lesson2/upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="attachment">
    <input type="submit">
</form>
</body>
</html>