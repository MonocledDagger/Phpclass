<?php
/* Countdown Timer: 12/18/23*/

$secPerMin = 60;
$secPerHour = 60 * $secPerMin;
$secPerDay = 24 * $secPerHour;
$secPerYear = 365 * $secPerDay;

//current time
$now = time();

//End of semester
$SemesterEnd = mktime(11,59,59,12,18,2023);

//Number of seconds between now and end of semester

$seconds = $SemesterEnd - $now;

$years = floor($seconds/$secPerYear);
$seconds = $seconds - ($years * $secPerYear);

$days = floor($seconds / $secPerDay);
$seconds = $seconds - ($days * $secPerDay);

$hours = floor($seconds /$secPerHour);
$seconds = $seconds - ($hours * $secPerHour);

$minutes = floor($seconds / $secPerMin);
$seconds = $seconds - ($minutes * $secPerMin);



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
<h3>End of Semester Countdown</h3>
    <p>Years: <?=$years ?></p>
    <p>Days: <?=$days ?></p>
    <p>Hours: <?=$hours ?></p>
    <p>Minutes: <?=$minutes ?></p>
    <p>Seconds: <?=$seconds ?> </p>
</main>
<footer>
    <?php include '../Includes/footer.php'?>

</footer>
</body>
</html>

