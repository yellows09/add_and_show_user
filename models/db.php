<?php


class db
{
    public function connect(){
        $db = new PDO('mysql:host=localhost;dbname=task;charset=utf8', 'root', '');
        return $db;
    }
}