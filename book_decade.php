<?php

    require "database.php";
    //$query = R::findAll('genres');
    // $query = R::find('books', 'booksname LIKE ?', ["%$search%"]);

    $query = R::findAll('books', 'release_date >= DATE_SUB(CURRENT_DATE, INTERVAL 10 YEAR)');

    //print_r($query);
    R::close();


?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Главная</title>
</head>
<body>
    <h6 class="display-6 text-center mt-1">Задание 6</h6>
    <div class="text-center"><a class="text-muted mt-1" style="text-decoration:none" href="/">вернуться на главную</a></div>
    <div class="row mt-2 justify-content-center">
        <div class="col-10 my-5 mx-auto">
            <div class="mx-5">
                <p><strong>Книги за последнее десятилетие</strong></p>
                <?php foreach ($query as $item): ?>
                    <ul>
                        <li><?= $item['booksname']; ?> - <?= $item['release_date']; ?></li>  
                    </ul>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>