<?php

if(isset($_GET["id"])) {
    $id=$_GET["id"];
    try{
        include '../Includes/dbconn.php';
        $db = new PDO($dsn, $username, $password, $options);
        $sql = $db->prepare("Delete from phpclass.customerlist where CustomerID = :id");
        $sql->bindValue(":id",$id);
        $sql->execute();
    } catch (PDOException $e) {
        $error = $e->getMessage();
        echo "Error: $error";
    }

}
header("Location:customerdb.php");
?>