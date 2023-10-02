
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
    <h3>Add New Movie</h3>

    <table border = "1" width="80%" height="100px">
        <tr>
            <th colspan="2">Add New Movie</th>
            <td><input type="text"></td>
        </tr>
        <tr>
        <th>Movie Name</th>
        <td><input type ="text"></td>
        </tr>

        <tr>
            <th>Movie Rating</th>
            <td><input type="text"></td>
        </tr>

        <tr>
            <th>Movie Rating</th>
            <td colspan="2"><input type="Submit" value="Add New Movie"></td>
        </tr>
    </table>
</main>
<footer>
    <?php include '../Includes/footer.php'?>

</footer>
</body>
</html>
