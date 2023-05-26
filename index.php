<?php
session_start();

$dsn = "mysql:host=mysql; port=3306; dbname=videgrenierenligne";
$pdo = new PDO($dsn, "root", "rootpass");

$sql = 'SELECT * FROM articles';
$sth = $pdo->prepare($sql);
$sth->execute();
$articles = $sth->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php foreach ($articles as $article) { ?>
        <h1> <?= $article['name'] ?> </h1>
        <p> <?= $article['description'] ?> </p>
    <?php
    }
    ?>

</body>

</html>