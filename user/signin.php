<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>RegistrationForm_v1 by Colorlib</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="assets/css/signup.css">
	<style>
		.error{
			color: red;
    font-style: italic;
		}
	</style>
</head>
<body>

<?php
require("database/config.php");
// Initialize variables for error messages
$fname_err = $lname_err = $username_err = $email_err = $phone_err = $password_err = $cpassword_err = "";

// Validate form submission
if (isset($_POST['signin'])) {
    $email_id = $_POST['email_id'];
    $password = $_POST['password'];
    $login_error = "";
    $sql = "SELECT * FROM `user_tbl`";
    $result = mysqli_query($conn,$sql);
    foreach($result as $row)
    {
        $tbl_email = $row['email_id'];
        $tbl_password = $row['password'];
    }
    if($email_id == $tbl_email && $password == $tbl_password)
    {
        $_SESSION['user_id'] = 
        header("location:index");
    }
    else{
        $login_error = "Invalid Email and password";
    }

}
?>


<div class="wrapper" style="background-image: url('images/bg-registration-form-1.jpg');">
    <div class="inner">
       
		
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <h3 style="margin-top: 85px;">Login</h3>
		<div class="error"><?php echo $login_error ?? ""; ?></div>
          
            <div class="form-wrapper">
                <input type="text" placeholder="Email Address" name="email_id" class="form-control">
                <i class="zmdi zmdi-email"></i>
                <!-- Error message for email -->
                
            </div>
            
            <div class="form-wrapper">
                <input type="password" placeholder="Password" name="password" class="form-control">
                <i class="zmdi zmdi-lock"></i>
             
            </div>
            
            <button type="submit" name="signin">Login <i class="zmdi zmdi-arrow-right"></i></button>
            <div style="    padding-top: 20px;
    margin-left: 20px;">If you don't have account then <a href="signup">register</a></div>
        </form>
        <div class="image-holder">
            <img src="images/registration-form-1.jpg" alt="">
        </div>
    </div>
</div>



</body>
</html>
