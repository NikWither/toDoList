<?php

require 'php/db.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDoList</title>
    <link rel="stylesheet" href="./style/style.css" />
</head>
<body>
    
    <div class="container">
        <div class="search">
            <input class="search__input" placeholder="Поиск задачи">
        </div>

        <div class="addTask">
            <form class="addTask__input" method="post" action="php/vendor/create.php">
                <input type="text" placeholder="Введите название задачи" class="addTask__tasks" name="title">
                <button type="submit" class="addTask__add-btn">Добавить</button>
            </form>
        </div>

        <div class="settings">
            <form action="" method="POST" class="settings__form">
                <div class="settings__sorting">
                    <select name="" id="">
                        <option value="">Сначала новые</option>
                        <option value="">Сначала старые</option>
                    </select>
                </div>
                <div class="settings__filter">
                    <p>
                        <input type="radio" name="contact"/>Только избранные
                    </p>
                    <p>
                        <input type="radio" name="contact"/>Все задачи
                    </p>
                </div>
                <button type="submit">Применить</button>
            </form>
        </div>



        <div class="tasks">
            <?php



            $sqlToReadData = "SELECT * FROM tasks ORDER BY id";

            $tasks = mysqli_query($connection, $sqlToReadData);

            $tasks = mysqli_fetch_all($tasks);


            foreach($tasks as $task) {
                ?>

                <div class="task <?= ($task[3] == 1 ? "active" : "")?>" id=<?= $task[0] ?>>
                    <div class="task__title">
                        <h3><?= $task[1] ?></h3>
                        <input type="checkbox" class="task__checkbox" <?= ($task[3] == 1 ? "checked" : "")?>>
                    </div>
                    <button data-action="edit" class="btn__edit">
                        <a href="./updatePage.php?id=<?=$task[0]?>">Редактировать</a>
                    </button>
                    <button class="btn__delete" class="btn__delete">
                        <a href="./php/vendor/delete.php?id=<?=$task[0]?>">Удалить</a>
                    </button>
                    <button data-action="addToFavourite" class="btn__favourite <?=($task[2] == 1 ? "favourite" : "")?>">
                        <a href="./php/vendor/favourite.php?id=<?=$task[0]?>&favourite=<?=$task[2]?>">
                            Избранное
                        </a>
                    </button>

                </div>
            
            <?php
            }
            ?>
        </div>

        

        
    </div>
    <script src="./js/index.js"></script>
</body>
</html>