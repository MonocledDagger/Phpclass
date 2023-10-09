<?php

if(isset($_GET["id"]))
{

    $id=$_GET["id"];
    try{
        include '../Includes/dbconn.php';
        $db = new PDO($dsn, $username, $password, $options);

        $sql = $db->prepare("Delete from phpclass.customerdb where CustomerID = :ID");
        $sql->bindValue(":ID",$id);
        $sql->execute();
        header("Location:movielist.php");



    } catch (PDOException $e) {
        echo "Error: ". $e->getMessage(); exit;
    }

}

?>