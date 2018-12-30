<?php
$filmNull=$castNull=$genreNull=$directorNull=$reviewNull=NULL;
// $filmName=$genre=$casts=$director=$review=$getIDC=$getIDD=NULL;
	session_start();
	if($_SESSION["Level"]==3) {
		
	} else {
		header("location:../../homepage.php");
		exit();
	}
	
	if(isset($_POST['btnPost'])){
		$postDate= date("Y-m-d");
		if($_POST['filmName'] == NULL){
			$filmNull='Enter film name';
		} else {
			$filmName = $_POST['filmName'];
		}
		if($_POST['casts'] == NULL){
			$castNull='Enter casts name';
		} else {
			$casts = $_POST['casts'];
		}
		if($_POST['genre'] == NULL){
			$genreNull='Enter genre';
		} else {
			$genre = $_POST['genre'];
		}
		if($_POST['director'] == NULL){
			$directorNull='Enter director name';
		} else {
			$director = $_POST['director'];
		}
		if($_POST['review'] == NULL){
			$reviewNull='Enter review post';
		} else {
			$review = $_POST['review'];
		}
	
		if($filmName && $genre && $casts && $director && $review){
			echo 'ok';
		// 	$conn = mysqli_connect('localhost','root','','chichin_test');
		// 		if(!$conn) {
		// 			die('connection failed');
		// 		}
		// 	//Check casts/director exists
		// 	$castExists = "SELECT ID_C FROM casts WHERE C_Name='$casts'";
		// 	$result1=mysqli_query($conn,$castExists);
		// 	$directorExists = "SELECT ID_D FROM director WHERE D_Name='$director'";
		// 	$result2=mysqli_query($conn,$directorExists);
		// 	if(mysqli_num_rows($result1)>0){
		// 		$getIDC=mysqli_fetch_assoc($result1);
		// 		echo 'lay idc thanh cong'.$getIDC;
		// 		// $resultIDC=$getID["ID_C"];
		// 	} else if(mysqli_num_rows($result2)>0) {
		// 		$getIDD=mysqli_fetch_assoc($result2);
		// 		echo 'lay idd thanh cong'.$getIDD;
		// 		// $resultIDD=$getID["ID_D"];
		// 	} else {
		// 		$insertCast="INSERT INTO casts(C_Name) VALUES('$casts')";
		// 		$query1=mysqli_query($conn,$insertCast);
		// 		echo 'them cast thanh cong';
		// 		$insertDirector="INSERT INTO director(D_Name) VALUES('$director')";
		// 		$query1=mysqli_query($conn,$insertCast);
		// 		echo 'them dr thanh cong';
		// 	}
		// 	$insertRv ="INSERT INTO films(Film_Name,Genre,Post_Date,ID_Admin,ID_C,ID_D) VALUES('$filmName','$genre','$postDate',$_SESSION[ID_Admin],'$getIDC','$getIDD')";
		// 	$query3=mysqli_query($conn,$insertRv);
		// 	echo 'them bai viet thanh cong';
		// 	mysqli_close($conn);
		 }
	}
?>

<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>POST REVIEW</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link href="css/datepicker3.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">

		<!--Custom Font-->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
		<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<script src="froala_editor/js/froala_editor.min.js"></script>
	<script language="javascript">
        function show_confirm() {
            if(confirm("Are you sure?"))
            {
                return true;
            } else {
                return false;
            }
        }
	</script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<!-- Include Editor style. -->
