<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Chin the Review</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
            crossorigin="anonymous">
        <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.css">
        <link rel="stylesheet" href="w3school/w3.css">
 
        <style>
            body {
                background-image: url("stock/background.jpg");
                background-size: 100%;
            }
        </style>
    </head>

    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-2">
                            <div id="mySidebar" class="sidebar">
                                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" id="showMenu">×</a>
                                    <a href="about.html">About</a>
                                    <a href="#">Services</a>
                                    <a href="#">Clients</a>
                                    <a href="Contact/Contact/index.html">Contact</a>
                                </div>

                            <div id="main">
                                <button class="openbtn" onclick="openNav()" id="hideMenu">☰</button>
                            </div>
                            <a href="Search/Search/search.html">
                                <i class="fas fa-search fa-2x" style="color:white">
                                </i>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a style="text-decoration: none" href="homepage.php">
                                <p class="MainTitle">
                                    CHIN THE REVIEW
                                </p>
                            </a>
                        </div>
                        <div class="button col-md-2">
                            <?php
                            if(isset($_SESSION["username"])) {
                                echo "<div class='text-success'><h4 class='wel'><p class='font-weight-bold'>Welcome ".$_SESSION["username"]."</p></h4></div> <a href='logout.php'><button type='button' class='btn btn-success'>
                                Logout</button></a>";
                            } else {
                                echo "<a href='../Sources/Login/Login/login.php'><button type='button' class='btn btn-success'>
                                Sign In </button></a>";
                                echo "<a href='../Sources/Signup/Signup/signup.php'><button type='button' class='btn btn-success'>
                                Sign Up</button></a>";
                            }
                           
                            ?>
                        </div>
                        <div class="col-md-2">
    
                                <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-2x"
                                        style="color: white"></i></a>
                                <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f fa-2x"
                                        style="color: white"></i></a>
                                <a href="https://twitter.com/?lang=vi" target="_blank"><i class="fab fa-twitter fa-2x"
                                        style="color:white"></i></a>
            
                        </div>
                    </div>
                    <div class="row">
                            <span class="col-md-8 navnav">
                                <a class="Menu" style="text-decoration: none" href="current.html">CURRENT ISSUE</a>
                                <a class="Menu" style="text-decoration: none" href="WebO.html">WEB ONLY</a>
                                <a class="Menu" style="text-decoration: none" href="issue.html">ISSUE ARCHIVE</a>
                                <a class="Menu" style="text-decoration: none" href="sub.html">SUBSCRIBE</a>
                                <a class="Menu" style="text-decoration: none" href="Genre/Genre/src/index.php">GENRE</a>
                                <a class="Menu" style="text-decoration: none" href="direc.html">DIRECTORS & CASTS</a>
                            </span>
                    </div>
                    <div class="row line-row">
                        <div class="col-md-8 lineTop">
                            <!-- <div class="line"></div> -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slideshow-container">

                                <div class="mySlides">
                                    <div class="numbertext"></div>
                                    <img src="stock/1.jpg" style="width:100%">
                                    
                                </div>

                                <div class="mySlides">
                                    <div class="numbertext"></div>
                                    <img src="stock/2.jpg" style="width:100%">
                                    
                                </div>

                                <div class="mySlides">
                                    <div class="numbertext"></div>
                                    <img src="stock/3.jpg" style="width:100%">
                                    
                                </div>

                                <a class="prev" onclick="plusSlides(-1)" style="color:white">&#10094;</a>
                                <a class="next" onclick="plusSlides(1)" style="color:white">&#10095;</a>

                            </div>
                            <br>

                            <div style="text-align:center">
                                <span class="dot" onclick="currentSlide(1)"></span>
                                <span class="dot" onclick="currentSlide(2)"></span>
                                <span class="dot" onclick="currentSlide(3)"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
                $conn = mysqli_connect('localhost','root','','chinthereview');
                if(!$conn) {
                    die('connection failed');
                }
                $result = mysqli_query($conn,"SELECT Film,pre_image FROM film ORDER BY ID_F DESC");
                $data = mysqli_fetch_assoc($result);
                echo"<div class='r1 row'>";
                    echo"<div class='r2 container'>
                        <img class='preImage' alt='Preview Image' src='preview_image/$data[pre_image]'/>
                        <div class='text1'>
                            <h2><b>$data[Film]</b></h2>
                            <p><em><b>Aquaman</b> is a 2018 American superhero film based on the DC Comics character of the same ..... convention in Las Vegas, Nevada, with Momoa introducing a video of director James Wan displaying a concept art sizzle reel for the film. Later ...</em></p>
                        </div>
                    </div>";
                echo"</div>";
                
                mysqli_close($conn);
            ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="SubTitle">THE LASTEST STORIES</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10">
                            <div class="row">
                                <?php
                                    $conn = mysqli_connect('localhost','root','','chinthereview');
                                    if(!$conn) {
                                        die('connection failed');
                                    }
                                    echo"<div class='col-md-4'>";
                                        echo"<div class='card1'>";
                                            $result = mysqli_query($conn,"SELECT film.ID_F,Film,pre_image FROM film,genre,child WHERE film.ID_F=child.ID_F AND genre.ID_G=child.ID_G AND genre.Genre='Action' ORDER BY film.ID_F DESC;");
                                            $data = mysqli_fetch_assoc($result);
                                            // $insert = mysqli_query($conn,"UPDATE displayed_film SET ID_F= '$data[ID_F]' WHERE G='Action';");
                                            echo "<img class='preImage' alt='Preview Image' src='preview_image/$data[pre_image]' />";
                                            echo "<div class='preImage-click'><a class='btn btn-danger' href='detail.php?id=$data[ID_F]'>View more</a></div>";
                                            echo "<div class='posGenre'><p style='font-size:25px;color:white;'><b><em>Action</em></b></p></div>";
                                            echo "<div class='card-block'>
                                                <h5 class='card-title' style='text-align:center'>
                                                    <b>$data[Film]</b>
                                                </h5>
                                            </div>";
                                        echo"</div>";   
                                    echo"</div>";

                                    echo"<div class='col-md-4'>";
                                        echo"<div class='card1'>";
                                            $result = mysqli_query($conn,"SELECT film.ID_F,Film,pre_image FROM film,genre,child WHERE film.ID_F=child.ID_F AND genre.ID_G=child.ID_G AND genre.Genre='Romantic' ORDER BY film.ID_F DESC;");
                                            $data = mysqli_fetch_assoc($result);
                                                
                                            echo "<img class='preImage' alt='Preview Image' src='preview_image/$data[pre_image]' />";
                                            echo "<div class='preImage-click'><a class='btn btn-danger' href='detail.php?id=$data[ID_F]'>View more</a></div>";
                                            echo "<div class='posGenre'><p style='font-size:25px;color:white;'><b><em>Romantic</em></b></p></div>";
                                            echo "<div class='card-block'>
                                                <h5 class='card-title' style='text-align:center'>
                                                    <b>$data[Film]</b>
                                                </h5>
                                            </div>";
                                        echo"</div>";   
                                    echo"</div>";

                                    echo"<div class='col-md-4'>";
                                        echo"<div class='card1'>";
                                            $result = mysqli_query($conn,"SELECT film.ID_F,Film,pre_image FROM film,genre,child WHERE film.ID_F=child.ID_F AND genre.ID_G=child.ID_G AND genre.Genre='Fiction' ORDER BY film.ID_F DESC;");
                                            $data = mysqli_fetch_assoc($result);
                                                
                                            echo "<img class='preImage' alt='Preview Image' src='preview_image/$data[pre_image]' />";
                                            echo "<div class='preImage-click'><a class='btn btn-danger' href='detail.php?id=$data[ID_F]'>View more</a></div>";
                                            echo "<div class='posGenre'><p style='font-size:25px;color:white;'><b><em>Fiction</em></b></p></div>";
                                            echo "<div class='card-block'>
                                                <h5 class='card-title' style='text-align:center'>
                                                    <b>$data[Film]</b>
                                                </h5>
                                            </div>";
                                        echo"</div>";   
                                    echo"</div>";
                                mysqli_close($conn);
                                ?>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <img src="stock/poster1.jpg" alt="Poster image" style="height:330px;width:243px">
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-10">
                            <div class="row">
                                <?php
                                    $conn = mysqli_connect('localhost','root','','chinthereview');
                                    if(!$conn) {
                                        die('connection failed');
                                    }
                                    echo"<div class='col-md-4'>";
                                        echo"<div class='card1'>";
                                            $result = mysqli_query($conn,"SELECT film.ID_F,Film,pre_image FROM film,genre,child WHERE film.ID_F=child.ID_F AND genre.ID_G=child.ID_G AND genre.Genre='Comedy' ORDER BY film.ID_F DESC;");
                                            $data = mysqli_fetch_assoc($result);
                                                
                                            echo "<img class='preImage' alt='Preview Image' src='preview_image/$data[pre_image]' />";
                                            echo "<div class='preImage-click'><a class='btn btn-danger' href='detail.php?id=$data[ID_F]'>View more</a></div>";
                                            echo "<div class='posGenre'><p style='font-size:25px;color:white;'><b><em>Comedy</em></b></p></div>";
                                            echo "<div class='card-block'>
                                                <h5 class='card-title' style='text-align:center'>
                                                    <b>$data[Film]</b>
                                                </h5>
                                            </div>";
                                        echo"</div>";   
                                    echo"</div>";

                                    echo"<div class='col-md-4'>";
                                        echo"<div class='card1'>";
                                            $result = mysqli_query($conn,"SELECT film.ID_F,Film,pre_image FROM film,genre,child WHERE film.ID_F=child.ID_F AND genre.ID_G=child.ID_G AND genre.Genre='Horror' ORDER BY film.ID_F DESC;");
                                            $data = mysqli_fetch_assoc($result);
                                                    
                                            echo "<img class='preImage' alt='Preview Image' src='preview_image/$data[pre_image]' />";
                                            echo "<div class='preImage-click'><a class='btn btn-danger' href='detail.php?id=$data[ID_F]'>View more</a></div>";
                                            echo "<div class='posGenre'><p style='font-size:25px;color:white;'><b><em>Horror</em></b></p></div>";
                                            echo "<div class='card-block'>
                                                <h5 class='card-title' style='text-align:center'>
                                                    <b>$data[Film]</b>
                                                </h5>
                                            </div>";
                                        echo"</div>";   
                                    echo"</div>";

                                    echo"<div class='col-md-4'>";
                                        echo"<div class='card1'>";
                                            $result = mysqli_query($conn,"SELECT film.ID_F,Film,pre_image FROM film,genre,child WHERE film.ID_F=child.ID_F AND genre.ID_G=child.ID_G AND genre.Genre='Animation' ORDER BY film.ID_F DESC;");
                                            $data = mysqli_fetch_assoc($result);
                                                    
                                            echo "<img class='preImage' alt='Preview Image' src='preview_image/$data[pre_image]' />";
                                            echo "<div class='preImage-click'><a class='btn btn-danger' href='detail.php?id=$data[ID_F]'><b>View more</b></a></div>";
                                            echo "<div class='posGenre'><p style='font-size:25px;color:white;'><b><em>Animation</em></b></p></div>";
                                            echo "<div class='card-block'>
                                                <h5 class='card-title' style='text-align:center'>
                                                    <b>$data[Film]</b>
                                                </h5>
                                            </div>";
                                        echo"</div>";   
                                    echo"</div>";
                                    mysqli_close($conn);
                                ?>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <img src="stock/poster2.jpg" alt="Poster image" style="height:330px;width:243px">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="lineBot"></div>
                        </div>
                    </div>
                    <div class="row">
                        <span class="navnav2">
                            <a class="Menu2" href="about.html">ABOUT</a>
                            <a class="Menu2" href="ads.html">ADVERTISE</a>
                            <a class="Menu2" href="privacy.html">PRIVACY</a>
                            <a class="Menu2" href="social.html">SOCIAL</a>
                            <a class="Menu2" href="events.html">EVENTS</a>
                            <a class="Menu2" href="Contact/Contact/index.html">CONTACT</a>
                        </span>
                    </div>
                </div>
            </div>
            <p class="EndTitle">
                COPY RIGHT AND POWERED
            </p>
        </div>
        </div>
        </div>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script>
            $("#hideMenu").click(function(){
                $("#hideMenu").hide();
            });
            $("#showMenu").click(function(){
                $("#hideMenu").show();
            });
            
        </script>
        <script src="implement.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="js/jquery.min.js"></script>
    </body>

</html>
