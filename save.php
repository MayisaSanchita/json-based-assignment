<?php

$booksJson = file_get_contents('books.json');
$books = json_decode($booksJson, true);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>save</title>
</head>

<body>
    <?php
        $data = [$_POST];
        $all = array_merge($books,$data);
        file_put_contents('./books.json',json_encode($all));
        echo sizeof($data);
        header('Location:index.php');
    ?>
</body>

</html>