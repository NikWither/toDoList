<?php

require_once '../db.php';

$id = $_GET['id'];

$sqlForDelete = "DELETE FROM `tasks` WHERE `tasks`.`id` = '$id'";

mysqli_query($connection, $sqlForDelete);

header('Location: /toDoList');

?>