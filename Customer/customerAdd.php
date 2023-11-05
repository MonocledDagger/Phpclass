<?php

if(isset($_GET["fname"])){
    if(isset($_GET["lname"])) {
        if(isset($_GET["phone"])) {
            if(isset($_GET["Address"])) {



                $fname = $_GET["fname"];
                $lname = $_GET["lname"];
                $phone = $_GET["phone"];
                $address = $_GET["Address"];

                include '../Includes/dbconn.php';

                try{
                    $db = new PDO($dsn, $username, $password, $options);

                    $sql = $db->prepare("insert into phpclass.customerlist (CustomerFirstName,CustomerLastName,CustomerPhoneNumber,CustomerAddress) VALUE(:fname, :lname, :phone, :Address)");
                    $sql->bindValue(":fname", $fname);
                    $sql->bindValue(":lname", $lname);
                    $sql->bindValue(":phone", $phone);
                    $sql->bindValue(":Address", $address);
                    $sql->execute();




                } catch (PDOException $e) {
                    echo "Error: ". $e->getMessage(); exit;
                }

                header("Location:customerdb.php");
    }

}
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
    <form method="GET">
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
                <td colspan="2"><input type="Submit" value="Add New Customer"></td>
            </tr>
        </table>
    </form>
</main>
<footer>
    <?php include '../Includes/footer.php'?>

</footer>
</body>
</html>
