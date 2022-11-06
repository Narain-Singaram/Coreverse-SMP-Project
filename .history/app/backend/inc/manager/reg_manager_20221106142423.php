<?php 

$full_name = '';
$email = '';
$password = '';
$date = "";
$err_alert_arr = array();

if(isset($_POST['reg_submit'])) {
    $full_name = strip_tags($_POST['user_name']);
    $full_name = ucfirst(strtolower($full_name));
	$full_name = $_SESSION['user_name'] = $fname;

    function valRegValues($val, $ipt_name) {
        $val = strip_tags($_POST[$ipt_name]);
        $val = ucfirst(strtolower($ipt_name))
        $val = $_SESSION[$ipt_name];

        return $val;
    }
}
?>