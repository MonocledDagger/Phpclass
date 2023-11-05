<?php
session_start();



if(isset($_POST["txtEmail"])) {
    if (isset($_POST["txtPassword"])) {

        $email = $_POST["txtEmail"];
        $pwd = $_POST["txtPassword"];
        $errmsg = "";

        include '../Includes/dbconn.php';

        try{
            $db = new PDO($dsn, $username, $password, $options);

            $sql = $db->prepare("select memberID, memberPassword, MemberKey, RoleID from phpclass.memberLogin where memberEmail = :Email");
            $sql->bindValue(":Email", $email);
            $sql->execute();
            $row = $sql->fetch();

            if($row!=null) {

                $hashedPassword = md5($pwd . $row["MemberKey"]);


                if ($hashedPassword == $row["memberPassword"]) {
                    $_SESSION["UID"] = $row["memberID"];
                    $_SESSION["Role"] = $row["RoleID"];

                    if ($row["RoleID"] == 1) {
                        header("Location:admin.php");
                    } else {
                        header("Location:member.php");
                    }
                }else{
                    $errmsg="Wrong Password";
                }
            }else{
                $errmsg = "Wrong Username";
            }






        } catch (PDOException $e) {
            echo "Error: ". $e->getMessage(); exit;
        }





/*
        if(strtolower($username)=="admin" && $password =="p@ss"){


                $_SESSION["UID"] = 1;
                header("Location:admin.php");

        }else{
            if(strtolower($username)=="user" && $password =="p@ss"){
                $_SESSION["UID"] = 1;
                header("Location:member.php");
            }else{
            $errmsg = "Wrong User or Password";}
        }
*/



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
        <h3 id = "error"><?=$errmsg?></h3>
        <h3>Login Page</h3>

        <table border = "1" width="80%" height="100px">
            <tr height = "40">
                <th colspan="2">User Login</th>

            </tr>
            <tr height ="40">
                <th>Email</th>
                <td><input id="txtEmail" name="txtEmail" type="text" size="50" value=""></td>
            </tr>

            <tr height="40">
                <th>Password</th>
                <td><input id ="txtPassword" name="txtPassword" type="password" size="50" value=""></td>
            </tr>

            <tr height="40">
                <td colspan="2"><input type="Submit" value="Login"> |
        </table>

    </form>
</main>
<footer>
    <?php include '../Includes/footer.php'?>

</footer>
</body>
</html>
