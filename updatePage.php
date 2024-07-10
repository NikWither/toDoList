<?php

require_once 'php/db.php';

$id = $_GET['id'];

$sqlForUpdate = "SELECT * FROM tasks WHERE `id` = '$id'";


$task = mysqli_query($connection, $sqlForUpdate);

$task = mysqli_fetch_assoc($task);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Page</title>
</head>
<body>
    <h2>Update Page</h2>
    <form method="post" action="php/vendor/update.php">
        <input type="hidden" name="id" value="<?=$task["id"]?>">
        <p>Title</p>
        <input type="text" placeholder="<?= $task["title"]?>" name="title">
        <p>Description</p>
        <button type="submit">Применить</button>
    </form>
</body>
</html>