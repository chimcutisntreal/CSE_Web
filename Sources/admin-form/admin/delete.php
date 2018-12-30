<?php
    $id=NULL;
    $getID=array("users"=>"idUser","review"=>"idReview");
    $conn = mysqli_connect('localhost','root','','chichin_test');
    if(!$conn) {
        die('connection failed');
    }

    if ($getID["users"]=="idUser"){
        $id=$_GET[$getID['users']];
        $delData = "DELETE FROM users WHERE ID_User = $id";
        $result = mysqli_query($conn,$delData);
        mysqli_close($conn);
        header("location:users.php");
        exit();
    } else if($getID["review"]=="idReview") {
        $id=$_GET[$getID['review']];
        $delData = "DELETE FROM film WHERE ID_FILM = $id";
        $result = mysqli_query($conn,$delData);
        mysqli_close($conn);
        header("location:review.php");
        exit();
    } else{
        echo 'cannot get id to delete';
    }
  
  
?>