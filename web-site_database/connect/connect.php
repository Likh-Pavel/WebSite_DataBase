<?php

$host = '84.201.184.150'; 
$user = '090302-istb-21_a';   
$pass = 'QtWFqaOzxv'; 
$db_name = '090302-istb-21_admin';  

$link = mysqli_connect($host, $user, $pass, $db_name);


if (!$link) {
    echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
    exit;
}
?>