<?php
    $id=$_GET['id'];
    $conn = mysqli_connect('localhost','root','','chichin_test');
    if(!$conn) {
        die('connection failed');
    }
    $delData = "DELETE FROM films WHERE ID_FILM = $id";
    $result = mysqli_query($conn,$delData);
    mysqli_close($conn);
    header("location:../review.php");
    exit();
?>