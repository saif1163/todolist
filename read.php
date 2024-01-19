<?php 
    include './add.php/db_connect.php';

    $sql = "SELECT * FROM user";

    $result = $conn->query($sql);
?>