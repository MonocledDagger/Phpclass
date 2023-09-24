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


if ($cRollOne == 1){
    $imgThree = "../images/DiceOne.png";
}
elseif ($cRollOne == 2){
    $imgThree = "../images/DiceTwo.png";
}

elseif ($cRollOne == 3){
    $imgThree = "../images/DiceThree.png";
}
elseif ($cRollOne == 4){
    $imgThree = "../images/DiceFour.png";
}elseif ($cRollOne == 5){
    $imgThree = "../images/DiceFive.png";
}else{
    $imgThree = "../images/DiceSix.png";
}


if ($cRollTwo == 1){
    $imgFour = "../images/DiceOne.png";
}
elseif ($cRollTwo == 2){
    $imgFour = "../images/DiceTwo.png";
}

elseif ($cRollTwo == 3){
    $imgFour = "../images/DiceThree.png";
}
elseif ($cRollTwo == 4){
    $imgFour = "../images/DiceFour.png";
}elseif ($cRollTwo == 5){
    $imgFour = "../images/DiceFive.png";
}else{
    $imgFour = "../images/DiceSix.png";
}


if ($cRollThree == 1){
    $imgFive = "../images/DiceOne.png";
}
elseif ($cRollThree == 2){
    $imgFive = "../images/DiceTwo.png";
}

elseif ($cRollThree == 3){
    $imgFive = "../images/DiceThree.png";
}
elseif ($cRollThree == 4){
    $imgFive = "../images/DiceFour.png";
}elseif ($cRollThree == 5){
    $imgFive = "../images/DiceFive.png";
}else{
    $imgFive = "../images/DiceSix.png";
}








$playerResult = $pRollOne + $pRollTwo;

$compResult = $cRollOne + $cRollTwo + $cRollThree;

if ($playerResult > $compResult){

    $win = "You Won!";
}elseif($compResult > $playerResult){
    $win = "The Computer Won";
}else{
    $win = "A Tie? What are the odds?";
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
    <h2>Your Rolls</h2>
    <img src="<?=$imgOne?>" alt="Dice Roll"> <img src="<?=$imgTwo?>" alt="Dice Roll">

    <h4> Your Total: <?=$playerResult?></h4>

    <h2>Computer's Rolls</h2>

    <img src="<?=$imgThree?>" alt="Dice Roll"> <img src="<?=$imgFour?>" alt="Dice Roll"> <img src="<?=$imgFive?>" alt="Dice Roll">

    <h4> Computer's Total: <?=$compResult?> </h4>
    <br>
    <h2><?=$win?></h2>

</main>
<footer>
    <?php include '../Includes/footer.php'?>

</footer>
</body>
</html>

