<?php

    require "database.php";
    //$query = R::findAll('genres');

    // $query = R::find('books', 'booksname LIKE ?', ["%$search%"]);

    $search = '*';
    $query = R::getAll('select books.id, booksname, description, release_date, full_name, genrename
    from books 
    JOIN genres ON books.genresId = genres.id
    JOIN authors ON books.authorsId = authors.id
    WHERE booksname LIKE ?', ["%$search%"]);
    
    if (isset($_POST['books_value'])){
        $search = $_POST['search'];
        $query = R::getAll('select books.id, booksname, description, release_date, full_name, genrename
        from books 
        JOIN genres ON books.genresId = genres.id
        JOIN authors ON books.authorsId = authors.id
        WHERE booksname LIKE ?', ["%$search%"]);

    }


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
    <h6 class="display-6 text-center mt-1">Задание 5</h6>
    <div class="text-center"><a class="text-muted mt-1" style="text-decoration:none" href="/">вернуться на главную</a></div>
    <div class="row">
        <div class="col-12">
            <form method="POST" class="text-center mt-5">
                <input type="text" name="search">
                <button type="submit" name = "books_value" class="btn btn-primary">Отправить</button>
            </form>
        </div>
    </div>
    <div class="row mt-2 justify-content-center">
        <div class="col-10 my-5 mx-auto">
            <table class="table mx-5">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Название</th>
                    <th scope="col">Описание</th>
                    <th scope="col">Дата выхода</th>
                    <th scope="col">Автор</th>
                    <th scope="col">Жанр</th>
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