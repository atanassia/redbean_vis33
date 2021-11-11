<?php

    require "database.php";
    $query = R::findAll('genres');
    // print_r($query);
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
    <h6 class="display-6 text-center mt-1">Задание 3</h6>
    <div class="text-center"><a class="text-muted mt-1" style="text-decoration:none" href="/">вернуться на главную</a></div>
    <div class="row mt-2 justify-content-center">
        <div class="col-5 my-5 mx-auto">
            <table class="table mx-5">
                <thead>
                    <tr>
                    <th scope="col">id</th>
                    <th scope="col">Название</th>
                    <th scope="col"></th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($query as $item): ?>
                        <tr>
                            <?php foreach ($item as $key => $val): ?> 
                                <td><?= $val; ?></td>  
                            <?php endforeach; ?>
                            <td>
                                <a href="genre_delete.php?id=<?= $item['id'] ?>" onclick = "return confirm('Вы точно хотите удалить запись?')" style = "padding:0 !important;" class="btn">
                                    <img alt="" class="" src="delete.svg">
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>