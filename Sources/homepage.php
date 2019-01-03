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
   
      
       
        <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
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
                                    <a href="#">About</a>
                                    <a href="#">Services</a>
                                    <a href="#">Clients</a>
                                    <a href="#">Contact</a>
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
                             <!-- <a href='../ChiChin/Login/Login/login.php'><button type='button' class='btn btn-success'>
                                Sign In </button></a>
                            <a href='../ChiChin/Signup/Signup/signup.php'><button type='button' class='btn btn-success'>
                                Sign Up</button></a> -->
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
                                <div class="dropdown">
                                <p class="dropbtn">GENRE</p>
                                    <div class="dropdown-content">
                                        <a href="#" style="text-decoration: none">Romantic</a>
                                        <a href="#" style="text-decoration: none">Horror</a>
                                        <a href="#" style="text-decoration: none">Action</a>
                                    </div>
                                </div>
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
                                    <div class="text">Caption Text</div>
                                </div>

                                <div class="mySlides">
                                    <div class="numbertext"></div>
                                    <img src="stock/2.jpg" style="width:100%">
                                    <div class="text">Caption Two</div>
                                </div>

                                <div class="mySlides">
                                    <div class="numbertext"></div>
                                    <img src="stock/3.jpg" style="width:100%">
                                    <div class="text">Caption Three</div>
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
            <div class="r1 row">
                <div class="r2 container">
                    <img class="PicPrev" alt="Preview" src="stock/4.jpg" />
                    <div class="text1">
                        <p>
                            Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>.
                            Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst.
                            Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et,
                            pharetra in dolor. Sed iaculis posuere diam ut cursus.
                            <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet,
                                metus
                                nunc consequat lectus, id bibendum diam velit et dui.
                            </em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus.
                        </p>
                    </div>
                </div>
            </div>
            <div class="r3 row">
                <div class="col-md-6">
                    <a href="#"><img alt="SubPic" src="stock/4.jpg" /></a>
                    <a href="#">
                        <div class="text2">Sed iaculis posuere</div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="#"><img alt="SubPic" src="stock/4.jpg" /></a>
                    <a href="#">
                        <div class="text2">Sed iaculis posuere</div><a>
                </div>
            </div>
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
                                <div class="col-md-4">
                                    <div class="card">
                                        <img class="card-img-top" alt="Bootstrap Thumbnail First" src="https://www.layoutit.com/img/people-q-c-600-200-1.jpg" />
                                        <div class="card-block">
                                            <h5 class="card-title">
                                                Card title
                                            </h5>
                                            <p class="card-text">
                                                Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                                Donec id elit non mi porta gravida at eget metus.
                                                Nullam id dolor id nibh ultricies vehicula ut id elit.
                                            </p>
                                            <p>
                                                <a class="btn btn-primary" href="#">Action</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <img class="card-img-top" alt="Bootstrap Thumbnail Second" src="https://www.layoutit.com/img/city-q-c-600-200-1.jpg" />
                                        <div class="card-block">
                                            <h5 class="card-title">
                                                Card title
                                            </h5>
                                            <p class="card-text">
                                                Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                                Donec id elit non mi porta gravida at eget metus.
                                                Nullam id dolor id nibh ultricies vehicula ut id elit.
                                            </p>
                                            <p>
                                                <a class="btn btn-primary" href="#">Action</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <img class="card-img-top" alt="Bootstrap Thumbnail Third" src="https://www.layoutit.com/img/sports-q-c-600-200-1.jpg" />
                                        <div class="card-block">
                                            <h5 class="card-title">
                                                Card title
                                            </h5>
                                            <p class="card-text">
                                                Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                                Donec id elit non mi porta gravida at eget metus.
                                                Nullam id dolor id nibh ultricies vehicula ut id elit.
                                            </p>
                                            <p>
                                                <a class="btn btn-primary" href="#">Action</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <h2 style="color:white">
                                Heading
                            </h2>
                            <p style="color:white">
                                Donec id elit non mi porta gravida at eget metus.
                                Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
                                massa justo sit amet risus.
                                Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                            </p>
                            <p>
                                <a class="btn" href="#">View details »</a>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card">
                                        <img class="card-img-top" alt="Bootstrap Thumbnail First" src="https://www.layoutit.com/img/people-q-c-600-200-1.jpg" />
                                        <div class="card-block">
                                            <h5 class="card-title">
                                                Card title
                                            </h5>
                                            <p class="card-text">
                                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id
                                                elit non mi porta gravida at eget metus. Nullam id dolor id nibh
                                                ultricies vehicula ut id elit.
                                            </p>
                                            <p>
                                                <a class="btn btn-primary" href="#">Action</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <img class="card-img-top" alt="Bootstrap Thumbnail Second" src="https://www.layoutit.com/img/city-q-c-600-200-1.jpg" />
                                        <div class="card-block">
                                            <h5 class="card-title">
                                                Card title
                                            </h5>
                                            <p class="card-text">
                                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id
                                                elit non mi porta gravida at eget metus. Nullam id dolor id nibh
                                                ultricies vehicula ut id elit.
                                            </p>
                                            <p>
                                                <a class="btn btn-primary" href="#">Action</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <img class="card-img-top" alt="Bootstrap Thumbnail Third" src="https://www.layoutit.com/img/sports-q-c-600-200-1.jpg" />
                                        <div class="card-block">
                                            <h5 class="card-title">
                                                Card title
                                            </h5>
                                            <p class="card-text">
                                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id
                                                elit non mi porta gravida at eget metus. Nullam id dolor id nibh
                                                ultricies vehicula ut id elit.
                                            </p>
                                            <p>
                                                <a class="btn btn-primary" href="#">Action</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <h2 style="color:white">
                                Heading
                            </h2>
                            <p style="color:white">
                                Donec id elit non mi porta gravida at eget metus.
                                Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
                                massa justo sit amet risus.
                                Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                            </p>
                            <p>
                                <a class="btn" href="#">View details »</a>
                            </p>
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
            </P>
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
