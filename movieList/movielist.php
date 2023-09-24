<?php

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jimmy's Homepage</title>
    <link type="text/css" rel="stylesheet" href="../css/base2.css">
</head>
<body>
<header>
    <?php include '../Includes/Header.php'?>
</header>
<nav>
    <?php include '../Includes/nav.php' ?>
</nav>
<main>
    <h3>My Movie List</h3

    <?php
   /* $dsn = 'mysql:host=10.4.113.177;dbname=PHPclass';
    $username = 'dbuser';
    $password = 'dbdev123';
    $options = array(
            PDO:: ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );
    try{
    $db = new PDO($dsn, $username. $password, $options);

    $sql = $db->prepare("select * from movielist");
    $sql->execute();
    $row = $sql->fetch();

    echo $row("MovieTitle");}
    catch (PDOException $e){
        $error = $e->getMessage();
        echo "Error:$error";
    }
    */?>
<p>Test</p>
</main>
<footer>
    <?php include '../Includes/footer.php'?>

</footer>
</body>
</html>

