<?php
include '../menu.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<div id = 'create' style="position:absolute;margin-top: 100px;margin-left: 600px;font-family: 'Verdana';">
    <form action="../controllers/UserController.php" method ='post'>
        Имя: <input type="text" name = 'name'> <br> <br>
        Фамилия: <input type="text" name = 'surname'><br> <br>
        Номер телефона: <input type="text" name = 'phoneNumber'><br> <br>
        Комментарий: <input type="text" name = 'comment'><br> <br>
        <input type="submit" name = 'send'><br> <br>
    </form>
</div>
</body>
</html>