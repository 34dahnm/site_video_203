<?php
//Запросы к базе данных MySQL PDO
$driver = 'mysql';
$host = 'localhost';
$db_name = 'acountry';
$db_user = 'root';
$db_pass = 'mysql';
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
try{
    $pdo = new PDO("$driver:host=$host;dbname=$db_name;charser:$charset", $db_user, $db_pass, $options
    );
}
catch(PDOException $e){
    die("Ошибка подключения к базе данных");
}

