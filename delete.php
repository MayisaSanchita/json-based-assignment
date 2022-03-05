<?php
    $booksJson = file_get_contents('books.json');
    $books = json_decode($booksJson, true);
        $id = $_GET['id'];
        $id = $id -1;
        array_splice($books, $id, 1);
        file_put_contents('./books.json',json_encode($books));
        header('Location:index.php');
?>