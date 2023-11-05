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
    <h3>Customer List</h3>

    <table border="1" width="80%" >
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Number</th>
            <th>Email</th>
            <th>Address</th>
            <th>Password</th>
        </tr>

    <?php
    include '../Includes/dbconn.php';

    try{
        $db = new PDO($dsn, $username, $password, $options);

        $sql = $db->prepare("select * from phpclass.customerlisttwo");
        $sql->execute();
        $row = $sql->fetch();

        while ($row!=null){

            echo "<tr>";
            echo "<td>" . $row["ID"] . "</td>";
            echo "<td><a href=customerupdate.php?id=" . $row["ID"] . ">" . $row["Name"] . "</a></td>";
            echo "<td>" . $row["Number"] . "</td>";
            echo "<td>" . $row["Email"] . "</td>";
            echo "<td>" . $row["Address"] . "</td>";
            echo "<td>SECRET</td>";
            echo "</tr>";


            $row = $sql->fetch();
        }

    } catch (PDOException $e) {
        echo "Error: ". $e->getMessage(); exit;
    }

    ?>




    </table>
    <br>
    <br>
    <a href="customeradd.php">Add New Customer</a>

</main>
<footer>
    <?php include '../Includes/footer.php'?>

</footer>
</body>
</html>

