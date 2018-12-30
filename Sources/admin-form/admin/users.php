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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">

		<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
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
				<li><a href="casts.php"><img src="https://img.icons8.com/ios/15/000000/school-director.png"> Casts</a></li>
                <li><a href="directors.php"><img src="https://img.icons8.com/ios/15/000000/clapperboard.png"> Directors</a></li>
                <li class="active"><a href="users.php"><img src="https://img.icons8.com/ios/15/000000/user-group-man-man.png"> Users</a></li>

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
					<li class="active">Users</li>
				</ol>
			</div>
			<!--/.row-->

			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Users</h1>
				</div>
			</div>
			<!--/.row-->
            <div class="row">
				<div class="col-md-12">
					<div class="panel panel-default ">
						<div class="panel-heading">
							Users Table
							</div>
						<div class="panel-body timeline-container">
							<ul class="timeline">
								<table>
									<tr>
										<th>ID</th>
										<th>UserName</th>
										<th>Email</th>
										<th>JoinDate</th>
										<th>PhoneNumber</th>
										<th>Favorite</th>
										<th>Status</th>
										<th>Level</th>
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
            $getData = "SELECT ID_User,User_Name,Email,Join_Date,Phone_Number,Fav,Status,Level FROM users";
            $result = mysqli_query($conn,$getData);
            while($dataArray = mysqli_fetch_assoc($result))
            {
                echo "<tr>";
                    echo"<td>$dataArray[ID_User]</td>";
                    echo"<td>$dataArray[User_Name]</td>";
                    echo"<td>$dataArray[Email]</td>";
                    echo"<td>$dataArray[Join_Date]</td>";
                    echo"<td>$dataArray[Phone_Number]</td>";
                    echo"<td>$dataArray[Fav]</td>";
                    if ($dataArray['Status'] == 0) {
                        echo "<td>Not Activated</td>";
                    } else {
                        echo "<td>Activated</td>";
                    }

                    if ($dataArray['Level'] == 1) {
                        echo"<td>Member</td>";
                    }
                    if ($dataArray['Level'] == 2) {
                        echo"<td>VIP Member</td>";
                    }  if ($dataArray['Level'] == 3) {
                        echo"<td>Admin</td>";
                    }
                    echo"<td><a href='delete.php?idUser=$dataArray[ID_User]' onclick = 'return show_confirm();'>Delete</a></td>";
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
</body>
</html>