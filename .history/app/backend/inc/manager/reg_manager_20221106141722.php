<?php 

$full_name = '';
$email = '';
$password = '';
$date = "";
$err_alert_arr = array();

if(isset(R_POST['reg_submit'])) {
    $full_name = strip_tags($_POST['user_fullname'])
}
?>