<link href='froala_editor/css/froala_editor.pkgd.min.css' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">
<link href='froala_editor/css/froala_style.min.css' rel='stylesheet'>
<script type="text/javascript" src="../js/froala_editor.pkgd.min.js"></script>
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<!-- Include JS file. -->

	
	</head>
	<body>
		<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span
						 class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span></button>
					<a class="navbar-brand" href="#"><span>ChiChin</span>Admin</a>
					<ul class="nav navbar-top-links navbar-right">
						<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
								<em class="fa fa-envelope"></em><span class="label label-danger">m</span>
							</a>
							<ul class="dropdown-menu dropdown-messages">
								<li>
									<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
											<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
										</a>
										<div class="message-body"><small class="pull-right">x mins ago</small>
											<a href="#"><strong>ABC</strong> commented on <strong>your photo</strong>.</a>
											<br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
									</div>
								</li>
								<li class="divider"></li>
								<li>
									<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
											<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
										</a>
										<div class="message-body"><small class="pull-right">x hour ago</small>
											<a href="#">New message from <strong>ABC</strong>.</a>
											<br /><small class="text-muted">12:27 pm - 25/03/2018</small></div>
									</div>
								</li>
								<li class="divider"></li>
								<li>
									<div class="all-button"><a href="#">
											<em class="fa fa-inbox"></em> <strong>All Messages</strong>
										</a></div>
								</li>
							</ul>
						</li>
						<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
								<em class="fa fa-bell"></em><span class="label label-info">n</span>
							</a>
							<ul class="dropdown-menu dropdown-alerts">
								<li><a href="#">
										<div><em class="fa fa-envelope"></em> x New Message
											<span class="pull-right text-muted small">x mins ago</span></div>
									</a></li>
								<li class="divider"></li>
								<li><a href="#">
										<div><em class="fa fa-heart"></em> x New Likes
											<span class="pull-right text-muted small">x mins ago</span></div>
									</a></li>
								<li class="divider"></li>
								<li><a href="#">
										<div><em class="fa fa-user"></em> x New Followers
											<span class="pull-right text-muted small">x mins ago</span></div>
									</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.container-fluid -->
		</nav>
		<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
			<div class="profile-sidebar">
				<div class="profile-userpic">
					<img src="../../../stock/3.jpg" class="img-responsive" alt="">
				</div>
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">Username</div>
					<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="divider"></div>
			<form role="search">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
				</div>
			</form>
			<ul class="nav menu">
				<li><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
				<li><a href="widgets.php"><em class="fa fa-calendar">&nbsp;</em> Widgets</a></li>
				<li class="active"><a href="review.php"><img src="https://img.icons8.com/ios/15/000000/video-editing.png"> Post Review</a></li>
				<li><a href="casts.php"><img src="https://img.icons8.com/ios/15/000000/school-director.png"> Casts</a></li>
				<li><a href="directors.php"><img src="https://img.icons8.com/ios/15/000000/clapperboard.png"> Directors</a></li>
				<li><a href="users.php"><img src="https://img.icons8.com/ios/15/000000/user-group-man-man.png"> Users</a></li>
				<!-- <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em> Multilevel <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 1
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 2
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 3
					</a></li>
				</ul>
			</li> -->
				<li><a href="../../logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
			</ul>
		</div>
		<!--/.sidebar-->

		<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			<div class="row">
				<ol class="breadcrumb">
					<li><a href="../../homepage.php">
							<em class="fa fa-home"></em>
						</a></li>
					<li class="active">Forms</li>
				</ol>
			</div>
			<!--/.row-->

			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Post Review</h1>
				</div>
			</div>
			<!--/.row-->

					<div class="panel panel-default">
						
						<div class="panel-heading">Film Info</div>
						<div class=panel-body>
							<div class="row">
								<div class="col-md-6">
									<form action="review.php" method="POST">
										<div class="form-group">
											<input type="text" class="border-input form-control1" placeholder="Film Name" name="filmName">
										</div>
										<div class="form-group">
											<input class="border-input form-control1" placeholder="Casts" name="casts">
										</div>
										
									</form>
								</div>
								<div class="col-md-6">
									<form action="review.php" method="POST">
										<div class="form-group">
											<input class="border-input form-control1" placeholder="Director" name="director">
										</div>
										<div class="form-group">
											<input class="border-input form-control1" placeholder="Genre" name="genre">
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="panel-heading">Post Review</div>
						<div class="panel-body">
							<div class="col-md-1"></div>
							<div class="col-md-10"  >
								<form role="form" action="review.php" method="POST">
									
									<div id="froala-editor" class="form-group" name="review">	
										
									</div>
									<div class="reviewButton">
										<button type="submit" class="btn btn-success" name="btnPost">POST</button>
										<!-- <button type="submit" class="btn btn-danger">Clear</button> -->
									</div>
									<div>
										<?php
											echo "<p class='font-weight-bold text-danger'>$filmNull</p>";
											echo "<p class='font-weight-bold text-danger'>$genreNull</p>";
											echo "<p class='font-weight-bold text-danger'>$castNull</p>";
											echo "<p class='font-weight-bold text-danger'>$directorNull</p>";
											echo "<p class='font-weight-bold text-danger'>$reviewNull</p>";
										?>
									</div>
									
							
								</form>	
							</div>
							<div class="col-md-1"></div>
						</div>
						<div class="panel-heading">Management</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">
								<div class="panel-body timeline-container">
									<ul class="timeline">
										<table>
											<tr>
												<th>ID Film</th>
												<th>Film Name</th>
												<th>Edit</th>
												<th>Delete</th>
											</tr>
			<tr>
            <?php
            //Mo ket noi csdl
            $conn = mysqli_connect('localhost','root','','chichin_test');
            if(!$conn) {
                die('connection failed');
            }
            //Truy van
            $getData = "SELECT ID_FILM,Film_Name FROM films";
            $result = mysqli_query($conn,$getData);
            while($dataArray = mysqli_fetch_assoc($result))
            {
                echo "<tr>";
                    echo"<td>$dataArray[ID_FILM]</td>";
                    echo"<td>$dataArray[Film_Name]</td>";
                    echo"<td><a href=''>Edit</a></td>";
                    

                    echo"<td><a href='delete.php?idReview=$dataArray[ID_FILM]' onclick = 'return show_confirm();'>Delete</a></td>";
                echo "</tr>";
            }
            
            mysqli_close($conn);
        ?>
		</tr>
		</table>
		</ul>
		</div>
		</div>
		</div>
		</div>
		</div>

					
				</div><!-- /.panel-->
			</div><!-- /.col-->

		</div><!-- /.row -->

		</div>
		<!--/.main-->

		<!-- froala-->
		
		<script>
			$(function() {
				$('div#froala-editor').froalaEditor({
				toolbarButtons: ['bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', '|', 'fontFamily', 'fontSize', 'color', 'inlineStyle', 'inlineClass', 'clearFormatting', '|', 'emoticons', 'fontAwesome', 'specialCharacters', '-', 'paragraphFormat', 'lineHeight', 'paragraphStyle', 'align', 'formatOL', 'formatUL', 'outdent', 'indent', 'quote', '|', 'insertLink', 'insertImage', 'insertVideo', 'insertFile', 'insertTable', '-', 'insertHR', 'selectAll', 'getPDF', 'print', 'help', 'html', 'fullscreen', '|', 'undo', 'redo']
				})
			});
		</script>
		<!-- <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@2.9.1/js/froala_editor.min.js'></script> -->
		<script src="froala_editor/js/froala_editor.pkgd.min.js"></script>
		
		<script src="js/bootstrap.min.js"></script>
		<script src="js/chart.min.js"></script>
		<script src="js/chart-data.js"></script>
		<script src="js/easypiechart.js"></script>
		<script src="js/easypiechart-data.js"></script>
		<script src="js/bootstrap-datepicker.js"></script>
		<script src="js/custom.js"></script>
		<script src="preview_image.js"></script>
	</body>

</html>
