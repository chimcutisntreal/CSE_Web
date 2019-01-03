<?php
    $id=$_GET['id'];
    $conn = mysqli_connect('localhost','root','','chinthereview');
    if(!$conn) {
        die('connection failed');
    }

    $delData = "DELETE FROM genre WHERE ID_G = $id";
    $result = mysqli_query($conn,$delData);
    if($result) {
        echo "thanh cong";
    } else {
        echo " that bai";
    }
    mysqli_close($conn);
    header("location:../genre.php");
    exit();

?>
     
    