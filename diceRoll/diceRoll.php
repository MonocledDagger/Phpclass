<?php

$pRollOne = mt_rand(1,6);

$pRollTwo = mt_rand(1,6);

$cRollOne = mt_rand(1,6);

$cRollTwo = mt_rand(1,6);

$cRollThree = mt_rand(1,6);

if ($pRollOne == 1){
$imgOne = "../images/DiceOne.png";
}
elseif ($pRollOne == 2){
    $imgOne = "../images/DiceTwo.png";
}

elseif ($pRollOne == 3){
    $imgOne = "../images/DiceThree.png";
}
elseif ($pRollOne == 4){
    $imgOne = "../images/DiceFour.png";
}elseif ($pRollOne == 5){
    $imgOne = "../images/DiceFive.png";
}else{
    $imgOne = "../images/DiceSix.png";
}

if ($pRollTwo == 1){
    $imgTwo = "../images/DiceOne.png";
}
elseif ($pRollTwo == 2){
    $imgTwo = "../images/DiceTwo.png";
}

elseif ($pRollTwo == 3){
    $imgTwo = "../images/DiceThree.png";
}
elseif ($pRollTwo == 4){
    $imgTwo = "../images/DiceFour.png";
}elseif ($pRollTwo == 5){
    $imgTwo = "../images/DiceFive.png";
}else{
    $imgTwo = "../images/DiceSix.png";
}








$playerResult = $pRollOne + $pRollTwo;

$compResult = $cRollOne + $cRollTwo + $cRollThree;

if ($playerResult > $compResult){

    $win = "You Won!";
}else{
    $win = "The Computer Won";
}
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
    <img src="<?=$imgOne?>" alt="Dice Roll">


</main>
<footer>
    <?php include '../Includes/footer.php'?>

</footer>
</body>
</html>

