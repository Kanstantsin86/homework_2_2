<?php

$test_dir = "./Tests/test";
$test_id = $test_dir.$_GET["id"].".json";
$json_file = file_get_contents($test_id);
$json_array = json_decode($json_file, true);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Выполните тест</h1>

<form name="test" method="post" action="certificate.php">
    <p><b>Ваше имя:</b><br>
        <input type="text" size="40">
    </p>
</form>

<form action="result.php" method="POST" enctype="multipart/form-data">
<div>
    <h1><?php echo $json_array[0]['question']?></h1>
    <?php foreach ($json_array[0]['answers'] as $values) { ?>
    <label><input name="q1" type="radio"><?php echo $values; ?></label>
    <?php } ?>
</div>
<div>
    <h1><?php echo $json_array[1]['question']?></h1>
    <?php foreach ($json_array[1]['answers'] as $values) { ?>
    <label><input name="q2" type="radio"><?php echo $values; ?></label>
    <?php } ?>
</div>
<div>
    <h1><?php echo $json_array[2]['question']?></h1>
    <?php foreach ($json_array[2]['answers'] as $values) { ?>
    <label><input name="q3" type="radio"><?php echo $values; ?></label>
    <?php } ?>
</div>
<button type="submit">Результат</button>
</form>

</body>
</html>