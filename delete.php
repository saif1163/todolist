<?php 
    include './add.php/db_connect.php';

    $list = $_GET['id'];


    $sql = "DELETE FROM user WHERE id = '$id'";
    $conn->query($sql);
    
?>