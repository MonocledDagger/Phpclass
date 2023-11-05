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
    echo "<h$i>Hello World</h$i>";
    $i++;}

$i = 6;
do{
    echo "<h$i>Goodbye World</h$i>";
    $i--;
}while($i > 0);

    for($i=1; $i<7;$i++){
        echo "<h$i>Hello Again</h$i>";

    }

    echo "<br /> <br /><hr /> <br />";

    $full_name = "Doug Smith";
    $position = strpos($full_name," ");
    echo $position;

    echo "<br /> <br /><hr /> <br />";

    echo $full_name;
    echo "<br />";

    $full_name = strtoupper($full_name);
    echo $full_name;

    echo "<br /> <br /><hr /> <br />";

    echo $full_name;
    echo "<br />";

    $full_name = strtolower($full_name);
    echo $full_name;

    echo "<br /> <br /><hr /> <br />";

    $nameParts = explode(' ',$full_name);
    echo $nameParts[0];
    echo "<br />";
    echo $nameParts[1];
    echo "<br /> <br /><hr /> <br />";
    ?>
</main>
<footer>
    <?php include '../Includes/footer.php'?>

</footer>
</body>
</html>

