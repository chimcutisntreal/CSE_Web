<?php
    $errorEmail=$errorPass=$errorRPass=$errorMPass=$errorFPass=$errorName=$errorPhone=$errorFav=NULL;
    $emailExists=$nameExists=NULL;
    
    //Check input user/password
    if(isset($_POST['btnRegister'])) {

        if($_POST['txtEmail'] == NULL) {
            $errorEmail = 'Email is required';
        } else {
            $inputEmail = $_POST['txtEmail'];
        }
        if($_POST['txtName'] == NULL) {
            $errorName = 'Display name is required';
        } else {
            $inputName = $_POST['txtName'];
        }
        if($_POST['txtPass'] == NULL) {
           $errorPass = 'Password is required';
        } else if($_POST['txtRPass'] == NULL) {
            $errorRPass= 'Repeat password';
        } else if($_POST['txtPass'] != $_POST['txtRPass']) {
            $errorMPass= 'Password does not match the Repeat password';
        }

        if(isset($_POST['txtPass'])) {
            $inputPass = $_POST['txtPass'];
            if (preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/",$inputPass)){
                $pass = md5($inputPass);
            } else {
                $errorFPass = 'Minimum eight characters, at least one uppercase letter, 
                               one lowercase letter and one number';
            }
        }
        $joinDate= date("Y-m-d");
        if (isset($_POST['phoneNumber'])) {
            $phoneNumber= $_POST['phoneNumber'];
            if (preg_match("/^[0-9]{8,15}/",$phoneNumber)) {
                $phone = $phoneNumber;
            } else {
                $errorPhone='Enter invalid Phonenumber(Max 15 digits)';
            }
        }

        if (!isset($_POST['listFav'])) {
            $errorFav = 'Choose your favorite';
        } else {
            $fav = $_POST['listFav'];
        }

        //Ket noi csdl
        if(isset($inputEmail,$inputPass,$inputName,$fav,$phone,$pass)) {
            $conn = mysqli_connect('localhost','root','','chinthereview');
            if(!$conn) {
                die('connection failed');
            }
           
            //check user exist
            $getEmailExists="SELECT * FROM users WHERE Email='$inputEmail'";
            $result1= mysqli_query($conn,$getEmailExists);
            $getNameExists="SELECT * FROM users WHERE User_Name='$inputName'";
            $result2= mysqli_query($conn,$getNameExists);
            if(mysqli_num_rows($result1)>0) {
                $emailExists = "Email exists. Try again";
            } else if(mysqli_num_rows($result2)>0) {
                $nameExists = "Display name exists. Try again";
            } else {
                //insert user
                $insertUser = "INSERT INTO  users(User_Name,Email,Pass,Join_Date,Phone_Number,Fav,Status,Level) VALUES('$inputName','$inputEmail','$pass','$joinDate','$phone','$fav',0,1)";
                $resultInsert = mysqli_query($conn,$insertUser);
                if (!$resultInsert) {
                    die('insert error');
                } else {
                    require('PHPMailer/Mailer.php');
                                                 
                    try {
                        //Server settings
                        $mail->SMTPDebug = 0;                                 // Enable verbose debug output
                        $mail->isSMTP();                                      // Set mailer to use SMTP
                        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                        $mail->SMTPAuth = true;                               // Enable SMTP authentication
                        $mail->Username = 'bombeo922@gmail.com';                 // SMTP username
                        $mail->Password = 'chinh5298';                           // SMTP password
                        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                        $mail->Port = 587;                                    // TCP port to connect to
                     
                        //Recipients
                        $mail->CharSet= 'UTF-8';
                        $mail->setFrom('bombeo922@gmail.com', 'Do not reply');
                        $mail->addAddress($inputEmail);     // Add a recipient
                        
                        
                        //Content
                        $mail->isHTML(true);                                  // Set email format to HTML
                        $mail->Subject = 'Activating Mail';
                        $mail->Body    = "Welcome to Chin The Review. Please click this link http://localhost/chimcut/ChiChin/CSE_Web/Sources/active.php?username=$inputName to active your account";
                        $mail->send();
             
                    } catch (Exception $e) {
                        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
                    }      
                }
                echo "<script> 
                Swal({
                    title: 'Thanks for registering!!!',
                    text: 'Please check your email for the activation steps',
                    type: 'success',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Got it!!!'
                    }).then((result) => {
                    if (result.value) {
                     
                    }
                })    
          </script>";
             
            }
            mysqli_close($conn);
        }
    }

