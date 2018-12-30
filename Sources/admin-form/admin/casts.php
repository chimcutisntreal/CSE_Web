<?php
	session_start();
	if($_SESSION["Level"]==3) {
		echo 'Admin form!';
	} else {
		header("location:../../homepage.php");
		exit();
	}
?>

<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Casts</title>
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
                <li><a href="review.php"><img src="https://img.icons8.com/ios/15/000000/video-editing.png"> Post Review</a></li>
                <li class="active"><a href="casts.php"><img src="https://img.icons8.com/ios/15/000000/school-director.png"> Casts</a></li>
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
					<li class="active">Casts</li>
				</ol>
			</div>
			<!--/.row-->

			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Casts</h1>
				</div>
			</div>
			<!--/.row-->


					<div class="panel panel-default">
						<div class="panel-heading">Forms</div>
						<div class="panel-body">
							<div class="col-md-6">
								<form role="form" action="review.php" method="POST">
									<div class="form-group">
										<label>Title</label>
										<input class="form-control">
									</div>
									<div class="form-group">
										<label>Genre</label>
										<div class="text-left">
										<textarea class="form-control" rows="2" disabled style="text-align:left">
											<?php
												if(isset($_POST['select'])){
													foreach($_POST['selectGenre'] as $genre){
														echo $genre.",";
													}
												}	
											?>
										</textarea>
										</div>
									</div>
									<div class="form-group">
										<label>Description</label>
										<textarea class="form-control" rows="3"></textarea>
									</div>
									<div class="form-group">
										<label>Content</label>
										<textarea class="form-control" rows="20"></textarea>
									</div>
									<button type="submit" class="btn btn-success btn-lg">POST</button>

							</div>
							<div class="col-md-6">
								<div class="form-group form-group-lg">
									<label>Select Genre</label>
									<select multiple class="form-control" name="selectGenre[]">
										<option value="Action">Action</option>
                                    	<option value="Horror">Horror</option>
                                        <option value="Comedy">Comedy</option>
                                        <option value="Drama">Drama</option>
                                        <option value="Documentary">Documentary</option>
                                        <option value="Tragedy">Tragedy</option>
                                        <option value="Animation">Animation</option>
                                        <option value="Romance">Romance</option>
                                        <option value="Mature">Mature</option>
										
									</select>
								</div>
								<button type="submit" class="btn btn-primary" name="select">Select</button>
								<button type="reset" class="btn btn-default">Reset</button>
							</div>
							</form>
						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->

		</div><!-- /.row -->
		</div>
		<!--/.main-->

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/chart.min.js"></script>
		<script src="js/chart-data.js"></script>
		<script src="js/easypiechart.js"></script>
		<script src="js/easypiechart-data.js"></script>
		<script src="js/bootstrap-datepicker.js"></script>
		<script src="js/custom.js"></script>

	</body>

</html>
