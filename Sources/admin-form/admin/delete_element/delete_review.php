<?php
    $id=$_GET['id'];
    $conn = mysqli_connect('localhost','root','','chinthereview');
    if(!$conn) {
        die('connection failed');
    }
    $delData = "DELETE FROM film WHERE ID_F = $id";
    $result = mysqli_query($conn,$delData);
    mysqli_close($conn);
    header("location:../review.php");
    exit();
?>