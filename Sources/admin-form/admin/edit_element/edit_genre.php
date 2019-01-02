<?php
    $id=$_GET['id'];
    $conn = mysqli_connect('localhost','root','','chichin_test');
    if(!$conn) {
        die('connection failed');
    }

    $editData = "SELECT Genre FROM genre WHERE ID_G=$id";
    $resultG = mysqli_query($conn,$delData);
    mysqli_close($conn);
    header("location:../genre.php");
    exit();

?>


     
    