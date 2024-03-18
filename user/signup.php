<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>RegistrationForm_v1 by Colorlib</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="assets/css/signup.css?v=<?php echo time(); ?>">
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
if (isset($_POST['signup'])) {
    // Validate first name
    if (empty($_POST['f_name'])) {
        $fname_err = "* Please enter your first name.";
    }

    // Validate last name
    if (empty($_POST['l_name'])) {
        $lname_err = "* Please enter your last name.";
    }

    // Validate username
    if (empty($_POST['username'])) {
        $username_err = "* Please enter a username.";
    }

    // Validate email
    if (empty($_POST['email_id'])) {
        $email_err = "* Please enter your email address.";
    } elseif (!filter_var($_POST['email_id'], FILTER_VALIDATE_EMAIL)) {
        $email_err = "* Invalid email format.";
    }

    // Validate phone number
    if (empty($_POST['phone_no'])) {
        $phone_err = "* Please enter your phone number.";
    } elseif (!preg_match('/^\d{10}$/', $_POST['phone_no'])) {
        $phone_err = "* Invalid phone number. Phone number must be 10 digits.";
    }

    // Validate password
    if (empty($_POST['password'])) {
        $password_err = "* Please enter a password.";
    } elseif (strlen($_POST['password']) < 8) {
        $password_err = "* Password must be at least 8 characters long.";
    }

    // Validate confirm password
    if (empty($_POST['c_password'])) {
        $cpassword_err = "* Please confirm your password.";
    } elseif ($_POST['password'] !== $_POST['c_password']) {
        $cpassword_err = "* Passwords do not match.";
    }

    // If there are no errors, proceed with form submission
    if (empty($fname_err) && empty($lname_err) && empty($username_err) && empty($email_err) && empty($phone_err) && empty($password_err) && empty($cpassword_err)) {
        $fname = $_POST['f_name'];
        $lname = $_POST['l_name'];
        $username = $_POST['username'];
        $email_id = $_POST['email_id'];
        $phone = $_POST['phone_no'];
        $password = $_POST['password'];
        $cpassword = $_POST['c_password'];
        $sql = "INSERT INTO `user_tbl` (`f_name`, `l_name`, `username`, `email_id`, `phone_no`, `password`) VALUE  ('$fname', '$lname', '$username', '$email_id', '$phone', '$password')";
        $result = mysqli_query($conn,$sql);
        if($result) {
            header("location:signin");
        }
    }
}
?>


<div class="wrapper" style="background-image: url('images/bg-registration-form-1.jpg');">
    <div class="inner">
        <div class="image-holder">
            <img src="images/registration-form-1.jpg" alt="">
        </div>
		
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <h3>Registration Form</h3>
			<!-- <div class="error"> -->
		<div class="error"><?php echo $fname_err ?? ""; ?></div>
		<div class="error"><?php echo $lname_err ?? ""; ?></div>
		<div class="error"><?php echo $username_err ?? ""; ?></div>
		<div class="error"><?php echo $email_err ?? ""; ?></div>
		<div class="error"><?php echo $phone_err ?? ""; ?></div>
		<div class="error"><?php echo $password_err ?? ""; ?></div>
                <div class="error"><?php echo $cpassword_err ?? ""; ?></div>
		<!-- </div> -->
            <div class="form-group">
                <input type="text" placeholder="First Name" name="f_name" class="form-control">
                <!-- Error message for first name -->
               
                <input type="text" placeholder="Last Name" name="l_name" class="form-control">
                <!-- Error message for last name -->
                
            </div>
            <div class="form-wrapper">
                <input type="text" placeholder="Username" name="username" class="form-control">
                <i class="zmdi zmdi-account"></i>
                <!-- Error message for username -->
                
            </div>
            <div class="form-wrapper">
                <input type="text" placeholder="Email Address" name="email_id" class="form-control">
                <i class="zmdi zmdi-email"></i>
                <!-- Error message for email -->
                
            </div>
            <div class="form-wrapper">
                <input type="text" placeholder="Phone No." name="phone_no" class="form-control">
                <i class="zmdi zmdi-phone"></i>
                <!-- Error message for phone number -->
                
            </div>
            <div class="form-wrapper">
                <input type="password" placeholder="Password" name="password" class="form-control">
                <i class="zmdi zmdi-lock"></i>
             
            </div>
            <div class="form-wrapper">
                <input type="password" placeholder="Confirm Password" name="c_password" class="form-control">
                <i class="zmdi zmdi-lock"></i>
                <!-- Error message for confirm password -->
            </div>
            <button type="submit" name="signup">Register <i class="zmdi zmdi-arrow-right"></i></button>
            I Have already account <a href="">Login</a>
        </form>
    </div>
</div>

<script>
    // Function to clear error messages when user starts typing
    function clearError(fieldId, errorId) {
        document.getElementById(fieldId).addEventListener('input', function() {
            document.getElementById(errorId).innerText = "";
        });
    }

    // Call clearError function for each input field
    clearError('f_name', 'fname_error');
    clearError('l_name', 'lname_error');
    clearError('username', 'username_error');
    clearError('email_id', 'email_error');
    clearError('phone_no', 'phone_error');
    clearError('password', 'password_error');
    clearError('c_password', 'cpassword_error');
</script>

</body>
</html>
