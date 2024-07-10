<?php

require_once '../db.php';

$title = $_POST['title'];

// if ($connection) {
//     echo "YES YES";
// } else {
//     echo "";
// }

$sqlForCreate = "INSERT INTO tasks (`title`, `favourite`, `status`) VALUES ('$title', '0', '0')";

mysqli_query($connection, $sqlForCreate);

header('Location: /toDoList');

?>