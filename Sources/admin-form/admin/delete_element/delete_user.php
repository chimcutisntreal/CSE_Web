<?php
    $id=$_GET['id'];
    $conn = mysqli_connect('localhost','root','','chinthereview');
    if(!$conn) {
        die('connection failed');
    }

    $delData = "DELETE FROM users WHERE ID_User = $id";
    $result = mysqli_query($conn,$delData);
    mysqli_close($conn);
    header("location:../users.php");
    exit();
?>