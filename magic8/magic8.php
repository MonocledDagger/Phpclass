<?php
session_start();

    if(isset($_POST["txtQuestion"])) {
        $question = $_POST["txtQuestion"];
    }else{
        $question = "";
    }

    if(isset($_SESSION["PrevQuest"])){
        $PrevQuest = $_SESSION["PrevQuest"];
    }else{
        $PrevQuest = "";
    }

    $responses = array();
    $responses[0] ="Ask Again Later";
    $responses[1] = "Yes";
    $responses[2] = "No";
    $responses[3] = "It Appears to be so";
    $responses[4] = "Reply is Hazy. Try Again";
    $responses[5] = "Yes, definitely";
    $responses[6] = "What is it you really want to know?";
    $responses[7] = "Outlook is good";
    $responses[8] = "My Sources say no";
    $responses[9] = "Signs point to Yes";
    $responses[10] = "Don't Count on it";
    $responses[11] = "Cannot Predict Now";
    $responses[12] = "As I see it, yes";
    $responses[13] = "Better Not Tell You now";
    $responses[14] = "Concentrate and Ask Again";

    if($question=="") {
        $answer = "Ask Me A Question";
    }elseif(substr($question, -1) != "?"){
        $answer = "Ask me with a question mark";
    }elseif($PrevQuest == $question){
        $answer ="Please Ask a NEW Question";
    }else {
        $iResponse = mt_rand(0,14);
        $answer = $responses[$iResponse];
        $_SESSION["PrevQuest"] = $question;
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
    <h2>Magic 8 Ball~!</h2>
    <br />
    <marquee><?=$answer?></marquee>
    <br />
    <p>Ask A Question:<br />
    <form method="post" action="magic8.php">
        <input type="text" name="txtQuestion" id="txtQuestion" value="<?=$question?>"></p>
        <input type ="Submit" value="Ask the 8-Ball">
    </form>
</main>
<footer>
    <?php include '../Includes/footer.php'?>

</footer>
</body>
</html>

