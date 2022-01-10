<?php
require 'db.php';

class UserModel extends db
{

    public function insert($tableName, $name, $surname, $phoneNumber, $comment)
    {
        $sql = "INSERT INTO `$tableName`(`id`,`name`,`surname`,`phoneNumber`,`comment`) VALUES (0,'$name','$surname',$phoneNumber,'$comment')";
        $this->connect()->exec($sql);
    }
    public function select($tableName){
        $data = $this->connect()->query("SELECT * FROM {$tableName}");
        return $data->fetchAll(PDO::FETCH_ASSOC);
    }
}