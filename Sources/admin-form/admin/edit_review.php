<?php
	session_start();
	if($_SESSION["Level"]==3) {
		
	} else {
		header("location:../../homepage.php");
		exit();
	}
	
	$errorFilm = $errorGenre = $errorReview=$errorImage=NULL;
	$id= $_GET["id"];
	if(isset($_POST['btnSubmit'])) {
		
		if (empty($_POST['txtFilm'])) {
				$errorFilm = 'Enter Film Name';
		} else {
			$inputFilm = $_POST['txtFilm'];
		}
			
		if(empty($_POST['listGenre'])) {
			$errorGenre = 'Choose Genre';
		} else {
			$listGenre = $_POST['listGenre'];
		}
		
		if($_FILES['input-file-preview']['error']>0) {
			$errorImage = 'Choose Image';
		} else {
			$image = $_FILES['input-file-preview']['name'];
		}
		if($_POST['txtReview']==NULL) {
			$errorReview = 'Enter Review';
		} else {
			$review = $_POST['txtReview'];
		}
		
		if(isset($inputFilm,$listGenre,$review,$image)){
			$conn = mysqli_connect('localhost','root','','chinthereview');
			if(!$conn) {
				die('connection failed');
			}
			$getFilmExists = "SELECT * FROM film WHERE Film='$inputFilm'";
			$resultFE = mysqli_query($conn,$getFilmExists);
			if(mysqli_num_rows($resultFE)>0) {
				$filmExists = 'Film exists. Try again';
			} else {
				$updateFilm = "UPDATE film SET Film='$inputFilm', Review='$review',pre_image='$image' WHERE ID_F=$id";
				if (mysqli_query($conn,$updateFilm)) {

					for ($i=0; $i<count($listGenre); $i++) {
						$updateGenreOF = "UPDATE child  SET ID_F=$id, ID_G='$listGenre[$i]' WHERE ID_F=$id";
						mysqli_query($conn,$updateGenreOF);
					}
					header('location:review.php');
					exit();
				}
			}
			move_uploaded_file($_FILES['input-file-preview']['tmp_name'],"../../preview_image/".$_FILES['input-file-preview']['name']);
			
		}
	}	
		
		$conn = mysqli_connect('localhost','root','','chinthereview');
		if(!$conn) {
			die('connection failed');
		}

		$getGenre= "SELECT ID_G,Genre FROM genre";
		$resultG = mysqli_query($conn,$getGenre);

		$editResult = mysqli_query($conn,"SELECT Film,pre_image,Review FROM film,genre  WHERE film.ID_F=$id");
		$editData = mysqli_fetch_assoc($editResult);
		mysqli_close($conn);
	
		
	
?>

