<?php
   $ot = 0;
   $not = 0;
      if ($_POST['q1'] == ['correct_answer']){$ot++;} else {$not++;}
      if ($_POST['q2'] == ['correct_answer']){$ot++;} else {$not++;}
      if ($_POST['q3'] == ['correct_answer']){$ot++;} else {$not++;}
?>

<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<p>Правильных ответов: <?php echo $ot; ?></p>
    <p>Неправильных ответов:<?php echo $not; ?></p>
    <nav>
    <ul>
        <li><a href="list.php">Список тестов</a></li>
    </ul>
</nav>
</body>
</html>