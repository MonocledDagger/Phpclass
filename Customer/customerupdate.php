<?php
include '../Includes/dbconn.php';

if(isset($_POST["fname"])) {
    if(isset($_POST["lname"])) {
        if(isset($_POST["phone"])) {
            if(isset($_POST["Address"])) {

                $fname = $_POST["fname"];
                $lname = $_POST["lname"];
                $phone = $_POST["phone"];
                $address = $_POST["Address"];
                $id = $_POST["ID"];

                try {
                    $db = new PDO($dsn, $username, $password, $options);

                    $sql = $db->prepare("update phpclass.customerlist set CustomerFirstName = :fname , CustomerLastName = :lname, CustomerPhoneNumber = :phone, CustomerAddress = :Address Where CustomerID = :ID");
                    $sql->bindValue(":fname", $fname);
                    $sql->bindValue(":lname", $lname);
                    $sql->bindValue(":phone", $phone);
                    $sql->bindValue(":Address", $address);
                    $sql->bindValue(":ID", $id);
                    $sql->execute();

                } catch (PDOException $e) {
                    echo "Error: ". $e->getMessage();
                    exit;
                }

                header("Location:customerdb.php");
            }
        }
    }
}

if(isset($_GET["id"])) {
    $id = $_GET["id"];
    try {
        $db = new PDO($dsn, $username, $password, $options);

        $sql = $db->prepare("select * from phpclass.customerlist where CustomerID = :ID");
        $sql->bindValue(":ID", $id);
        $sql->execute();
        $row = $sql->fetch();

        $fname = $row["CustomerFirstName"];
        $lname = $row["CustomerLastName"];
        $phone = $row["CustomerPhoneNumber"];
        $address = $row["CustomerAddress"];
    } catch (PDOException $e) {
        echo "Error: ". $e->getMessage();
        exit;
    }
} else {
    header("Location:customerdb.php");
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

    <script type="text/javascript">
        function DeleteMovie(lname,id){
            if ((confirm("Do you want to delete" + lname))){
                document.location.href = "customerdelete.php?id=" + id;

            }
        }
    </script>
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
        <h3>Add New Customer</h3>

        <table border = "1" width="80%" height="100px">
            <tr height = "40">
                <th colspan="2">Add New Customer</th>

            </tr>
            <tr height ="40">
                <th>First Name</th>
                <td><input id="fname" name="fname" type ="text" size="50"></td>
            </tr>

            <tr height="40">
                <th>Last Name</th>
                <td><input id ="lname" name="lname" type="text" size="50"></td>
            </tr>

            <tr height="40">
                <th>Phone Number</th>
                <td><input id ="phone" name="phone" type="text" size="50"></td>
            </tr>

            <tr height="40">
                <th>Address</th>
                <td><input id ="Address" name="Address" type="text" size="50"></td>
            </tr>

            <tr height="40">
                <td colspan="2"><input type="Submit" value="Add New Customer">| <input type="button" onclick="DeleteMovie('<?=$lname?>', <?=$id?>)" value="Delete Customer"></td>
            </tr>
        </table>
    </form>
</main>
<footer>
    <?php include '../Includes/footer.php'?>

</footer>
</body>
</html>