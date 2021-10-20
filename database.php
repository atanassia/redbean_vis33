<?php

    require 'rb-mysql.php';

    $dsn = 'mysql:host=localhost;dbname=el_library';
    $username = 'root';
    $password = '060601';
    $options = [];

    R::setup('mysql:host=localhost;dbname=el_library','root','060601');
    
    if  (!R::testConnection() ){
        exit ('Нет соединения с базой данных.\n');
    }
    else{
        // echo "Соединение с БД установлено.\n";
    }

?>