?>
    <script src="../../sweetalert2/package/dist/sweetalert2.all.min.js"></script>
	<link rel="stylesheet" href="../../sweetalert2/package/dist/sweetalert2.css">
<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Sign up Chin the Review</title>
        <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
        <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
        <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
        <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP"
            crossorigin="anonymous">
        <link href="css/main.css" rel="stylesheet" media="all">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    </head>

    <body>
        <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
            <a href="../../homepage.php"><i class="far fa-window-close fa-2x" style="color:white"></i></a>
            <div class="wrapper wrapper--w790">
                <div class="card card-5">
                    <div class="card-heading">
                        <h2 class="title">CREATE ACCOUNT</h2>
                    </div>
                    <div class="card-body">
                        <form action="signup.php" method="POST">
                            <div class="form-row">
                                <div class="name">Email</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="email" name="txtEmail">
                                    </div>
                                </div>  
                            </div>
                            <?php 
                                echo "<p class='text-right text-danger'>$errorEmail</p>";
                                echo "<p class='text-right text-danger'>$emailExists</p>";
                            ?>
                            <div class="form-row">
                                <div class="name">Display name</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="text" name="txtName">
                                    </div>
                                </div>
                            </div>
                            <?php 
                                echo "<p class='text-right text-danger'>$errorName</p>";
                                echo "<p class='text-right text-danger'>$nameExists</p>";
                            ?>
                            <div class="form-row">
                                <div class="name">Password</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="password" name="txtPass">
                                    </div>
                                </div>
                            </div>
                            <?php 
                                echo "<p class='text-right text-danger'>$errorPass</p>";
                                echo "<p class='text-left text-danger'>$errorFPass</p>";
                            ?>
                            <div class="form-row">
                                <div class="name">Repeat Password</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="password" name="txtRPass">
                                    </div>
                                </div>
                            </div>
                            <?php 
                                echo "<p class='text-right text-danger'>$errorRPass</p>";
                                echo "<p class='text-right text-danger'>$errorMPass</p>";
                            ?>
                            <div class="form-row m-b-55">
                                <div class="name">Phone</div>
                                <div class="value">
                                    <div class="input-group-desc">
                                        <input class="input--style-5" type="text" placeholder="Phone Number" name="phoneNumber">
                                    </div>   
                                </div>
                            </div>
                            <?php 
                                echo "<p class='text-right text-danger '>$errorPhone</p>";              
                            ?>
                            <div class="form-row">
                                <div class="name">Favorite</div>
                                <div class="value">
                                    <div class="input-group">
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <select name="listFav">
                                                <option disabled="disabled" selected="selected" value="favorite">Choose Favorite</option>
                                                <option value="Action">Action</option>
                                                <option value="Horror">Horror</option>
                                                <option value="Comedy">Comedy</option>
                                                <option value="Fiction">Fiction</option>
                                                <option value="Animation">Animation</option>
                                                <option value="Romance">Romance</option>
                                            </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                                        <div class="form-group ">
                                        <?php 
                                            echo "<div class='text-right text-danger errFav' id='errFav'>$errorFav</div>";              
                                        ?>
                                    </div>
                                    </div>
                                </div>
                                
                            </div>

                            <div>
                                <button class="btn btn--radius-2 btn--green" type="submit" name="btnRegister">Register</button>
                            </div>
                            <div class="subtxt">
                                <p>Have already an account? <a class="txt1" style="text-decoration: none" href="../../../Sources/Login/Login/login.php">Sign-in
                                        here</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    
        <!-- Jquery JS-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <!-- Vendor JS-->
        <script src="vendor/select2/select2.min.js"></script>
        <script src="vendor/datepicker/moment.min.js"></script>
        <script src="vendor/datepicker/daterangepicker.js"></script>

        <!-- Main JS-->
        <script src="js/global.js"></script>

    </body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
