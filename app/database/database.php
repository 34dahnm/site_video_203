<?php

require('connect.php');

function tt($value)
{
    echo '<pre>';
    print_r($value);
    echo '</pre>';

}
function selectALL($table)
{
    global $pdo;
    $sql = "SELECT * FROM $table";

    //подготовка
    $query = $pdo->prepare($sql);
    $query->execute();
//проверка на ошибки
    $errInfo = $query->errorInfo();

    if($errInfo[0] !== PDO::ERR_NONE)
    {
        echo $errInfo[2];
        exit();
    }
//вывод информации
    return $query->fetchALL();
}
tt(selectALL("users"));

