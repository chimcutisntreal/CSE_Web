<?php
	session_start();
	if($_SESSION["Level"]==3) {
		echo 'Admin form!';
	} else {
		header("location:../../homepage.php");
		exit();
	}

	
	//Mo ket noi csdl
	$conn = mysqli_connect('localhost','root','','chichin_test');
	if(!$conn) {
		die('connection failed');
	}
	//Truy van
	$getData = "SELECT ID_G,Genre FROM genre";
	$result = mysqli_query($conn,$getData);
	
	if(isset($_POST['getGenre'])) {
		
		$genre = $_POST['getGenre'];
		
		$insertData = "INSERT INTO genre(Genre) VALUES('$genre')";
		$insertDone = mysqli_query($conn,$insertData);
		echo $genre;
		
	}
	mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Genre</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<script src="sweetalert2/package/dist/sweetalert2.all.min.js"></script>
	<link rel="stylesheet" href="sweetalert2/package/dist/sweetalert2.css">
		<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<script
		src="https://code.jquery.com/jquery-3.3.1.js"
		integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
		crossorigin="anonymous">
	</script>
 
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
								<em class="fa fa-envelope"></em><span class="label label-danger">n</span>
							</a>
							<ul class="dropdown-menu dropdown-messages">
								<li>
									<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
											<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
										</a>
										<div class="message-body"><small class="pull-right">x mins ago</small>
											<a href="#"><strong>ABC</strong> commented on <strong>your post</strong>.</a>
											<br /><small class="text-muted">1:24 pm - 25/03/2018</small></div>
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
								<em class="fa fa-bell"></em><span class="label label-info">m</span>
							</a>
							<ul class="dropdown-menu dropdown-alerts">
								<li><a href="#">
										<div><em class="fa fa-envelope"></em> x New Message(s)
											<span class="pull-right text-muted small">x min(s) ago</span></div>
									</a></li>
								<li class="divider"></li>
								<li><a href="#">
										<div><em class="fa fa-heart"></em> x New Like(s)
											<span class="pull-right text-muted small">x min(s) ago</span></div>
									</a></li>
								<li class="divider"></li>
								<li><a href="#">
										<div><em class="fa fa-user"></em> x New Follower(s)
											<span class="pull-right text-muted small">x min(s) ago</span></div>
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
					<div class="profile-usertitle-name">Admin1</div>
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
				<li><a href="review.php"><img src="https://img.icons8.com/ios/15/000000/video-editing.png"> Post Review</a></li>
				<li class="active"><a href="genre.php"><img src="https://img.icons8.com/ios/15/000000/school-director.png"> Genre</a></li>
                <li><a href="users.php"><img src="https://img.icons8.com/ios/15/000000/user-group-man-man.png"> Users</a></li>

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
					<li class="active">Genre</li>
				</ol>
			</div>
			<!--/.row-->

			<div class="row">
				
			</div>
			<!--/.row-->
            <div class="row">
				<div class="col-md-12">
					<div class="panel panel-default ">
						<div class="panel-heading">
							Genre Table
							</div>
						<div class="panel-body timeline-container">
							<ul class="timeline">
								
								<table>
									<tr>
										<th style="width:200px;">ID_Genre</th>
										<th> Genre</th>
										<th style="width:200px;">Edit</th>
										<th style="width:200px;">Delete</th>
										<th style="width:50px;border:none;"><button formaction="genre.php" formmethod="POST" name="pressOnAdd" id="btnAdd" style="border:none;background: transparent;"><img src="https://img.icons8.com/ios/60/000000/plus.png"></button></th>
									</tr>
									<tr>
										<?php
										while($dataArray = mysqli_fetch_assoc($result))
										{
											echo "<tr>";
												echo"<td>$dataArray[ID_G]</td>";
												echo"<td>$dataArray[Genre]</td>";
												echo"<td><a href='#'>Edit</a></td>";
												echo"<td><a href='delete_element/delete_genre.php?id=$dataArray[ID_G]' onclick = 'return show_confirm();'>Delete</a></td>";
											echo "</tr>";
										} 
									
										?>
									</tr>
								</table>
								
								
							</ul>
						</div>
					</div>
				</div>
			</div>

		<script>
			$(document).ready(function(){
				$("#btnAdd").click(function(){
					(async function getText () {
				const {value: text} = await Swal({
				input: 'text',
				inputPlaceholder: 'Enter genre',
				showCancelButton: true
				})

				if (text) {
					Swal("Add "+text+ " successfull!!!")
					
					var getG = text;
					$.ajax({
						method:'POST',
						url:'genre.php',
						data: {getGenre:getG},
						success: function(data){
						
						}
					})
				}
				})();
			
				});
			
			});
		</script>
			
</body>
</html>