<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>POST REVIEW</title>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link href="css/datepicker3.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">
		<script src="../../sweetalert2/package/dist/sweetalert2.all.min.js"></script>
		<link rel="stylesheet" href="../../sweetalert2/package/dist/sweetalert2.css">
		<!--Custom Font-->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	
		<script src="froala_editor/js/froala_editor.min.js"></script>
	
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<!-- Include Editor style. -->
		<link href='froala_editor/css/froala_editor.pkgd.min.css' rel='stylesheet'>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">
		<link href='froala_editor/css/froala_style.min.css' rel='stylesheet'>
		<script type="text/javascript" src="../js/froala_editor.pkgd.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

		<script src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="bootstrap-select/dist/css/bootstrap-select.css"/>
		<script src="bootstrap-select/dist/js/bootstrap-select.min.js"></script>
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
				<div class="profile-usertitle">
					<div class="profile-usertitle-name"><?php echo $_SESSION["Admin"] ?></div>
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
				<li class="active"><a href="review.php"><img src="https://img.icons8.com/ios/15/000000/video-editing.png"> Post Review</a></li>
				<li><a href="genre.php"><img src="https://img.icons8.com/ios/15/000000/school-director.png"> Genre</a></li>
				
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
							<form action="edit_review.php?id=<?php echo $id;?>" method="POST" enctype="multipart/form-data">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="border-input form-control1" placeholder="Film Name" name="txtFilm" value="<?php echo $editData['Film']; ?>">
											<?php
												echo "<p class='bg-danger'>$errorFilm<p>";	
											?>
										</div>
										<label>Choose Genre</label>
										<select class="selectpicker" multiple data-live-search="true" name="listGenre[]">
										<?php 
											while ($dataG=mysqli_fetch_assoc($resultG)) {
												echo "<option value='$dataG[ID_G]'>$dataG[Genre]</option>";
												
											};
										?>
										</select>
										<?php
											echo "<p class='bg-danger'>$errorGenre<p>";		
										?>										
									</div>
									<div class="col-md-6">
										
										<div class="input-group image-preview">
											<input type="text" class="form-control image-preview-filename" disabled placeholder="Preview Image" name="image" value="<?php echo $editData['pre_image']; ?>"> <!-- don't give a name === doesn't send on POST/GET -->
											<span class="input-group-btn">
												<!-- image-preview-clear button -->
												<button type="button" class="btn btn-default image-preview-clear" style="display:none;">
													<span class="glyphicon glyphicon-remove"></span> Clear
												</button>
												<!-- image-preview-input -->
												<div class="btn btn-default image-preview-input">
													<span class="glyphicon glyphicon-folder-open"></span>
													<span class="image-preview-input-title">Choose</span>
													<input type="file" accept="image/png, image/jpeg, image/gif, image/jpg" name="input-file-preview"/> <!-- rename it -->
													
												</div>
											</span>	
										</div>
										<?php
											echo "<p class='bg-danger'>$errorFilm<p>";	
										 ?>
									</div>
								</div>
								<div class="row">
									<div class="panel-heading">Post Review</div>
										<div class="panel-body">
										<div class="col-md-1"></div>

										<div class="col-md-10">
											<textarea class="form-control" id="froala-editor" rows="40" name="txtReview"><?php echo "$editData[Review]"; ?></textarea>
								
										<div class="reviewButton">
											<input type="submit" class="btn btn-success" name="btnSubmit" value="DONE">
											<input type="submit" class="btn btn-danger" name="btnSubmit" value="CANCEL" href="review.php">
										</div>
										<div class="col-md-1"></div>
								</div>
							</form>
						</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->

		</div><!-- /.row -->

		</div>
		<!--/.main-->

		<!-- froala-->
		
		<script>
			$(function() {
				$('#froala-editor').froalaEditor({
				toolbarInline: false,
				toolbarButtons: ['bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', '|', 'fontFamily', 'fontSize', 'color', 'inlineStyle', 'inlineClass', 'clearFormatting', '|', 'emoticons', 'fontAwesome', 'specialCharacters', '-', 'paragraphFormat', 'lineHeight', 'paragraphStyle', 'align', 'formatOL', 'formatUL', 'outdent', 'indent', 'quote', '|', 'insertLink', 'insertImage', 'insertVideo', 'insertFile', 'insertTable', '-', 'insertHR', 'selectAll', 'getPDF', 'print', 'help', 'html', 'fullscreen', '|', 'undo', 'redo']
				})
			});

			
	$(document).on('click', '#close-preview', function(){ 
    $('.image-preview').popover('hide');
    // Hover befor close the preview
    $('.image-preview').hover(
        function () {
           $('.image-preview').popover('show');
        }, 
         function () {
           $('.image-preview').popover('hide');
        }
    );    
	});

	$(function() {
		// Create the close button
		var closebtn = $('<button/>', {
			type:"button",
			text: 'x',
			id: 'close-preview',
			style: 'font-size: initial;',
		});
		closebtn.attr("class","close pull-right");
		// Set the popover default content
		$('.image-preview').popover({
			trigger:'manual',
			html:true,
			title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
			content: "There's no image",
			placement:'bottom'
		});
		// Clear event
		$('.image-preview-clear').click(function(){
			$('.image-preview').attr("data-content","").popover('hide');
			$('.image-preview-filename').val("");
			$('.image-preview-clear').hide();
			$('.image-preview-input input:file').val("");
			$(".image-preview-input-title").text("Browse"); 
		}); 
		// Create the preview image
		$(".image-preview-input input:file").change(function (){     
			var img = $('<img/>', {
				id: 'dynamic',
				width:450,
				height:300,
			});      
			var file = this.files[0];
			var reader = new FileReader();
			// Set preview image into the popover data-content
			reader.onload = function (e) {
				$(".image-preview-input-title").text("Change");
				$(".image-preview-clear").show();
				$(".image-preview-filename").val(file.name);            
				img.attr('src', e.target.result);
				$(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
			}        
			reader.readAsDataURL(file);
		});  
	});
				
		</script>

	
		<script>
			$('select').selectpicker();
		</script>
		<!-- Upload Image -->
		<script>
			$(function() {
				$('#froala-editor').editable({
				// Set the image upload URL.

				imageUploadParams: {
					id: 'my_editor'
				}
				})
			});
		</script>
		<script src="froala_editor/js/froala_editor.pkgd.min.js"></script>
		<script src="froala_editor/js/plugins/image.min.js"></script>
		<script src="froala_editor/js/plugins/video.min.js"></script>
		<script src="js/chart.min.js"></script>
		<script src="js/chart-data.js"></script>
		<script src="js/easypiechart.js"></script>
		<script src="js/easypiechart-data.js"></script>
		<script src="js/bootstrap-datepicker.js"></script>
		<script src="js/custom.js"></script>
		
	</body>

</html>
