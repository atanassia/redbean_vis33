<?php

    // require 'rb-mysql.php';

    // $dsn = 'mysql:host=localhost;dbname=el_library';
    // $username = 'root';
    // $password = '060601';
    // $options = [];

    // R::setup('mysql:host=localhost;dbname=el_library','root','060601');
    
    // if  (!R::testConnection() ){
    //     exit ('Нет соединения с базой данных.\n');
    // }
    // else{
    //     // echo "Соединение с БД установлено.\n";
    // }

    // $depts = R::dispense('depts');
    // $depts -> deptsname = 'Призрак победы';
    //$book->price = 199;
    // Можно обращаться как к массиву
    //$book['author'] = 'Макс Глебов';
    // Сохраняем объект
    // R::store($depts);

    // $id = 1;
	//$query = R::findAll('emps');
	// echo($book);
	//print_r($query);


    //R::close();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Главная</title>
</head>
<body>
    <div class="m-5 w-50 mx-auto">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active text-center" aria-current="true">Задания</a>
            <a href="author_input.php" class="list-group-item list-group-item-action">1.	Выполните вставку данных формы в таблицу автор. </a>
            <a href="author_edit.php?id=1" class="list-group-item list-group-item-action">2.	Выполните редактирование информации об авторе.</a>
            <a href="genre.php" class="list-group-item list-group-item-action">3.	Удалите выбранный жанр.</a>
            <a href="genre_count.php" class="list-group-item list-group-item-action">4.	Выполните запрос, позволяющий сформировать таблицу вида Жанр-Количество книг в жанре.</a>
            <a href="book_like.php" class="list-group-item list-group-item-action">5.	Выполните запрос на поиск книги по ключевому слову, введенному в форму поиска. Выведите всю информацию об этой книге.</a>
            <a href="book_decade.php" class="list-group-item list-group-item-action">6.	Найдите книги, написанные за последнее десятилетие. Выведите их в виде маркированного списка в виде Название книги (год написания)</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>