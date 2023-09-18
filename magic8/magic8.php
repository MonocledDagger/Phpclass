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

    <br />
    <p>Ask A Question:<br />
    <form method="post" action="magic8.php">

    <input type ="Submit" value="Ask the 8-Ball">
    </form>
</main>
<footer>
    <?php include '../Includes/footer.php'?>

</footer>
</body>
</html>
