<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php
include '../menu.php';
include '../models/UserModel.php';
$db = new UserModel();
?>
<b>
    <div style="position: absolute; margin-left: 600px; margin-top: 150px;font-family: 'Verdana';">
        <?php foreach ($db->select('users') as $item => $value): ?>
            <ul>
                <li>Имя: <?= $value['name'] ?></li>
                <li>Фамилия: <?= $value['surname'] ?></li>
                <li>Номер: <?= $value['phoneNumber'] ?></li>
                <li>Комментарий: <?= $value['comment'] ?></li>
            </ul>
        <?php endforeach; ?>
    </div>
</b>
</body>
</html>
