<?php 

$full_name = '';
$email = '';
$password = '';
$date = "";
$err_alert_arr = array();

if(isset($_POST['reg_submit'])) {
    $full_name = strip_tags($_POST['user_name']);
    $email = strip_tags($_POST['user_email']);
    $full_name = ucfirst(strtolower($full_name));
	$full_name = $_SESSION['user_name'] = $fname;

}
?>