<?php

    require "database.php";

    $data = $_POST;

    if (isset($data['submit_author'])){

        $authors_form = R::dispense('authors');
        $authors_form -> full_name = $data['full_name'];
        $authors_form -> birth_date = $data['birth_date'];
        $authors_form -> death_date = $data['death_date'];
        // Сохраняем объект
        R::store($authors_form);

    }
    
    $query = R::findAll('authors');

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
    <h6 class="display-6 text-center mt-1">Задание 1</h6>
    <div class="text-center"><a class="text-muted mt-1" style="text-decoration:none" href="/">вернуться на главную</a></div>
    <div class="row mt-5 justify-content-center">
        <div class="col-4">
            <form class="mx-auto" action = "author_input.php" style="width:90%;" method="POST">
                <div class="mb-3">
                    <label for="full_name" class="form-label">Имя</label>
                    <input type="text" class="form-control" id = "full_name" name = "full_name" required>
                </div>
                <div class="mb-3">
                    <label for="birth_date" class="form-label">Дата рождения</label>
                    <input type="date" class="form-control" id="birth_date" name="birth_date" required>
                </div>
                <div class="mb-3">
                    <label for="death_date" class="form-label">Дата смерти</label>
                    <input type="date" class="form-control" id="death_date" name="death_date" required>
                </div>
                <button type="submit" name = "submit_author" class="btn btn-primary">Отправить</button>
            </form>
        </div>
        <div class="col-7">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">id</th>
                    <th scope="col">ФИО</th>
                    <th scope="col">дата рождения</th>
                    <th scope="col">дата смерти</th>
                    <th scope="col"></th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($query as $item): ?>
                        <tr>
                            <?php foreach ($item as $key => $val): ?> 
                                <td><?= $val; ?></td>
                            <?php endforeach; ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>