<?php
    $username = $_GET['username'];
    $conn = mysqli_connect('localhost','root','','chinthereview');
    if(!$conn) {
        die('connection failed');
    }
    $update = "UPDATE users SET Status='1' WHERE User_Name='$username'";
    if(mysqli_query($conn,$update)) {
        echo 'tai khoan dc kich hoat';
        header("location:Login/Login/login.php");
        exit();
    }
?>