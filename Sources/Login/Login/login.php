<?php
     $errorEmail=$errorPass=$errorLogin=NULL;
     $inputEmail=$inputPass=$data=NULL;
     session_start();
     //Check input user/password
     if(isset($_POST['login'])) {
 
         if($_POST['username'] == NULL) {
             $errorEmail = 'Email is required';
         } else {
             $inputEmail = $_POST['username'];
         }
 
         if($_POST['password'] == NULL) {
            $errorPass = 'Password is required';
         } else {
             $inputPass = md5($_POST["password"]);
         }
    //Xu ly dang nhap
        if($inputEmail && $inputPass) {
				$conn = mysqli_connect('localhost','root','','chinthereview');
				if(!$conn) {
					die('connection failed');
				}	
                $insertUser = "SELECT * FROM  users WHERE Email='$inputEmail' AND Pass='$inputPass'";
                $result = mysqli_query($conn,$insertUser);
                if (mysqli_num_rows($result)==1) {
					$data=mysqli_fetch_assoc($result);
					$status = $data["Status"];
					if($status == 0) {
						echo "<script>alert('Check your email to active your account')</script>";
					} else {
						$_SESSION["Level"]=$data["Level"];
						if ($_SESSION["Level"]==1 || $_SESSION["Level"]==2 ) {
							$_SESSION["username"] = $data["User_Name"];
							header("location:../../homepage.php");
							exit();
						} else {
							$_SESSION["Admin"]=$data["User_Name"];
							header("location:../../admin-form/admin/index.php");
							exit();
						}
					}
                   
        
                } else {
                    $errorLogin = "Wrong Email or Password. Please try again";
                    
                }
                mysqli_close($conn);
            }
   
    }
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Login Chin the Review</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
		<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
		<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
		<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
		<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
		<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
		<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP"
            crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/util.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>

	<body>

		<div class="limiter">			
			<div class="container-login100" style="background-image: url('images/bg-01.jpg');">				
				<div class="wrap-login100">
					<a href="../../homepage.php"><i class="far fa-window-close fa-2x" style="color:rgb(0, 0, 0)"></i></a>
					<form class="login100-form validate-form" action="login.php" method="POST">
						<span class="login100-form-logo">
							<i class="zmdi zmdi-landscape"></i>
						</span>

						<span class="login100-form-title p-b-34 p-t-27">
							Log in
						</span>

						<div class="wrap-input100 validate-input" data-validate="Enter username">
							<input class="input100" type="text" name="username" placeholder="Username">
							<span class="focus-input100" data-placeholder="&#xf207;"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Enter password">
							<input class="input100" type="password" name="password" placeholder="Password">
							<span class="focus-input100" data-placeholder="&#xf191;"></span>
						</div>

						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>
						<?php
							echo "<p class='font-weight-bold text-danger'>$errorEmail</p>";
							echo "<p class='font-weight-bold text-danger'>$errorPass</p>";
							echo "<p class='font-weight-bold text-danger'>$errorLogin</p>";
						?>
						<div class="container-login100-form-btn">
							<button class="login100-form-btn" name="login">
								Login
							</button>
						</div>

						<div class="text-center p-t-90">
							<a class="txt1" style="text-decoration: none" href="../../Rspass/rs.html">
								Forgot Password?
							</a>
						</div>

						<div class="text-center p-t-10">
								<a class="txt1" style="text-decoration: none" href="../../Signup/Signup/signup.php">
									If you want to create an account!
								</a>
							</div>
					</form>
				</div>
			</div>
		</div>


		<div id="dropDownSelect1"></div>

		<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
		<script src="vendor/animsition/js/animsition.min.js"></script>
		<script src="vendor/bootstrap/js/popper.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/daterangepicker/moment.min.js"></script>
		<script src="vendor/daterangepicker/daterangepicker.js"></script>
		<script src="vendor/countdowntime/countdowntime.js"></script>
		<script src="js/main.js"></script>

	</body>

</html>
