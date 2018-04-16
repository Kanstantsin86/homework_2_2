<?php

$files = array_slice(scandir('./Tests'), 2);
//print_r($files);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Список тестов</h1>
<nav>
    <ul>
        <li><a href="admin.php">Загрузить тест</a></li>
        
        <?php for ($i = 1; $i <= count($files); $i++){ ?>
        <li><a href="test.php?id=<?=$i;?>">Тест <?=$i;?></a></li>
        <?php } ?>
    </ul>
</nav>