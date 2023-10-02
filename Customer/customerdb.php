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
    <h3>Customer Database</h3>

    <table border="1" width="80%" >
        <tr>
            <th>Customer ID</th>
            <th>Customer First Name</th>
            <th>Customer Last Name</th>
            <th>Customer Phone</th>
            <th> Customer Address</th>
        </tr>

        <?php
    include '../Includes/dbconn.php';

    try{
    $db = new PDO($dsn, $username, $password, $options);

    $sql = $db->prepare("select * from phpclass.customerlist");
    $sql->execute();
    $row = $sql->fetch();

    while ($row!=null){


            echo "<tr>";
            echo "<td>" . $row["CustomerID"] . "</td>";
            echo "<td>" . $row["CustomerFirstName"] . "</td>";
            echo "<td>" . $row["CustomerLastName"] . "</td>";
            echo "<td>" . $row["CustomerPhoneNumber"] . "</td>";
            echo "<td>" . $row["CustomerAddress"] . "</td>";
            echo "</tr>";


            $row = $sql->fetch();
        }

    }catch (PDOException $e) {
        echo "Error: ". $e->getMessage(); exit;
    }

    ?>




    </table>
    <br>
    <br>
    <a href="customerAdd.php">Add New Customer</a>
</main>
<footer>
    <?php include '../Includes/footer.php'?>

</footer>
</body>
</html>
