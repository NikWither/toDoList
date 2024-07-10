<?php

require_once '../db.php';

$id = $_GET["id"];

$favourite = $_GET["favourite"];

if ($favourite === "1") {
    $favourite = 0;
} else {
    $favourite = 1;
}

$sqlFavourite = "UPDATE `tasks` SET `favourite` = '$favourite' WHERE `id` = '$id'";

mysqli_query($connection, $sqlFavourite);

header('Location: /toDoList');
?>