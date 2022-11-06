<?php 

$full_name = '';
$email = '';
$password = '';
$date = "";
$err_alert_arr = array();

if(isset(R_POST['reg_submit'])) {
    $full_name = strip_tags($_POST['user_name']);
    $fname = ucfirst(strtolower($fname));
	$_SESSION['reg_fname'] = $fname;
}
?>