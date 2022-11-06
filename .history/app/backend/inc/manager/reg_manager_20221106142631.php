<?php 

$full_name = '';
$email = '';
$password = '';
$date = "";
$err_alert_arr = array();

if(isset($_POST['reg_submit'])) {
    $full_name = strip_tags($_POST['user_name']);
    $email = strip_tags($_POST['user_email']);
    $password = strip_tags($_POST['user_password']);

	$full_name = $_SESSION['user_name'];
	$email = $_SESSION['user_email'];
	$password = $_SESSION['user_password'];

}
?>