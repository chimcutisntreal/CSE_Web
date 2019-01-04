<?php
    $id=$_GET['id'];
    
?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>ChiChin the Review - Genre</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
		 crossorigin="anonymous">
		
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="../../../style.css" rel="stylesheet">
		<style>
			body {
				background-image: url("../../../stock/background.jpg");
				background-size: 100%;
			}

		</style>
	<script src="../../../style.css"></script>
	</head>

	<body>

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-2">
							<a href="../../../Search/Search/search.html">
								<i class="fas fa-search fa-2x" style="color:white">
								</i>
							</a>
						</div>
						<div class="col-md-6">
							<a style="text-decoration: none" href="../../../homepage.php">
								<p class="MainTitle">
									CHIN THE REVIEW
								</p>
							</a>
						</div>
						<div class="button col-md-2">
							 <!-- <?php
                            if(isset($_SESSION["username"])) {
                                echo "<div class='text-success'><h4 class='wel'><p class='font-weight-bold'>Welcome ".$_SESSION["username"]."</p></h4></div> <a href='logout.php'><button type='button' class='btn btn-success'>
                                Logout</button></a>";
                            } else {
                                echo "<a href='../Sources/Login/Login/login.php'><button type='button' class='btn btn-success'>
                                Sign In </button></a>";
                                echo "<a href='../Sources/Signup/Signup/signup.php'><button type='button' class='btn btn-success'>
                                Sign Up</button></a>";
                            }
                           
                            ?> -->
							<!-- <a href='../ChiChin/Login/Login/login.php'><button type='button' class='btn btn-success'>
                                Sign In </button></a>
                            <a href='../ChiChin/Signup/Signup/signup.php'><button type='button' class='btn btn-success'>
                                Sign Up</button></a> -->
						</div>
						<div class="col-md-2">

							<a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-2x" style="color: white"></i></a>
							<a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f fa-2x" style="color: white"></i></a>
							<a href="https://twitter.com/?lang=vi" target="_blank"><i class="fab fa-twitter fa-2x" style="color:white"></i></a>

						</div>
					</div>
					<div class="row">

						<span class="col-md-8 navnav">
							<a class="Menu" style="text-decoration: none" href="current.html">CURRENT ISSUE</a>
							<a class="Menu" style="text-decoration: none" href="WebO.html">WEB ONLY</a>
							<a class="Menu" style="text-decoration: none" href="issue.html">ISSUE ARCHIVE</a>
							<a class="Menu" style="text-decoration: none" href="sub.html">SUBSCRIBE</a>
							<a class="Menu" style="text-decoration: none" href="index.php">GENRE</a>
							<!-- <div class="dropdown">
								<p class="dropbtn">GENRE</p>
								<div class="dropdown-content">
									<a href="#" style="text-decoration: none">Romance</a>
									<a href="#" style="text-decoration: none">Horror</a>
									<a href="#" style="text-decoration: none">Action</a>
									<a href="#" style="text-decoration: none">Animation</a>
									<a href="#" style="text-decoration: none">Tragedy</a>
									<a href="#" style="text-decoration: none">Drama</a>
								</div>
							</div> -->
							<a class="Menu" style="text-decoration: none" href="direc.html">DIRECTORS & CASTS</a>
						</span>

					</div>
					<div class="row line-row">
						<div class="col-md-8 lineTop">
							<!-- <div class=""></div> -->
						</div>
					</div>
				</div>
			</div>
			<div class="genre row">
				<div class="col-md-12">
					<div class="pageNum row">
						<div class="col-md-12">
							<nav>
								<ol class="breadcrumb">
									<li class="breadcrumb-item">
										<a href="../../../homepage.php">Home</a>
									</li>
									<li class="breadcrumb-item">
										<a href="../src/index.php">Genre</a>
									</li>
								</ol>
							</nav>
						</div>
					</div>
					<div class="row">
                        <?php
                                    $conn = mysqli_connect('localhost','root','','chinthereview');
                                    if(!$conn) {
                                        die('connection failed');
                                    }
                                    $result = mysqli_query($conn,"SELECT Film,pre_image,Genre,film.ID_F FROM film,genre,child WHERE film.ID_F=child.ID_F AND genre.ID_G=$id AND genre.ID_G=child.ID_G GROUP BY film.ID_F ORDER BY film.ID_F DESC;");
                                            while($data = mysqli_fetch_assoc($result)) {                       
                                                echo"<div class='col-md-4'>";
                                                echo"<div class='card1'>";
                                                    echo "<img class='preImage' alt='Preview Image' src='../../../preview_image/$data[pre_image]' />";
                                                    echo "<div class='preImage-click'><a class='btn btn-danger' href='detail.php?id=$data[ID_F]'>View more</a></div>";
                                                    echo "<div class='posGenre'><p style='font-size:25px;color:white;'><b><em>$data[Genre]</em></b></p></div>";
                                                    echo "<div class='card-block'>
                                                        <h5 class='card-title' style='text-align:center'>
                                                            <b>$data[Film]</b>
                                                        </h5>
                                                    </div>";
                                                echo"</div>";   
                                            echo"</div>";
                                            }
                                   
                        ?>
						
					
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
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
		</div>

		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
	</body>

</html>
