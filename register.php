<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
ini_set('display_errors', 1);

include("account.php");
include("functions.php");

if (mysqli_connect_errno()) {
        echo "Error: " . mysqli_connect_error();
        exit();
}
print "Successfully connected to MySQL.";

$db = mysqli_connect($hostname, $username, $password, $project);
mysqli_select_db($db, $project);

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pass = $_POST['pass'];

register($fname, $lname, $email, $pass);


?>

