<?php
require '../models/UserModel.php';
if (strlen($_POST['name']) < 2) {
    echo 'Имя маленькое';
} else {
    $insert = new UserController();
    $insert->addUser();
}

class UserController
{
    public function addUser()
    {
        $d = new UserModel();
        $d->insert('users',$_POST['name'],$_POST['surname'],$_POST['phoneNumber'],$_POST['comment']);
        header('Location: ../views/showAll.php');
    }
    public function getAll(){
        $d = new UserModel();
        $d->select('select');
        include '../views/showAll.php';
    }
}
