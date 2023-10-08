<?php
include '../includes/dbConn.php';

if(isset($_GET["id"]))
{
    $id=$_GET["id"];
    try{
        $db = new PDO($dsn, $username, $password, $options);

        $sql = $db->prepare("select * from movielist where movieID = :id");
        $sql->bindValue(":id",$id);
        $sql->execute();
        $row = $sql->fetch();

        $title = $row["movieTitle"];
        $rating = $row["movieRating"];



    } catch (PDOException $e) {
        echo "Error: ". $e->getMessage(); exit;
    }

}else{
    header("Location:movielist.php");
}
if(isset($_POST["txtTitle"])){
    if(isset($_POST["txtRating"])) {

        $title = $_POST["txtTitle"];
        $rating = $_POST["txtRating"];

include '../Includes/dbconn.php';

try{
$db = new PDO($dsn, $username, $password, $options);

$sql = $db->prepare("insert into phpclass.movielist (MovieTitle,MovieRating) VALUE(:title,:rating)");
$sql->bindValue(":title", $title);
$sql->bindValue(":rating", $rating);
$sql->execute();




} catch (PDOException $e) {
echo "Error: ". $e->getMessage(); exit;
}

header("Location:movielist.php");
}

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
    <link type="text/css" rel="stylesheet" href="../css/base3.css">
</head>
<body>
<header>
    <?php include '../Includes/Header.php'?>
</header>
<nav>
    <?php include '../Includes/nav.php' ?>
</nav>
<main>
    <form method="post">
        <h3>Add New Movie</h3>

        <table border = "1" width="80%" height="100px">
            <tr height = "40">
                <th colspan="2">Add New Movie</th>

            </tr>
            <tr height ="40">
                <th>Movie Name</th>
                <td><input id="txtTitle" name="txtTitle" type="text" size="50" value="<?=$title?>"></td>
            </tr>

            <tr height="40">
                <th>Movie Rating</th>
                <td><input id ="txtRating" name="txtRating" type="text" size="50" value="<?=$rating?>"></td>
            </tr>

            <tr height="40">
                <td colspan="2"><input type="Submit" value="Add New Movie"></td>
            </tr>
        </table>
    </form>
</main>
<footer>
    <?php include '../Includes/footer.php'?>

</footer>
</body>
</html>
