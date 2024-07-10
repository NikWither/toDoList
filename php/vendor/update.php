<?php

require_once '../db.php';

$id = $_POST['id']; 
$title = $_POST['title'];


$sqlForUpdate = "UPDATE `tasks` SET `title` = '$title' WHERE `id` = '$id'";

// UPDATE `tasks` SET `title` = 'Уйти из универа', `favourite` = '1' WHERE `tasks`.`id` = 6

mysqli_query($connection, $sqlForUpdate);

header('Location: /toDoList');

?>