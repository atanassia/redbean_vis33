<?php
    require "database.php";
    $genre_id = $_GET['id'];
    $genres = R::load('genres', $genre_id);
    R::trash($genres);
    R::close();
    header("Location: genre.php");

?>