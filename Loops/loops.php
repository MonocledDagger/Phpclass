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
    <?php

$number = 100;
$number += 50;

echo("<h1>".$number."</h1>");

    $i = 1;
while($i < 7){
    echo "<h1>Hello World</h1>";
    $i++;}
    ?>
</main>
<footer>
    <?php include '../Includes/footer.php'?>

</footer>
</body>
</html>

