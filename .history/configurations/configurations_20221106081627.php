<?php
ob_start(); //Turns on output buffering
session_start();

    $timezone = date_default_timezone_set("America/New_York");
    $con = mysqli_connect("localhost", "root", "", "coreverse");

    if(mysqli_connect_errno()) {
    echo "Failed to connect: " . mysqli_connect_errno();
    }


    <?php
//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
?>

?> 