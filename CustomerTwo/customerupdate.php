<?php
$Key = sprintf('%04X%04X%04X%04X%04X%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
include '../Includes/dbconn.php';


if(isset($_POST["txtName"])){
    if(isset($_POST["txtNumber"])) {
        if(isset($_POST["txtEmail"])) {
            if(isset($_POST["txtAddress"])) {
                $Name = $_POST["txtName"];
                $Number = $_POST["txtNumber"];
                $id = $_POST["txtID"];
                $Email = $_POST["txtEmail"];
                $Address = $_POST["txtAddress"];
                $Password = $_POST['txtPassword'];




try{
$db = new PDO($dsn, $username, $password, $options);

$sql = $db->prepare("update phpclass.customerlisttwo set Name = :Name , Number = :Number, Email=:Email, Address=:Address, Password=:Password, `Key`=:Key Where ID = :ID");
$sql->bindValue(":Name", $Name);
$sql->bindValue(":Number", $Number);
$sql->bindValue(":ID", $id);
$sql->bindValue(":Email", $Email);
$sql->bindValue(":Address", $Address);
$sql->bindValue(":Password", md5($Password . $Key));
$sql->bindValue(":Key", $Key);

$sql->execute();




} catch (PDOException $e) {
echo "Error: ". $e->getMessage(); exit;
}

header("Location:customerlist.php");
}

}}}
if(isset($_GET["id"])) {
    $id=$_GET["id"];
    try{
        $db = new PDO($dsn, $username, $password, $options);

        $sql = $db->prepare("select * from phpclass.customerlisttwo where ID = :ID");
        $sql->bindValue(":ID",$id);
        $sql->execute();
        $row = $sql->fetch();

        $Name = $row["Name"];
        $Number = $row["Number"];
        $Email = $row["Email"];
        $Address = $row["Address"];




    } catch (PDOException $e) {
        echo "Error: ". $e->getMessage(); exit;
    }

}else{
    header("Location:customerlist.php");
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
        function DeleteCustomer(Name,id){
            if ((confirm("Do you want to delete" + Name))){
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
        <h3>Update customer</h3>

        <table border = "1" width="80%" height="100px">
            <tr height = "40">
                <th colspan="2">Update customer</th>

            </tr>
            <tr height ="40">
                <th>Name</th>
                <td><input id="txtName" name="txtName" type="text" size="50" value="<?=$Name?>"></td>
            </tr>

            <tr height="40">
                <th>Number</th>
                <td><input id ="txtNumber" name="txtNumber" type="text" size="50" value="<?=$Number?>"></td>
            </tr>

            <tr height="40">
                <th>Email</th>
                <td><input id ="txtEmail" name="txtEmail" type="text" size="50" value="<?=$Email?>"></td>
            </tr>

            <tr height="40">
                <th>Address</th>
                <td><input id ="txtAddress" name="txtAddress" type="text" size="50" value="<?=$Address?>"></td>
            </tr>

            <tr height="40">
                <th>Password</th>
                <td><input id ="txtPassword" name="txtPassword" type="password" size="50" value="<?=$Password?>"></td>
            </tr>


            <tr height="40">
                <td colspan="2"><input type="Submit" value="Update Customer"> | <input type="button" onclick="DeleteCustomer('<?=$Name?>', '<?=$id?>')" value="Delete Customer"></td>
            </tr>
        </table>
        <input type="hidden" id="txtID" name="txtID" value="<?=$id?>">
    </form>
</main>
<footer>
    <?php include '../Includes/footer.php'?>

</footer>
</body>
</html>
