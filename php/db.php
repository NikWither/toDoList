<?php

$connection = mysqli_connect('localhost', 'root', '', 'todolist');

if (!$connection) {
    die('Отсутствует подключение к базе данных');
}

?>