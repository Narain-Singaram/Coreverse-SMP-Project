<?php 

$full_name = '';
$email = '';
$password = '';
$create_date = "";
$err_alert_arr = array();

if(isset($_POST['reg_submit'])) {
    $full_name = strip_tags($_POST['user_name']);
    $email = strip_tags($_POST['user_email']);
    $password = strip_tags($_POST['user_password']);

    $email = ucfirst(strtolower($email));

	$full_name = $_SESSION['user_name'];
	$email = $_SESSION['user_email'];
	$password = $_SESSION['user_password'];

    $create_date = date("Y-m-d");
}

if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $check_email_query = mysqli_query($con, "SELECT email FROM users WHERE email='$email'");

    if(mysqli_num_rows($check_email_query) > 0) {
        array_push($error_array, "Email taken");
    }
}
else {
    array_push($error_array, "Invalid Email")
}

if(strlen($password) < 6 {
    array_push($error_array, "Password must be above 6 characters");
}

?>